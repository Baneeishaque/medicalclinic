function checkCookie() {
    var username = getCookie("username");
    if (username != null && username != "") {
        alert("Welcome again " + username);
    }
    else {
        username = prompt("Please enter your name:", "");
        if (username != null && username != "") {
            setCookie("username", username, 365);
        }
    }
}

function getCookie(cName) {
    var cValue = document.cookie;
    var cStart = cValue.indexOf(" " + cName + "=");
    if (cStart == -1) {
        cStart = cValue.indexOf(cName + "=");
    }
    if (cStart == -1) {
        cValue = null;
    }
    else {
        cStart = cValue.indexOf("=", cStart) + 1;
        var cEnd = cValue.indexOf(";", cStart);
        if (cEnd == -1) {
            cEnd = cValue.length;
        }
        cValue = unescape(cValue.substring(cStart, cEnd));
    }
    return cValue;
}

function setCookie(cName, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var cValue = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = cName + "=" + cValue + ";path=/";
}