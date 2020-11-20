var today = new Date();
var date = new Date();

var i = 0;
var cnt = 0;
var cell;
var row;

function prevCalender() { // previous month
    today = new Date(today.getFullYear(), today.getMonth() - 1, today.getDate());
    buildCalender();
}

function nextCalender() { //next month
    today = new Date(today.getFullYear(), today.getMonth() + 1, today.getDate());
    buildCalender();
}

function buildCalender() { // build(create, make) this month calender
    var firstDate = new Date(today.getFullYear(), today.getMonth(), 1); // first day of the month
    var lastDate  = new Date(today.getFullYear(), today.getMonth() + 1, 0); // last day of the month
    var tbCalender = document.getElementById("calenderDay");
    var tbCalenderYear = document.getElementById("tbCalenderYear");
    var tbCalenderMonth = document.getElementById("tbCalenderMonth");

    var dayOfWeek = ["January", "Fabruary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    tbCalenderYear.innerHTML = today.getFullYear();
    tbCalenderMonth.innerHTML = dayOfWeek[today.getMonth()];

    while (tbCalender.rows.length > 0) {
        tbCalender.deleteRow(tbCalender.rows.length - 1);
    }

    row = null;
    row = tbCalender.insertRow();
    
    cnt = 0;

    for (i = 0; i < firstDate.getDay(); i++) {
        cell = row.insertCell();
        cnt++;
    }

    /* print calender */
    for (i = 1; i <= lastDate.getDate(); i++) {
        cell = row.insertCell();
        cell.innerHTML = i;
        cnt++;

        /* if (cnt >= 35) {
            tbCalender.deleteRow(tbCalender.rows.length);
        } */

        if (cnt % 7 == 1) {
            cell.innerHTML = "<font color=#ff0000>" + i;
        }

        if (cnt % 7 == 0) {
            cell.innerHTML = "<font color=#0000ff>" + i;
            row = calenderDay.insertRow();
        }

        if (today.getFullYear() == date.getFullYear() && today.getMonth() == date.getMonth() && i == date.getDate()) {
            cell.bgColor = '#cfefef';
        }
    }
}

// 월 표기법 변경 (Eng, Kor)
/* function monthMethod() {
    var tbCalenderMonth = document.getElementById("tbCalenderMonth");
    var cnt = 0;

    tbCalenderMonth.addEventListener('click', cnt++);
    
    //tbCalenderMonth.innerHTML = today.getMonth() + " 월";
} */