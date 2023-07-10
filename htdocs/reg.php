<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">     
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация в системе</title>
	<link rel="stylesheet" media = "screen" href="css/style.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">
  <div class="mx-auto bg-light rounded-5" style="width: 400px; height: 500px; border: 3px solid grey; margin-top: 200px">
    <div class="text-center mt-5 fs-2">Регистрация</div>
    <form action = "danie.php" method="post" class = "mt-5">

      <input type="email" class="form-control mx-auto fs-4" aria-describedby="emailHelp" name = "login"placeholder="Логин" style="width:300px; border:1px solid black;" >
      
      <input type="password" class="form-control mx-auto fs-4 mt-4" aria-describedby="emailHelp" name = "password" placeholder="Пароль" style="width:300px; border:1px solid black;" >
      <div class = "text-center mt-4">
        <button type = "submit" class="btn btn-warning fs-3 rounded-pill mt-3">Зарегистрироваться</button>
      </div>
    </form>
  </div>
</body>
</html>