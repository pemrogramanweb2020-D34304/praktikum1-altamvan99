<?php   


$al=5;
	for($a=1; $a<=$al; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$al; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
    }
    
echo "<br>";

$star=5;
for($a=1; $a<=$star; $a++){
for($b=1; $b<=$a; $b++){
    echo "&nbsp";
}
for($c=$star; $c>=$a; $c-=1){
    echo "*";
}
echo "<br>";
}

echo "<br>";

$star=5;
for($a=1; $a<=$star; $a++){
for($b=1; $b<=$a; $b++){
    echo "&nbsp";
}
for($c=$star; $c>=$a; $c-=1){
    echo "$c";
}

echo "<br>";
}
echo "<br>";

for($a=1; $a<=5; $a++){
    for($b=5; $b>=$a; $b--){
        echo "&nbsp ";
    }
        for($c=1; $c<$a; $c++){
        echo $c;
    }
for($d=$a; $d>=1; $d--){
    echo $d;
}
echo "<br>";
}


   




?>