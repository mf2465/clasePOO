<?php 
class bebida{
    public $marca;
    public $categoria;
    public $tipo;
    public $envase;
    public $alcohol;
    public $precio;
    public $stock;

function reponer($stock) {

    if ($stock <= 10) {
        echo "Reponer producto en góndola";
    }
}

function venta_responsable ($edad,$alcohol) {
    
    if ($edad <= 17 && $alcohol == true) {
        echo "No se permite la venta de alcohol a MENORES";
    }    
}

function horariodeventa($hora_comprador) {

    if ($hora_comprador <10 or $hora_comprador>21) {
        echo "No está permitida la venta de alcohol en este horario. Sólo de 10 a 21 hs.";
    }

}

}

// cargo todos los códigos de barra de los productos disponibles para la venta
$codebar1 = 7792798003709;
$codebar2 = 7790895067570; 
$codebar3 = 7798108833400;
$codebar4 = 7791250001529;
$codebar5 = 7790950000191;

// cargo los distintos objetos
$codebar1 = new bebida();
$codebar1 -> marca = "Corona";
$codebar1 -> categoria = "cerveza";
$codebar1 -> tipo = "rubia";
$codebar1 -> envase = 330;
$codebar1 -> alcohol = true;
$codebar1 -> precio = 695;
$codebar1 -> stock = 100;

$codebar2 = new bebida();
$codebar2 -> marca = "Coca Cola";
$codebar2 -> categoria = "gaseosa";
$codebar2 -> tipo = "Zero";
$codebar2 -> envase = 2250;
$codebar2 -> alcohol = false;
$codebar2 -> precio = 1109;
$codebar2 -> stock = 150;

$codebar3 = new bebida();
$codebar3 -> marca = "Contra Cara";
$codebar3 -> categoria = "vino";
$codebar3 -> tipo = "Malbec";
$codebar3 -> envase = 750;
$codebar3 -> alcohol = true;
$codebar3 -> precio = 2171;
$codebar3 -> stock = 50;

$codebar4 = new bebida();
$codebar4 -> marca = "Navarro Correa";
$codebar4 -> categoria = "espumante";
$codebar4 -> tipo = "extra brut";
$codebar4 -> envase = 750;
$codebar4 -> alcohol = true;
$codebar4 -> precio = 3720;
$codebar4 -> stock = 30;

$codebar5 = new bebida();
$codebar5 -> marca = "Gancia";
$codebar5 -> categoria = "aperitivo";
$codebar5 -> tipo = "Americano";
$codebar5 -> envase = 450;
$codebar5 -> alcohol = true;
$codebar5 -> precio = 1171;
$codebar5 -> stock = 80;

//visualizo el contenido de los objetos generados
echo "<pre>";
var_dump($codebar1,$codebar2,$codebar3,$codebar4,$codebar5);
echo "</pre>";

// pruebo las funciones creadas
$stock = 5;
$edad = 15;
$hora_comprador = 8;
$alcohol = true;


echo "<br>";
$codebar1 -> reponer($stock);
echo "<br>";
$codebar2 -> venta_responsable($edad,$alcohol);
echo "<br>";
$codebar3 -> horariodeventa($hora_comprador);
echo "<br>";

?>