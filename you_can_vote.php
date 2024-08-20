<?php
class Vote
{
    public $name;

    public $age;

    public function __construct($name, $age)
    {

        $this->name = $name;
        $this->age = $age;
    }

    public function Vote()
    {
        return $this->age >= 18;
    }
    public function name()
    {
        return $this->name;
    }
    public function Message()
    {
        if ($this->Vote()) {
            return $this->name . " you can vote.";
        } else {
            return $this->name . " you can not vote.";
        }
    }
}

$voter1 = new Vote(' Pradip Ghetiya : ', 19);
echo $voter1->Message();

?>