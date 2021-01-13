<?php
// config.php　の読み込み
require('config.php');

// 編集画面項目の取得
if( !empty($_GET['message_id']) ) {

    $message_id = (int)htmlspecialchars($_GET['message_id'], ENT_QUOTES);

    // データベースへ接続
    $pdo = new PDO($dsn, $username, $password);

    $sql = "SELECT * FROM messages WHERE id = $message_id";

    $res = $pdo->query($sql);


    if( $res ) {

        $stmt = $res->fetch(PDO::FETCH_ASSOC);    
    } else {
    
        // データが読み込めなかったら一覧に戻る
        header("Location: ./list.php");
    }
    
    $pdo = null;
}

// 変更内容を登録する
if (!empty($_POST['view_name'])) {
    $sql = "UPDATE message set view_name = '$message_data[view_name]', message= '$message_data[message]' WHERE id =  $message_id";
    $res = $mysqli->query($sql);
}


?>

<!doctype html>
<html lang="ja">
  <head>
    <title>編集画面</title>
  </head>
  <body>
    <h1>編集画面</h1>
      記事ID：<?php echo $stmt['id']; ?><br>
      作成日：<?php echo $stmt['created']; ?><br>
      更新日：<?php echo $stmt['updated']; ?><br>

    <form method="post" action="/php/edit.php/{{ $post->id }}">
        <div>
          <label for="exampleFormControlInput1">title</label>
          <input type="title" name="title" id="exampleFormControlInput1" placeholder="titleを入力してください。" value="<?php echo $stmt['title']; ?>">
        </div>
        <div>
            <label for="exampleFormControlInput1">content</label>
            <input type="content" name="content" id="exampleFormControlInput1" placeholder="本文を入力してください。" value="<?php echo $stmt['content']; ?>">
        </div>
        <button type="submit" href="list">更新</button>
        <input type="hidden" name="message_id" value="<?php echo $message_data['id']; ?>">
        
      </form>



  </body>
</html>