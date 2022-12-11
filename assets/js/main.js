// otp form 
function clickEvent(first, last) {
    if (first.value.length) {
        document.getElementById(last).focus();
    }
}

function changeOwnerBtn()
{
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

