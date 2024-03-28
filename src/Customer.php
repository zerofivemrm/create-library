<?php

namespace Rifki\CreateLibrary;

class Customer
{
  public function __construct(private string $name)
  {
  }

  public function sayHello(string $name): string
  {
    return "Halo $name, nama saya $this->name";
  }
}
