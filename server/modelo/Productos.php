<?php
/**
 * example
 */
class Productos
{
    private $db;

    public function __construct()
	{
		$fileDb = "db/productos.json";
        $data = file_get_contents($fileDb);
        $this->db = json_decode($data, true);

        //var_dump($this->db);
	}

    public function getTitleProductos()
    {
        $array = [];
        foreach ($this->db as $clave => $valor) {
            //echo "$clave <==>". $valor['img']." | <br>";

            $array[$clave] = array($valor['img'], $valor['link']);
        }

        echo json_encode($array);
    }
}

//$res = new Productos();
//$res->getTitleProductos();
//print_r($res->getTitleProductos());
//echo json_encode($res->getTitleProductos());
?>