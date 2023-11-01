<?php //DIESE VERSION IST NEU
//Erstelle eine Klasse "Auto" mit den Attributen public "Marke", "Modell" und "Baujahr". Erstelle dann zwei Objekte dieser Klasse und setze die Werte für diese Attribute.


class Auto //Version in der immer nur eine instanz erstellt wird, immer und immer wieder
{
    private static int $anzahl = 0;
    private static self|NULL $auto = null;
    //-----

    private string $marke;
    private string $modell;
    private int $baujahr;
    private int $kmstand;
    private int $vmax;
    private string|null $nickname;


    private function __construct($Marke, $Modell, $Baujahr, $kmstand, $vmax, $nickname = null)
    {
        $this->marke = $Marke;
        $this->modell = $Modell;
        $this->baujahr = $Baujahr;
        $this->kmstand = $kmstand;
        $this->vmax = $vmax;
        $this->nickname = $nickname;
        self::$anzahl++;
    }

    public static function makeCar($Brand, $Mod, $year, $km, $vmax, $nickname = null)
    {
        if(self::$auto === null)
        {
            self::$auto = new self($Brand, $Mod, $year, $km, $vmax, $nickname);
        }
        return self::$auto;
    }

    public function getInfo() : string
    {
    return
        '<div class="container col s4" >
        <div class="center green" style="border-radius: 12px; box-shadow: 5px 5px rgba(0,50,0, 0.4); height: 50px; width: 80%; line-height: 3.25rem"> Manufactor: ' . "$this->marke" . '</div>
        <p></p>
        <div class="center green" style="border-radius: 12px; box-shadow: 5px 5px rgba(0,50,0, 0.4); height: 50px; width: 80%; line-height: 3.25rem"> Model: ' . "$this->modell" . '</div>
        <p></p><div class="center green" style="border-radius: 12px; box-shadow: 5px 5px rgba(0,50,0, 0.4); height: 50px; width: 80%; line-height: 3.25rem"> Year: ' . "$this->baujahr" . '</div>
        <p></p><div class="center green" style="border-radius: 12px; box-shadow: 5px 5px rgba(0,50,0, 0.4); height: 50px; width: 80%; line-height: 3.25rem"> Mileage: ' . "$this->kmstand" . '</div>
        <p></p><div class="center green" style="border-radius: 12px; box-shadow: 5px 5px rgba(0,50,0, 0.4); height: 50px; width: 80%; line-height: 3.25rem"> Vmax: ' . "$this->vmax" . '</div>' . "{$this->get_nickname()}" .
        '</div>';
    }

    public function get_manufactor(): string
    {
        return $this->marke;
    }

    public function get_model(): string
    {
        return $this->modell;
    }

    public function get_year(): string
    {
        return $this->baujahr;
    }

    public function get_Mileage(): string
    {
        return $this->kmstand;
    }

    public function get_Vmax(): string
    {
        return $this->vmax;
    }

    public function set_nickname($nick)
    {
        $this->nickname = $nick;
    }

    public function get_nickname() : string
    {
        if (empty($this->nickname))
        {
            return "$this->nickname";
        }
        return '<p></p><div class="center green" style="border-radius: 12px; box-shadow: 5px 5px rgba(0,50,0, 0.4); height: 50px; width: 80%; line-height: 3.25rem"> Nickname: ' . "$this->nickname" . '</div>';
    }
}
?>

<!doctype html>
<?php //Initialize Cars

//---------
$VolksWagen = Auto::makeCar('Volkswagen', 'GTI', 2014, 76231, 265, 'Dicki');
$BMW = Auto::makeCar('BMW', '320D', 2012, 26314, 260, 'BIMI');
$Fiat = Auto::makeCar('FIAT', 'Punto', 2000, 176391, 110);
//---------
$MyCars = [$VolksWagen, $BMW, $Fiat];
//$BMW = new Auto('BMW', '320D', 2012, 'Bimi', 266312, 260); ?>
<html lang="de" xmlns="http://www.w3.org/1999/html">
<head>
    <style>
        body {
            background:
                /* top, transparent black, faked with gradient */
                    linear-gradient(
                            rgba(0, 0, 0, 0.7),
                            rgba(0, 0, 0, 0.7)
                    ),
                        /* bottom, image */
                    url(images/CarShow-006.png);
            background-size: cover;
        }
    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Und So</title>
</head>
<body>
<div class="center red" style="border-radius: 12px; box-shadow: 5px 5px rgba(0,0,0, 0.2)"> <h1 style="margin-top: 10px;"> GET YOUR CAR IDENTITY </h1> </div>

<div class="row">
<?php
foreach ($MyCars as $auto) {
    echo $auto -> getInfo();
}
?>
</div>
</body>
</html>