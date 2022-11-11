<?php 
class ContohStatic{
    public static $angka = 1;

    public  function Hallo(){
        return "Hallo. ". self::$angka++. " kali. <br>";

    }
}
$obj = new ContohStatic();
echo $obj->Hallo();
echo $obj->Hallo();
echo $obj->Hallo();

echo "<hr>";

$obj2 = new ContohStatic();
echo $obj2->Hallo();
echo $obj2->Hallo();
echo $obj2->Hallo();
?>