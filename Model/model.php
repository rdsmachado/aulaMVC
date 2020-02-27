<?php
class model {
  
    public function validaDados($usuario,$senha) {
        
			/* Aplica a validação ao usuário e senha passados, utilizando as regras de négocio especificas para ele. */
			if(strlen($usuario)<5){
				
				return 'O usu&aacute;rio deve possuir mais de 5 caracteres';
				
			}else if(strlen($senha)<8){
				
				return 'A senha deve possuir mais de 8 caracteres';
				
			}else{
				
				return 'Login efetuado com sucesso';
				
			}	
    }
}
?>