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
  <h1 class="text-center">本検索・追加ページです</h1>
  <p class="text-center border">ページネーションを使います</p>
  <a href="signin">ログインページへ</a>
  <a href="home">ホームページへ</a>

  <form action="searchbook" method="post">
    @csrf
    <div class="form-group">
      <input type="text" class="form-control" name="title">
      <button type="submit" class="btn btn-primary">検索</button>
    </div>
  </form>

  @if($jsons == NULL)
    <p>検索値を入力してください</p>
    @else 
      @if(count($jsons['Items']) == 0)
        <p>書籍がありません</p>
      @else
        <div class="row border">
          @for($i = 0;$i < count($jsons['Items']);$i++)
            <div class="damy col-4 border" style="min-height:300px;">
              <img src='{{$jsons["Items"][$i]["Item"]["largeImageUrl"]}}' alt="" class="w-100 h-100">
            </div>
            <div class="col-8 py-3 border">
              <h3>{{$jsons["Items"][$i]["Item"]["title"]}}</h3>
              <p>{{$jsons["Items"][$i]["Item"]["author"]}}</p>
              <p>{{$jsons["Items"][$i]["Item"]["publisherName"]}}</p>
              <a href='{{$jsons["Items"][$i]["Item"]["itemUrl"]}}' target="_blank">商品ページ</a>
              <form action="addbook" method="post">
                @csrf
                <input type="hidden" value='{{$jsons["Items"][$i]["Item"]["title"]}}' name="title">
                <input type="hidden" value='{{$jsons["Items"][$i]["Item"]["author"]}}' name="author">
                <input type="hidden" value='{{$jsons["Items"][$i]["Item"]["largeImageUrl"]}}' name="image">
                <input type="hidden" value="1" name="user_id">
                <button class="btn btn-primary" type="submit">追加</button>
              </form>
            </div>
          @endfor
        </div>
      @endif
    @endif

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>