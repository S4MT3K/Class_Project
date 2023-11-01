<?php //V1.11
require_once 'BaseVehicle.php';

class LKW extends BaseVehicle
{
    private string $color;
    private string $tankvolumen;
    private string $anhaenger;
    private string $emptyweight;
    private string $loadingweight;
    private float  $verbrauchprokm = 0.35;
    private float  $loadingmultiplier = 1.5;

    public function __construct($Brand, $Model, $year, $range, $engineSize, $wheels, $color, $tankvolumen, $anhaenger, $emptyweight, $loadingweight)
    {
        parent::__construct($Brand, $Model, $year, $range, $engineSize, $wheels);
        $this->color = $color;
        $this->tankvolumen = $tankvolumen;
        $this->anhaenger = $anhaenger;
        $this->emptyweight = $emptyweight;
        $this->loadingweight = $loadingweight;
    }

    public function getColor() : string
    {
        return "The color of the car is: $this->color";
    }

    public function hasAnhaenger() : string
    {
        if (empty($this->anhaenger))
        {
            return "This car has no trailers: $this->anhaenger";
        }
        return "This car has $this->anhaenger trailers";
    }

    public function getEmptyWeight() : string
    {
        return "The weight of this Vehicle in empty state is: $this->emptyweight";
    }

    public function getLoadWeight() : string
    {
        return "The weight of this Vehicle in Loaded state is : $this->loadingweight <br>";
    }

    public function getrestrange() : string
    {
        if($this->loadingweight > 35000)
        {
            $rangeLeft = round($this->tankvolumen / ($this->verbrauchprokm *  $this->loadingmultiplier));
            return "Die Restreichweite bei $this->tankvolumen litern im Tank, beträgt ungefähr $rangeLeft km";

        }
        $rangeLeft = round($this->tankvolumen / $this->verbrauchprokm);
        return "Die Restreichweite bei $this->tankvolumen litern im Tank, beträgt ungefähr $rangeLeft km";

    }
}

$MyLkw = new LKW('MAN', 'PD1200', 2002, 3450, 6, 6, 'RED', 355, 2, 3500, 34999);
$MyLkw2 = new LKW('MAN', 'PD1200', 2002, 3450, 6, 6, 'RED', 355, 2, 3500, 34999);
echo $MyLkw->getLoadWeight();
echo '<br>';

echo $MyLkw->getrestrange();
echo '<br>';
echo $MyLkw->getModel();
echo '<br>';
echo LKW::getClassCount();
