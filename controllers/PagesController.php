<?php

class PagesController
{
  // home page
  public function home()
  {
    // load view
    return view('index');
  }

  // about page
  public function about()
  {
    $company = 'Laracast';
    // load view
    return view('about', ['company' => $company]);
  }

  // contact page
  public function contact()
  {
    // load view
    return view('contact');
  }
}