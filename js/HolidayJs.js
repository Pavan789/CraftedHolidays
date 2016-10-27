$(window).load(function () {
            $.ajax({
			    type: "POST",
                url: "HolidayCityList.php",
                data: "",
                success: function (data) {
                    var list = data.split("/$");
                    var themeList = list[0].split("/");
                    var domList = list[1].split("/");
                    var intList = list[2].split("/");
                 for (var i = 0; i < themeList.length; i++)
              {
                if(themeList[i]=='1')
                {
                $('#theme').append('<option value="Adventure">Adventure</option>');
                }
               else if(themeList[i]=='2')
               {
               $('#theme').append('<option value="Beaches">Beaches</option>');
               }
               else if(themeList[i]=='3')
               {
               $('#theme').append('<option value="Family">Family</option>');
               }
               else if(themeList[i]=='4')
               {
               $('#theme').append('<option value="Hills">Hills</option>');
                }
               else if(themeList[i]=='5')
               {
               $('#theme').append('<option value="Pilgrimage">Pilgrimage</option>');
               }
               }
                    for (var t = 0; t < domList.length; t++) {
                        $('#domCity').append('<option value="' + domList[t] + '">' + domList[t] + '</option>');
                    }
                    for (var t = 0; t < intList.length-1; t++) {
                        $('#intCity').append('<option value="' + intList[t] + '">' + intList[t] + '</option>');
                    }
                },
                error: function () { alert(arguments[2]); }
            });
        });
 
 
 
$(document).ready(function () {

    //*******************JS for Holiday Packages*******************************************//
    $("[id^=SearchBy]").click(function () {
        var showDivId;
        var hideDivId;
        if (this.id == "SearchByTheme") {
            showDivId = "SearchTheme";
            hideDivId = "SearchDestination";
        }
        if (this.id == "SearchByDestination") {
            showDivId = "SearchDestination";
            hideDivId = "SearchTheme";
        }
        if (this.id == "SearchByDomestic") {
            showDivId = "domestic";
            hideDivId = "international";
        }
        if (this.id == "SearchByInternational") {
            showDivId = "international";
            hideDivId = "domestic";
        }
        $('#' + hideDivId).hide();
        $('#' + showDivId).show();
        $('#' + showDivId).prop("checked", true);
        $('#' + hideDivId).prop("checked", false);
        if (showDivId == 'SearchDestination') {
            $('#SearchByDomestic').prop("checked", true);
            $('#international').hide();
            $('#domestic').show();
        }
    });

    $('#packageSearch').click(function (e) {
        if (PackageValidation()) {
            var subDomainSiteName = "http://booking.craftedholidays.com";
            if ($('#SearchByTheme').is(":checked")) {
                if ($('#domTheme').is(":checked") && $('#intTheme').is(":checked")) {
                    $('#HolidayForm').attr("action", subDomainSiteName + "/packages/domestic-international/" + $('#theme').val().toLowerCase() + "-theme");
                    $('#HolidayForm').attr("target", "_blank");
                }
                else if ($('#domTheme').is(":checked")) {
                    $('#HolidayForm').attr("action", subDomainSiteName + "/packages/domestic/" + $('#theme').val().toLowerCase() + "-theme");
                    $('#HolidayForm').attr("target", "_blank");
                }
                else if ($('#intTheme').is(":checked")) {
                    $('#HolidayForm').attr("action", subDomainSiteName + "/packages/international/" + $('#theme').val().toLowerCase() + "-theme");
                    $('#HolidayForm').attr("target", "_blank");
                }
                else if (!$('#domTheme').is(":checked") && !$('#intTheme').is(":checked")) {
                    $('#HolidayForm').attr("action", subDomainSiteName + "/packages/domestic-international/" + $('#theme').val().toLowerCase() + "-theme");
                    $('#HolidayForm').attr("target", "_blank");
                }
            }
            else if ($('#SearchByDomestic').is(":checked")) {
                $('#HolidayForm').attr("action", subDomainSiteName + "/packages/domestic/" + $('#domCity').val().trim().toLowerCase().replace(" ", "-"));
                $('#HolidayForm').attr("target", "_blank");

            }
            else {
                $('#HolidayForm').attr("action", subDomainSiteName + "/packages/international/" + $('#intCity').val().trim().toLowerCase().replace(" ", "-"));
                $('#HolidayForm').attr("target", "_blank");
            }
            $('#HolidayForm').submit();
        }
    });

});




//**********************************Package Validation****************************//

function PackageValidation() {
    if ($('#SearchByTheme').is(":checked")) {
        if ($('#theme').val() == "" || $('#theme').val() == "--Please Select--") {
            $('#errMessPkg').show();
            $('#errMessPkg').html("Please Select Theme");
            return false;
        }
    }
    else if ($('#SearchByDomestic').is(":checked")) {
        if ($('#domCity').val().trim() == "" || $('#domCity').val().trim() == "--Please Select--") {
            $('#errMessPkg').show();
            $('#errMessPkg').html("Please Select Destination");
            return false;
        }
    }
    else if ($('#SearchByInternational').is(":checked")) {
        if ($('#intCity').val().trim() == "" || $('#intCity').val().trim() == "--Please Select--") {
            $('#errMessPkg').show();
            $('#errMessPkg').html("Please Select Destination");
            return false;
        }
    }
    return true;
}


