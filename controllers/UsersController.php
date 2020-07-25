<?php

class UsersController
{
  public function index()
  {
    // fetch all users
    $users = App::get('database')->selectAll('users');

    return view('users', compact('users'));
  }

  public function store()
  {
    // Insert ther user associated with the request
    App::get('database')->insert('users', [
      'name' => $_POST['name'],
    ]);

    // redirect back to all users
    redirect('users');
  }
}