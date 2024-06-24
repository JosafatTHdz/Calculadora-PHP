<?php
$val1= $_POST['v1'];
$val2= $_POST['v2'];
$opc=$_POST['opcion'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $res = calcular($val1, $val2, $opc);
    echo "Resultado:  $res";
}
function calcular($val1,$val2,$opc){
    switch ($opc) {
        case "suma":
            return $val1+$val2;
        case "resta":
            return $val1-$val2;
        case "multiplicacion":
            return $val1*$val2; 
        case "division":
            if ($val2 == 0) {
                return "Error: División por cero.";
            }
            return $val1/$val2;
        default:
            return 'La opcion no es valida';
    }
}
