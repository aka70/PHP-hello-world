<?php

namespace Akak\Hello;

class Hello 
{
  public function echo(string $name) :string
  {
    return "Hello, {$name}";
  }
}
