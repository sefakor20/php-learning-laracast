<?php

namespace App\Core;

class Request
{
  public static function uri()
  {
    return trim(
      parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
    );
  }

  // fetch the request method (GET OR POST)
  public static function method()
  {
    return $_SERVER['REQUEST_METHOD'];
  }
}