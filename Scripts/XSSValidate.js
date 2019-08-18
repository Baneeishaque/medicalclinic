/// <reference path="jquery.msgBox.js" />
/// <reference path="~/Scripts/jquery-1.6.2min.js" />
function ValidateEmail(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
       ((evt.which) ? evt.which : 0));
    if ((charCode >= 48 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 35 && charCode <= 40) || (charCode >= 97 && charCode <= 122) || charCode == 189 || charCode == 46 || charCode == 64 || charCode == 45 || charCode == 95 || charCode == 8) {
        return true;
    }
    return false;
}

function ValidateAppointmentCode(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
       ((evt.which) ? evt.which : 0));
    if ((charCode >= 48 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8) {
        return true;
    }
    return false;
}

function ValidateSearchString(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
       ((evt.which) ? evt.which : 0));
    if ((charCode >= 48 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 32) {
        return true;
    }
    return false;
}

function LettersWithCommaOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if ((charCode >= 65 && charCode <= 90) ||
        (charCode >= 97 && charCode <= 122) || charCode == 44 || charCode == 32 || charCode == 127 || charCode == 8 || (charCode >= 37 && charCode <= 40)) {
        return true;
    }
    return false;
}
function LettersWithoutCommaOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if ((charCode >= 65 && charCode <= 90) ||
        (charCode >= 97 && charCode <= 122) || charCode == 46 || charCode == 32 || charCode == 40 || charCode == 41 || charCode == 127 || charCode == 8) {
        return true;
    }
    return false;
}
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 46 && charCode > 31
        && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function chatAndComment(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if ((charCode >= 48 && charCode <= 57) || (charCode >= 64 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || (charCode == 61) || (charCode == 63) || (charCode >= 43 && charCode <= 47)
    || (charCode >= 37 && charCode <= 41)  || charCode == 13 || charCode == 32  || charCode == 58 || charCode == 35 || charCode == 8  || charCode == 13 ||charCode == 10)
    {
        return true;
    }
    return false;
}

function LettersWithSpaceOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if (charCode > 40 && (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122)) {
        return false;
    }
    return true;
}

function isNumberKeywithdashandcomma(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode >= 48 && charCode <= 57 || charCode == 44 || charCode == 45 || charCode == 8 || charCode == 10) {
        return true;
    }
    return false;
}

function  ValidateCopyPaste(type, name, field) {
    if (type == 'Name') {
        //var name = ref.value;
        var flag = 0;
        var filterName = "";
        for (var i = 0 ; i < name.length ; i++) {
            if (!ValidationName(name[i])) {
                flag = 1;
                filterName += name[i] + " ";
            }
        }
        if (flag) {
            if (field == '' ) {
                jQuery.msgBox({
                    title: "iClinic",
                    content: "please remove '" + filterName + "' in name field",
                    type: "info"
                });
                return false;
            } else {
                jQuery.msgBox({
                    title: "iClinic",
                    content: "please remove '" + filterName + "' in " + field + " field",
                    type: "info"
                });
                return false;
            }
        }
        return true;
    }
    else if (type == 'All') {
        var flag = 0;
        var filterName = "";
        for (var i = 0 ; i < name.length ; i++) {
            if (!ValidationAll(name[i])) {
                flag = 1;
                filterName += name[i] + " ";
            }
        }
        if (flag) {
            jQuery.msgBox({
                title: "iClinic",
                content: "please remove '" + filterName + "' from " + field + " field",
                type: "info"
            });
            return false;
        }
        return true;
    }
    else if (type == 'RegNo') {
        var flag = 0;
        var filterName = "";
        for (var i = 0 ; i < name.length ; i++) {
            if (!ValidationNumberAndChar(name[i])) {
                flag = 1;
                filterName += name[i] + " ";
            }
        }
        if (flag) {
            if (filterName == " ") {
                filterName = " blank spaces ";
            }
            jQuery.msgBox({
                title: "iClinic",
                content: "please remove '" + filterName + "' from " + field + " field",
                type: "info"
            });
            return false;
        }
        return true;
    } else if (type == 'Number') {
        var flag = 0;
        var filterName = "";
        
        for (var i = 0 ; i < name.length ; i++) {
            if (!ValidationNumber(name[i])) {
                flag = 1;
                filterName += name[i] + " ";
            }
        }
        if (flag) {
            jQuery.msgBox({
                title: "iClinic",
                content: "please remove '" + filterName + "' from " + field + " field",
                type: "info"
            });
            return false;
        }
        return true;
    } else if (type == 'SearchString') {
        var flag = 0;
        var filterName = "";
        for (var i = 0 ; i < name.length ; i++) {
            if (!ValidateSearchString(name[i])) {
                flag = 1;
                filterName += name[i] + " ";
            }
        }
        if (flag) {
            jQuery.msgBox({
                title: "iClinic",
                content: "please remove '" + filterName + "' from " + field + " field",
                type: "info"
            });
            return false;
        }
        return true;
    }
    
}

function ValidationName(charCode) {
    charCode = charCode.charCodeAt(0);
    if ((charCode >= 97 && charCode <= 122) || (charCode >= 65 && charCode <= 90) || charCode==32)
        return true;
    else
        return false;
}

function ValidationAll(charCode) {
    charCode = charCode.charCodeAt(0);
    if ((charCode >= 48 && charCode <= 57) || (charCode >= 64 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || (charCode == 61) || (charCode == 63) || (charCode >= 43 && charCode <= 47)
    || (charCode >= 37 && charCode <= 39) || charCode == 40 || charCode == 32 || charCode == 41 || charCode == 58 || charCode == 35 || charCode == 8 || charCode == 13 || charCode == 10) {
        return true;
    }
    return false;
}

function AllowOnlyAlphaNumeric(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if ((charCode >= 48 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 13 || charCode == 10) {
        return true;
    }
    return false;
}
function ValidationNumberAndChar(charCode) {
    charCode = charCode.charCodeAt(0);
    if ((charCode >= 48 && charCode <= 57) || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 13 || charCode == 10) {
        return true;
    }
    return false;
}

function ValidationNumber(charCode) {
    charCode = charCode.charCodeAt(0);
    if (charCode != 46 && charCode > 31
        && (charCode < 48 || charCode > 57))
        return false;
    return true;
}