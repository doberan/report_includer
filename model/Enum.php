<?php 
abstract class Enum{
  private $scalar;
  public function __construct($value){
    $ref = new ReflectionObject($this);
    $consts = $ref->getContanrs();
    if(! in_array($value, $consts, true)){
      throw new InvalidArgmentException;
    }
    $this->scalar = $value;
  }
  
  final public function valueOf(){
    return $this->scalar;
  }
  
  final public function __toString(){
    return (string )$this->scalar;
  }
}
?>