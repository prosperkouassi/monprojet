<?php
     function connexion() {
         $pdo = neW PDO ('mysql:host=localhost;dbname=monprojet;charset=utf8', 'root', '');
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return $pdo;
     }
