// otp form 
function clickEvent(first, last) {
    if (first.value.length) {
        document.getElementById(last).focus();
    }
}

function changeOwnerBtn() {
    let prevnid = document.getElementById("prevnid").value;
    let curnid = document.getElementById("curnid").value;

    document.getElementById("heading1").style.display = "block";
    document.getElementById("heading2").style.display = "block";
    document.getElementById("prevuserimg").style.display = "block";
    document.getElementById("prevuserinfo").style.display = "block";
    document.getElementById("curuserimg").style.display = "block";
    document.getElementById("curuserinfo").style.display = "block";
    document.getElementById("savebtn").style.display = "block";
}


function setCookie(cname, cvalue) {
    document.cookie = cname + "=" + cvalue + ";"
}


function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkSignIn() {
    //alert(getCookie("signin"))
    if (getCookie("signin") == 1) {
        document.getElementById("signinnav").style.display = "none";
    }
}
