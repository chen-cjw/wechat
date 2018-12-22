<?php
namespace App\Models\factories;


use App\Models\simple\WoodenDoor;

class simpleFactory
{
    public function simple($value,$aa)
    {
        $door = new WoodenDoor($value,$aa);

        return $door;
    }

}
 