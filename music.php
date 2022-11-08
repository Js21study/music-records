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
                <a href="index.php" onclick="return slowScroll('.main-bg')" class="nav-link text-secondary">
                  <i class="fa-solid fa-house-user"></i>
                  Головна
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
            <a href="index.php" onclick="return slowScroll('.main-bg')" class="nav-link link-dark" aria-current="page">
              <i class="fa-solid fa-house-user"></i>
              Головна
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










    <!-- music examples -->
<div class="music-examples container">
<h6 class="border-bottom border-top m-5 text-center text-secondary">Треки для продажу. Приймаю індивідуальні замовлення на написання.</h6>

<div id="page">



          <div class="col music-exp mb-3">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-1.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
                <h2 class="pt-2 mt-2 mb-2  display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img src="img/play.png" alt="img" class="rounded-circle border border-white me-3 play" width="32" height="32">
                  </li>
                  <li class="d-flex align-items-start me-3">
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

          <div class="col music-exp mb-3">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-2.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
                <h2 class="pt-2 mt-2 mb-2  display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
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

          <div class="col music-exp mb-3">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-3.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 music">
                <h2 class="pt-2 mt-2 mb-2  display-6 lh-1 fw-bold">Another longer title belongs here</h2>
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



      <div class="col music-exp mb-3">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-4.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
            <h2 class="pt-2 mt-2 mb-2  display-6 lh-1 fw-bold">Short title, long jacket</h2>
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

      <div class="col music-exp mb-3">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-5.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
            <h2 class="pt-2 mt-2 mb-2  display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
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

      <div class="col music-exp mb-3">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-5.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
            <h2 class="pt-2 mt-2 mb-2  display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
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


      <div class="col music-exp mb-3">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-5.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
            <h2 class="pt-2 mt-2 mb-2  display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
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


      <div class="col music-exp mb-3">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-5.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
            <h2 class="pt-2 mt-2 mb-2  display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
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


      <div class="col music-exp mb-3">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-5.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
            <h2 class="pt-2 mt-2 mb-2  display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
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

      <div class="col music-exp mb-3">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-5.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
            <h2 class="pt-2 mt-2 mb-2  display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
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

      

      <div class="col music-exp mb-3">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-6.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 music">
            <h2 class="pt-2 mt-2 mb-2  display-6 lh-1 fw-bold">Another longer title belongs here</h2>
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







          <div class="col music-exp mb-3">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-7.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
                <h2 class="pt-2 mt-2 mb-2 display-6 lh-1 fw-bold">Short title, long jacket</h2>
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


          <div class="col music-exp mb-3">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-8.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1 music">
                <h2 class="pt-2 mt-2 mb-2 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
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

          <div class="col music-exp  mb-3">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-9.png');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 music">
                <h2 class="pt-2 mt-2 mb-2 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
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

          <div class="col music-exp  mb-3">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-1.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 music">
                <h2 class="pt-2 mt-2 mb-2 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
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

          <div class="col music-exp  mb-3">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-2.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 music">
                <h2 class="pt-2 mt-2 mb-2 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
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

          <div class="col music-exp  mb-3">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-3.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 music">
                <h2 class="pt-2 mt-2 mb-2 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
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

          <div class="col music-exp  mb-3">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-4.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 music">
                <h2 class="pt-2 mt-2 mb-2 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
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

          <div class="col music-exp  mb-3">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-music" style="background-image: url('img/mainbg-5.jpg');">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1 music">
                <h2 class="pt-2 mt-2 mb-2 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
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

<nav aria-label=...>
      <ul class=pagination>
        <li class="page-item" id="previous-page"><a class="page-link" href="javascript:void(0)" aria-label=Previous><span aria-hidden=true>&laquo;</span></a></li>
      </ul>
    </nav>

    <div class="d-flex justify-content-between">

      <a href="form-buy.php" type="button" class="w-100 btn btn-lg btn-warning">Купити готовий трек</a>

    </div>
</div>
  <hr>



<!-- primer -->








<!-- primer -->





<!-- footer -->

<?php
require('footer.php');
?>
</body>
</html>
