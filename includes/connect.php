<?php
    try {
        $conn = new PDO('mysql:host=localhost;dbname=B3W4O1', "root", "mysql");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
?>