<?php
class Core
{
    private $class;
    private $metodo;
    private $parametros;
    
    public function __construct($class, $metodo, $parametros) {
        if ($class === '') {
            echo "No hay nada en la clase, lo sentimos."; 
        }elseif ($metodo === '') {
            include 'modelo/'. $class .'.php';
            $this->class = new $class;
        }elseif($metodo != ''){
            include 'modelo/'. $class .'.php';
            $this->class = new $class;
            if($parametros != ''){
                $this->class->$metodo($parametros);
            }else{
                $this->class->$metodo();
            }
        }
    }
}

if (isset($_POST['class'])&&isset($_POST['metodo'])&&isset($_POST['parametros'])) {
    //print_r($_POST);
    $core = new Core($_POST['class'], $_POST['metodo'], $_POST['parametros']);
}
?>