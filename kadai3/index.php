<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title class="head">データ登録</title>
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> 先生のコード-->
<link rel="stylesheet" href="index.css">
  <style>div{padding: 10px;font-size:30px;}</style> 
</head>
<body>
  


<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">Watch List</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- pfotos -->
<div class="photos"> 
  <img id="photo1"  style="display: none;" src="https://is5-ssl.mzstatic.com/image/thumb/Music/fc/78/d1/mzi.yhxxrfvc.jpg/268x0w.jpg" alt="">
  <img id="photo2"  style="display: none;" src="http://www.flonthego.com/wp-content/uploads/2014/06/PulpFiction.jpg" alt="">
  <img id="photo3"  style="display: none;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRSaKZBPkBcMCN4DWym8qANosp9kXhJ4emHT6K-0xadGdiSxCARQ" alt=""> 
</div>
<!-- photos end -->

<!-- Main[Start] -->
<!-- ここでinsert.phpにデータを送っている -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>見たい映画</legend>
    <!-- カテゴリ start -->
     <label>カテゴリー:<select name="category" id="" class="category">
            <option value="1">Love Story</option>
            <option value="2">Comedy</option>
            <option value="3">Action</option>
            <option value="4">Horror</option>
            <option value="5">Kids</option>
            <option value="6">Else</option>
      </select><label><br>
     <!-- カテゴリ end -->

     <label>作品名：<input id="name" type="text" name="name" placeholder="作品名を入力" required></label><br>
     <label>主演：<input id="actor" type="text" name="actor" placeholder="作品名を入力"required></label><br>
     <label>監督：<input id="director" type="text" name="director" placeholder="作品名を入力"required></label><br>
     
      <!-- 気になる度 start -->
     <label>気になる度(1~5)：<input type="range" min="1" max="5" value="" name="interest" class="input-range" /></label><br>
     <!-- 気になる度 end -->

     <input id="submit" type="submit" value="登録">
     <input type="reset" value="クリア">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="index.js"></script>
</body>
</html>
