setInterval('showClock1()', 1000);
function showClock1() {
var DWs = new Array('Sun.','Mon.','Tue.','Wed.','Thu.','Fri.','Sat.');
var Now = new Date();
var YY = Now.getYear();
if (YY < 2000) { YY += 1900; }
var MM = set0(Now.getMonth() + 1);
var DD = set0(Now.getDate());
var DW = DWs[Now.getDay()];
var hh = set0(Now.getHours());
var mm = set0(Now.getMinutes());
var ss = set0(Now.getSeconds());
var RTime1 = '' + YY + '.' + MM + '.' + DD + '(' + DW + ')' + hh + ':' + mm + ':' + ss + '';
document.getElementById("Clock1").innerHTML = RTime1;
}

function set0(num) {
var ret;
if (num < 10) { ret = "0" + num; }
else { ret = num; }
return ret;
}
