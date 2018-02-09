<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <title>Exercice 1</title>
    <link rel="stylesheet" href="./assets/css/styles.css">

</head>
<body>
    <ul>
        <?php
            $date="1997-11-11";
            $date=date("d-m-Y",strtotime($date));
            $tab = array('Prenom'=>'Joffrey','Nom'=>'Lhermitte','Adresse'=>'28 place saint marc','Code postal'=>76000,'Ville'=>'Rouen',
                   'Email'=>'16978@csmrouen.net','Telephone'=>"0621423250",'Date de naissance'=>$date);


            foreach ($tab as $index => $value){
                echo "<li>".$index.": ".$value."</li>";
            }
        ?>
    </ul>
</body>
</html>
