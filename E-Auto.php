<?php //V1.0

class ECar
{
    private static self $Ecar ;                                                                              //auf null gesetzt weil die erste "(nicht) instanz" null ist also nichts weil nicht erstellt

    private string $brand;
    private string $model;
    private int    $year;
    private int    $range   = 600; //km
    public  int    $loading = 100; //%


    private function __construct($Brand, $Model, $year, $range, $loading)
    {
        $this->brand = $Brand;
        $this->model = $Model;
        $this->year = $year;
        $this->range = $range;
        $this->loading = $loading;
    }

    public function getModel()
    {
        return $this->model;
    }

    public static function ECarInit($brnd, $mdl, $yr, $rng, $ld) : self
    {

        self::$Ecar = new self($brnd, $mdl, $yr, $rng, $ld);
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

    public function SetBatteryLevel($amountPercentage) : void
    {
        $this->loading = $amountPercentage;
    }

    public function getrange() : string
    {
        $rangeLeft = ($this->loading / 100) * $this->range;
        return "Die Restreichweite bei $this->loading% ladung beträgt ungefähr $rangeLeft km";
    }
}


$vw = ECar::ECarInit('Volkswagen', 'ID3', 2019, 600, 100);
$BMW = ECar::ECarInit('BMW', '320D', 2012, 1200, 100); //VERERBEN WEIL IST DIESEL

echo $vw->getBatteryLevel();
echo '<br>';
echo $vw->getrange();
echo '<br>';
echo $vw->SetBatteryLevel(60);
echo '<br>';
echo $vw->getBatteryLevel();
echo '<br>';
echo $vw->getrange();
echo '<br>';
echo $vw->LoadBattery(100);
echo '<br>';
echo $vw->getrange();
echo '<br>';
echo '<br>';

echo $vw->getModel();
echo '<br>';
echo $BMW->getModel();
