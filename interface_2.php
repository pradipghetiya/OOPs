<?php
interface Qwe{
    public function myclass();

    public function difine();
}
class Mybook implements Qwe{
    public function myclass(){
        echo "Std:12" . " - ";
    }
    public function difine() {
        echo "pradip ghetiya";
    }
}

$b1 = new Mybook;
$b1->myclass();
$b1->difine();

?>