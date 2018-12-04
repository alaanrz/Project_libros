<?php
include_once ("book.php");
class Ebook extends  Book{
    private $formato;
    private $peso;
    private $url;
    private $porcentajeDescuento;
    
    public function setPorcentajeDescuento($nuevoPorcentajeDescuento){
        $this->porcentajeDescuento=$nuevoPorcentajeDescuento;
    }
    public function setPrecio($nuevoPrecio){
        $this->precio=$nuevoPrecio-($nuevoPrecio*$this->porcentajeDescuento);
    }
    /*Metodos Getters (leer)*/
    public function getPorcentajeDescuento(){
        return $this->porcentajeDescuento;
    }
}