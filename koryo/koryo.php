<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="sitek-bk.css">
    <title>TwitterSaR Ver3 | MoritoWorks</title>
<script type="text/javascript" src="prototype.js"></script>
  <script type="text/javascript">
      new Ajax.PeriodicalUpdater(
        'head',
        'head.php',
        {
          method: 'get',
          frequency: 20,
        }
      )
      new Ajax.PeriodicalUpdater(
        'itema',
        'id3.html',
        {
          method: 'get',
          frequency: 20,
        }
      )
      new Ajax.PeriodicalUpdater(
        'itemb',
        'id4.html',
        {
          method: 'get',
          frequency: 19,
        }
      )
      new Ajax.PeriodicalUpdater(
        'itemc',
        'id5.html',
        {
          method: 'get',
          frequency: 22,
        }
      )
      new Ajax.PeriodicalUpdater(
        'itemd',
        'id6.html',
        {
          method: 'get',
          frequency: 21,
        }
      )
      new Ajax.PeriodicalUpdater(
        'iteme',
        'id7.html',
        {
          method: 'get',
          frequency: 20,
        }
      )
      new Ajax.PeriodicalUpdater(
        'itemf',
        'id8.html',
        {
          method: 'get',
          frequency: 23,
        }
      )
      new Ajax.PeriodicalUpdater(
        'photoa',
        'phid1.html',
        {
          method: 'get',
          frequency: 22,
        }
      )
      new Ajax.PeriodicalUpdater(
        'photob',
        'phid2.html',
        {
          method: 'get',
          frequency: 23,
        }
      )
    </script>


  </head>
  <body bgcolor="#ddd">
	<div class="timecontainer">
	<div id="head"></div>
	<div id="time">
<p id="Clock1" style="display: inline"></p>
<script type="text/javascript">
setInterval('showClock1()',1000);
function showClock1() {
var DWs = new Array('日','月','火','水','木','金','土');
var Now = new Date();
var YY = Now.getYear();
if (YY < 2000) { YY += 1900; }
var MM = set0( Now.getMonth() + 1 );
var DD = set0( Now.getDate() );
var DW = DWs[ Now.getDay() ];
var hh = set0( Now.getHours() );
var mm = set0( Now.getMinutes() );
var ss = set0( Now.getSeconds() );
var RTime1 = ' ' + YY + '/' + MM + '/' + DD + ' ' + '(' + DW + ')' + '<br>' + ' ' + hh + ':' + mm + ':' + ss + ' ' ;
document.getElementById("Clock1").innerHTML = RTime1;
}
function set0(num) {
var ret;
if( num < 10 ) { ret = "0" + num; }
else { ret = num; }
return ret;
}
</script>

</div>
	</div>

        <div class="container">
         <div id="photoa"></div>
	 <div class="back"></div>
         <div id="photob"></div>
	</div>

         <div class="containerb">
         <div id="itema"></div>
         <div id="itemb"></div>
         <div id="itemc"></div>
         <div id="itemd"></div>
         <div id="iteme"></div>
         <div id="itemf"></div>
	</div>

  </body>
</html>
