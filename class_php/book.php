<?php
class Book{
    private $titulo;
    private $autor;
    private $cantPaginas;
    protected $precio;
    
    public function __construct($tit,$aut,$cantPags,$pre){
        $this->titulo=$tit;
        $this->autor=$aut;
        $this->cantPaginas=$cantPags;
        $this->precio=$pre;
    }
    /*Metodos Setters (modificar)*/
    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }
    public function setAutor($autor){
        $this->autor=$autor;
    }
    public function setCantPaginas($cantPaginas){
        $this->cantPaginas=$cantPaginas;
    }
    public function setPrecio($nuevoPrecio){
        $this->precio=$nuevoPrecio;
    }
    /*Metodos Getters (leer)*/
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getCantPaginas(){
        return $this->cantPaginas;
    }
    public function getPrecio(){
        return $this->precio;
    }
}