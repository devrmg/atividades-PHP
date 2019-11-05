<?php


/**
 * Description of ClasseCaneta
 *
 * @author erikf_000
 */
class ClasseCaneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if($this->tampada==TRUE):
            die("ERRO!!, sua caneta está tampada");
            else:
                die("Pode rabiscar");    
        endif;
    }
    
    public function tampar(){
        $this->tampada = TRUE;
    }

    
    public function destampar(){
        $this->tampada= FALSE;
    }
    
    
    
    }




