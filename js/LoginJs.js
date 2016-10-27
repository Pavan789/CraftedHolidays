function LoginCheck() {
    var paramList = "Type=oxiAction&oxiAction=IsLoggedIn&sessionId=" + $('#sessionId').val();
    $.ajax({
        url: "LoginCityList.php",
        data: paramList,
        success: function (data) {
            var responseText = data.toString();
            if (responseText == "False") {
                $('#login').css("display", "inline-block");
                $('#register').css("display", "inline-block");
                $('#loggedInName').html("");
                $('#logout').hide();
                $('#editProfile').hide();
            }
            else {
                $('#login').hide();
                $('#register').hide();
                $('#loggedInName').html("<b>Welcome</b>&nbsp;&nbsp; : <i style='padding-right:10px;'>" + responseText + "</i>|");
                $('#logout').css("display", "inline-block");
                $('#editProfile').css("display", "inline-block");
            }
        },
        error: function () { alert(arguments[2]); }
    });
}

function Logout() {
    var paramList = "Type=oxiAction&oxiAction=Logout&sessionId=" + $('#sessionId').val();
    $.ajax({
        url: "LoginCityList.php",
        data: paramList,
        success: function (data) {
            var responseText = data.toString();
            //dumpSessionId($('#sessionId').val());
            $('#login').css("display", "inline-block");
            $('#register').css("display", "inline-block");
            $('#loggedInName').html("");
            $('#logout').hide();
            $('#editProfile').hide();
            $('#login_popup').remove();
            $('#modalBG').remove();
            $('#forgot_pwd').remove();
            $('#sessionId').val("");
            location.href = "http://" + $('#siteName').val();
        },
        error: function () { alert(arguments[2]); }
    });
}
function Trim(str) {
    return str.replace(/^\s+|\s+$/g, '');
}


var messageDiv;
var emailTextId;
var passwordTextId;
function Login(msgDiv, email, password) {
    var ValidEmail = /^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z][a-zA-Z]+)$/;
    if (!ValidEmail.test(Trim($('#' + email).val()))) {
        $('#' + msgDiv).show();
        $('#' + msgDiv).html("Please enter correct E-Mail Id");
        return false;
    }
    if (Trim($('#' + password).val()) == '') {
        $('#' + msgDiv).show();
        $('#' + msgDiv).html("Please fill the password");
        return false;
    }
    messageDiv = msgDiv;
    emailTextId = email;
    passwordTextId = password;
    var paramList = "Type=oxiAction&oxiAction=Login";
    paramList += "&EmailId=" + $('#' + email).val();
    paramList += "&Password=" + $('#' + password).val();
    $.ajax({
        url: "LoginCityList.php",
        data: paramList,
        success: function (data) {
            var responseText = data.toString().split('|');
            $('#' + passwordTextId).val("");
            if (responseText[0] == "False") {
                $('#' + messageDiv).show();
                $('#' + messageDiv).html("Invalid login name or password.");
                $('#' + emailTextId).focus();
            }
            else {
                HideLoginModalPopUp();
                $('#login').hide();
                $('#register').hide();
                $('#loggedInName').html("<b>Welcome</b>&nbsp;&nbsp; : <i style='padding-right:10px;'>" + responseText[0] + "</i>|");
                $('#loggedInName').css("display", "inline-block");
                $('#logout').css("display", "inline-block");
                $('#editProfile').css("display", "inline-block");
                $('#sessionId').val(responseText[1]);
                $('#sessionIdForLinks').val(responseText[1]);
                $('#' + emailTextId).val("");
                $('#' + passwordTextId).val("");
                $('#' + messageDiv).html("");
                $('#' + emailTextId).val("");
                $('#' + messageDiv).hide();
             //   storeSessionId(responseText[1])
            }
        },
        error: function () { alert(arguments[2]); }
    });

}


function Forgot_pwd() {
    $('#login_popup').remove();
    $('#logInEmail').val("");
    $('#logInPassword').val("");
    $('#loginMessage').html("");
    $('#forgot_pwd').show();
    $('#FPContent').show();
    $('#FPPara').css('color', 'black');

}
var FPEmailID;
function SendEmail(emailTextBox, errorDiv) {
    FPEmailID = emailTextBox;
    var ValidEmail = /^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z][a-zA-Z]+)$/;
    if (!ValidEmail.test(Trim($('#' + emailTextBox).val()))) {
        $('#FPPara').css('color', 'red');
        $('#' + errorDiv).html("Please enter correct E-Mail Id");
        $('#' + errorDiv).show();
        $('#' + emailTextBox).focus();
        return false;
    }
    var paramList = "Type=oxiAction&oxiAction=ForgotPassword&fromEmail=" + $('#fromEmail').val();
    paramList += "&FPEmailId=" + $('#' + emailTextBox).val();
    $.ajax({
        url: "LoginCityList.php",
        data: paramList,
        success: function (data) {
            var responseText;
            if (data.toString() == "Sent") {
                responseText = "An email has been sent to you with a link to reset your password";
                $('#FPContent').hide();
                $('#' + FPEmailID).val("");
                $('#FPPara').css('color', 'black');
            }
            else {
                responseText = data.toString();
                $('#FPPara').css('color', 'red');
            }
            $('#FPPara').html(responseText);
        },
        error: function () { alert(arguments[2]); }
    });
}
function ShowModalPopup() {
    var paramList = "Type=login_popup";
    $.ajax({
        url: "LoginCityList.php",
        data: paramList,
        success: function (data) {
            var tempResult = jQuery(data);
            if (tempResult.find("div#login_detail").html() != null) {
                $('body').append(tempResult.find("div#login_detail").html());
                $('#login_popup').show();
                $('#modalBG').show();
            }
        },
        error: function () { alert(arguments[2]); }
    });
}
function HideLoginModalPopUp() {
    $('#login_popup').remove();
    $('#modalBG').remove();
    $('#forgot_pwd').remove();
    $('#logInEmail').val("");
    $('#logInPassword').val("");
    $('#loginMessage').html("");
}

function HideFPModalPopUp() {
    $('#modalBG').remove();
    $('#forgot_pwd').remove()
    $('#FPEmailId').val("");
    $('#FPPara').html("Your password will be emailed to you");
}
function CheckLogin(e) {
    if (e.keyCode == 13) {
        Login('loginMessage', 'logInEmail', 'logInPassword');
    }
}

function MyAccount() {
    $('#LoginForm').attr('action', 'booking.craftedholidays.com/registration.aspx');
    $('#LoginForm').submit();
}
