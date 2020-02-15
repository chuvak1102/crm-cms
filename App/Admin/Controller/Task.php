<?php

namespace App\Admin\Controller;

use Core\DB;

class Task extends Index {

    const Complete = 4;

    /**
     * @return bool
     * @throws \Exception
     */
    function index()
    {
        $task = DB::select("
            select
                task.id,
                status.name as status,
                status.label as status_label,
                task_priority.name as priority,
                task_priority.label as priority_label,
                task.name as name,
                task.text as text,
                user.name as user,
                task.created as start,
                task.completed as end
            from task
            left join task_priority on task_priority.id = task.priority
            left join status on status.id = task.status
            left join user on user.id = task.user
            order by task.created desc
        ");

        return $this->render('Admin:task/index', [
            'task' => $task
        ]);
    }

    /**
     * @return bool
     * @throws \Exception
     */
    function create()
    {
        $users = DB::select("
            select id, name from user
        ");

        return $this->render('Admin:task/create', [
            'user' => $users
        ]);
    }

    function template()
    {
        $task = DB::select("select * from task where template = 1");

        return $this->render('Admin:task/template', [
            'task' => $task
        ]);
    }

    /**
     * @param \Core\Request\Request $request
     * @return bool
     * @throws \Exception
     */
    function edit(\Core\Request\Request $request)
    {
        $id = intval(\Core\Router::seg(2));

        $task = DB::select("
            select
                task.id,
                status.id as status_id,   
                status.name as status,
                status.label as status_label,
                task_priority.id as priority_id,   
                task_priority.name as priority,
                task_priority.label as priority_label,
                task.name as name,
                task.text as text,
                user.name as user,
                user.id as user_id,   
                task.created as start,
                task.completed as end,
                task.template as template
            from task
            join task_priority on task_priority.id = task.priority
            left join status on status.id = task.status
            join user on user.id = task.user
            where task.id = $id
        ");
        $status = DB::select("select * from status where `group` = 1");
        $priority = DB::select("select * from task_priority");
        $users = DB::select("select id, name from user");
        $comments = DB::select("
            select u.name, task_comment.comment, task_comment.created from task_comment 
            join user u on task_comment.user_id = u.id
            where task_id = $id
        ");

        return $this->render('Admin:task/edit', [
            'task' => $task[0],
            'status' => $status,
            'priority' => $priority,
            'user' => $users,
            'comment' => $comments
        ]);
    }

    /**
     * @param \Core\Request\Request $request
     * @return bool
     * @throws \Exception
     */
    function comment(\Core\Request\Request $request)
    {
        $id = \Core\Router::seg(2);
        $text = $request->get('text');
        $user = $request->get('user');

        DB::insert("
            insert into task_comment (task_id, user_id, comment)
            values ('$id', '$user', '$text')
        ");

        return $this->redirectToRoute('/task/edit/'.$id);
    }

    /**
     * @param \Core\Request\Request $request
     * @throws \Exception
     */
    function save(\Core\Request\Request $request)
    {
        $name = $request->get('name');
        $text = $request->get('text');
        $user = $request->get('user');
        $time = $request->get('time');
        $priority = $request->get('priority');
        $template = $request->get('template') == 'on' ? 1 : 0;

        DB::insert("
            INSERT INTO task (name,text,user,time,priority,template, status)
            VALUES ('{$name}','{$text}','{$user}','{$time}','{$priority}','{$template}', 1)
        ");

        $this->redirectToRoute("/task");
    }

    /**
     * @param \Core\Request\Request $request
     * @throws \Exception
     */
    function update(\Core\Request\Request $request)
    {
        $id = \Core\Router::seg(2);

        if ($request->get('finished')) {

            $status = self::Complete;

            DB::update("
                update task set status = $status, completed = now()
                where id = $id
            ");

            return $this->redirectToRoute("/task");
        }

        $name = $request->get('name');
        $text = $request->get('text');
        $user = $request->get('user');
        $priority = intval($request->get('priority'));
        $status = intval($request->get('status'));

        DB::update("
            update task set name = '$name', text = '$text', user = '$user', priority = $priority, status = $status
            where id = $id
        ");

        return $this->redirectToRoute("/task");
    }

    /**
     * @return bool
     * @throws \Exception
     */
    function templateCreate()
    {
        $id = intval(\Core\Router::seg(3));

        $task = DB::select("
            select
                task.id,
                status.id as status_id,   
                status.name as status,
                status.label as status_label,
                task_priority.id as priority_id,   
                task_priority.name as priority,
                task_priority.label as priority_label,
                task.name as name,
                task.text as text,
                user.name as user,
                user.id as user_id,   
                task.created as start,
                task.completed as end,
                task.template as template,
                task.time as time   
            from task
            join task_priority on task_priority.id = task.priority
            left join status on status.id = task.status
            join user on user.id = task.user
            where task.id = $id
        ");
        $status = DB::select("select * from status where `group` = 1");
        $priority = DB::select("select * from task_priority");
        $users = DB::select("select id, name from user");

        return $this->render('Admin:task/template_create', [
            'task' => $task[0],
            'status' => $status,
            'priority' => $priority,
            'user' => $users
        ]);
    }

    /**
     * @param \Core\Request\Request $request
     * @throws \Exception
     */
    function templateCreateSave(\Core\Request\Request $request)
    {
        return $this->save($request);
    }

    /**
     * @param \Core\Request\Request $request
     * @return bool
     * @throws \Exception
     */
    function templateDelete(\Core\Request\Request $request)
    {
        $id = \Core\Router::seg(3);
        DB::update("
            update task set template = 0 where id = $id
        ");

        return $this->redirectToRoute('/task/template');
    }

}