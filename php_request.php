<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>get (url)</li>
        <li>post</li>
    </ul>
    <!-- <a href="php_respond.php?name=supon&age=22&job=programmer">to server</a> -->
    <form action="php_respond.php" method="post">
        <input type="text" name="name" value="su pon" />
        <input type="text" name="age" value="22">
        <input type="text" name="job" value="web developer">
        <input type="submit" value="submit">
    </form>
</body>
</html>