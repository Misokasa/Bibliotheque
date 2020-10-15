<html>

	<head> 
    
        <title> Mon PHP </title>  
        
	</head>


	<body>
    
        <h1> Bonjour </h1>
        <?php                    // synthaxe d'ouverture du code PHP
        $a=3;                    //variable commence par $
        $b=4;
        echo "<h1>$a x $b = ".$a*$b."</h1>";      // affichera 3 x 4 = 12
        echo "<h1>$a x \"$b\" = ".$a*$b."</h1>";  // je veux que les guillemets apparaissent : je positionne un anti slash devant

        $megane = "Bienvenue Mégane";  
        
        echo $megane;                           // echo permet d'afficher la variable $Megane

        echo '<br>';
        
        for($i=0;$i<3;$i++){                    //boucle incrémentation qui affichera 0 1 2
            echo $i."<br/>";
        }
        $i=0;
            while($i<3){
                echo $i."<br/>";
                $i++;
            }
        
        
        $prenom = "Megane";
        $nom = "Chalumeau";
        $age = '25';
    
        echo "Je m'appelle $prenom et j'ai $age ans <br>";
        echo "Je m'appelle {$prenom} et j'ai {$age} ans <br>";
        echo 'Je m\'appelle $prenom et j\'ai $age ans <br>';
    
        $prez = "Je suis $prenom $nom, j'ai $age ans <br>";
        $prez2 = "Je suis {$prenom} {$nom}, j'ai {$age} ans <br>";
        $prez3 = 'Je suis $prenom $nom, j\'ai $age ans';
    
        echo $prez;
        echo $prez2;
        echo $prez3;

        ?> 
        
	</body>

</html>