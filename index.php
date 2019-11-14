<!DOCTYPE html>

<html>
	<head>
		<title>Licznik odliczający czas</title>
	</head>
		<form action ="example1.php" method="post">
		
		<body>
		<h1><label for ="name">Licznik odliczający czas</label><br></h1>
		Wybór skórki:
			<select name ="skin_id">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			</select></body><br/><br>
			
	
<head>
<script type="text/javascript">
function changeImage(img) {
	var oDiv = document.getElementById('layer');
	oDiv.style.backgroundImage = "url('"+img+"')";
}
</script>
<style type="text/css">
#layer {border: 0px solid #000; width: 750px; height: 250px; background: url(skin4.png) no-repeat;}
</style>
</head>
Podgląd wyglądu skórki:
<form name="skin_id" id="skin_id" action="#" class="form">
<select onchange="changeImage(this.value)" style="width:110px;">
<option value ="skin1.png" selected="selected">skin1</option>
<option value ="skin2.png">skin2</option>
<option value ="skin3.png">skin3</option>
<option value ="skin4.png" selected="selected">skin4</option>
<option value ="skin5.png">skin5</option>
<option value ="skin6.png">skin6</option>
<option value ="skin7.png" selected="selected">skin7</option>
<option value ="skin8.png">skin8</option>
<option value ="skin9.png">skin9</option>
</select>
<div id="layer"></div><br>

			
			<label for ="name">Nazwa:</label>
			<input type = "text" name ="name" id="name" /><br/><br>
			
			

<html lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
<style type="text/css">

.custom-date-style {
	background-color: red !important;
}

.input{	
}
.input-wide{
	width: 500px;
}
</style>
</head>
<body>
	Odliczaj czas do: <input type="text" value="" name="time_end" id="datetimepicker"/><br><br>
</body>
<script src="./jquery.js"></script>
<script src="build/jquery.datetimepicker.full.js"></script>
<script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('pl');

$('#datetimepicker_format').datetimepicker({value:'2015-04-15 05:03:00', format: $("#datetimepicker_format_value").val()});
console.log($('#datetimepicker_format').datetimepicker('getValue'));

$("#datetimepicker_format_change").on("click", function(e){
	$("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
});
$("#datetimepicker_format_locale").on("change", function(e){
	$.datetimepicker.setLocale($(e.currentTarget).val());
});

$('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986-01-08','1986-01-09','1986-01-10'],
startDate:	'today'
});
$('#datetimepicker').datetimepicker({value:'2015-04-15 05:03:00',step:10});

$('.some_class').datetimepicker();



$('#datetimepicker10').datetimepicker({
	step:5,
	inline:true
});
$('#datetimepicker_mask').datetimepicker({
	mask:'9999-19-39 29:59:59'
});

$('#datetimepicker1').datetimepicker({
	datepicker:false,
	format:'H:i:s',
	step:5
});
$('#datetimepicker2').datetimepicker({
	yearOffset:222,
	lang:'ch',
	timepicker:false,
	format:'d-m-Y',
	formatDate:'YYYY-MM-DD',
	minDate:'-1970-01-02', // yesterday is minimum date
	maxDate:'+1970-01-02' // and tommorow is maximum date calendar
});
$('#datetimepicker3').datetimepicker({
	inline:true
});


$('#datetimepicker_dark').datetimepicker({theme:'dark'})


