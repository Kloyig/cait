<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ООО ЗАВОД "МИИКС"</title>
	<link rel="stylesheet"media = "screen" href="css/style.css"/>
	<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<?php require 'shapka.php'; ?>
</head>
<body>
	<div class="info-box">
		<div class="container">					
			<div class="title-top"> Каталог продукции</div>
		</div>
	</div>
<div class="container">
	<div class="head col-12 d-flex bg-warning">                    
		<div class="col-3">Наименование изделия</div>
        <div class="col-2">Шифр</div>
        <div class="col-3">Дата выпуска</div>                                     
        <div class="col-2">Кол-во</div>  
        <div class="col-2">Покупка</div>                        
    </div>
    <div class="table col-12 d-flex">
        <div class="col-3">Авиагоризонт</div>
        <div class="col-2">АГБ-3К серия 2</div>
        <div class="col-3">-</div>
        <div class="col-2">3 </div>
        <div class="col-2"><button onclick="goRocket()">Купить</button></div>
    </div>
    <div class="table col-12 d-flex">
        <div class="col-3">Автомат давления</div>
        <div class="col-2">АД-50</div>
        <div class="col-3">21.06.2022</div>
        <div class="col-2">6 </div>
        <div class="col-2"><button onclick="goRocket()">Купить</button></div>
    </div>
    <div class="table col-12 d-flex">
        <div class="col-3">Бак расходный</div>
        <div class="col-2">8АТ.6101.000</div>
        <div class="col-3">28.03.2023</div>
        <div class="col-2">4 </div>
        <div class="col-2"><button onclick="goRocket()">Купить</button></div>
    </div>
    <div class="table col-12 d-flex">
        <div class="col-3">Блок речевых сообщений</div>
        <div class="col-2">РИ-65-10</div>
        <div class="col-3">-</div>
        <div class="col-2">2 </div>
        <div class="col-2"><button onclick="goRocket()">Купить</button></div>
    </div>
    <div class="table col-12 d-flex">
        <div class="col-3">Генератор</div>
        <div class="col-2">СГС-40ПУ</div>
        <div class="col-3">29.08.2022</div>
        <div class="col-2">2 </div>
        <div class="col-2"><button onclick="goRocket()">Купить</button></div>
    </div>
    <div class="table col-12 d-flex">
        <div class="col-3">Датчик</div>
        <div class="col-2">ДС-11Г</div>
        <div class="col-3">23.10.2015</div>
        <div class="col-2">5</div>
        <div class="col-2"><button onclick="goRocket()">Купить</button></div>
    </div>
    <div class="table col-12 d-flex">
        <div class="col-3">Датчик приборной скорости</div>
        <div class="col-2">ДАС</div>
        <div class="col-3">22.02.2023</div>
        <div class="col-2">6</div>
        <div class="col-2"><button onclick="goRocket()">Купить</button></div>
    </div>
    <div class="table col-12 d-flex">
        <div class="col-3">Подшипник</div>
        <div class="col-2">970206К1</div>
        <div class="col-3">13.12.2013</div>
        <div class="col-2">10 </div>
        <div class="col-2"><button onclick="goRocket()">Купить</button></div>
    </div>
<script>
function goRocket() {
    alert('Товар успешно куплен');
}
</script>
</div>
</body>
</html>