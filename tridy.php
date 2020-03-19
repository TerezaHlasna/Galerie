<?php

class Galerie
{
public $cesta;

    public function __construct($cesta)
    {
        $this->cesta = $cesta;
    }

    public function obrazky ()
    {
        $pole = "";
        $obrazky = glob($this->cesta . "*");

        foreach($obrazky as $obrazek){
            $pole .= $obrazek . " ";
        }

        return explode(" ", trim($pole));
    }
}

$galerie = new Galerie("galerie/");

($galerie->obrazky());
