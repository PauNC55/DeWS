<?php

$nombre_completo = "Pau Navarro Carmona";
$edad = 20;
$nivel_ingles = "A2";
$permisoconducirB = "B";
$titulacion = "ESO - IES Carles Salvador <br> SMR - IES Salvador Gadea <br> DAW - IES Salvador gadea";

//campo nombre
$nom_txt_va = "Nom: ";
$nom_txt_es = "Nombre: ";
$nom_txt_en = "Name: ";

//Edad
$edad_txt_va = "Edat: ";
$edad_txt_es = "Edad: ";
$edad_txt_en = "Age: ";

//Nivel inglés

$nivelEn_txt_va = "Nivel de anglés: ";
$nivelEn_txt_es = "Nivel de inglés: ";
$nivelEn_txt_en = "English Level: ";

//Permiso conducir
$permiso_txt_va = "Permís de conduir: ";
$permiso_txt_es = "Permiso de conducir: ";
$permiso_txt_en = "Driving license: ";


//Títulos
$titulo_txt_va = "Titulacions: ";
$titulo_txt_es = "Titulaciones: ";
$titulo_txt_en = "Qualifications: ";

//Idioma
$idioma = "en";

//Construcción de variables variables
$nom_txt_ = "nom_txt_" . $idioma;
$edad_txt_ = "edad_txt_" . $idioma;
$nivelEn_txt_ = "nivelEn_txt_" . $idioma;
$permiso_txt_ = "permiso_txt_" . $idioma;
$titulo_txt_ = "titulo_txt_" . $idioma;

echo $$nom_txt_ . "$nombre_completo <br>";
echo $$edad_txt_ . "$edad <br>";
echo $$nivelEn_txt_ . "$nivel_ingles <br>";
echo $$permiso_txt_ . "$permisoconducirB <br>";
echo $$titulo_txt_ . " <br> $titulacion";
?>