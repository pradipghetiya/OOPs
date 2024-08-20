<?php
interface Laptop{
   public static function mac();
   public static function window();

}
class Std implements Laptop{
    public static function mac(){
        echo "New Macs - ";
    }
    public static function window(){
        echo "New Windows";
    }
}

Std::mac();
Std::window();
?>