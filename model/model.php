<?php

try{
        $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $_bdd = new PDO('mysql:host=localhost; 
                dbname=top_ten','root','', 
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $_pdo_options));
        
                 $_response = $_bdd->query(
                    'SELECT * FROM `lang` WHERE 1 ORDER BY rang ASC LIMIT 10'
                );
                       
                       

        while($_tableau = $_response->fetch()){
         
           
           #  on fait un test sur la bdd avant de l'afficher
            print "<pre>";
            print "<table>";
            print("<tr><th>".$_tableau['rang']."</th>"."<th>".$_tableau['language']."</th>"."<th>".$_tableau['description']."</th>"."<th>".$_tableau['utilisation_principale']."</th>"."</tr>");
            print "</table>";
            print "</pre>"; 
           
    ;
        }
        
        $_response->closeCursor(); //ici se termine l'appelle par la méthode fetch()

     }

     catch(Exception $e){
        die("Error Data base de votre base ".$e->getMessage());
         //en cas d'érreur on affiche un message
}

?>