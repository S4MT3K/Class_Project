<?php //V1.11
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
