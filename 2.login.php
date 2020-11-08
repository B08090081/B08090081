<html>
    <head>
        <meta charset="utf-8" />
        <title>登入範例</title>
    </head>
    <body>
        <form method=get action="login.php">
            帳號：<input type=text name="id"><br />
            密碼：<input type=password name="pwd"><p></p>
            <input type=submit value="登入"> <input type=reset value="清除">
            
        </form>
    </body>
</html>
//GET 透過網址傳値，也就是當網友送出表單後，會把網友填的資料透過網址傳遞到 PHP 取得資料的程式
//echo 代表的是輸出的意思， $_GET 必須使用大寫來表示
