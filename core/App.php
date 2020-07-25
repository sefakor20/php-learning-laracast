<?php

namespace App\Core;

class App
{
  protected static $registry = [];

  // bind method
  public static function bind($key,$value)
  {
    static::$registry[$key] = $value; 
  }

  // get method
  public static function get($key)
  {
    // check if key exists
    if(!array_key_exists($key, static::$registry)) {
      throw new Exception('No {$key} is bound in the container.');
    }
    
    return static::$registry[$key];
  }
}