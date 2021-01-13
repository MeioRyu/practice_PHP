<!doctype html>
<html lang="ja">
  <head>
    <title>新規登録画面</title>
  </head>
  <body>
    <h1>新規登録画面</h1>

    <form method="POST" action="/list.php" >
        <div>
          <label for="exampleFormControlInput1">title</label>
          <input type="title" name="title" id="exampleFormControlInput1" placeholder="titleを入力してください。" value="<?php echo $title;?>">
        </div>
          <div>{{ $message }}</div>

        <div>
            <label for="exampleFormControlInput1">content</label>
            <input type="content" name="content" id="exampleFormControlInput1" placeholder="本文を入力してください。" value="{{ old('content') }}">
        </div>
          <div>{{ $message }}</div>
        @enderror
        <button type="submit"><span>登録</span></button>
        <a href="/list.php"><span>戻る</span></a>
        
        
      </form>



  </body>
</html>

