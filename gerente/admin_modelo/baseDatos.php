<?php

class Conexion{
    private $host='localhost';
    private $port=5432;
    private $base='crush';
    private $user='postgres';
    private $pass='Juventud123';
    public $conex;
    public function __construct()
    {
        $this->conex=pg_connect("host=$this->host port=$this->port dbname=$this->base user=$this->user password=$this->pass");
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

    public function bus(){
        $this->consulta="SELECT * FROM buses";
        $this->query= pg_query($this->conex,$this->consulta);
        while($this->row=pg_fetch_array($this->query)){
            ?>
            <option value="<?php echo $this->row['placab'] ?>"><?php echo $this->row['placab'] ?></option>
            <?php
        }
    }

    public function chofer(){
        $this->consulta="SELECT * FROM empleados WHERE rolesid = 1";
        $this->query= pg_query($this->conex,$this->consulta);
        while($this->row=pg_fetch_array($this->query)){
            ?>
                <option value="<?php echo $this->row['cedulae'] ?>"><?php echo $this->row['nombres']." ".$this->row['apellidos'] ?></option>
            <?php
        }
    }
    public function oficial(){
        $this->consulta="SELECT * FROM empleados WHERE rolesid = 2";
        $this->query= pg_query($this->conex,$this->consulta);
        while($this->row=pg_fetch_array($this->query)){
            ?>
            <option value="<?php echo $this->row['cedulae'] ?>"><?php echo $this->row['nombres']." ".$this->row['apellidos'] ?></option>
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

    public function personalI($cedula,$nombres,$apellidos,$estado,$imagen,$role){
        $this->consulta= "INSERT INTO empleados VALUES ($cedula,'$nombres','$apellidos',$estado,'$imagen',$role)";
        $this->query= pg_query($this->conex, $this->consulta);
        return $this->query;
    }

    public function viajeI($imagen,$fechaviaje,$costo,$salida,$llegada,$bus,$estadosid,$chofer,$conductor){
        $this->consulta= "INSERT INTO viajes(fotoviaje,fechaviaje,costoviaje,provinciasalida,provinciallegada,placab,estadosid) VALUES ('$imagen','$fechaviaje',$costo,$salida,$llegada,'$bus',$estadosid)";
        $this->query= pg_query($this->conex, $this->consulta);

        if($this->query){
            $viaje=pg_last_oid($this->query);
            $this->consulta="INSERT INTO viajes(cedulae,viajesid) VALUES ('$imagen','$fechaviaje',$costo,$salida,$llegada,'$bus',$estadosid)";
        }

        return $viaje;
    }

    public function prueba(){
        $this->consulta= "INSERT INTO  VALUES ";
        $this->query= pg_query($this->conex, $this->consulta);
        $viaje=pg_last_oid($this->query);
        print_r($viaje);
    }
}


?>