<?php
$list = array(
	array(
		'id'=>1,
		'name'=>'a'
	),
	array(
		'id'=>2,
		'name'=>'b'
	),
	array(
		'id'=>3,
		'name'=>'c'
	)
);

echo "for"."\n";
for ($i = 0 ; $i < count($list); $i++){
 
  echo "ID:".$list[$i]["id"]." ";
  echo "名前".$list[$i]["name"]."\n";

}

echo "foreach"."\n";
foreach ($list as $l){
    echo "ID:".$l["id"]." ";
    echo "名前:".$l["name"]."\n";

}

echo "while"."\n";
$i = 0;

while($i < count($list)) {
        
    echo"ID:".$list[$i]["id"]." ";
    echo"名前:".$list[$i]["name"]."\n";
    $i++;
}

?>
