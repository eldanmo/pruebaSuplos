<?php
class Proceso {
	private $id;
    private $objeto;
    private $descripcionAlcance;
    private $moneda;
    private $presupuesto;
	private $actividad;
    private $fechaInicio;
    private $horaInicio;
    private $fechaCierre;
    private $horaCierre;
    private $estado;

	public function setId($id)
	{
		$this->id=$id;
	}
	
	public function getId()
	{
		return ($this->id);
	}

    public function setObjeto($objeto)
	{
		$this->objeto=$objeto;
	}
	
	public function getObjeto()
	{
		return ($this->objeto);
	}

    public function setDescripcionAlcance($descripcionAlcance)
	{
		$this->descripcionAlcance=$descripcionAlcance;
	}
	
	public function getDescripcionAlcance()
	{
		return ($this->descripcionAlcance);
	}

    public function setMoneda($moneda)
	{
		$this->moneda=$moneda;
	}
	
	public function getMoneda()
	{
		return ($this->moneda);
	}

    public function setPresupuesto($presupuesto)
	{
		$this->presupuesto=$presupuesto;
	}
	
	public function getPresupuesto()
	{
		return ($this->presupuesto);
	}

    public function setActividad($actividad)
	{
		$this->actividad=$actividad;
	}
	
	public function getActividad()
	{
		return ($this->actividad);
	}

    public function setFechaInicio($fechaInicio)
	{
		$this->fechaInicio=$fechaInicio;
	}
	
	public function getFechaInicio()
	{
		return ($this->fechaInicio);
	}

    public function setHoraInicio($horaInicio)
	{
		$this->horaInicio=$horaInicio;
	}
	
	public function getHoraInicio()
	{
		return ($this->horaInicio);
	}

    public function setFechaCierre($fechaCierre)
	{
		$this->fechaCierre=$fechaCierre;
	}
	
	public function getFechaCierre()
	{
		return ($this->fechaCierre);
	}

    public function setHoraCierre($horaCierre)
	{
		$this->horaCierre=$horaCierre;
	}
	
	public function getHoraCierre()
	{
		return ($this->horaCierre);
	}

    public function setEstado($estado)
	{
		$this->estado=$estado;
	}
	
	public function getEstado()
	{
		return ($this->estado);
	}

    public function Proceso()
    {

    }

    public function crearProceso($objeto, $descripcionAlcance, $moneda, $presupuesto, $actividad, $fechaInicio, $horaInicio, $fechaCierre, $horaCierre, $estado)
    {
        $this->objeto=$objeto;
        $this->descripcionAlcance=$descripcionAlcance;
        $this->moneda=$moneda;
        $this->presupuesto=$presupuesto;
        $this->actividad=$actividad;
        $this->fechaInicio=$fechaInicio;
        $this->horaInicio=$horaInicio;
        $this->fechaCierre=$fechaCierre;
        $this->horaCierre=$horaCierre;
        $this->estado=$estado;
    }

    public function agregarProceso()
    {
        $this->Conexion=Conectarse();
        $sql="INSERT INTO PROCESO (objeto, descripcionAlcance, moneda, presupuesto, actividad, fechaInicio, horaInicio, fechaCierre, horaCierre, estado) VALUES 
            ('$this->objeto','$this->descripcionAlcance','$this->moneda','$this->presupuesto','$this->actividad','$this->fechaInicio','$this->horaInicio','$this->fechaCierre','$this->horaCierre','$this->estado' )";
        $respuesta=$this->Conexion->query($sql);
        $this->Conexion->close();
        return $respuesta;
    }

	public function mostrarActividad($actividad)
    {
        $this->actividad=$actividad;
    }

	public function consultarActividad(){
		$this->Conexion=Conectarse();
        $sql="SELECT * FROM actividades WHERE nombreproducto LIKE '%$this->actividad%'";
        $respuesta=$this->Conexion->query($sql);
        $this->Conexion->close();
        return $respuesta;
	}

	public function mostrarProcesos($id, $objeto, $estado)
    {
        $this->id=$id;
        $this->objeto=$objeto;
        $this->estado=$estado;
    }

	public function consultarProcesos(){
		$this->Conexion=Conectarse();
        $sql="SELECT * FROM proceso WHERE id LIKE '%$this->id%'AND objeto LIKE '%$this->objeto%'AND estado LIKE '%$this->estado%'";
        $respuesta=$this->Conexion->query($sql);
        $this->Conexion->close();
        return $respuesta;
	}

	public function mostrarProceso($id)
    {
        $this->id=$id;
    }

	public function consultarProceso(){
		$this->Conexion=Conectarse();
        $sql="SELECT * FROM proceso WHERE id = '$this->id'";
        $respuesta=$this->Conexion->query($sql);
        $this->Conexion->close();
        return $respuesta;
	}
}