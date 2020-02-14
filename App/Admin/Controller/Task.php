<?php

namespace App\Admin\Controller;

use Core\Controller;
use Core\DB;

class Task extends Controller {

    /**
     * @return bool
     * @throws \Exception
     */
    function index()
    {
        $task = DB::select("
            select
                task.id,
                task_status.name as status,
                task_status.label as status_label,
                task_priority.name as priority,
                task_priority.label as priority_label,
                task.name as name,
                task.text as text,
                user.name as user,
                task.created as start,
                task.completed as end
            from task
            join task_priority on task_priority.id = task.priority
            join task_status on task_status.id = task.status
            join user on user.id = task.user
        ");

        return $this->render('Admin:task/index', [
            'task' => $task
        ]);
    }

    function create()
    {
        return $this->render('Admin:task/create', [
            'var' => 12345
        ]);
    }

    function template()
    {
        return $this->render('Admin:task/template', [
            'var' => 12345
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

        if ($id) {
            $task = DB::select("
            select
                task.id,
                task_status.name as status,
                task_status.label as status_label,
                task_priority.name as priority,
                task_priority.label as priority_label,
                task.name as name,
                task.text as text,
                user.name as user,
                task.created as start,
                task.completed as end
            from task
            join task_priority on task_priority.id = task.priority
            join task_status on task_status.id = task.status
            join user on user.id = task.user
            where task.id = $id
        ");

            return $this->render('Admin:task/edit', [
                'task' => $task[0]
            ]);
        }

        return $this->redirectToRoute('/');
    }

    function comment(\Core\Request\Request $request)
    {
        $id = \Core\Router::seg(2);

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

}