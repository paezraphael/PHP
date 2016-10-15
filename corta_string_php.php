<?php

class Str{
    function __construct($str){
        $this->value = $str;
        $this->length = strlen($str);
        ..
    }

    function __toString(){
        return $this->value;
    }
    function cortaString( $string , $limit ) {
	
		if($limit != ""){
				$fim = $inicio + $limit;
		}else{
			return "Determinar um tamanho para corte";
		}
		$divide_frase = explode(" ", $string);
		$length = strlen($string);
		$stringResult .= $divide_frase[0];
		for($i=$inicio;$i<=$fim;$i++){
			$stringResult .= $divide_frase[$i]." ";
		}
		if(strlen($stringResult) > 0){
			$stringResult .= " ...";
		}
		return $stringResult;
	}
	
}

?>