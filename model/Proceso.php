<?php
class Proceso {
    private $objeto;
    private $descripcionAlcance;
    private $moneda;
    private $presupuesto;
    private $actividad;

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

    public function Proceso()
    {

    }

    public function crearProceso($objeto, $descripcionAlcance, $moneda, $presupuesto, $actividad)
    {
        $this->objeto=$objeto;
        $this->descripcionAlcance=$descripcionAlcance;
        $this->moneda=$moneda;
        $this->presupuesto=$presupuesto;
        $this->actividad=$actividad;
    }

    public function agregarProceso()
    {
        $this->Conexion=Conectarse();
        $sql="INSERT INTO PROCESO (objeto, descripcionAlcance, moneda, presupuesto, actividad) VALUES 
            ('$this->objeto','$this->descripcionAlcance','$this->moneda','$this->presupuesto','$this->actividad' )";
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
}