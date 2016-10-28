<html>
<head>
<title>Тихая гавань час ночь сутки Пермь</title>
<link href="css/style.css" rel="stylesheet" />
<meta name="viewport" content="width=480">
<meta charset="utf-8">
﻿<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "2768356", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2768356;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
<script>
$('document').ready(function(){
	$flague=0;
	$('.menu_button').click(function(){
		if($flague==0){
			$('.menu_hidden').css('left','0');
			$('.layer_hidden').css('display','block');
			$flague=1;
		}else{
			$('.menu_hidden').css('left','-80%');
			$('.layer_hidden').css('display','none');
			$flague=0;
		}
	});
	$('.layer_hidden').click(function(){
		$('.menu_hidden').css('left','-80%');
		$('.layer_hidden').css('display','none');
		$flague=0;
	});
	$flague2=0;
	$('#callback').click(function(){
		if($flague2==0){
			$('.callback_hidden').css('top','60px');
			$flague2=1;
		}else{
			$('.callback_hidden').css('top','-100%');
			$flague2=0;
		}
	});
	$('#callback_close').click(function(){
		$('.callback_hidden').css('top','-100%');
		$flague2=0;
	});

	$flague3=0;
	$('#reservation_widget_activate').click(function(){
		if($flague3==0){
			$('.reservation_widget').css('top','60px');
			$flague3=1;
		}else{
			$('.reservation_widget').css('top','-100%');
			$flague3=0;
		}
	});
	$('#reservation_widget_activate2').click(function(){
		if($flague3==0){
			$('.reservation_widget').css('top','60px');
			$flague3=1;
		}
	});
	$('#reservation_widget_activate3').click(function(){
		if($flague3==0){
			$('.reservation_widget').css('top','60px');
			$flague3=1;
		}
	});
	$('#reservation_close').click(function(){
		$('.reservation_widget').css('top','-100%');
		$flague3=0;
	});
});
function mreserve(mrescolor){
	if($flague3==0){
			$('.reservation_widget').css('top','60px');
			$('#clrbx').html(mrescolor);
			$flague3=1;
		}else{
			$('.reservation_widget').css('top','-100%');
			$flague3=0;
	};
};
</script>

<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>


<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>
<script>

function getreservation(e){
$all_true=0;
$('#reservation_name').each(function() {
if(!$(this).val().length) {
$(this).css('border', '1px solid red');
$all_true=0;
}else{
$(this).css('border', '1px solid green');
$('#reservation_telephone').each(function() {
if(!$(this).val().length) {
$(this).css('border', '1px solid red');
$all_true=0;
}else{
$(this).css('border', '1px solid green');
$all_true=1;
}
});
}
});

if($all_true==1){
var date1=$('#reservation_name').val();
var date2=$('#reservation_telephone').val();
var date3=$('#reservation_date').val();
var date4=$('#reservation_time').val();
var date5=$('#clrbx').html();
$.post(
  "/reservation/create_reservation.php",
  {
    username: date1,
    telephone: date2,
    dateinsert: date3,
    timeinsert: date4
  },
  onAjaxSuccess
);
function onAjaxSuccess(data)
{
  $('.reservation_widget').html('<center><img src="images/success-mobile.png" style="margin:14px auto;magin-top:21px;width:35%;"><p>Вы успешно забронировали номер наши менеджеры свяжутся с вами в ближайшее время!</p></center>');
}
}
}

</script>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter36529805 = new Ya.Metrika({ id:36529805, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/36529805" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>
<body>
<div class="menu_layer"></div>
<div class="menu_holder">
<div class="menu_button"></div>
<div class="logo_holder">Тихая Гавань час сутки Пермь</div>
<a href="tel:89124848844"><div class="telephone_holder"></div></a>
</div>
<div class="order_holder">
	<div class="order_area">
		<div class="button" style="color: white;">
			<a style="color: white; text-decoration: none;" href="tel:89124848844">ПОЗВОНИТЬ</a>
		</div>
		<div class="button button2" id="reservation_widget_activate">ЗАБРОНИРОВАТЬ</div>
	</div>

	<div class="order_area">
		<div class="button" style="color: white;">
			<a style="color: white; text-decoration: none; font-weight: bold;" href="kvartira.php">К В А Р Т И Р Ы</a>
		</div>
		
		<div class="button button2">
			<a style="color: white; text-decoration: none; font-weight: bold;" href="rooms.php">Н О М Е Р А</a>
		</div>
	</div>
</div>

<section>

</section>
<br/><br/>
<br>
<br>
<br>
<br>
<br>
<footer>
<p>Пермь, ул. Екатерининская, 122 (за ТЦ "Алмаз")<br/> моб.: 
	<span style=" font-size: 37px;"><a href="tel:89124848844" style="color: #8A0808;">+7 (982) 499-59-59</a></span>
</p>
</footer><div class="layer_hidden"></div>
<div class="menu_hidden">
	<ul>
		<li><a href="index.php"><img src="images/home.png">Главная</a></li>
		<li><a href="reservation.php"><img src="images/calendar.png">Бронирование номеров</a></li>
		<li><a href="price.php"><img src="images/price.png">Прайс лист</a></li>
		<li><a href="contacts.php"><img src="images/contacts.png">Контакты</a></li>
</div>
<div class="callback_hidden">
	<div class="form_hidden">
	
            <input type="text" placeholder="Имя" name="username" id="username">
            <input type="text" placeholder="Телефон" name="telephone" id="telephone">
		<input type="submit" value="Заказать звонок">
	
	</div>
	<div id="callback_close"></div>
</div>


<div class="reservation_widget">
<h2>Бронирование номера</h2>
<div>
<label><p>Ваше имя:</p><input type="text" name="name" id="reservation_name"></label>
<label><p>Номер телефона:</p><input type="text" name="telephone" id="reservation_telephone"></label>
<label><p>Дата прибытия:</p><input type="text" name="date" id="reservation_date"></label>
</label>
<div style="display: none" id="clrbx"></div>
<button onClick="getreservation();" value="" id="create_reservation_button">Забронировать</button>

<div id="reservation_close"></div>
</div>
</div>


</body>
</html>
