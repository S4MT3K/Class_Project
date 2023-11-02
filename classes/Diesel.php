<?php //V1.11
require_once 'BaseVehicle.php';

class Diesel extends BaseVehicle
{
    private int $tankvolumen;

    public function __construct($Brand, $Model, $year, $range, $engineSize, $wheels, $tankvolumen)
    {
        parent::__construct($Brand, $Model, $year, $range, $engineSize, $wheels);
        $this->tankvolumen = $tankvolumen;
    }

    public function getTankvolumen() : string    {
        return "Du hast noch ungefähr $this->tankvolumen l im Tank.";
    }

    public function Tanken($amountlitres) : void
    {
        $this->tankvolumen = $amountlitres;
        echo "Du hast grad $amountlitres getankt, damit ist dein tank wieder $this->tankvolumen l voll";
    }

    public function getrestrange() : string
    {
        $rangeLeft = ($this->tankvolumen / 100) * $this->range;
        return "Die Restreichweite bei $this->tankvolumen litern im Tank, beträgt ungefähr $rangeLeft km";
    }
}