<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>書籍登録</title>
<link rel="stylesheet" href="css/index2.css">
</head>
<body>
<h2>書籍新規登録</h2>
<hr>

<button class="btn">新規登録</button>

<table class="book-table">
    <tr>
    <td>
      <img src="https://via.placeholder.com/100x120.png?text=Book" alt="本の画像" class="image-display">
    </td>
    <td>
      <label for="title" class="field-label">タイトル：</label>
      <div class="input-button-wrapper">
      <input type="text" id="title" value="吾輩は猫である" class="field-input">

     <!--<label for="author" class="field-label">著作者：</label>
      <input type="text" id="author" value="夏目漱石" class="field-input">

      <label for="year" class="field-label">出版年：</label>
      <input type="number" id="year" value="1905" class="field-input">-->

      <div class="button-area">
        <button class="btn">編集</button>
        <button class="btn">削除</button>
        </div>
      </div>
    </td>
  </tr>
</table>

</body>
</html>