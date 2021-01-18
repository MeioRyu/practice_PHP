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




echo "for"."\n";

for ($i=0; $i < count($nameList); $i++) { 
    echo "UserId:".$nameList[$i]["id"]." ";
    echo "UserName:".$nameList[$i]["name"]." ";

    $name_id = $nameList[$i]["id"];
    $count2 = 0;

    for ($j=0; $j < count($mailList); $j++) {

        $mail_id = $mailList[$j]["id"];
        
        if ($name_id == $mail_id) {

            echo "mail".$count2.":".$mailList[$j]["mail"]." ";        
        }
        $count2  ++;
    }
    
    echo "\n";
}


echo "foreach"."\n";

foreach ($nameList as $name) { 
    echo "UserId:".$name["id"]." ";
    echo "UserName:".$name["name"]." ";

    foreach ($mailList as $mail) {
        $count = 1;
        if ($mail["id"] == $name["id"]) {
            echo "mail".$count.":".$mail["mail"]." ";
            // print_r($value["mail"]);
            
        }
        $count = $count + 1;
    }
    
    echo "\n";
}

echo "while"."\n";

$count1 = 0;

while ($count1 < count($nameList)) { 

    echo "UserId:".$nameList[$count1]["id"]." ";
    echo "UserName:".$nameList[$count1]["name"]." ";
    
    $name_id = $nameList[$count1]["id"];
    
    $count1 ++;
    
    $count2 = 0;
    
    while ($count2 < count($mailList)) {
        
        $mail_id = $mailList[$count2]["id"];
    
        if ($name_id == $mail_id) {
            echo "mail".$count.":".$mailList[$count2]["mail"]." ";
            
            // var_dump($mail_id);
            
        }
        $count2 ++;
    }
    
    echo "\n";
    }

?>
