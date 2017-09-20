<?php

// Namespaces are ultimately just folders. You use them to separate out names of classes (such as having two classes named App.php) by using the folder structure of namespaces

// Designates that this class of PagesController is in the App/Controllers/PagesController path
namespace App\Controllers;

class PagesController
{
    public function home()
    {
        // Receive the request
        // Delegate
        // Return the response

        // Used to be index.php under 'controllers' directory

        // compact('users') is the same as ['users' => $users]
        return view('index-view');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}