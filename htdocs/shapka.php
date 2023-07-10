<header class="container-fluid p-3 bg-dark text-white position-fixed" >
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex">
          <img class="repair" src="img/repair.png">
          <use xlink:href="#bootstrap"></use></svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-white"><div>Главная</div></a></li>
          <li><a href="tovar.php" class="nav-link px-2 text-white"><div>Каталог</div></a></li>
          <li><a href="#" class="nav-link px-2 text-white"><div>О нас</div></a></li>
        </ul>
        <div class="text-end">
        <?php
          session_start();
            if(isset($_SESSION['name']))
            {
            echo '<div class = "d-flex flex-wrap align-items-center">
            <div class="mx-3 text-light">'.$_SESSION["name"].'</div>
            <a class="mx-3 px-4 btn btn-warning" style = "transition: 0.5s;" href="../out.php">Выйти</a>
            </div>';
            }
            else
            {
            echo '<button type="button" class="btn bg-white me-2">
            <div><a class="reg" href="vxod.php">Вход</a></div></button>
            <button type="button" class="btn btn-warning">
            <div><a class="reg" href="reg.php">Регистрация</a></div></button>';
            }
            ?>
        </div>
      </div>
    </div>
  </header>