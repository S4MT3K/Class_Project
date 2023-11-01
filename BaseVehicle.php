<?php //V1.1
abstract class BaseVehicle
{
    private   static    int       $anzahl = 0;
    protected           string    $brand;
    protected           string    $model;
    protected           int       $year;
    protected           int       $range;
    protected           int       $engineSize;
    protected           int       $wheels;

    public function __construct($Brand, $Model, $year, $range, $engineSize, $wheels)
    {
        $this->brand = $Brand;
        $this->model = $Model;
        $this->year = $year;
        $this->range = $range;
        $this->engineSize = $engineSize;
        $this->wheels = $wheels;
        self::$anzahl++;
    }

//----------------
//-----Public-----
//----------------
    public static function getClassCount()
    {
        return self::$anzahl;
    }

//-------

    public function getEngineSize(): int
    {
        return $this->engineSize;
    }

    public function getWheels(): int
    {
        return $this->wheels;
    }

    public function getModel()
    {
        return $this->model;
    }

    abstract public function getrestrange() : string;

    public function getrange() : string
    {
        //$rangeLeft = ($this->loading / 100) * $this->range; //TODO: Morph into Car Specific Getrange (wieviel noch)
        return "The manufactor sets the max. range to $this->range ";
    }
}