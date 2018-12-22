<?php
namespace App\Models\simple;

use App\Models\interfaces\Door;

class WoodenDoor implements Door
{
    protected $height;
    protected $width;

    public function __construct(string $width, string $height)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getHeight():string
    {
        return $this->height.'height';
    }

    public function getWidth():string
    {
        return $this->width.'width';
    }
}