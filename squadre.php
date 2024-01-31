<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data dinamica in  Php - By Targetweb</title>
</head>

<body>



<?php
//è associativo non numerico
$numerico = array('Elemento 1', 'Elemento 2', 'Elemento 3'); //puoi accedere [1,1]
$associativo = array('chiave1' => 'Valore 1', 'chiave2' => 'Valore 2', 'chiave3' => 'Valore 3');

$squadrepokemon = 
    array('ash'=>array('charizard','pikachu','pidgeot','lapras','greninja','serperior'),
    'misty'=>array('staryu','goldeen','gyarados','starmie','togetic','seaking'),
    'brock'=>array('bonsly','onix','golem','kabutops','sudowoodo','omastar'),
'lance'=>array('dragonite','dragonite','dragonite','gyarados','aerodactyl','charizard',));

  
$allenatori = array_keys($squadrepokemon); 
  //estrai i nomi degli allenatori in particolare l'array con i nomi di tuttl iallenatori è sempre un array
 
  
//iteri ovviamnete la lunghezza dell'array allenatore!
 //estrai l'array degli allenatori in php con array_keys
  for($i=0;$i<count($allenatori);$i++){
    $allenatore=$allenatori[$i]; //poi assegni  ciascun allenatore iesimo alla vaiabile allenatore ed iteri ciascuno di essi
    $pokemon=$squadrepokemon[$allenatore];//assegni alla variabile pokemon l'array squadre con indice allenatore,cioe definisco l'arra pokemon di ciascun allenatore
    echo "<h1>".($allenatore) ."</h1>"; //qua stampo ogni allenatore
  
    //il singolo allenatore
for($j=0;$j<count($pokemon);$j++){
    echo "<li>". ($pokemon[$j]) ."</li>";
}
   
    
  }
  print_r( $squadrepokemon['ash'][1]) //puoi accedere a associativo solo cosi

  
?> 


</body>

</html>