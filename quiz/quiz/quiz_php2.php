<?php
$list = array(
	array(
		'id'=>1,
		'name'=>'a',
		'mail'=> array('a1@mail.com','a2@mail.com')
	),
	array(
		'id'=>2,
		'name'=>'b',
		'mail'=> array('b1@mail.com','b2@mail.com')
	),
	array(
		'id'=>3,
		'name'=>'c',
		'mail'=> array('c1@mail.com','c2@mail.com')
	),
	array(
		'id'=>4,
		'name'=>'d',
		'mail'=> array('d1@mail.com','d2@mail.com')
	)
);

echo "for"."\n";
for ($i = 0 ; $i < count($list); $i++){
 
    echo "ID:".$list[$i]["id"]." ";
    echo "名前:".$list[$i]["name"]." ";
    echo "メール0:".$list[$i]["mail"][0]."";
    echo "メール1:".$list[$i]["mail"][1]."";
    
    // for ($j = 0 ; $j < count($list[$i]["mail"]); $j++){
        
    //     $k = $j + 1;
    //     echo "メール".$k.":".$list[$i]["mail"][$j]." ";
    // }
    
    echo "\n";
}

echo "foreach"."\n";
foreach ($list as $l){

    
    echo "ID:".$l["id"]." ";
    echo "名前:".$l["name"]."";
    echo "メール0:".$l["mail"][0]."";
    echo "メール1:".$l["mail"][1]."";
    // for ($m = 0 ; $m < count($l["mail"]); $m++){
        
    //     $n = $m + 1;
    //     echo "メール".$n.":".$l["mail"][$m]." ";
    // }
    
    echo "\n";
}

echo "while"."\n";;
$i = 0;

while($i < count($list)) {
        
    echo"ID:".$list[$i]["id"]." ";
    echo"名前:".$list[$i]["name"]." ";
    echo"mail0:".$list[$i]["mail"][0]." ";
    echo"mail1:".$list[$i]["mail"][1]." ";
    
    // for ($j = 0 ; $j < count($list[$i]["mail"]); $j++){
        
    //     $k = $j + 1;
    //     echo "メール".$k.":".$list[$i]["mail"][$j]." ";
    // }
    
    echo "\n";
    $i++;
}

?>
