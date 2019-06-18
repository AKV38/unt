<html>
<head>
    <title>Регистрация</title>
</head>
<body>
<form action="work2.php" method="post">
<h1 align="centre">Reg<?php echo htmlspecialchars($_POST['Reg']); ?></h1>
<p>Здравствуйте, введите ваши данные для регистрации</p>

    <p>Name: <input type="text" name="name" /></p>
    <p>Email: <input type="email" name="email" /></p>
    <p>Password: <input type="password" name="password" /></p>
    <p><input type="submit" /></p>
</form>
</body>
</html>