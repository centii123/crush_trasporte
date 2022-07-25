<?php
require_once 'baseDatos.php';

class Mostrar extends Conexion{
    private $por_pagina=10;
    private $consulta;
    private $query;
    public $row;

    public function mostrarBuses($estado,$placa,$desde){
        $this->consulta="SELECT * FROM buses WHERE estado = $estado OR placab like '%$placa%' ORDER BY modelo LIMIT $this->por_pagina OFFSET $desde";
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
        $this->consulta="SELECT viajes.viajesid,viajes.fotoviaje,viajes.fechaviaje,viajes.costoviaje,viajes.placab, estados.descripcion estadosid,salida.descripcion provinciasalida,llegada.descripcion provinciallegada FROM viajes INNER JOIN provincia salida ON salida.provinciaid=viajes.provinciasalida INNER JOIN provincia llegada ON llegada.provinciaid=viajes.provinciallegada INNER JOIN estados ON viajes.estadosid=estados.estadosid WHERE  salida.descripcion LIKE '%$busca%' OR llegada.descripcion like '%$busca%' OR viajes.estadosid in ($estado,3) ORDER BY viajes.estadosid desc LIMIT $this->por_pagina OFFSET $desde";
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
?>