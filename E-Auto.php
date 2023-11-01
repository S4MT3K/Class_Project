<?php //V1.1
require_once 'BaseVehicle.php';

class ECar extends BaseVehicle
{
    private int $loading = 100; //Ladung in % (Hier vereinfacht erstmal 100%)
    private static self $Ecar;

    public function __construct($Brand, $Model, $year, $range, $wheels, $loading)
    {
        parent::__construct($Brand, $Model, $year, $range, 0, $wheels);
        $this->loading = $loading;
    }

    public static function ECarInit($brnd, $mdl, $yr, $rng, $whls, $ld) : self
    {
        self::$Ecar = new self($brnd, $mdl, $yr, $rng, $whls, $ld);
        return self::$Ecar;
    }

    public function getBatteryLevel() : string    {
        return "Die Batterieladung beträgt ungefähr $this->loading%";
    }

    public function LoadBattery($amountPercentage) : void
    {
        $this->loading = $amountPercentage;
        echo "Loading Battery to $amountPercentage %";
    }

    public function SetBatteryLevel($amountPercentage) : void //obsolet da wir loading haben und initial unsere ladung beim erstellen setzen können
    {
        $this->loading = $amountPercentage;
    }

    public function getrestrange() : string
    {
        $rangeLeft = ($this->loading / 100) * $this->range;
        return "Die Restreichweite bei $this->loading% ladung beträgt ungefähr $rangeLeft km";
    }
}


$vw = new ECar('Volkswagen', 'ID3', 2019, 600, 4, 100);

echo $vw->getrange();
echo '<br>';
echo $vw->getrestrange();
echo '<br>';
echo "Die Motorengröße beträgt {$vw->getEngineSize()}, da wir hier ein E-Auto haben.";
//$BMW = ECar::ECarInit('BMW', '320D', 2012, 1200, 100); //VERERBEN WEIL IST DIESEL
echo '<br>';
echo BaseVehicle::getClassCount() . ' classes Active';
//echo $vw->getBatteryLevel();
//echo '<br>';
//echo $vw->getrange();
//echo '<br>';
//echo $vw->SetBatteryLevel(60);
//echo '<br>';
//echo $vw->getBatteryLevel();
//echo '<br>';
//echo $vw->getrange();
//echo '<br>';
//echo $vw->LoadBattery(100);
//echo '<br>';
//echo $vw->getrange();
//echo '<br>';
//echo '<br>';
//
//echo $vw->getModel();
//echo '<br>';
//echo $BMW->getModel();
//echo '<br>';
//
//echo " Es gibt " . ECar::getClassCount() . " klassen";
