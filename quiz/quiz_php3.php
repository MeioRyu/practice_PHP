<?php
//配列
$nameList = array(
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
    ),
    array(
        'id'=>4,
        'name'=>'d'
    )
);
$mailList = array(
    array(
        'mail_id'=>1,
        'id'=>3,
        'mail'=> 'c1@mail.com'
    ),
    array(
        'mail_id'=>2,
        'id'=>1,
        'mail'=>'a1@mail.com'
    ),
    array(
        'mail_id'=>3,
        'id'=>4,
        'mail'=> 'd1@mail.com'
    ),
    array(
        'mail_id'=>4,
        'id'=>2,
        'mail'=> 'b1@mail.com'
    ),
    array(
        'mail_id'=>5,
        'id'=>1,
        'mail'=> 'a2@mail.com'
    ),
    array(
        'mail_id'=>6,
        'id'=>2,
        'mail'=> 'b2@mail.com'
    ),
    array(
        'mail_id'=>7,
        'id'=>3,
        'mail'=> 'c2@mail.com'
    ),
    array(
        'mail_id'=>8,
        'id'=>4,
        'mail'=> 'd2@mail.com'
    ),
);

//①$nameList[?][id] まずはこれを回して出す
//②$$nameList[?][id]=$mailList[?][id] の時　$mailList[?][id]　も続けて表示する

echo "for"."\n";



for ($i = 0 ; $i < count($nameList); $i++){
    
    $name_id = $nameList[$i]["id"];
    
    // echo "ID:".$nameList[$i]["id"]." ";
    // echo "名前:".$nameList[$i]["name"]." ";
  
    foreach ($mailList as $a){
        
        $mail_id = $a["id"];
        $name_mail = null;
        $b = 0;
        if($name_id == $mail_id){
            
            $name_mail[$b] =$a["mail"];
            $b ++;
        }
     var_dump($name_mail);
    }

    echo "\n";
}





?>
