<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'integrante';
    public $pk = 'idintegrante';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'peso'=>array(),
        'estatura'=>array(),
        'foto'=>array(),
        'Edad'=>array(),
        'idequipo'=>array(),                        
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $peso;
    private $estatura;    
    private $foto;
    private $Edad;
    private $idequipo;          
    
    function Equipo(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){
       $er = new Er();
       
       if ( !$er->valida_nombre($valor) ){
           $this->errores[] = "Este nombre (".$valor.") no es valido";
       }

              
       $this->nombre = trim($valor);
    }

    public function get_apellido(){
        return $this->apellido;
    } 

    public function set_apellido($valor){
       $er = new Er();
       
       if ( !$er->valida_nombre($valor) ){
           $this->errores[] = "Este apellido (".$valor.") no es valido";
       }

              
       $this->nombre = trim($valor);
    }    

    public function get_peso(){
        return $this->peso;
    } 

    public function set_peso($valor){
       $er = new Er();
       
       if ( !$er->valida_numeros($valor) ){
           $this->errores[] = "Este peso (".$valor.") no es valido";
       }

              
       $this->nombre = trim($valor);
    }

    public function get_estatura(){
        return $this->estatura;
    } 

    public function set_estatura($valor){
       $er = new Er();
       
       if ( !$er->valida_numeros($valor) ){
           $this->errores[] = "Esta estatura (".$valor.") no es valido";
       }

              
       $this->nombre = trim($valor);
    }
    public function get_foto(){
        return $this->foto;
    } 

    public function set_foto($valor){
       $er = new Er();
       
       if ( !$er->valida_foto($valor) ){
           $this->errores[] = "Esta foto (".$valor.") no es valido";
       }

              
       $this->nombre = trim($valor);
    }

    public function get_Edad(){
        return $this->Edad;
    } 

    public function set_Edad($valor){
       $er = new Er();
       
       if ( !$er->valida_numeros($valor) ){
           $this->errores[] = "Esta edad (".$valor.") no es valido";
       }

              
       $this->nombre = trim($valor);
    }
    public function get_idequipo(){
        return $this->idequipo;
    } 

    public function set_idequipo($valor){
       $er = new Er();
       
       if ( !$er->valida_numeros($valor) ){
           $this->errores[] = "Este id equipo (".$valor.") no es valido";
       }

              
       $this->nombre = trim($valor);
    }        
    


    
    
    
}

?>
