
<html>
<head>
    <title>Регистрация</title>
</head>
<body>
<p>Здравствуйте, <?php echo htmlspecialchars($_POST['name']); ?>.</p>
<p>Вы успешно зарегистрировались на нашем сайте.</p>
<p>Зайдите на вашу почту <?php echo (int)$_POST['email']; ?>, и подтвердите регистрацию.</p>
</body>
</html>