<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<link rel="icon" href="img/fav.png">
<link rel="stylesheet" href="main.css">
<script src="https://kit.fontawesome.com/fac1863ba2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="slick.css">
  <title>ЭТАЖИ RECORDS</title>
</head>
<body>

  <header>
      <div class="px-3 py-2 text-bg-dark">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
              <img class="logo" src="img/logo.png" alt="logo">
            </a>

            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small nav-a">
              <li>
                <a href="" onclick="return slowScroll('.main-bg')" class="nav-link text-secondary">
                  <i class="fa-solid fa-house-user"></i>
                  Головна
                </a>
              </li>
              <li>
                <a href="" onclick="return slowScroll('.services')" class="nav-link text-white">
                  <i class="fa-solid fa-headphones"></i>
                  Послуги
                </a>
              </li>
              <li>
                <a href="" onclick="return slowScroll('.music-examples')" class="nav-link text-white">
                  <i class="fa-solid fa-music"></i>
                  Музикальні треки
                </a>
              </li>
              <li>
                <a href="" onclick="return slowScroll('.price')" class="nav-link text-white">
                  <i class="fa-sharp fa-solid fa-comments-dollar"></i>
                  Ціни
                </a>
              </li>
              <li>
                <a href="" onclick="return slowScroll('.contacts')" class="nav-link text-white">
                  <i class="fa-solid fa-phone"></i>
                  Контакти
                </a>
              </li>
            </ul>
            <span class="menu" id="show-menu"><i class="fa-solid fa-bars"></i></span>
          </div>
        </div>
      </div>
    </header>







    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" id="hidden-menu">
        <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <span class="close"><i class="fa-solid fa-xmark"></i></span>
        </div>
        <h2>Меню</h2>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="" onclick="return slowScroll('.main-bg')" class="nav-link link-dark" aria-current="page">
              <i class="fa-solid fa-house-user"></i>
              Головна
            </a>
          </li>
          <li>
            <a href="" onclick="return slowScroll('.services')" class="nav-link link-dark">
              <i class="fa-solid fa-headphones"></i>
              Послуги
            </a>
          </li>
          <li>
            <a href="" onclick="return slowScroll('.music-examples')"  class="nav-link link-dark">
              <i class="fa-solid fa-music"></i>
              Музикальні треки
            </a>
          </li>
          <li>
            <a href="" onclick="return slowScroll('.price')" class="nav-link link-dark">
              <i class="fa-sharp fa-solid fa-comments-dollar"></i>
              Ціни
            </a>
          </li>
          <li>
            <a href="" onclick="return slowScroll('.contacts')" class="nav-link link-dark">
              <i class="fa-solid fa-phone"></i>
              Контакти
            </a>
          </li>
        </ul>
        <hr>

      </div>










      <div class="d-flex flex-column flex-shrink-0  aside-men">

          <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item bg-dark">
              <a href="" onclick="return slowScroll('.main-bg')" class="nav-link border-bottom rounded-0 text-secondary">
                <i class="fa-solid fa-house-user"></i>

              </a>
            </li>
            <li class="bg-secondary">
              <a href="" onclick="return slowScroll('.services')" class="nav-link border-bottom rounded-0  text-light ">
                <i class="fa-solid fa-headphones"></i>

              </a>
            </li>
            <li class="bg-secondary">
              <a href="" onclick="return slowScroll('.music-examples')" class="nav-link border-bottom rounded-0  text-light">
                <i class="fa-solid fa-music"></i>

              </a>
            </li>
            <li class="bg-secondary">
              <a href="" onclick="return slowScroll('.price')" class="nav-link border-bottom rounded-0  text-light ">
                <i class="fa-sharp fa-solid fa-comments-dollar"></i>

              </a>
            </li>
            <li class="bg-secondary">
              <a href="" onclick="return slowScroll('.contacts')" class="nav-link text-light">
                <i class="fa-solid fa-phone"></i>

              </a>
            </li>
          </ul>

        </div>







<div class="big-block">

