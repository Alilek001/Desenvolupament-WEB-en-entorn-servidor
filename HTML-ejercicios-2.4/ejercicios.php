<?php
include("cabecera.inc.php");
?>

<h1>Ejercicios de Excepciones en PHP</h1>

<?php
// EJERCICIO 1: SUMA
echo "<h2>Ejercicio 1: Sumar</h2>";

function sumar($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        throw new Exception("Los valores deben ser numeros");
    }
    return $a + $b;
}

$datos = [
    [10, 5],
    [7.5, 2.3],
    [8, "texto"],
    ["abc", "def"]
];

for ($i=0; $i<count($datos); $i++) {
    try {
        $res = sumar($datos[$i][0], $datos[$i][1]);
        echo "<p>Prueba ".($i+1).": ".$datos[$i][0]." + ".$datos[$i][1]." = ".$res."</p>";
    } catch (Exception $e) {
        echo "<p>Prueba ".($i+1).": ".$e->getMessage()."</p>";
    }
}

// EJERCICIO 2: DIVISION
echo "<h2>Ejercicio 2: Division</h2>";

class MiError extends Exception {
    public function mostrar() {
        return "Problema: ".$this->getMessage();
    }
}

function dividir($x, $y) {
    if (!is_numeric($x) || !is_numeric($y)) {
        throw new MiError("Los datos no son validos");
    }
    if ($y == 0) {
        throw new MiError("Division entre cero!");
    }
    return $x / $y;
}

$tests = [
    [20, 4],
    [15.5, 2.5],
    [10, 0],
    [8, "abc"],
    [100, 25]
];

foreach ($tests as $i => $val) {
    try {
        $r = dividir($val[0], $val[1]);
        echo "<p>Prueba ".($i+1).": ".$val[0]." / ".$val[1]." = ".$r."</p>";
    } catch (MiError $e) {
        echo "<p>".$e->mostrar()."</p>";
    }
}

include("footer.inc.php");
?>
