<?php
/**
 * Created by PhpStorm.
 * User: sylvi_000
 * Date: 20/05/2015
 * Time: 12:22
 */

    try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=gestion_formations;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="img/favicon.ico" />
        <title>FormaGest</title>
    </head>

    <header>
        <nav id="cssmenu">
            <ul>
                <li>LISTE PERSONNELS</li>
                <li>LISTE FORMATIONS</li>
            </ul>
        </nav>
    </header>