<!-- main -->
    <div class="position-relative overflow-hidden p-3 p-md-5  text-center text-light main-bg" >
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal">ЭТАЖИ RECORDS</h1>
          <p class="lead fw-normal">Твоя студія звукозапису у Києві!</p>
          <a class="btn btn-warning" href="form.php">Записатися</a>
        </div>
      </div>


<!-- services -->



<div class="row  g-4 py-5 m-4 services">
  <div class="col-lg-3 p-2">
      <div class=" d-flex align-items-start">
        <img class="me-2 ms-2" src="img/fav0.png" alt="music">
        <div>
          <h4 class="fw-bold mb-0">Музика на продаж</h4>
          <p>Музика на продаж у всіх стилях</p>
        </div>
      </div>
      <div class=" d-flex align-items-start">
        <img class="me-2 ms-2" src="img/fav1.png" alt="music">
        <div>
          <h4 class="fw-bold mb-0">Запис вокалу</h4>
          <p>Професійний запис вокалу</p>
        </div>
      </div>
      <div class=" d-flex align-items-start">
        <img class="me-2 ms-2" src="img/fav2.png" alt="music">
        <div>
          <h4 class="fw-bold mb-0">Зведення</h4>
          <p>Таймінг, AutoTune, Melodyne</p>
        </div>
      </div>
</div>


<div class="col-lg-3 p-1">
      <div class="d-flex align-items-start">
        <img class="me-2 ms-2 img-services" src="img/fav3.png" alt="music">
        <div>
          <h4 class="fw-bold mb-0">Реп біти на продаж</h4>
          <p>Написання реп бітів у будь-яких стилях.</p>
        </div>
      </div>
      <div class="d-flex align-items-start">
        <img class="me-2 ms-2 img-services" src="img/fav4.png" alt="music">
        <div>
          <h4 class="fw-bold mb-0">Аранжування</h4>
          <p>Написання аранжувань у будь-яких стилях</p>
        </div>
      </div>
      <div class="d-flex align-items-start">
        <img class="me-2 ms-2 img-services" src="img/fav5.png" alt="music">
        <div>
          <h4 class="fw-bold mb-0">Мінуси на продаж</h4>
          <p>Написання мінусів у будь-яких стилях</p>
        </div>
      </div>

</div>


<div class="col-lg-3 p-1">
      <div class="d-flex align-items-start">
        <img class="me-2 ms-2 img-services" src="img/fav6.png" alt="music">
        <div>
          <h4 class="fw-bold mb-0">Анімації</h4>
          <p>Анімації</p>
        </div>
      </div>
      <div class="d-flex align-items-start">
        <img class="me-2 ms-2 img-services" src="img/fav7.png" alt="music">
        <div>
          <h4 class="fw-bold mb-0">Обкладинки до пісень</h4>
          <p>Створення обкладинок</p>
        </div>
      </div>
      <div class="d-flex align-items-start">
        <img class="me-2 ms-2 img-services" src="img/fav8.png" alt="music">
        <div>
          <h4 class="fw-bold mb-0">Написання текстів</h4>
          <p>Написання текстів пісень</p>
        </div>
      </div>

</div>

<div class="col-lg-3 p-1">
      <div class="d-flex align-items-start">
        <img class="me-2 ms-2 img-services" src="img/fav9.png" alt="music">
        <div>
          <h4 class="fw-bold mb-0">Мастеринг</h4>
          <p>Мастеринг</p>
        </div>
      </div>
      <div class="d-flex align-items-start">
        <img class="me-2 ms-2 img-services" src="img/fav10.png" alt="music">
        <div>
          <h4 class="fw-bold mb-0">Дистриб'юція музики</h4>
          <p>Публікація матеріалу.</p>
        </div>
      </div>
      <div class="d-flex align-items-start">
        <img class="me-2 ms-2 img-services" src="img/fav11.png" alt="music">
        <div>
          <h4 class="fw-bold mb-0">Створення аудіо</h4>
          <p>Створення аудіо</p>
        </div>
      </div>

