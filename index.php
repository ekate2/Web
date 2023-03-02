<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="stile.css">-->
    <title>Lesson№1</title>
</head>
<body>
    <header>
        <h2> Разработка веб-приложений </h2>
        <h2>
 <?php
        print "Hello world!<br>";
        $test = $_POST['test'];
        print "hi".$test;
         
        $mysqli = mysqli_connect("localhost:8889", "root", "root", "users");
        
        $sql = "INSERT INTO users (login, password) VALUES ('h', '222')";
        $result = $mysqli->query($sql);
        if ($result == false) {
            print("Произошла ошибка при выполнении запроса");}
?> 
    
        </h2>
    </header>
    <nav class="top-border">
        <ul>
            <li>
                <a href="index.html">Главная</a>
            </li>
            <li>
                <a href="reg.html">Регистраиция</a>
            </li>
            <li>
                <a href="auth.html">Авторизация</a>
            </li>
            <li>
                <a href="hidden_page.html">Скрытая страница</a>
            </li>
        </ul>
    </nav>
    <main>
        <h1>Задание 1</h1>
        <form action="" method="post">
        <input type="text" name="test"><br>
        <input type="submit" value="send">

        </form>
    </main>

    <footer class="top-border">
        <p>Сокирко Екатерина группа-2011</p>
    </footer>
</body>
</html>
