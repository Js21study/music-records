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


      <main class="container bg-light p-5 mt-2">
        <h2>Записатися</h2>
        <br>

        <form>
          <label class="label form-label" for="name">Ім'я</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Ваше ім'я"><br>

          <label class="label form-label" for="email">Email</label>
          <input type="email"  class="form-control"id="email" name="email" placeholder="Ваш email"><br>

          <label class="label form-label" for="telephone">Телефон</label>
          <input type="tel"  class="form-control"id="telephone" name="telephone" placeholder="Ваш телефон"><br>

          <label class="label form-label" for="message">Повідомлення</label>
          <textarea  class="form-control" id="message" name="message" placeholder="Ваше повідомлення"></textarea>
          <div id="messageErrorUser"></div>
          <!-- Кнопка должна быть button, иначе она будет перезагружать страницу -->
          <button type="button" class="btn btn-warning mt-2" id="send">Надіслати</button>
        </form>
      </main>











  <hr>









<!-- footer -->

<?php
require('footer.php');
?>

    <script>
$("#send").on("click", function () { // Отслеживаем нажатие на кнопку
  let name = $("#name").val(); // Принимаем все данные и записываем в переменные
  let email = $("#email").val();
  let telephone = $("#telephone").val();
  let message = $("#message").val();

  $.ajax({
    url: 'ajax/ask.php',
    type: 'POST',
    cache: false,
    data: {'name' : name, 'email' : email, 'telephone' : telephone, 'message' : message},
    dataType: 'html',
    success: function(data) {
      if(data === "Done") {
        $("#send").text("Усе готово!");
        $("#messageErrorUser").hide();
        $("#name").val("");
        $("#email").val("");
        $("#telephone").val("");
        $("#message").val("");
      } else {
        $("#messageErrorUser").show();
        $("#messageErrorUser").text(data);
      }

    }


  });
});
</script>
</body>
</html>
