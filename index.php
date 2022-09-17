<?php
include_once './utilidades.php';

// PHP tiene mapas y le llaman array asociativo
const sexoEnum = ['M' => 'Masculino', 'F' => 'Femenino'];

class Persona {
  public string $nombre; 
  public string $sexo; 
  public int $edad;
  public string $img;

  public function __construct(string $nuevoNombre,
                             int $nuevaEdad,
                             string $sexo) {
    $this->nombre = $nuevoNombre;
    $this->edad = $nuevaEdad;
    $this->sexo = sexoEnum[$sexo];
//    $this->img = ;
  }
}

$juan = new Persona('Juan', 28, 'M');
$maria = new Persona('Maria', 20, 'F');
$pedro = new Persona('Pedro', 18, 'M');

$arr = [$juan, $maria, $pedro];

// Estudiar funciones de filtro para evitar la iteracion
$arrMasculino = array_filter($arr, function($x) {
  if ($x->sexo === sexoEnum['M']) {
    return $x;
  }
});

echo '<h2>Masculino</h2>';
echo count($arrMasculino);
echo '<br>';
echo '<h2>Femenino </h2>';
echo count($arr) - count($arrMasculino);

echo '<hr/>';
echo '<br><br>';
echo '<h2>IMG to B64</h2>';
echo '<br>';
$imgb64 =  imgTo64($juan->nombre);
echo $imgb64;
echo '<br>';
echo "<img src='data:image/png;base64,$imgb64' />";
// echo json_encode($juan);