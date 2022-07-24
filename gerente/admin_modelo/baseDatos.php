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
    private $por_pagina=10;
    private $consulta;
    private $query;
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

    public function mostrarpersonal($cedula,$estado,$role,$desde){
        $this->consulta="SELECT em.cedulae,em.nombres,em.apellidos,em.estados, em.imagenempleado,ro.descripcion rolesid FROM empleados em INNER JOIN roles ro on em.rolesid=ro.rolesid WHERE em.cedulae LIKE '%$cedula%' OR em.estados = $estado OR em.rolesid = $role ORDER BY rolesid LIMIT $this->por_pagina OFFSET $desde";
        $this->query=pg_query($this->conex,$this->consulta);
        return $this->query;
    }

    public function mostrarpersonalN(){
        $this->consulta="SELECT * FROM empleados";
        $this->query=pg_query($this->conex,$this->consulta);
        $this->row=pg_num_rows($this->query);
        return $this->row;
    }

    public function mostrarviajes($busca,$estado,$desde){

        $this->consulta="SELECT viajes.viajesid,viajes.fotoviaje,viajes.fechaviaje,viajes.costoviaje,viajes.placab, estados.descripcion estadosid,salida.descripcion provinciasalida,llegada.descripcion provinciallegada FROM viajes INNER JOIN provincia salida ON salida.provinciaid=viajes.provinciasalida INNER JOIN provincia llegada ON llegada.provinciaid=viajes.provinciallegada INNER JOIN estados ON viajes.estadosid=estados.estadosid WHERE  salida.descripcion LIKE '%$busca%' OR llegada.descripcion like '%$busca%' OR viajes.estadosid = $estado ORDER BY fechaviaje LIMIT $this->por_pagina OFFSET $desde";
        //WHERE estados.descripcion = 'Activo'
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

    public function estados(){
        $this->consulta="SELECT * FROM estados";
        $this->query= pg_query($this->conex,$this->consulta);
        while($this->row=pg_fetch_array($this->query)){
            ?>
            <option value="<?php echo $this->row['estadosid'] ?>"><?php echo $this->row['descripcion']?></option>
            <?php
        }
    }
}

class Insertar extends Conexion{
    private $consulta;
    public $query;

    public function busI($id,$modelo,$asientos,$imagen,$estado){
        $this->consulta= "INSERT INTO buses VALUES ('$id','$modelo',$asientos,'$imagen',$estado)";
        $this->query= pg_query($this->conex, $this->consulta);
        
        return $this->query;
    }

    public function personalI($cedula,$nombres,$apellidos,$estado,$imagen,$role){
        $this->consulta= "INSERT INTO empleados VALUES ('$cedula','$nombres','$apellidos',$estado,'$imagen',$role)";
        $this->query= pg_query($this->conex, $this->consulta);
        return $this->query;
    }

    public function viajeI($imagen,$fechaviaje,$costo,$salida,$llegada,$bus,$estadosid,$chofer,$oficial){
        $this->consulta= "INSERT INTO viajes(fotoviaje,fechaviaje,costoviaje,provinciasalida,provinciallegada,placab,estadosid) VALUES ('$imagen','$fechaviaje',$costo,$salida,$llegada,'$bus',$estadosid)";
        $this->query= pg_query($this->conex, $this->consulta);

        if($this->query){
            $numeros="SELECT MAX(viajesid) FROM viajes";
            $query=pg_query($this->conex,$numeros);
            $idviajearr=pg_fetch_array($query);
            $idV=intval($idviajearr['max']) ;

            if($query){
                $ingresar="INSERT INTO viajes_empleados(cedulae,viajesid) VALUES ($chofer,$idV)";
                $query1=pg_query($this->conex,$ingresar);

                if($query1){
                    $ingresar="INSERT INTO viajes_empleados(cedulae,viajesid) VALUES ($oficial,$idV)";
                    $query1=pg_query($this->conex,$ingresar);
                }

            }

            
            
        }

        
    }

}


?>