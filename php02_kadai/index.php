<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
            display: flex;
            justify-content: space-around;
        }
        .legend {
            text-align: center;
            font-size: 35px;
            color: sienna;
        }
        .form {
            margin: 0 auto;
            padding: 10px;
            line-height: 3;
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .form-title {
            color: sienna;
            font-size: 18px;
        }
        .form-content {
            width: 400px;
            height: 30px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .button {
            display: flex;
            justify-content: space-around;
        }
        .submit {
            color: sienna;
            width: 300px;
            height: 60px;
            margin: 30px 10px;
            padding: auto;
            background-color: powderblue;
            font-size: 1.8rem;
            font-weight: 600;
            text-align: center;
            line-height: 60px;
            text-decoration-line: none;
        }
        .reset {
            color: sienna;
            width: 300px;
            height: 60px;
            margin: 30px 10px;
            padding: auto;
            background-color: powderblue;
            font-size: 1.8rem;
            font-weight: 600;
            text-align: center;
            line-height: 60px;
            text-decoration-line: none;
        }

    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">書籍情報の一覧をみる</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

<form method="post" action="insert.php">
<legend class="legend">ブックマークアプリ</legend>
<table class="form">
    <tr>
        <dl>
            <td>
                <dt class="form-title"><label for="title">書籍名：</label></dt>
            </td>
            <td>
                <dd><input type="text" name="title" id="title" class="form-content"></dd>
            </td>
        </dl>
    </tr>
    <tr>
        <dl>
            <td>
            <dt class="form-title"><label for="url">書籍URL：</label></dt>
                </td>
            <td>
                <dd><input type="text" name="url" id="url" class="form-content"></dd>
            </td>
        </dl>
    </tr>
    <tr>
        <dl>
            <td>
                <dt class="form-title"><label for="comment">書籍コメント：</label></dt>
            </td>
            <td>
                <dd><Textarea name="comment" id="comment" class="form-content"></textArea></dd>
            </td>
        </dl>
    </tr>
</table>
<table class="button">
        <tr>
            <td><input class="submit" type="submit" value="登録する"></input></td>
            <td><input class="reset" type="reset" value="リセット"></input></td>
        </tr>
    </table>
</form>
    <!-- Main[End] -->
</body>
</html>
