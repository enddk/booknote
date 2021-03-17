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
  <h1 class="text-center">本情報を写すページです</h1>
  <p class="text-center border">vueでコメント・いいねを作ります</p>

  @foreach($items as $item)
      <div class="col-12 row justify-content-center">
        <div class="damy border" style="width:40%;">
          <img src="{{$item->image}}" alt="" class="w-100 h-100">
        </div>
      </div>
      <div class="col-12 border">
        <h2 class="text-center my-3">{{$item->title}}</h2>
        <form action="edit" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$item->id}}">
          <textarea name="record" cols="30" rows="10" class="form-control">{{$item->record}}</textarea>
          <p class="my-2" style="display:flex; justify-content:space-between;">
            <a class="btn btn-danger" type="submit" href="delete?id={{$item->id}}">
              削除
            </a>
            <button class="btn btn-primary" type="submit">
              編集
            </button>
          </p>
        </form>
      </div>
    @endforeach

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