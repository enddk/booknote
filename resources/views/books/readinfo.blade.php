<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
  <h1 class="text-center">読書情報を写すページです</h1>
  <p class="text-center border">モーダル付きで各情報を入力します</p>
  <div>
    <div class="row justify-content-center">
      <p class="col-3">
        <img src="{{$data->image}}" alt="">
      </p>
    </div>
    <form action="editreading" method="post">
      <p>
        <h3>目的を入力</h3>
      </p>
      <p>
        <h3>要約を入力</h3>
      </p>
      <p>
        <h3>感想を入力</h3>
      </p>
      <p>
        <h3>to doを入力</h3>
      </p>
      <p>
        <h3>メモを入力</h3>
      </p>
      <button class="btn btn-primary">編集</button>
    </form>
  </div>
  <p>
    <a href="search">本追加・検索ページ</a>
  </p>
  <p>
    <a href="profile">ユーザー情報ページ</a>
  </p>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>