<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/questions.css">
    <link rel="shortcut icon" href="image/TitleLogo.png" type="image/png">
    <link rel="stylesheet" href="css/btn.css">
    <title>Restaudit</title>
</head>
<body>
    
    <div class="intro" id="intro">
        <div class="About">
            <h1><img src="image/logo.png" alt="Restaudit"></h1>
            <h3 class="Famaly">Иногда самый маленький шаг в правильном направлении в конце-концов становится самым большим шагом в твоей жизни</h3>
            <div class="dws1">
              <a class="butt" id="btnStartToTest">Пройти тест</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="title">Опросник сотрудника Restaudit</div>
        <div class="content">
          <form action="intro.php" method="POST">
            <div class="user-details">
              <div class="input-box">
                <span class="details" id="details1">1.Фамилия</span>
                <input type="text" name="familiya" placeholder="Введите вашу Фамилию" />
                <div class="dws">
                  <a class="butt" id="btnFamily">Потвердить</a>
                </div>
              </div>
              <div class="input-box">
                <span class="details" id="details2">2.Имя</span>
                <input type="text" name="imya" placeholder="Введите ваше Имя" />
                <div class="dws">
                  <a class="butt" id="btnName">Потвердить</a>
                </div>
              </div>
              <div class="input-box">
                <span class="details" id="details3">3.Нравится ли вам работать в компании?</span>
                <input type="text" name="work" placeholder="Введите ваш ответ" />
                <div class="dws">
                  <a class="butt" id="btn3">Потвердить</a>
                </div>
              </div>
              <div class="input-box">
                <span class="details" id="details4">4.Нравится ли вам задачи которыми приходиться заниматься?</span>
                <input type="text" name="Whatjob" placeholder="Введите ваш ответ" />
                <div class="dws">
                  <a class="butt" id="btn4">Потвердить</a>
                </div>
              </div>
              <div class="input-box">
                <span class="details" id="details5">5.Оцените степень вашей загруженности по 5 бальной шкале, где 5 высокая степень загруженности.</span>
                <input type="text" name="number" placeholder="Введите ваш ответ" />
                <div class="dws">
                  <a class="butt" id="btn5">Потвердить</a>
                </div>
              </div>
              <div class="input-box">
                <span class="details" id="details6">6.Устраивает ли вас уровень заработной платы?</span>
                <input type="text" name="money" placeholder="Введите ваш ответ" />
                <div class="dws">
                  <a class="butt" id="btn6">Потвердить</a>
                </div>
              </div>
              <div class="input-box">
                <span class="details" id="details7">7.Готовы ли вы к сменному графику работы?</span>
                <input type="text" name="allattime" placeholder="Введите ваш ответ" />
                <div class="dws">
                  <a class="butt" id="btn7">Потвердить</a>
                </div>
              </div>
              <div class="input-box">
                <span class="details" id="details8">8.Считаете ли вы справедливым наказания и штрафы за невыполнение(не полное выполнение) трудовых обязанностей?</span>
                <input type="text" name="shtraf" placeholder="Введите ваш ответ" />
                <div class="dws">
                  <a class="butt" id="btn8">Потвердить</a>
                </div>
              </div>
              <div class="input-box">
                <span class="details" id="details9">9.Ваши предложения по улучшению деятельности компании?</span>
                <input type="text" name="predloj" placeholder="Введите ваш ответ" />
                <div class="dws">
                  <a class="butt" id="btn9">Потвердить</a>
                </div>
              </div>
            
            <div class="RadioCheck-details">
              <input type="radio" name="RadioCheck" id="dot-1" onclick="EnableDisableTB();">
              <input type="radio" name="RadioCheck" id="dot-2" checked  onclick="EnableDisableTB();"/>
              <span class="RadioCheck-title" id="details10">10.Есть ли у вас интерес к выполнению новых задач?</span>
              <br><br>
              <div class="category">
                <label for="dot-1">
                  <span class="dot one"></span>
                  <span class="RadioCheck">Да</span>
                </label>
                <label for="dot-2">
                  <span class="dot two"></span>
                  <span class="RadioCheck">Нет</span>
                </label>
              </div>
              <br><br>
              <div class="input-box1">
                <input type="text" disabled = "disabled" name="newjob" id = "otherLang"/>
              </div>
              </div>
            </div>
            <div class="dws2">
              <input type="submit" class="butt1" id="btn10" name="sohr" value="ОТПРАВИТЬ"></input>
            </div>
          </form>
        </div>
      </div>
      

    <script src="js/three.min.js"></script>
    <script src="js/vanta.birds.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/scroll.js"></script>
    <script type="text/javascript">
      function EnableDisableTB(){
        var others = document.getElementById("dot-1");
        var otherlan = document.getElementById("otherLang");

        otherlan.disabled = others.checked? false:true;
        otherlan.value="";
        if(!otherlan.disabled){
          otherlan.focus();
        }
      }
    </script>
</body>
</html>