</script>
</html>
						
			<!-- <label for ="time_zone">Time zone</label>
			<input type = "text" name ="time_zone" id="time_zone" /><br/><br>  -->
			Czcionka:
			<select name ="font_family">
			<option value="ArialUnicode">ArialUnicode</option>
			<option value="Arial_Black">Arial_Black</option>
			<option value="ComicSansMS">ComicSansMS</option>
			<option value="CourierNew">CourierNew</option>
			<option value="CurlzMT">CurlzMT</option>
			<option value="AvenirNext">AvenirNext</option>
			<option value="Lucida-grande">Lucida-grande</option>
			<option value="MyriadApple">MyriadApple</option>
			<option value="Myriad-Pro-Bold">Myriad-Pro-Bold</option>
			<option value="MyriadPro-Semibold">MyriadPro-Semibold</option>
			<option value="MyriadPro-Regular">MyriadPro-Regular</option>
			<option value="Roboto-Black">Roboto-Black</option>
			<option value="Roboto-Bold">Roboto-Bold</option>
			<option value="Roboto-Medium">Roboto-Medium</option>
			<option value="Roboto-Regular">Roboto-Regular</option>
			<option value="Roboto-Light">Roboto-Light</option>
			<option value="Roboto-Thin">Roboto-Thin</option>
			<option value="RobotoCondensed-Bold">RobotoCondensed-Bold</option>
			<option value="RobotoCondensed-Regular">RobotoCondensed-Regular</option>
			<option value="RobotoCondensed-Light">RobotoCondensed-Light</option>
			<option value="SpicyRice">SpicyRice</option>
			<option value="BebasNeue">BebasNeue</option>
			<option value="OpenSans-ExtraBold">OpenSans-ExtraBold</option>
			<option value="OpenSans-Bold">OpenSans-Bold</option>
			<option value="OpenSans-Semibold">OpenSans-Semibold</option>
			<option value="OpenSans-Regular">OpenSans-Regular</option>
			<option value="OpenSans-Light">OpenSans-Light</option>
			<option value="bitrix_captcha">bitrix_captcha</option>
			<option value="cac_champagne-webfont">cac_champagne-webfont</option>
			<option value="ClaireHandBold">ClaireHandBold</option>
			<option value="DroidSerifBold">DroidSerifBold</option>
			<option value="DroidSerif-Regular">DroidSerif-Regular</option>
			<option value="FreeSans">FreeSans</option>
			<option value="DejaVuSansCondensed">DejaVuSansCondensed</option>
			<option value="PT_Sans-Web-Regular">PT_Sans-Web-Regular</option>
			<option value="PT_Sans-Web-Bold">PT_Sans-Web-Bold</option>
			<option value="Helvetica">Helvetica</option>
			<option value="HelveticaNw">HelveticaNw</option>
			<option value="HelveticaNarrowBold">HelveticaNarrowBold</option>
			<option value="Georgia">Georgia</option>
			<option value="Gotham_Bold_Regular">Gotham_Bold_Regular</option>
			<option value="gotham-medium">gotham-medium</option>
			<option value="Impact">Impact</option>
			<option value="LucidaConsole">LucidaConsole</option>
			<option value="PalatinoLinotype">PalatinoLinotype</option>
			<option value="PalatinoLinotypeBold">PalatinoLinotypeBold</option>
			<option value="Tahoma">Tahoma</option>
			<option value="TahomaBold">TahomaBold</option>
			<option value="TimesNewRoman">TimesNewRoman</option>
			<option value="TrebuchetMS">TrebuchetMS</option>
			<option value="Tungsten-Medium">Tungsten-Medium</option>
			<option value="Tungsten-Semibold">Tungsten-Semibold</option>
			<option value="Verdana">Verdana</option>
			<option value="MicrosoftSansSerif">MicrosoftSansSerif</option>
			<option value="PTSerif">PTSerif</option>
			<option value="RADIOLAND">RADIOLAND</option>
			<option value="BALLSONTHERAMPAGE">BALLSONTHERAMPAGE</option>
			<option value="HIGHSPEED">HIGHSPEED</option>
			<option value="Codystar-Regular">Codystar-Regular</option>
			<option value="digital-7">digital-7</option>
			<option value="Crysta">Crysta</option>
			<option value="ASTRONAU">ASTRONAU</option>
			<option value="progbot">progbot</option>
			<option value="Depressionist_3_Revisited_2010">Depressionist_3_Revisited_2010</option>
			<option value="csnpwdtNFI">csnpwdtNFI</option>
			<option value="metallord">metallord</option>
			<option value="fightingspiritTBS">fightingspiritTBS</option>
			<option value="shloprg">shloprg</option>
			<option value="Almostliketheblues">Almostliketheblues</option>
			<option value="FunnyKid">FunnyKid</option>
			<option value="Walkwithmenow">Walkwithmenow</option>
			<option value="OleoScript-Regular">OleoScript-Regular</option>
			<option value="KaushanScript">KaushanScript</option>
			<option value="MarketingScript">MarketingScript</option>
			<option value="SpacedockStencil">SpacedockStencil</option>
			<option value="Arial">Arial</option>
			</select><br/><br>
			
			
			<label for ="color_primary">Kolor podstawowy:</label>
			<input type = "color" name ="color_primary" id="color_primary" style="width:180px; margin-right:15px" value="" /><br/><br>
			
			<label for ="color_text">Kolor tekstu:</label>
			<input type = "color" name ="color_text" id="color_text" style="width:180px; margin-right:15px" value="" /><br/><br>
			
			<label for ="color_bg">Kolor tła:</label>
			<input type = "color" name ="color_bg" id="color_bg" style="width:180px; margin-right:15px" value="" /><br/><br>
			
			
			<!--<label for ="lang_local">Lang local</label>
			<input type = "text" name ="lang_local" id="lang_local" /><br/><br> -->
			
			
			
		Rozmiar licznika:
			<select name ="font_size">
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			<option value="34">34</option>
			<option value="35">35</option>
			<option value="36">36</option>
			<option value="37">37</option>
			<option value="38">38</option>
			<option value="39">39</option>
			<option value="40">40</option>
			<option value="41">41</option>
			<option value="42">42</option>
			<option value="43">43</option>
			<option value="44">44</option>
			<option value="45">45</option>
			<option value="46">46</option>
			<option value="47">47</option>
			<option value="48">48</option>
			<option value="49">49</option>
			<option value="50">50</option>
			<option value="51">51</option>
			<option value="52">52</option>
			<option value="53">53</option>
			<option value="54">54</option>
			<option value="55">55</option>
			<option value="56">56</option>
			<option value="57">57</option>
			<option value="58">58</option>
			<option value="59">59</option>
			<option value="60">60</option>
			<option value="61">61</option>
			<option value="62">62</option>
			<option value="63">63</option>
			<option value="64">64</option>
			<option value="65">65</option>
			<option value="66">66</option>
			<option value="67">67</option>
			<option value="68">68</option>
			<option value="69">69</option>
			<option value="70">70</option>
			<option value="71">71</option>
			<option value="72">72</option>
			<option value="73">73</option>
			</select><br/><br>
			
			
			<body>
			Pokazuj dni:
			<select name ="day">
			<option value="0">0</option>
			<option value="1">1</option>
			
			</select></body><br/><br>
			
			<!-- <label for ="lang">Lang</label>
			<input type = "text" name ="lang" id="lang" /><br/><br> -->
			
			<input type="submit" name="submit" value="Wygeneruj licznik!">
		</form>
	</body>
</html>