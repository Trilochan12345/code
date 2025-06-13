<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Models\ItemModel;

use App\Models\CodesModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function login()
    {
        return view('index');
    }

    public function login2()
    {
        return view('index2');
    }


  public function auth()
    {
        helper('form');

        if (!$this->request->is('post')) {
            return redirect()->to('/login');
        }

        $identity = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        

        $userModel = new UserModel();
        $user = $userModel->getUserByEmailOrUsername($identity);

        // dd($user);

        if ($user ) {
            // Set session
            session()->set([
                'user_id'    => $user['id'],
                'username'   => $user['username'],
                'isLoggedIn' => true
            ]);

            return redirect()->to('/dashboard');
        }

        return redirect()->back()->withInput()->with('error', 'Invalid username or password');
    }
    public function auth2()
    {
        helper('form');

        if (!$this->request->is('post')) {
            return redirect()->to('/login');
        }

        $identity = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        

        $userModel = new UserModel();
        $user = $userModel->getUserByEmailOrUsername($identity);

        // dd($user);

        if ($user ) {
            // Set session
            session()->set([
                'user_id'    => $user['id'],
                'username'   => $user['username'],
                'isLoggedIn' => true
            ]);

            return redirect()->to('/coder');
        }

        return redirect()->back()->withInput()->with('error', 'Invalid username or password');
    }

     public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function register()
    {
        return view('register');
    }
    public function createaccount()
    {
        return view('createaccount');
    }
     public function dashboard()
    {
        return view('dashboard');
    }
     public function dispatch()
    {
        return view('dispatch');
    }
     public function coders()
    {
        $model = new \App\Models\CoderModel();

        $code = $model->findAll();

        return view('coders',['code'=>$code]);
    }
     public function codersadd()
    {
        helper(['form']);

        if (!$this->request->is('post')) {
            return redirect()->to('/'); // or show form again
        }

        $data = [
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'phone'    => $this->request->getPost('phone'),
            'series'   => $this->request->getPost('series'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $model = new \App\Models\CoderModel();
        $model->insert($data);

        return redirect()->to('/coders')->with('success', 'Coder added successfully!');
    }
    public function codes()
    {
        $codesModel = new \App\Models\CodesModel();

        $data['codes'] = $codesModel->getJoinedData();

        return view('codes',$data);
    }
    public function addcodes()
    {
        $itemModel = new \App\Models\ItemModel();

        $items = $itemModel->findAll();

        return view('addcodes',['items' => $items]);
    }
   public function additem()
{
    $itemModel = new \App\Models\ItemModel();

    $items = $itemModel->findAll();

    return view('additem', ['items' => $items]);
}
public function additemvalue()
{
   
    $data = [
        'item_name' => $this->request->getPost('name'), 
    ];

    $itemModel = new \App\Models\ItemModel();
    if ($itemModel->insert($data)) {
        return redirect()->to('/additem')->with('success', 'Item added successfully.');
    } else {
        return redirect()->back()->withInput()->with('error', 'Failed to add item.');
    
}
}

public function codesadd()
{
    helper(['form']);

    if (!$this->request->is('post')) {
        return redirect()->to('/'); // Or show form again
    }

    $data = [
        'series'      => $this->request->getPost('series'),
        'code'        => $this->request->getPost('code'),
        'description' => $this->request->getPost('description'),
        'material'    => $this->request->getPost('material'),
        'quantity'    => $this->request->getPost('quantity'),
        'item'        => $this->request->getPost('item'),
        'category'    => $this->request->getPost('category'),
        'remarks'     => $this->request->getPost('remarks'),
    ];

    $model = new \App\Models\CodesModel();
    $model->insert($data);

    return redirect()->to('/codes')->with('success', 'Code added successfully!');
}


}
