
<footer class="container contacts">

  <div class="row d-flex">
    <div class="col-md-6 mb-3 ms-5">

  <h3>Адреса</h3><div data-field="address"><a class="btn btn-warning" href="https://www.google.com/maps/dir//%D0%A1%D1%82%D1%83%D0%B4%D0%B8%D1%8F+%D0%B7%D0%B2%D1%83%D0%BA%D0%BE%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B8+%D0%AD%D0%A2%D0%90%D0%96%D0%98+RECORDS/data=!4m8!4m7!1m0!1m5!1m1!1s0x40d4cdee6de1f427:0x1a55adeae195e860!2m2!1d30.343215999999998!2d50.479132199999995" target="_blank" data-tracking-element-type="6" jslog="56039; track:impression,click">Прокласти маршрут</a>
    <address itemprop="address"><div>вулиця Бахмацька, 20</div>
      <div>Київ</div>
      <div>Украина</div>
      <div>03164</div>
    </address>


  </div>

</div>

<div class="col-md-4  mb-3  ">
  <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2538.9576458503807!2d30.343215999999995!3d50.4791322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cdee6de1f427%3A0x1a55adeae195e860!2z0KHRgtGD0LTQuNGPINC30LLRg9C60L7Qt9Cw0L_QuNGB0Lgg0K3QotCQ0JbQmCBSRUNPUkRT!5e0!3m2!1sru!2sua!4v1662474393668!5m2!1sru!2sua" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>

<hr>

  <div class="row">
    <div class="col-md-2 mb-3 ms-md-5">
      <h5>Розклад</h5>
      <table class="table table-light table-striped">
        <tbody >
        <tr>
          <th >пн:</th>
          <td ><span >08:00–22:00</span></td>
        </tr>
        <tr>
          <th >вт:</th>
          <td><span >08:00–22:00</span></td>
        </tr>
        <tr>
          <th >ср:</th>
          <td ><span >08:00–22:00</span>
          </td>
        </tr>
        <tr>
          <th >чт:</th>
          <td ><span >08:00–22:00</span></td>
        </tr>
        <tr>
          <th >пт:</th>
          <td ><span >08:00–22:00</span></td>
        </tr>
        <tr>
          <th >сб:</th>
          <td ><span >08:00–22:00</span></td>
        </tr>
        <tr>
          <th >нд:</th>
          <td ><span >08:00–22:00</span></td>
        </tr>
      </tbody>
    </table>
    </div>



    <div class="col-md-6 offset-md-2 mb-3 me-5">
      <form>
        <h5><a class="text-dark" href="tel:+380-95-467-1487"><i class="fa-solid fa-phone"></i></a>+380-95-467-1487</h5>
        <p>У є Вас питання? Заповніть форму і чекайте на дзвінок в найближчий час!</p>
        <div class="d-flex flex-column flex-lg-row gap-2">
          <label for="username" class="visually-hidden">Ваше ім'я</label>
          <input id="username" name="username" type="text" class="form-control" placeholder="Ваше ім'я">
          <label for="usertelephone" class="visually-hidden">Ваш телефон</label>
          <input id="usertelephone" name="usertelephone" type="tel" class="form-control" placeholder="Ваш телефон">
          <button id="call" class="btn btn-warning" type="button">Передзвоніть мені</button>
        </div>
        <div id="messageErrorUser2"></div>
      </form>
    </div>
  </div>









  <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 mt-4 border-top">
    <p>© 2022 Усі права захищені!</p>
    <a class="skarga" href="https://support.google.com/business/answer/7388122">Поскаржитися</a>
    <ul class="list-unstyled d-flex social">

      <li class="ms-3"><a class="link-dark" href="https://instagram.com/spikeo_______o?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram"></i></a></li>
      <li class="ms-3"><a class="link-dark" href="https://t.me/SpikeMaksim"><i class="fa-brands fa-telegram"></i></a></li>

    </ul>
  </div>
</footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js">
      </script>
      <script src="slick.min.js"></script>
    <script src="index.js"></script>
    <script src="music.js"></script>
    <script>

$("#call").on("click", function () { // Отслеживаем нажатие на кнопку
	let username = $("#username").val(); // Принимаем все данные и записываем в переменные

	let usertelephone = $("#usertelephone").val();


	$.ajax({
		url: '/ajax/call.php',
		type: 'POST',
		cache: false,
		data: {'username' : username, 'usertelephone' : usertelephone},
		dataType: 'html',
		success: function(data) {
			if(data === "Done") {
				$("#call").text("Усе готово!");
				$("#messageErrorUser2").hide();
				$("#username").val("");
				$("#usertelephone").val("");

			} else {
				$("#messageErrorUser2").show();
				$("#messageErrorUser2").text(data);
				$("#call").text("Передзвоніть мені");
			}

		}


	});
});

    </script>
