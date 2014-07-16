<?php

class Er {
    
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_username($valor){
        if(preg_match("/^([a-zA-Z0-9])+$/",$valor))
            return true;
            else{
                return false;
            }
    }

     public function valida_ids($valor){     
        if(preg_match("/^(^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

     public function valida_password($valor){
        if(preg_match("/^([A-Za-z0-9_+,.:.,=?();!#$%&*<>-])+$/",$valor))
        {
          return true;
        }
            else{
                return false;
            }
    }

    public function valida_peso($valor){
         if(preg_match("/^(^[0-9][0-9].[0-9][0-9]$)+$/",$valor))
        {
          return true;
        }
            else{
                return false;
            }
    }

    public function valida_estatura($valor){
        if(preg_match("/^(^[0-1].[0-9][0-9]$)+$/",$valor))
        {
          return true;
        }
            else{
                return false;
            }
    }

    public function valida_edad($valor){
        if(preg_match("/^(^[0-9][0-9]$)+$/",$valor))
        {
          return true;
        }
        else{
            return false;
            }
    }

    public function valida_rfc($valor){
        if(preg_match("/^([A-Z,Ñ,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]?)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

     public function valida_cp($valor){     
        if(preg_match("/^(^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

    public function valida_numeros($valor){
        $exp_reg = "/^[[:digit:]]+$/"; 
        if (preg_match($exp_reg, $valor)) {
             return true;
        } else { 
             return false;
        } 
    }

       public function valida_nombre($valor){
        if(preg_match("/^([a-zA-ZñÑ\s]{2,50})+$/",$valor))
                return true;
            else{
                return false;
            }
    }

      public function valida_abreviatura($valor){
        if(preg_match("/^([a-zA-ZñÑ\s]{2})+$/",$valor))
                return true;
            else{
                return false;
            }
    }

     public function valida_apellido($valor){
        if(preg_match("/^([a-zA-ZñÑ\s]{2,50})+$/",$valor))
                return true;
            else{
                return false;
            }
    }

    public function valida_curp($valor){  
        if(preg_match("/^(^.*(?=.{18})(?=.*[0-9])(?=.*[A-ZÑ]).*$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

        public function valida_telefono($valor){ 
        if(preg_match("/^(^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

    public function valida_tarjeta($valor){
        if(preg_match("/^(^((67\d{2})|(4\d{3})|(5[1-5]\d{2})|(6011))(-?\s?\d{4}){3}|(3[4,7])\ d{2}-?\s?\d{6}-?\s?\d{5}$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

        public function valida_fecha($valor){
        if(preg_match("/^(^\d{1,2}\/\d{1,2}\/\d{2,4}$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

     public function valida_hora($valor){  
        if(preg_match("/^(^[0-2][0-3]:[0-5][0-9]$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

         public function valida_genero($valor){  
        if(preg_match("/^(H|M)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

     public function valida_nomcalle($valor){     
        if(preg_match("/^(^[a-zA-Z1-9À-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-Z1-9À-ÖØ-öø-ÿ]+\.?)$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

    public function valida_imagenes($valor){     
        if(preg_match("/^(%\.(gif|jpe?g|png)$%i",$valor))
                return true;
            else{
                return false;
            }
    }


   /* public function valida_cp($valor){     
        if(preg_match("/^(^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }*/

    public function valida_abre($valor){     
        if(preg_match("/^(^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

     public function valida_imagen($valor){     
        if(preg_match("%\.(jpg)$%i",$valor))
                return true;
            else{
                return false;
            }
    }

     public function valida_imagenn($valor){  
        $exp_reg = "%\.(pdf)$%i";  
        if (preg_match($exp_reg, $valor)) {
             return true;
        } else { 
             return false;
        }           
    }

/*
	// Cadena de texto a evaluar
	$nombre_fichero = "vacaciones001.jpg";
	// Sólo se permiten gif, jpg ó jpeg y png
	// sin sensibilidad a letras mayúsculas ni minúsculas
	$patron = "%\.(gif|jpe?g|png)$%i";
	// Ejemplo de visualización del resultado
	echo preg_match($patron, $nombre) == 1 ? 'valido' : 'invalido';*/


}

?>    