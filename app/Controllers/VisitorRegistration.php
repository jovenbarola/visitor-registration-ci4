<?php

namespace App\Controllers;

use App\Models\VisitorModel;

class VisitorRegistration extends BaseController
{
    // show visitor list
    public function lists()
    {
        $model = new VisitorModel();
        $data['visitors'] = $model->orderBy('id', 'DESC')->findAll();
        return view('visitor/lists', $data);
    }

    // view visitor
    public function view($id = null)
    {
        $model = new VisitorModel();
        $data['visitor'] = $model->where('id', $id)->first();
        return view('visitor/view', $data);
    }

    // add visitor form
    public function create()
    {
        return view('visitor/create');
    }

    // insert data
    public function store()
    {
        $model = new VisitorModel();
        $data = [
            'firstname' => $this->request->getVar('firstname'),
            'email'  => $this->request->getVar('email'),
        ];
        $model->insert($data);
        return $this->response->redirect(site_url('/users-list'));
    }

    // show single user
    public function singleUser($id = null)
    {
        $model = new VisitorModel();
        $data['user_obj'] = $model->where('id', $id)->first();
        return view('edit_visitor', $data);
    }

    // update user data
    public function update()
    {
        $model = new VisitorModel();
        $id = $this->request->getVar('id');
        $data = [
            'firstname' => $this->request->getVar('firstname'),
            'email'  => $this->request->getVar('email'),
        ];
        $model->update($id, $data);
        return $this->response->redirect(site_url('/users-list'));
    }

    // delete user
    public function delete($id = null)
    {
        $model = new VisitorModel();
        $data['user'] = $model->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }
}
