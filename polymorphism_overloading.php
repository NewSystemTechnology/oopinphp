<?php

class Shape {

    public static $PI = 3.142;
    protected $length;
    protected $width;
    private $radius;



    public function area($length = 0, $width = 0, $radius = 0) {
        if ($length == 0 && $width == 0) {
            if ($radius != 0) {
                return self::$PI * $radius * $radius;
            }
        } else {
            return $length * $width;
        }
    }
  
}

$circle = new Shape();
print $circle->area(0, 0, 5) .'<br>';

$rect = new Shape();
print $rect->area(4, 6) . '<br />';