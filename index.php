<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

require __DIR__. "/Movie.php";

$eternals = new Movie( "Eternals", 2021, "Chloé Zhao", "157 min", "English");
$famigliaAddams = new Movie( "La famiglia Addams 2", 2021, "Greg Tiernan", "93 min", "Italiano");

var_dump($eternals, $famigliaAddams);