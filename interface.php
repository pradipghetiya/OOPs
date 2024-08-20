<?php
interface Deep{
    public function define();
    
    public function myclass();
}
class Test implements Deep {
    public function define(){
    echo  "implements methods :";
    }
    public function myclass(){
       echo "123";    
    }
    
} 
$b1 = new Test;
$b1-> define();
$b1-> myclass();

?>