</div>
    </div>




</div>
    <!-- music examples -->
<div class="music-examples">
<h6 class="border-bottom border-top m-5 text-center text-secondary">Треки для продажу. Приймаю індивідуальні замовлення на написання.</h6>
    <div class="container">




    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-1-1.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img src="img/play.png" alt="img" class="rounded-circle border border-white me-3 play" width="32" height="32">
                  </li>
                  <li class="d-flex align-items-start me-3">
                    <!-- <div id="music-1">

                    </div> -->
                                      <audio controls>
                    <source src="myAudio.mp3" type="audio/mpeg">
                    <source src="myAudio.ogg" type="audio/ogg">
                    <p>Ваш браузер не підтримує HTML5 аудіо. Надаємо
                       <a href="myAudio.mp4">посилання на аудіо</a></p>
                  </audio>

                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-2.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img src="img/play.png" alt="img" class="rounded-circle border border-white me-3 play" width="32" height="32">
                  </li>
                  <li class="d-flex align-items-center me-3">
                                    <audio controls>
                  <source src="myAudio.mp3" type="audio/mpeg">
                  <source src="myAudio.ogg" type="audio/ogg">
                  <p>Ваш браузер не підтримує HTML5 аудіо. Надаємо
                     <a href="myAudio.mp4">посилання на аудіо</a></p>
                </audio>

                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-3.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 music">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img src="img/play.png" alt="img" class="rounded-circle border border-white me-3 play" width="32" height="32">
                  </li>
                  <li class="d-flex align-items-center me-3">
                                    <audio controls>
                  <source  src="myAudio.mp3" type="audio/mpeg">
                  <source src="myAudio.ogg" type="audio/ogg">
                  <p>Ваш браузер не підтримує HTML5 аудіо. Надаємо
                     <a href="myAudio.mp4">посилання на аудіо</a></p>
                </audio>

                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

</div>

<div class="container">


<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-4.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="img/play.png" alt="img" class="rounded-circle border border-white me-3 play" width="32" height="32">
              </li>
              <li class="d-flex align-items-center me-3">
                                <audio controls>
              <source src="myAudio.mp3" type="audio/mpeg">
              <source src="myAudio.ogg" type="audio/ogg">
              <p>Ваш браузер не підтримує HTML5 аудіо. Надаємо
                 <a href="myAudio.mp4">посилання на аудіо</a></p>
            </audio>

              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-5.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="img/play.png" alt="img" class="rounded-circle border border-white me-3 play" width="32" height="32">
              </li>
              <li class="d-flex align-items-center me-3">
                                <audio controls>
              <source src="myAudio.mp3" type="audio/mpeg">
              <source src="myAudio.ogg" type="audio/ogg">
              <p>Ваш браузер не підтримує HTML5 аудіо. Надаємо
                 <a href="myAudio.mp4">посилання на аудіо</a></p>
            </audio>

              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-6.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 music">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="img/play.png" alt="img" class="rounded-circle border border-white me-3 play" width="32" height="32">
              </li>
              <li class="d-flex align-items-center me-3">
                                <audio controls>
              <source src="myAudio.mp3" type="audio/mpeg">
              <source src="myAudio.ogg" type="audio/ogg">
              <p>Ваш браузер не підтримує HTML5 аудіо. Надаємо
                 <a href="myAudio.mp4">посилання на аудіо</a></p>
            </audio>

              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

