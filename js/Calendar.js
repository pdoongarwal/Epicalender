/*******************
UTILITY FUNCTIONS
********************/
// day of week of month's first day
function getFirstDay(theYear, theMonth){
var firstDate = new Date(theYear,theMonth,1)
return firstDate.getDay()
}
// number of days in the month
function getMonthLen(theYear, theMonth) {
var oneDay = 1000 * 60 * 60 * 24
var thisMonth = new Date(theYear, theMonth, 1)
var nextMonth = new Date(theYear, theMonth + 1, 1)
var len = Math.ceil((nextMonth.getTime() -
thisMonth.getTime())/oneDay)
return len
}
// create array of English month names
var theMonths = ["January","February","March","April","May","June","July","August",
"September","October","November","December"]
// return IE4+ or W3C DOM reference for an ID
function getObject(obj) {
var theObj
if (document.all) {
if (typeof obj == "string") {
return document.all(obj)
} else {
return obj.style
}
}
if (document.getElementById) {
if (typeof obj == "string") {
return document.getElementById(obj)
} else {
return obj.style
}
}
return null
}
/************************
DRAW CALENDAR CONTENTS
*************************/
// clear and re-populate table based on form's selections
function populateTable(form) {
var theMonth = form.chooseMonth.selectedIndex
var theYear = parseInt(form.chooseYear.options[form.chooseYear.selectedIndex].text)
// initialize date-dependent variables
var firstDay = getFirstDay(theYear, theMonth)
var howMany = getMonthLen(theYear, theMonth)
// fill in month/year in table header
getObject("tableHeader").innerHTML = theMonths[theMonth] +
" " + theYear
// initialize vars for table creation
var dayCounter = 1
var TBody = getObject("tableBody")
// clear any existing rows
while (TBody.rows.length > 0) {
TBody.deleteRow(0)
}
var newR, newC
var done=false
while (!done) {
// create new row at end
newR = TBody.insertRow(TBody.rows.length)
for (var i = 0; i < 7; i++) {
// create new cell at end of row
newC = newR.insertCell(newR.cells.length)
if (TBody.rows.length == 1 && i < firstDay) {
// no content for boxes before first day
newC.innerHTML = ""
continue
}
if (dayCounter == howMany) {
// no more rows after this one
done = true
}
// plug in date (or empty for boxes after last day)
var month="";
var day="";
if(dayCounter<=howMany){
if(dayCounter<10)
day="0"+dayCounter;
else
day+=dayCounter;
if(theMonth<10)
month="0"+theMonth;
else
month+=theMonth;
var date=theYear+"-"+month+"-"+day;
var text="";
text+=dayCounter+"<br>";
var request= new XMLHttpRequest();
request.open('GET','http://api.tvmaze.com/schedule?country=US&date='+date);
request.setRequestHeader('Accept', 'application/json');
request.onreadystatechange = function(){
if (request.readyState == 4 && request.status == 200){
var data=request.responseText;
var response=JSON.parse(data);
var res=response[0];
var show=res.show;
var name=show.name;
text+=name+"<br>";
}
};
request.send();
newC.innerHTML=text;
}
else
newC.innerHTML="";
dayCounter++;
}
}
}
/*******************
INITIALIZATIONS
********************/
// create dynamic list of year choices
function fillYears() {
var today = new Date()
var thisYear = today.getFullYear()
var yearChooser = document.dateChooser.chooseYear
for (i = thisYear; i < thisYear + 2; i++) {
yearChooser.options[yearChooser.options.length] = new Option(i, i)
}
setCurrMonth(today)
}
// set month choice to current month
function setCurrMonth(today) {
document.dateChooser.chooseMonth.selectedIndex = today.getMonth()
}