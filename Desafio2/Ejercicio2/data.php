<?php
require_once "Libro.php";

class Data{
    function getLibros($autor, $titulo, $numedicion, $anioedicion, $numpag, $lugar, $editorial, $notas, $isbn){
        //$lista = array();

        $li = new Libro();
        $li->autor=$autor;
        $li->titulo=$titulo;
        $li->numedicion=$numedicion;
        $li->anioedicion=$anioedicion;
        $li->numpag=$numpag;
        $li->lugar=$lugar;
        $li->editorial=$editorial;
        $li->notas=$notas;
        $li->isbn=$isbn;
        //array_push($lista,$li);

        return $li;
    }
}
?>