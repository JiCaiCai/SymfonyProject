<?php
class Phone
{
  public $price = 200;
  public $weight = 15;
  public static $phone = null;

  public static function getInstance()
  {
    if (self::$phone == null)
    {
      self::$phone = new Phone();
    }
    return self::$phone;
  }
}
