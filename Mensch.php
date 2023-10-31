<?php //DIESE VERSION IST NEU
//Erstelle eine Klasse "Auto" mit den Attributen public "Marke", "Modell" und "Baujahr". Erstelle dann zwei Objekte dieser Klasse und setze die Werte für diese Attribute.


class Auto
{
    private string $marke;
    private string $modell;
    private int $baujahr;
    private int $kmstand;
    private int $VMAX;
    private string $nickname;

    public function __construct($Marke, $Modell, $Baujahr, $nickname,$kmstand,$VMAX )
    {
        $this->marke = $Marke;
        $this->modell = $Modell;
        $this->baujahr = $Baujahr;
        $this->nickname = $nickname;
        $this->kmstand = $kmstand;
        $this->VMAX = $VMAX;
    }

    public function set_marke($marke): void
    {
        $this->marke = $marke;
    }

    public function set_nickname($nick)
    {
        $this->nickname = $nick;
    }

    public function get_nickname() : string
    {
        if (empty($this->nickname))
        {
            return 'Dieses Fahrzeug hat keinen Nicknamen!';
        }
        return "Dieses Fahrzeug heisst $this->nickname";
    }
}

$VwGTI = new Auto('Volkswagen', 'GTI', '2017', "", 122400, 260);
$BMW320D = new Auto('Bayerische Motoren Werke', '320D', '2010', "Bimi", 260440, 260);
//$VwGTI->marke = 'DAAAAS AUTO';
echo '<pre>';
print_r($VwGTI);
echo '</pre>';

echo '<pre>';
print_r($BMW320D);
echo '</pre>';

echo '<pre>';
echo $VwGTI->get_nickname();
echo '<br>';
echo $BMW320D->get_nickname();
echo '</pre>';


