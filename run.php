<?php
function myAutoLoader ($className) :void
{
    $classFile = "classes/".$className . '.php';

    if(file_exists($classFile))
    {
        require_once $classFile;
    }
}

spl_autoload_register ('myAutoLoader');

$MyLkw = new LKW('MAN', 'PD1200', 2002, 3450, 6, 6, 'RED', 355, 2, 3500, 34999);
$MyLkw2 = new LKW('MAN', 'PD1200', 2002, 3450, 6, 6, 'RED', 355, 2, 3500, 34999);
echo $MyLkw->getLoadWeight();
echo '<br>';

echo $MyLkw->getrestrange();
echo '<br>';
echo $MyLkw->getModel();
echo '<br>';
echo LKW::getClassCount();
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

//###########################################################################################
$vw = new ECar('Volkswagen', 'ID3', 2019, 600, 4, 100);
echo $vw->getrange();
echo '<br>';
echo $vw->getrestrange();
echo '<br>';
echo "Die Motorengröße beträgt {$vw->getEngineSize()}, da wir hier ein E-Auto haben.";
//$BMW = ECar::ECarInit('BMW', '320D', 2012, 1200, 100); //VERERBEN WEIL IST DIESEL
echo '<br>';
echo BaseVehicle::getClassCount() . ' classes Active';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

//###########################################################################################
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

