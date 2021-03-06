<?php

namespace App\Lib;

class Direccion
{

    public function randomDireccion()
    {
        /*
var r = 100/111300 // = 100 meters
  , y0 = original_lat
  , x0 = original_lng
  , u = Math.random()
  , v = Math.random()
  , w = r * Math.sqrt(u)
  , t = 2 * Math.PI * v
  , x = w * Math.cos(t)
  , y1 = w * Math.sin(t)
  , x1 = x / Math.cos(y0)
        */
        $distancia = 2000/111300;
        $y0 = 18.999984;
        $x0 = -98.184949;
        $u = $this->random();
        $v = $this->random();
        $w = $distancia * sqrt($u);
        $t = 2 * 3.1416 * $v;
        $x = $w * cos($t);
        $y1 = $w * sin($t);
        $x1 = $x / cos($y0);
        $newY = $y0 + $y1;
        $newX = $x0 + $x1;
        return [$newY, $newX];
    }

    function random() {
        return (float)rand()/(float)getrandmax();
      }

}
?>