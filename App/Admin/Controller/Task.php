<?php

namespace App\Admin\Controller;

use Core\Auth;
use Core\Pagination;
use Core\Request\Request;
use Core\Database\DB;

class Task extends Index {

    const Complete = 4;

    function before()
    {
        parent::before();
        if (!\App\Admin\Model\User::one(Auth::instance()->current()->id)->isAdmin()) {
            $this->redirectToRoute('/403');
        }
    }

    /**
     * @return bool
     * @throws \Exception
     */
    function index(Request $request)
    {
        $limit = 50;
        $page = $request->get('page', 1);
        $offset = $limit * $page;
        if ($page == 1) $offset = 0;

        $task = DB::select(
            ['task.id', 'id'],
            ['status.name', 'status'],
            ['status.label', 'status_label'],
            ['task_priority.name', 'priority'],
            ['task_priority.label', 'priority_label'],
            ['task.name', 'name'],
            ['task.text', 'text'],
            ['user.name', 'user'],
            ['user.id', 'user_id'],
            ['task.created', 'start'],
            ['task.completed', 'end']
        )
            ->from('task')
            ->join('task_priority', 'left')->on('task_priority.id', '=', 'task.priority')
            ->join('status', 'left')->on('status.id', '=', 'task.status')
            ->join('user', 'left')->on('user.id', '=', 'task.user')
            ->order_by('task.created', 'desc')
            ->limit($limit)
            ->offset($offset);

        if (!Auth::instance()->hasRole(self::RoleAdmin)) {
            $task->where('user.id', '=', Auth::instance()->current()->id);
        }

        $task = $task->execute();
        $count = DB::select('id')->from('task')->execute()->count();
        $task = $task->fetch_all();

        return $this->render('Admin:task/index', [
            'task' => $task,
            'pagination' => new Pagination(
                $count,
                $limit,
                3,
                $request->get('page') ? $request->get('page') : 1,
                '/task?page='
            )
        ]);
    }

    /**
     * @return bool
     * @throws \Exception
     */
    function create()
    {
        $users = DB::select('id', 'name')
            ->from('user')
            ->execute()
            ->fetch_all();

        return $this->render('Admin:task/create', [
            'user' => $users
        ]);
    }

    function template()
    {
        $task = DB::select('*')
            ->from('task')
            ->where('template', '=', '1')
            ->execute()
            ->fetch_all();

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

        $task = DB::select(
            'task.id',
            ['status.id', 'status_id'],
            ['status.name', 'status'],
            ['status.label', 'status_label'],
            ['task_priority.id', 'priority_id'],
            ['task_priority.name', 'priority'],
            ['task_priority.label', 'priority_label'],
            ['task.name', 'name'],
            ['task.text', 'text'],
            ['user.name', 'user'],
            ['user.id', 'user_id'],
            ['task.created', 'start'],
            ['task.completed', 'end'],
            ['task.template', 'template']
        )
            ->from('task')
            ->join('task_priority', 'left')
            ->on('task_priority.id', '=', 'task.priority')
            ->join('status', 'left')
            ->on('status.id', '=', 'task.status')
            ->join('user', 'left')
            ->on('user.id', '=', 'task.user')
            ->where('task.id', '=', $id)
            ->execute()->fetch();

        $status = DB::select('*')
            ->from('status')
            ->where('group', '=', 1)
            ->execute()
            ->fetch_all();

        $priority = DB::select('*')
            ->from('task_priority')
            ->execute()
            ->fetch_all();

        $comments = DB::select('u.name', 'task_comment.comment', 'task_comment.created')
            ->from('task_comment')
            ->join(['user', 'u'])
            ->on('task_comment.user_id', '=', 'u.id')
            ->where('task_id', '=', $id)
            ->order_by('task_comment.created', 'asc')
            ->execute()->fetch_all();

        $users = DB::select('id', 'name')
            ->from('user')
            ->execute()
            ->fetch_all();

        return $this->render('Admin:task/edit', [
            'task' => $task,
            'status' => $status,
            'priority' => $priority,
            'user' => Auth::instance()->current(),
            'comment' => $comments,
            'users' => $users
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

        DB::insert('task_comment', [
            'task_id',
            'user_id',
            'comment'
        ])->values([$id, $user, $text])
            ->execute();

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

        DB::insert('task', ['name','text','user','time','priority','template', 'status'])
            ->values([$name,$text,$user,$time,$priority,$template, 1])
            ->execute();

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

            DB::update('task')->set([
                'status' => $status,
                'completed' => DB::expr('now()')
            ])->where('id', '=', $id)
                ->execute();

            return $this->redirectToRoute("/task");
        }

        $name = $request->get('name');
        $text = $request->get('text');
        $user = $request->get('user');
        $priority = intval($request->get('priority'));
        $status = intval($request->get('status'));

        DB::update('task')->set([
            'name' => $name,
            'text' => $text,
            'user' => $user,
            'priority' => $priority,
            'status' => $status
        ])->where('id', '=', $id)
            ->execute();

        return $this->redirectToRoute("/task");
    }

    /**
     * @return bool
     * @throws \Exception
     */
    function templateCreate()
    {
        $id = intval(\Core\Router::seg(3));

        $task = DB::select(
            ['task.id', 'id'],
            ['task.time', 'time'],
            ['status.name', 'status'],
            ['status.label', 'status_label'],
            ['task_priority.name', 'priority'],
            ['task_priority.label', 'priority_label'],
            ['task.name', 'name'],
            ['task.text', 'text'],
            ['user.name', 'user'],
            ['user.id', 'user_id'],
            ['task.created', 'start'],
            ['task.completed', 'end']
        )
            ->from('task')
            ->join('task_priority', 'left')->on('task_priority.id', '=', 'task.priority')
            ->join('status', 'left')->on('status.id', '=', 'task.status')
            ->join('user', 'left')->on('user.id', '=', 'task.user')

            ->where('task.id', '=', $id)
            ->execute()->fetch();

        $status = DB::select('*')
            ->from('status')
            ->where('group', '=', 1)
            ->execute()->fetch_all();

        $priority = DB::select('*')
            ->from('task_priority')
            ->execute()->fetch_all();

        $users = DB::select('id', 'name')
            ->from('user')
            ->execute()->fetch_all();

        return $this->render('Admin:task/template_create', [
            'task' => $task,
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
        DB::update('task')->set([
            'template' => 0
        ])->where('id', '=', $id)
            ->execute();

        return $this->redirectToRoute('/task/template');
    }

}