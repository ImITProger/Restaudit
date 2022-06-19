<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/TitleLogo.png" type="image/png">
    <title>Restaudit</title>
</head>
<body>
    
    <div class="intro" id="intro">
        <div class="About">
            <h1><img src="image/logo.png" alt="Restaudit"></h1>
            <h3 class="Famaly">Благодарим вас за пройденный опрос, будем ждать вас снова!</h3>
        </div>
    </div>
    <?php
	$filename = 'main.txt';
	$fp = fopen($filename, 'a');
	if (isset($_POST["sohr"]))
	{
		$familiya = $_POST["familiya"];
		$imya = $_POST["imya"];
		$work = $_POST["work"];
		$Whatjob = $_POST["Whatjob"];
		$number = $_POST["number"];
		$money = $_POST["money"];
		$allattime = $_POST["allattime"];
		$shtraf = $_POST["shtraf"];
		$predloj = $_POST["predloj"];
		$newjob = $_POST["newjob"];
		fwrite($fp, '1.Фамилия: ' . $familiya . ';' . "\n"
		. '2.Имя: ' . $imya . ';' . "\n" . '3.Нравится ли вам работать в компании?: ' . $work . ';' . "\n" . '4.Нравится ли вам задачи которыми приходиться заниматься?: ' . $Whatjob . ';' . "\n" . '5.Оцените степень вашей загруженности по 5 бальной шкале, где 5 высокая степень загруженности.: ' . $number . ';' . "\n" . '6.Устраивает ли вас уровень заработной платы?: ' . $money . ';' . "\n" . '7.Готовы ли вы к сменному графику работы?: ' . $allattime . ';' . "\n" . '8.Считаете ли вы справедливым наказания и штрафы за невыполнение(не полное выполнение) трудовых обязанностей?: ' . $shtraf . ';' . "\n" . '9.Ваши предложения по улучшению деятельности компании?: ' . $predloj . ';' . "\n" . '10.Есть ли у вас интерес к выполнению новых задач?: ' . $newjob . ';' . "\n" 
		);
		fwrite($fp, '------------------------------------------------------------------------------------------------------------------------------------------------------' . "\n");
		header('Location: /intro.php');
	}
	fclose($fp);
	
?>    

    <script src="js/three.min.js"></script>
    <script src="js/vanta.birds.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>