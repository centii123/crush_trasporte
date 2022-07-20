<?php

class Conexion{
    //atributos
    public $conex;
    //metodos
    public function __construct(){
        $this->conex = pg_connect("host=localhost port=5432 dbname=crush user=postgres password=Juventud123");
    }
    public function hola(){
        return $this->conex;
    }
}

class Mostrar extends Conexion{
    public $por_pagina=10;
    public $consulta;
    public $query;
    public $row;

    public function mostrarBuses($desde){
        $this->consulta="SELECT * FROM buses ORDER BY modelo LIMIT $this->por_pagina OFFSET $desde";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }

    public function mostrarBusesN(){
        $this->consulta="SELECT * FROM buses";
        $this->query=pg_query($this->conex,$this->consulta);
        $this->row=pg_num_rows($this->query);
        return $this->row;
    }

    public function mostrarpersonal($desde){
        $this->consulta="SELECT * FROM empleados ORDER BY rolesid LIMIT $this->por_pagina OFFSET $desde";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }

    public function mostrarpersonalN(){
        $this->consulta="SELECT * FROM empleados";
        $this->query=pg_query($this->conex,$this->consulta);
        $this->row=pg_num_rows($this->query);
        return $this->row;
    }

    public function mostrarviajes($desde){
        $this->consulta="SELECT * FROM viajes ORDER BY fechaviaje LIMIT $this->por_pagina OFFSET $desde";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }

    public function mostrarviajesN(){
        $this->consulta="SELECT * FROM viajes";
        $this->query=pg_query($this->conex,$this->consulta);
        $this->row=pg_num_rows($this->query);
        return $this->row;
    }
    public function role(){
        $this->consulta="SELECT * FROM roles";
        $this->query= pg_query($this->conex,$this->consulta);
        while($this->row=pg_fetch_array($this->query)){
            ?>
            <option value="<?php echo $this->row['rolesid'] ?>"><?php echo $this->row['descripcion'] ?></option>
            <?php
        }
    }
    public function mostrarProvincias(){
        $this->consulta="SELECT * FROM provincia";
        $this->query= pg_query($this->conex,$this->consulta);
        while($this->row = pg_fetch_array($this->query)){
            ?>
            <option value="<?php echo $this->row['provinciaid'] ?>"><?php echo $this->row['descripcion'] ?></option>
            <?php
        }
    }
}

class Insertar extends Conexion{
    public $consulta;
    public $query;

    public function busI($id,$modelo,$asientos,$imagen,$estado){
        $this->consulta= "INSERT INTO buses VALUES ('$id','$modelo',$asientos,'$imagen',$estado)";
        $this->query= pg_query($this->conex, $this->consulta);
        return $this->query;
    }
}


?>