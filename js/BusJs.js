
$(document).ready(function () {

    ////**********************************JS for Bus**************************************************************************////
    var BusOrigin = "";
    var arrowkey = 0;
    var autoFocus = false;
    var resultDESnew = 0;
    var resultKey = 0;
    var resultCount = 0;
    var originCount = 0;
    var destCount = 0;
    var multiStopOrigin_1Count = 0;
    var multiStopOrigin_2Count = 0;
    var multiStopOrigin_3Count = 0;
    var multiStopDest_1Count = 0;
    var multiStopDest_2Count = 0;
    var multiStopDest_3Count = 0;
    var cityCount = 0;
    var busSourceCount = 0;
    var clickId;
    var totalAutoComplete = 0;

    $('#busSearch').click(function () {
		
        var loading = "<div   class=\"wgtpop\">";
        loading += "<div  id=\"logoDisplay\"  class=\"wgtpoplogo\">";
        loading += "<img src=\"<%=hotelPreference.Logo %>\"  alt=\"Logo\" />";
        loading += "</div> ";
        loading += " <div id =\"loading-img\" class=\"wgtpoplogo\"></div> ";
        loading += "</div>";
        var buslogo;
        var busloader;
        if (validation()) {
            $('#BusDestination').val($("#selectedDestinationCity option:selected").text());
            $('#DestinationId').val($("#selectedDestinationCity option:selected").val());
            var locationString;
            locationString = "<b>We are searching for Buses in  " + BusOrigin + "<br>Please wait. Do not close this window...</b>";
            buslogo = $('#Logo').html();
            busloader = $('#load-img').html();
            $('#BusForm').attr("action", "http://booking.craftedholidays.com/BusSearchResults.aspx");
           // $('#BusForm').attr('target', '_blank');
            $('#BusForm').submit();
            $('body').html("");
            $('body').append($('<div/>', {
                id: 'holdy',
                class: 'wgtpopbox',
                html: loading
            }));

            $('#logoDisplay').html(buslogo + locationString);
            $('#loading-img').html(busloader);
			$("#GrayBox").show();
           
        }
    });


    $('#busSource').keydown(function (e) {
        clickId = this.id;
        var busevent = false;
        $(this).autocomplete({
            source: function (request, response) {
                $.ajax({
                    type: "POST",
                    url: "BusCityList.php",
                    data: "Type=BusSearch&searchKey=" + request.term + "&checkSource=false",
                    success: function (data) {
                        resultKey = 0;
                        var responseText = data.toString().split('|');
                        $('#hidCityCode').val(data.toString().split('|')[0]);
                        $('#busSource').val(data.toString().split('|')[1]);
                        BusOrigin = data.toString().split('|')[1];
                        responseText = data.toString().split('|')[1];
                        responseText = responseText.toString().split('|');
                        if (clickId == "busSource") {
                            resultDESnew = busSourceCount;
                            if (busSourceCount == 0) {
                                resultDESnew = resultCount + totalAutoComplete + 1;
                                busSourceCount = resultDESnew;
                                totalAutoComplete = totalAutoComplete + 1;
                            }
                        }
                        resultCount = resultCount + responseText.length;
                        response(responseText);
                    },
                    error: function () { alert(arguments[2]); }
                });
            },
            minLength: 3,
            focus: function (event, ui) {
                resultKey = 1;
                $(this).val(ui.item.label);
                return false;
            },
            select: function (event, ui) {
                $(this).val(ui.item.label);
                busevent = true;
                resultKey = 1;
                if ($('#hidCityCode').val() != "") {

                    var paramlist = "Type=BusSearch&sourceCityCode=" + $('#hidCityCode').val() + "&checkSource=true";
                    $.ajax({
                        type: "POST",
                        url: "BusCityList.php",
                        data: paramlist,
                        success: function (data) {
                            $('#selectedDestinationCity option').remove();
                            $('<option />', { value: "0", text: "Choose From List" }).appendTo('#selectedDestinationCity');
                            $('#SourceId').val($('#hidCityCode').val());
                            $('#hidCityCode').val("");
                            var destList = data.toString().split('$');
                            var destName;
                            var destCode;
                            for (var i = 0; i < destList.length; i++) {
                                $('<option />', { value: destList[i].split('|')[0], text: destList[i].split('|')[1] }).appendTo('#selectedDestinationCity');
                            }
                        }
                    });

                }
                else {
                    $('#busSource').val("Enter any city");
                    $('#selectedDestinationCity option').remove();
                    $('<option />', { value: "0", text: "Choose From List" }).appendTo('#selectedDestinationCity');
                }
                return false;
            },
            change: function (event, ui) {
                if (busevent == false) {
                    if (clickId == "busSource") {
                        resultDESnew = busSourceCount;
                        if (busSourceCount == 0) {
                            resultDESnew = resultCount + totalAutoComplete + 1;
                            busSourceCount = resultDESnew;
                            totalAutoComplete = totalAutoComplete + 1;
                        }
                    }
                    if ($('#ui-id-' + resultDESnew + ' li:first')) {
                        if (arrowkey == 0 && resultKey == 0) {
                            if ($('#ui-id-' + resultDESnew + ' li:first').text() == "") {
                                $(this).val("Enter any city");
                            }
                            else {
                                $(this).val($('#ui-id-' + resultDESnew + ' li:first').text());
                            }
                            autoFocus = true;
                        }
                        else {
                            if (ui.item != null && ui.item.label != null) {
                                $(this).val(ui.item.label);
                                autoFocus = true;
                            }
                        }
                        if ($('#hidCityCode').val() != "") {

                            var paramlist = "Type=BusSearch&sourceCityCode=" + $('#hidCityCode').val() + "&checkSource=true"; ;
                            $.ajax({
                                type: "POST",
                                url: "BusCityList.php",
                                data: paramlist,
                                success: function (data) {
                                    $('#selectedDestinationCity option').remove();
                                    $('<option />', { value: "0", text: "Choose From List" }).appendTo('#selectedDestinationCity');
                                    $('#SourceId').val($('#hidCityCode').val());
                                    $('#hidCityCode').val("");
                                    var destList = data.toString().split('$');
                                    var destName;
                                    var destCode;
                                    for (var i = 0; i < destList.length; i++) {
                                        $('<option />', { value: destList[i].split('|')[0], text: destList[i].split('|')[1] }).appendTo('#selectedDestinationCity');
                                    }
                                }
                            });

                        }
                        else {
                            $('#busSource').val("Enter any city");
                            $('#selectedDestinationCity option').remove();
                            $('<option />', { value: "0", text: "Choose From List" }).appendTo('#selectedDestinationCity');
                        }
                        return false;
                    }
                }
            }
        });
    });

    $('#selectedDestinationCity').change(function () {
        $('#departureDate').focus();
    });



    ////**********************Calender related js***********************************************//
    var min = '0';
    $("#departureDate").datepicker({ minDate: min, maxDate: '+1Y', selectedDate: '0', dateFormat: 'dd/mm/yy', numberOfMonths: 2, showAnim: 'slideDown' });

    $("#ui-datepicker-div").hide();

});

function markout(textBox, txt) {
    if ($('#' + textBox.id).val() == "") {
        $('#' + textBox.id).val(txt);
    }
}
function markin(textBox, txt) {
    if ($('#' + textBox.id).val() == txt) {
        $('#' + textBox.id).val("");
    }
}

//*****************************************Bus Validation*************************************************//

function validation() {
    if ($('#busSource').val() == "" || parseInt(Trim($('#busSource').val()).length) == 0) {
        $('#errMsg').html("Please Enter Source City");
        $('#errMsg').show();
        return false;
    }
    if ($('#selectedDestinationCity').val() == "0") {
        $('#errMsg').html("Please Select Destination City");
        $('#errMsg').show();
        return false;
    }
    if ($('#departureDate').val() == "DD/MM/YYYY" || $('#departureDate').val() == "") {
        $('#errMsg').html("Please Select Date of Journey ");
        $('#errMsg').style.display = "block";
        return false;
    }
    return true;
}

function Trim(str) {
    return str.replace(/^\s+|\s+$/g, '');
}

