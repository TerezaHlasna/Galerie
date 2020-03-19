<?php

class Galerie
{
public $precteni;

    public function __construct($precteni)
    {
        $this->precteni = $precteni;
    }

    public function obrazky ()
    {
        $pole_obr = "";
        $obrazky = glob($this->precteni . "*");

        foreach($obrazky as $s){
            $pole_obr .= $s . " ";
        }

        return explode(" ", trim($pole_obr));
    }
}

$galerie = new Galerie("galerie/");

($galerie->obrazky());
