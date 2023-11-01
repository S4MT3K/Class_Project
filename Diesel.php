<?php //V1.1
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

$BMW = new Diesel('BMW', '320D', 2012, 1200, 2, 4, 90);
$BMW3lD = new Diesel('BMW', '330D', 2012, 1200, 3, 4, 90);
echo $BMW->getrange();
echo '<br>';
echo $BMW->getrestrange();
echo '<br>';
echo "Die Motorengröße beträgt {$BMW->getEngineSize()} liter, da wir hier ein Diesel-Auto haben.";
echo '<br>';
echo "Die Motorengröße beträgt {$BMW3lD->getEngineSize()} liter, da wir hier ein Diesel-Auto haben.";
echo '<br>';
echo BaseVehicle::getClassCount() . ' classes Active';
