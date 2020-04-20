var Temp2;
var timerID = null;
var timerRunning = false;
function arry() {
this.length = 12;
this[0] = 31;
this[1] = 28;
this[2] = 31;
this[3] = 30;
this[4] = 31;
this[5] = 30;
this[6] = 31;
this[7] = 31;
this[8] = 30;
this[9] = 31;
this[10] = 30;
this[11] = 31;
}
var date = new arry();

function stopclock() {
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}

function startclock() {
stopclock();
showtime();
}

function showtime() {
now = new Date();
var CurMonth = now.getMonth();
var CurDate = now.getDate();
var CurYear = now.getFullYear();
now = null;
if (26 < CurDate) {
CurDate -= date[CurMonth]; CurMonth++;
}
if (2 < CurMonth) {
CurMonth -= 12; CurYear++;
}

var Yearleft = 2020 - CurYear;
var Monthleft = 2 - CurMonth;
var Dateleft = 26 - CurDate;

document.dateform.a.value = Yearleft;
document.dateform.b.value = Monthleft;
document.dateform.c.value = Dateleft;

timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
