<?php
class MyClass {
  public static $str = "Hello";

  public static function hello() {
    echo self::$str;
  }
}

trait Girls {
    public static $std = 'pradip';

    public static function omn() {
        echo self::$std;
    }
}


class Boys extends MyClass 
{
    public static $sad = 'pradip';

    public static function wow(){
        echo self::$sad;
    }
}

echo MyClass::hello();
echo Girls::omn();
echo Boys::wow();



?>