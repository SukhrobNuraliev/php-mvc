<?php

class PageController
{
    public function home()
    {
        $users = App::get('database')->selectAll('users');

        return view('index', ['users' => $users]);
    }

    public function about()
    {
        return view('about', ['myname' => "Sukhtob"]);
    }

    public function contact()
    {
        require 'views/contact.view.php';
    }
}