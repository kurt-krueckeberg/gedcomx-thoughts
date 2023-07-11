<?php
namespace GedcomX;

interface GedcomXSpecTypeInterface {
  get_type() : string;
}

enum Type implements  GedcomXSpecTypeInterface {

  readonly string $prefix = "https://www.gedcomx.com/";
 
  case Person;
  // ...
  //etc.
  
  public get_type() : string 
  {
    return $this->prefix . match($this) {
       Type::Person  => "Person",
       // ...
       //etc...
   }
  }
}
