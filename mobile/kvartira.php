<?php include_once 'count/start_counter.php'; ?>
<html>
<head>
<title>Тихая гавань час ночь сутки Пермь</title>
<link href="css/style.css" rel="stylesheet" />
<meta name="viewport" content="width=480">
<meta charset="utf-8">
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
﻿<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
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
  "reservation/create_reservation.php",
  {
    username: date1,
    telephone: date2,
    dateinsert: date3,
    time: date4
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
<div class="logo_holder">Тихая Гавань час ночь сутки Пермь</div>
<a href="tel:89124848844"><div class="telephone_holder"></div></a>
</div>
<div class="order_holder">
	<div class="order_area">
		<div class="button" style="color: white;">
			<a style="color: white; text-decoration: none;" href="tel:89124848844">ПОЗВОНИТЬ</a>
		</div>
		<div class="button button2" id="reservation_widget_activate">ЗАБРОНИРОВАТЬ</div>
	</div>
	</div>
</div>

<section>
<br>
<br>
<br>
<br/>

<h2 style="text-align: center;">
	<span style="text-align: center;">Сеть гостевых квартир «ТИХАЯ ГАВАНЬ» | час ночь сутки пермь | 250 | 1000 | 1500 руб.|- <br/>берег для отдыха и…встреч.</span>
	<hr>
<span>Фишка «Тихой Гавани» - тематические квартиры и номера: КАРМЕН, ПАРИЖ, тихая гавань, Клеопатра, МОНРО, Гейша, хуторок, DONNA, Ягуар, MoDaMo….
</span>
</h2>

<div class="section_numera" style="margin-top: -80px;">
<div class="numer" style="display:block;width:100%">
<table cellpadding="0" cellspacing="0">
<tbody>
	<tr>
		<td>
			<div>
				<div class="sticker">ТАНГО час | сутки | 250 | 1500 руб|
				</div>
				<div class="sticker">
					(Компрос 30)
				</div>
				<img src="images/rooms/kv/1_1.jpg"><br/>
			</div>
		</td>
	</tr>

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">М О Н Р О час | сутки | 250 | 1500 руб|
				</div>
				<img src="images/rooms/kv/3.jpg"><br/>
			</div>
		</td>
	</tr>


	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">хуторок час | сутки | 250 | 1500 руб|<br/> 					
				</div>
				<div class="sticker">
					(у Драмтеатра)
				</div>
				<img src="images/rooms/kv/2.jpg"><br/>
			</div>
		</td>
	</tr>	

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">тихая гавань  час | сутки | 250 | 1500 | 
				</div>
				<img src="images/rooms/kv/13.jpg"><br/>
			</div>
		</td>
	</tr>	

		<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">ПАРИЖ  час | сутки | 250 | 1500 руб|  
				</div>
				<div class="sticker">
					(За ТЦ Алмаз)
				</div>
				<img src="images/rooms/kv/3_1.jpg"><br/>
			</div>
		</td>
	</tr>

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">Т Е Х А S  час | сутки | 250 | 1500 руб|
				</div>
				<div class="sticker">
					(за АВТОвокзалом)
				</div>
				<img src="images/rooms/kv/texas/14.jpg"><br/>
			</div>
		</td>
	</tr>

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">MoDaMo час | сутки | 250 | 1500 руб|  
				</div>
				<div class="sticker">
					(за ТЦ Алмаз)
				</div>
				<img src="images/rooms/kv/uAD6NvpL_-Y.jpg"><br/>
			</div>
		</td>
	</tr>

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">Париж час | сутки | 250 | 1500 руб|<br/> 
					<font style="padding-left: 98px;">.</font>
				</div>
				<img src="images/rooms/kv/2m.jpg"><br/>
			</div>
		</td>
	</tr>	

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">Лав стори час | сутки | 250 | 1500 руб|<br/> 
					<font style="padding-left: 98px;">.</font>
				</div>
				<img src="images/rooms/lovestories/3.jpg"><br/>
			</div>
		</td>
	</tr>	

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">2кв. Ла праванс час | сутки | 1500|<br/> 					
				</div>
				<div class="sticker">
					(Компрос 36)
				</div>
				<img src="images/rooms/kv/3m.jpg"><br/>
			</div>
		</td>
	</tr>

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">монте РОЗА час | сутки | 250 | 1500 руб|<br/> 
					<font style="padding-left: 98px;">.</font>
				</div>
				<img src="images/rooms/kv/roze.jpg"><br/>
			</div>
		</td>
	</tr>

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">студия Гейша час | сутки | 250 | 1500 руб|<br/> 
					<font style="padding-left: 98px;">.</font>
				</div>
				<img src="images/rooms/kv/1m.jpg"><br/>
			</div>
		</td>
	</tr>

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">Студия | VIOLETTA | час | сутки | 250 | 1500 руб|<br/></div>
				<div class="sticker">
					(Екатерининская 122)
				</div>
				<img src="images/rooms/kv/35543.jpg"><br/>
			</div>
		</td>
	</tr>				

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">Студия | e V a | час | сутки | 250 | 1500 руб|<br/> 					
				</div>
				<div class="sticker">
					(Екатерининская 122)
				</div>
				<img src="images/rooms/kv/4Home.jpg"><br/>
			</div>
		</td>
	</tr>		

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">тет-А-тет... час | сутки | 250 | 1500 руб|<br/> </div>

				<div class="sticker">
					г.Пермь ул Екатерининская 122
				</div>
				<img src="images/rooms/tetatet/1.jpg"><br/>
			</div>
		</td>
	</tr>				

	<tr>
		<td>
			<div style="margin-top: -50px;">
				<div class="sticker">Мерелин... час | сутки | 250 | 1500 руб|<br/> </div>

				<div class="sticker">
					г.Пермь ул Екатерининская 122
				</div>
				<img src="images/rooms/merelin/5.jpg"><br/>
			</div>
		</td>
	</tr>				
</tbody>
</table>
<h2 style="text-align: center;">Уютные квартиры в центре перми : большые кровати, плазменный телевизор, фальш-камин, WI-FI, TV 18+, ванна на две персоны,
 бокалы и сервировка стола, жидкое мыло<br/>
<span style="color: #8A0808;">
	<img src="http://тихая-гавань-час-ночь-сутки-пермь.рф/upload/images/monro.png" style="width: 64px; height: 64px;">
		ДОБРО ПОЖАЛОВАТЬ ДОМОЙ 
</span>
 </h2>
	</div>
</div>
</section>

<footer>
<p>Пермь, ул. Екатерининская, 122 (за ТЦ "Алмаз")<br/> моб.: 
	<span style=" font-size: 37px;"><a href="tel:89824995959" style="color: #8A0808;">+7 (982) 499-59-59</a></span>
</p>
</footer><div class="layer_hidden"></div>
<div class="menu_hidden">
	<ul>
		<li><a href="index.php"><img src="images/home.png">Квартиры / Номера / Цены</a></li>
		<li><a href="reservation.php"><img src="images/calendar.png">Забронировать</a></li>
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
