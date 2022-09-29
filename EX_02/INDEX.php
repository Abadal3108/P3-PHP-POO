<?php

class Empleado
{
    private $name;
    private $sueldo;

    function __construct($name,$sueldo){
        $this->name = $name;
        $this->sueldo = $sueldo;
    }

    public function info()
    {
        echo $this->name.'<br>';

        if ($this->sueldo >= 2000) {
            echo 'paga';
        }else{
            echo 'no pages';
        }
    }

}

$Empleado = new Empleado('Alex', 200);
$Empleado->info();

?>

