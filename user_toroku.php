<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー登録</title>
  <link rel="stylesheet" href="css/toroku.css">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="user_list.php">サイト一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="user_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <div id="a"><p>ユーザー名：</p><input type="text" name="name"></div>
     <div id="a"><p>ユーザーID：</p><input type="text" name="lid"></div>
     <div id="a"><p>ユーザーPW：</p><input type="text" name="lpw"></div>
     <div id="a"><p>管理者ステータス：</p><input type="checkbox" name="kanri_flg" value="スーパー管理者"></div>
     <div id="a"><p>退社・入社：</p><input type="radio" name="life_flg" value="入社"></div>
     <input id="b" type="submit" value="登録">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