</div>


    <div class="container">


    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-7.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img src="img/play.png" alt="img" class="rounded-circle border border-white me-3 play" width="32" height="32">
                  </li>
                  <li class="d-flex align-items-center me-3">
                                    <audio controls>
                  <source src="myAudio.mp3" type="audio/mpeg">
                  <source src="myAudio.ogg" type="audio/ogg">
                  <p>Ваш браузер не підтримує HTML5 аудіо. Надаємо
                     <a href="myAudio.mp4">посилання на аудіо</a></p>
                </audio>

                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-8.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img src="img/play.png" alt="img" class="rounded-circle border border-white me-3 play" width="32" height="32">
                  </li>
                  <li class="d-flex align-items-center me-3">
                                    <audio controls>
                  <source src="myAudio.mp3" type="audio/mpeg">
                  <source src="myAudio.ogg" type="audio/ogg">
                  <p>Ваш браузер не підтримує HTML5 аудіо. Надаємо
                     <a href="myAudio.mp4">посилання на аудіо</a></p>
                </audio>

                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-9.png');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 music">
                <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img src="img/play.png" alt="img" class="rounded-circle border border-white me-3 play" width="32" height="32">
                  </li>
                  <li class="d-flex align-items-center me-3">
                                    <audio controls>
                  <source src="myAudio.mp3" type="audio/mpeg">
                  <source src="myAudio.ogg" type="audio/ogg">
                  <p>Ваш браузер не підтримує HTML5 аудіо. Надаємо
                     <a href="myAudio.mp4">посилання на аудіо</a></p>
                </audio>

                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-between btn-group">
          <a href="music.php" type="button" class="w-50 btn btn-lg btn-dark">Більше готових треків</a>
          <a href="form-buy.php" type="button" class="w-50 btn btn-lg btn-warning">Купити готовий трек</a>

        </div>

  </div>
</div>
  <hr>
<!-- prices -->
<div class="container price">

        <h1 class="display-4 fw-normal">Ціни</h1>
        <p class="fs-5 text-muted">Якщо у Вас є питання стосовно цін, Ви можете записатися на <mark>безкоштовну</mark> консультацію, і ми обов'язково вирішемо усі питання!</p>


<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">MP3</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$130</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Запис</li>
              <li>Зведення 1 треку </li>
              <li>Доступ до використання усіх інструментів</li>
              <li>Кожна наступна година запису 100$</li>
            </ul>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">2 години запису</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$250</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Запис</li>
              <li>Зведення 2 треків</li>
              <li>Доступ до використання усіх інструментів</li>
              <li>Кожна наступна година запису 70$</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-dark">
          <div class="card-header py-3 text-bg-dark border-dark">
            <h4 class="my-0 fw-normal">3 години запису</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$350</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Запис</li>
              <li>Зведення 3 треків</li>
              <li>Доступ до використання усіх інструментів</li>
              <li>Кожна наступна година запису 50$</li>
            </ul>
          </div>
        </div>
      </div>





    </div>



    <!-- h1 -->

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3 text-bg-dark">
                <h4 class="my-0 fw-normal">MP3</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$130</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Запис</li>
                  <li>Зведення 1 треку </li>
                  <li>Доступ до використання усіх інструментів</li>
                  <li>Кожна наступна година запису 100$</li>
                </ul>

              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3 text-bg-secondary">
                <h4 class="my-0 fw-normal">2 години запису</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$250</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Запис</li>
                  <li>Зведення 2 треків</li>
                  <li>Доступ до використання усіх інструментів</li>
                  <li>Кожна наступна година запису 70$</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-dark">
              <div class="card-header py-3 text-bg-warning border-dark">
                <h4 class="my-0 fw-normal">3 години запису</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$350</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Запис</li>
                  <li>Зведення 3 треків</li>
                  <li>Доступ до використання усіх інструментів</li>
                  <li>Кожна наступна година запису 50$</li>
                </ul>
              </div>
            </div>
          </div>

          <a href="form-buy.php" type="button" class="w-100 btn btn-lg btn-dark">Купити</a>
          </div>
    <!-- HH -->

  </div>
    <hr>


    <section class="gallery">


  <div id="slider">
    <div><img src="img/photo0.png" alt="photo"></div>
    <div><img src="img/photo1.png" alt="photo"></div>

    <div><img src="img/photo3.png" alt="photo"></div>
    <div><img src="img/photo4.png" alt="photo"></div>



  </div>
</section>

<!-- footer -->

<?php
require('footer.php');
?>
</body>
</html>
