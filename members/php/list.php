<?php
// config.php　の読み込み
require('config.php');

// データベースへ接続
$pdo = new PDO($dsn, $username, $password);

$sql = "SELECT * FROM messages ORDER BY 'id' DESC";
$stmt = $pdo->query($sql);

// var_dump($res);
// if( $res ) {
//     $message_array = $res->fetch_all(MYSQLI_ASSOC);
// }

// $mysqli->close();

// データベース　接続確認
// try {
//     /// DB接続を試みる
//     $db  = new PDO($dsn, $username, $password);
//     $msg = "MySQL への接続確認が取れました。";
//   } catch (PDOException $e) {
//     $isConnect = false;
//     $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
//   }

//   echo $dsn;
//   echo $username;
//   echo $password;
//   echo $msg;
?>


<!doctype html>
<html lang="ja">
  <head>

    <title>記事一覧</title>
  </head>
  <body>

    <h1>記事一覧</h1>


    <table>
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">content</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scope="col">edit</th>
            <th scope="col">delite</th>
          </tr>
        </thead>
        <tbody>
            <?php
                foreach ($stmt as $row) {
                    ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['content']; ?></td>
                    <td><?php echo $row['created']; ?></td>
                    <td><?php echo $row['updated']; ?></td>
                    <td><a href="edit.php?message_id=<?php echo $row['id']; ?>"><span>編集</span></a></td>
                    <td>
                      <form method="POST" action="delete.php?message_id=<?php echo $row['id']; ?>">
                        <button type="submit">削除</button>
                      </form>
                    </td>
                </tr>
            <?php
                }
            ?>

        </tbody>
      
      </table>
    <a href="/php/create.php">新規登録</a>



  </body>
</html>