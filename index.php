<?php
include_once ("class_php/book.php");
include_once ("class_php/ebook.php");
$nuevoLibro=new Book("Arde la Vida","Magali Tajes",224,530);
echo $nuevoLibro->getPrecio();
$nuevoLibro->setPrecio(600);
echo "<br>";
echo $nuevoLibro->getPrecio();
echo "<br>";
$nuevoEbook=new Ebook("El principite","Saint",150,0);
$nuevoEbook->setPorcentajeDescuento(0.20);
$nuevoEbook->setPrecio(1000);
echo $nuevoEbook->getPrecio();
