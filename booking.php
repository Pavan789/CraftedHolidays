

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
    	   Booking
        </title>
        <meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="css/FlightStyle.css" rel="Stylesheet" type="text/css" media="all" />
		<link href="css/JQuery_UI.css" rel="stylesheet"type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
        <script type="text/javascript" src="js/json2.js"></script>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>  
		<script type="text/javascript" src="js/HotelJs.js"></script>
		<script type="text/javascript" src="js/BusJs.js"></script>
		<script type="text/javascript" src="js/FlightJs.js"></script>
        
        <!-- BookBlock -->
        <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.custom.css" />
		<link rel="stylesheet" type="text/css" href="css/bookblock.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
        <script src="js/modernizr.custom.79639.js"></script>
        <script src="js/jquery.mousewheel.js"></script>
		<script src="js/jquery.jscrollpane.min.js"></script>
		<script src="js/jquerypp.custom.js"></script>
		<script src="js/jquery.bookblock.js"></script>
        <!-- BookBlock ends-->
        
        <!-- Time Select-->
    	<link href="css/jquery.timepicker.css" rel="stylesheet" type="text/css" />
    	<script type="text/javascript" src="js/jquery.timepicker.js"></script>
    	<script type="text/javascript" src="js/main.js"></script></script> 
        <!-- Time Select -->
        
        <script  type="text/javascript" language="javascript">
            $(document).ready(function(){
                $( "#menu ul li" ).mouseover(function() {
                    //if ($(this).find(".sub_menu").hasClass("sub_menu")) {
                        $( "#menu ul li" ).removeClass("active");
                        $( this ).addClass("active");         
                    //}
                  });
                  
                $( "#menu ul li" ).mouseout(function() {
                    $( "#menu ul li" ).removeClass("active");
                    $( "#menu ul" ).find(".current").addClass("active");
                  });
            })
        </script>
        
        <link href="images/favicon.png" rel="shortcut icon" type="image/png" />
    </head>

    <body id="CraftedHolidays_Body" style="background-image: url(&quot;images/about/bg.jpg&quot;);">
        <div id="main_holder">
            <div id="header">
                <div id="logo">
                    <a href="index.php"><img src="images/logo.png" width="100%" height="auto" title="Crafted Holidays: Luxury travel in Tahiti, South Africa and India" /></a>
                </div>
                <div id="menu">
                    <ul>
                        <li class="active current"><a href="content.php?page=about">About</a></li>
                        <li class="">
                            <a href="content.php?page=destinations">Destinations</a>
                            <ul class="sub_menu">
                                <li class="menu-toc-current"><a href="content.php?page=destinations&type=1" class="">India</a></li>
                                <li><a href="content.php?page=destinations&type=2" class="">South Africa</a></li>
                                <li><a href="content.php?page=destinations&type=3" class="">Tahiti</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="content.php?page=journey-styles">Journey Styles</a>
                            <ul class="sub_menu">
                                <li class="menu-toc-current"><a href="content.php?page=journey-style&type=1" class="">Luxe Travel</a></li>
                                <li><a href="content.php?page=journey-style&type=2" class="">Adventure & Wildlife</a></li>
                                <li><a href="content.php?page=journey-style&type=3" class="" onclick="nav(3);">Romantic</a></li>
                                <li><a href="content.php?page=journey-style&type=4" class="">Beach Vacation</a></li>
                                <li><a href="content.php?page=journey-style&type=5" class="">Wine Trails</a></li>
                                <li><a href="content.php?page=journey-style&type=6" class="">Spa & Wellness</a></li>
                                <li><a href="content.php?page=journey-style&type=7" class="">Medical Tourism</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="content.php?page=blog">Blog</a></li>
                        <li class=""><a href="content.php?page=contact">Contact</a></li>
                    </ul>
                </div>
                <div id="social">
                    <div class="social_link"><a href="https://www.facebook.com/pages/Crafted-Holidays/808469965880732" target="_blank"><img src="images/social/facebook.png" width="100%" height="auto" /></a></div>
                    <div class="social_link"><a href="http://www.twitter.com/shreyatravels"><img src="images/social/twitter.png"  width="100%" height="auto"/></a></div>
                    <div style="clear: both;"></div>
                </div>
            </div>
            <div class="content" style="background: url(images/about/bg.jpg) no-repeat; background-size: 100% 100%;">

    <div class="content_boxes" style="margin: 0; padding: 0; width: 100%; height: 85%; display: table;">
        
<div class="container" style="margin-top:3%;">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#flights"><i class="fa fa-plane" aria-hidden="true"></i> Flights</a></li>
    <li><a data-toggle="tab" href="#hotels"><i class="fa fa-bed" aria-hidden="true"></i> Hotels</a></li>
    <li><a data-toggle="tab" href="#buses"><i class="fa fa-bus" aria-hidden="true"></i> Buses</a></li>
    <li><a data-toggle="tab" href="#packages"><i class="fa fa-briefcase" aria-hidden="true"></i> Packages</a></li>
  </ul>

  <div class="tab-content">
    <div id="flights" class="tab-pane fade in active">
		<form id="FlightForm" action="" method="post">
        <div style="display:none;">
        <input type="hidden" name="carrierOptions" />
        <input type="hidden" name="preferredCarrier" />
        <input type="hidden" name="isInternational" id="isInternational"/>
        <input type="hidden" name="referenceId" />
        <input type="hidden" name="imagePath" />
        <input type="hidden" id="showInternational" />
        <input type="hidden" id="IsSpecialReturnAllowed" value="True" />
        <input type="hidden" id="promotionalPlanType" name="promotionalPlanType" value="Normal" />
        <input type="hidden" id="searchType"  name="searchType" value="0"/>
        <input type="hidden" id="flightSegmentCounter" name="flightSegmentCounter" value="1" />
         <input type="hidden" id="fdepDate" name="depDate" value="" />
        </div>
      <div class="wgtfrmbox" id="Flights">
             <span id="errMess" class="error_msg" style="display:none;">
                    <span id="errorMessage"></span>
                 </span>
	      <!-- Flight form start here --->    
			<ul class="wgt_flightnav">
               <li id="one_Way" class="selected"><a class="oneway" href="#!" id="oneWay"><span class="fa fa-plane"></span> Oneway</a></li>
               <li id="round_Trip"><a class="return" href="#!" id="roundTrip"><span class="fa fa-plane fa-rotate-270"></span> Return</a></li>
               <li id="multi_Stop"><a class="multicity" href="#!" id="multiStop"><span class="fa fa-building-o"></span> Multi-city</a></li>
               <li id="cal_Fare"><a class="air_cal" href="#!" id="calFare"><span class="fa fa-calendar-o"></span> Air Calendar</a></li>
            </ul>
           <div id="onewayReturnDiv">  
              <div class="wgtfrmrow">
                 <div>
                     <label style="float:left;">Leaving From</label>
                         <input type="text" id="origin" class="city_inpts" name="origin" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')"/>
                 </div>
                 <div>
                     <label style="float:left;"><br>Going To</label>
                         <input class="city_inpts" type="text" id="dest"  name="dest" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')"/>
                 </div>
              </div>
              <div style="float:left;" id="onewayReturnDatesDiv">
                     <span style="float:left;">
                         <label style="float:left;">Departure</label>
                         <dfn>
                             <input class="wgtcal" type="text" id="DepDate" name="flightdepDate" value="DD/MM/YYYY" readonly="readonly"/>
                         </dfn>  
                         <select id="#" name="#" class="time_slect" style="display:none;"> 
                         <option value="">Any Time</option>
                         </select>
                     </span>
                     <span style="float:left;" id="retDate" style="display:none;">
                         <label id="retText" style="float:left;">Return</label>
                         <dfn>
                             <input class="wgtcal" type="text" value="DD/MM/YYYY" id="ReturnDate" name="returnDate" readonly="readonly"/>
                         </dfn>
                         
                         <select id="Select1" name="#" class="time_slect" style="display:none;"> 
                         <option value="">Any Time</option>
                         </select>
                     </span>
                 </div>

               <div class="wgtfrmrow" id="calFareDatesDiv" style="display:none;">
                     <span class="wgtfrmleft">
                         <label class="city_lbl">Departure Month</label>
                         <dfn>
                           <select id="DepartureMonth" class="air_cdr">
                               <option value="1">January</option>
                               <option value="2">February</option>
                               <option value="3">March</option>
                               <option value="4">April</option>
                               <option value="5">May</option>
                               <option value="6">June</option>
                               <option value="7">July</option>
                               <option value="8">August</option>
                               <option value="9">September</option>
                               <option value="10">October</option>
                               <option value="11">November</option>
                               <option value="12">December</option>
                           </select>
                         </dfn>
                     </span>
                     <span class="wgtfrmright">
                         <label class="city_lbl">Departure Year</label>
                         <dfn>
                            <select id="DepartureYear" class="air_cdr"></select>
                         </dfn>
                     </span>
                 </div>
           </div>
               
              <!-- Multicity Start here --->  
              <div class="mcity_flds" id="multiStopDiv" style=" display:none;">
                <div class="wgtfrmrow" id="MultiStopSegment_1">
                   <div class="wgtmultirow">
                        <span class="wgtfltno">&nbsp;</span>
                        <span class="wgtmltdest" style="width:25%; padding-left:10%">Leaving From</span>
                        <span class="wgtmltdest" style="width:35%">Going To</span>
                        <span class="wgtmltdest" style="width:25%">Depart On</span>
                   </div>
                   <div class="wgtmultirow">
                        <span class="wgtfltno" style="float:left; width:10%">Flight 1</span>
                        <span class="wgtmltdest" style="width:25%"><input type="text" id="multiStopOrigin_1" class="city_inpts" name="multiStopOrigin_1" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')"/></span>
                        <span class="wgtmltdest" style="width:25%"><input type="text" id="multiStopDest_1" name="multiStopDest_1" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')"/></span>
                        <span class="wgtmltdest" style="width:25%"><input type="text" id="multiStopDepDate_1" class="wgtcal" name="multiStopDepDate_1" value="DD/MM/YYYY" readonly="readonly"/></span>
                   </div> 
                </div>   
               <div class="wgtfrmrow" id="MultiStopSegment_2" style="display:none;">
                   <div class="wgtmultirow">
                        <span class="wgtfltno">Flight 2</span>
                        <span class="wgtmltdest"><input type="text" id="multiStopOrigin_2" name="multiStopOrigin_2" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')"/></span>
                        <span class="wgtmltdest"><input type="text" id="multiStopDest_2" name="multiStopDest_2" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')"/></span>
                        <span class="wgtmltdest"><input type="text" id="multiStopDepDate_2" class="wgtcal" name="multiStopDepDate_2" value="DD/MM/YYYY" readonly="readonly" style="cursor:pointer;"/></span>
                        <a href="#!" id="removeMultiStop_2" class="wgtmltfltdel"><img src="./images/cnl.jpg" alt="cancel" /></a>
                   </div>      
                </div>
                <div class="wgtfrmrow" id="MultiStopSegment_3" style="display:none;">
                    <div class="wgtmultirow">
                        <span class="wgtfltno">Flight 3</span>
                        <span class="wgtmltdest"><input type="text" id="multiStopOrigin_3" name="multiStopOrigin_3" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')"/></span>
                        <span class="wgtmltdest"><input type="text" id="multiStopDest_3" name="multiStopDest_3" value="Enter any city/airport" onblur="markout(this, 'Enter any city/airport')" onfocus="markin(this, 'Enter any city/airport')"/>  </span>
                        <span class="wgtmltdest"><input type="text" id="multiStopDepDate_3" class="wgtcal" name="multiStopDepDate_3" value="DD/MM/YYYY" readonly="readonly"/></span>
                        <a href="#!" id="removeMultiStop_3" class="wgtmltfltdel"><img src="./images/cnl.jpg" alt="cancel" /></a>
                   </div> 
                </div>
                <div class="wgtfrmrow" id="multi-add">
                  <a href="#!" class="wgtaddflt" id="addMoreMultiStop"> + Add more flights</a>
                </div>
              </div>   
              
                      
              <div class="wgtfrmrow" id="onewayreturnform">
              <div class="wgtcountbox"> Travelers (upto 9 per Booking)</div>
                     <span class="wgt_float_left" >
                         <label class="wgt_float_left">Adults<br><span style="color:#bfbfbf">(12+)</span></label>
                         <select name="adultCount" id="adultCount">
                                <option value="1" >1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                        </select>
                       </span>
                     
                     <span class="wgt_float_left" style="margin-left:13%;">
                         <label class="wgt_float_left">Children<span style="color:#bfbfbf"><br>(2-11)</span></label>
                         <select name="childCount" id="childCount">
                                <option value="0">0</option>
					            <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                         </select>
                     </span>
                     
                     <span class="wgt_float_left" style="margin-left:13%">
                         <label class="wgt_float_left">Infants<br><span style="color:#bfbfbf">(0-2)</span></label>
                         <select name="infantCount" id="infantCount">
                            <option value="0">0</option>
					        <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                         </select>  
                     </span>
                  </div>
              <div class="wgtfrmrow">   
                      <span class="wgtclass">
                         <label><span style="float:left;">Class</span></label>
                        <select name="cabinClass" class="fgt_slct">
                          <option value="0">Any</option>
                          <option value="1">Economy</option>
                          <option value="3">Business</option>
                          <option value="5">First</option>
                       </select>
                     </span>
                  </div>
               
            <div class="wgtfrmrow">
              
              <span class="btn_box fright" id="fSearchbtn_box">
                 <a href="#!" id="flightSearch" class="wgtsearchbtn">Search Flight</a>                 
              </span>
               <span class="btn_box fright" id="calFareBtn_box" style="display:none;">
                 <a href="#!" id="CalendarWidget" class="wgtsearchbtn">Search Flight</a>               
              </span>
            </div>
           </div>
        <!-- Flight form end here --->
      </form>
    </div>
    <div id="hotels" class="tab-pane fade">
      <form id="HotelForm" action="" method="post">
     <div class="wgtfrmbox">
      <div>
        <input type="hidden" name="carrierOptions" />
        <input type="hidden" name="preferredCarrier" />
        <input type="hidden" name="isInternational" id="isInternational"/>
        <input type="hidden" name="referenceId" />
        <input type="hidden" name="imagePath" />
        <input type="hidden" id="showInternational" />
        <input type="hidden" id="IsSpecialReturnAllowed" value="True" />
        <input type="hidden" id="promotionalPlanType" name="promotionalPlanType" value="Normal" />
        <input type="hidden" id="searchType"  name="searchType" value="0"/>
        <input type="hidden" id="flightSegmentCounter" name="flightSegmentCounter" value="1" />
        </div>
          <div id="Hotels">
             <div id="errMessHotel" class="error_msg" style="display:none;"></div>
             <div>
                <input type="hidden" name="destinationCity" id="destinationCity" />
                <input type="hidden" name="destCitySelected" id="destCitySelected" value="false"/>
                <input type="hidden" name="isDomesticHotel" id="isDomesticHotel" value="true" />
             </div>
             <div id="selectDiv_Hotel" class="wgtfrmrow wgthtlistbox">
                 <label>Choose Destination</label>
                 <!--<input class="wgthtlcity" id="city" name="city" type="text" value="Type Or Select From List" onblur="markout(this, 'Type Or Select From List')" onfocus="markin(this, 'Type Or Select From List')" />        -->
                 <select class="hl_select" name="destCity" id="destCity" >
                      <option value="Type Or Select From List" selected="selected" style="display:none;">Type Or Select From List</option>
                                         <option value="14621|Amsterdam|Netherlands">Amsterdam,Netherlands</option>
                                         <option value="17249|Antalya|Turkey">Antalya,Turkey</option>
                                         <option value="9434|Athens|Greece">Athens,Greece</option>
                                         <option value="10142|Bali|Indonesia">Bali,Indonesia</option>
                                         <option value="16974|Bangkok|Thailand">Bangkok,Thailand</option>
                                         <option value="3518|Barcelona|Spain">Barcelona,Spain</option>
                                         <option value="23131|Basel|Switzerland">Basel,Switzerland</option>
                                         <option value="23884|Beijing|China">Beijing,China</option>
                                         <option value="13551|Beirut|Lebanon">Beirut,Lebanon</option>
                                         <option value="1996|Berlin|Germany">Berlin,Germany</option>
                                         <option value="24602|Brussels|Belgium"> Brussels,Belgium</option>
                                         <option value="10085|Budapest|Hungary">Budapest,Hungary</option>
                                         <option value="2418|Cairo|Egypt">Cairo,Egypt</option>
                                         <option value="32443|Cape Town|South Africa">Cape Town,South Africa</option>
                                         <option value="20491|Chicago|United States">Chicago,United States</option>
                                         <option value="125|Cologne|Germany">Cologne,Germany</option>
                                         <option value="13616|Colombo|Sri Lanka">Colombo,Sri Lanka</option>
                                         <option value="2142|Copenhagen|Denmark">Copenhagen,Denmark</option>
                                         <option value="25921|Dubai|United Arab Emirates">Dubai,United Arab Emirates</option>
                                         <option value="32515|Durban|South Africa">Durban,South Africa</option>
                                         <option value="27352|Dusseldorf|Germany"> Dusseldorf,Germany</option>
                                         <option value="8030|Edinburgh|United Kingdom">Edinburgh,United Kingdom</option>
                                         <option value="11213|Florence|Italy">Florence,Italy</option>
                                         <option value="22753|Frankfurt|Germany">Frankfurt,Germany</option>
                                         <option value="23435|Geneva|Switzerland">Geneva,Switzerland</option>
                                         <option value="26698|Gold Coast|Australia">Gold Coast,Australia</option>
                                         <option value="23960|Guangzhou|China">Guangzhou,China</option>
                                         <option value="379|Hamburg|Germany">Hamburg,Germany</option>
                                         <option value="9926|Hong Kong|Hong Kong">Hong Kong,Hong Kong</option>
                                         <option value="26996|Innsbruck|Austria">Innsbruck,Austria</option>
                                         <option value="23037|Interlaken|Switzerland">Interlaken,Switzerland</option>
                                         <option value="17306|Istanbul|Turkey">Istanbul,Turkey</option>
                                         <option value="32569|Johannesburg|South Africa">Johannesburg,South Africa</option>
                                         <option value="15054|Kathmandu|Nepal">Kathmandu,Nepal</option>
                                         <option value="14386|Kuala Lumpur|Malaysia">Kuala Lumpur,Malaysia</option>
                                         <option value="35827|Kuwait|Kuwait">Kuwait,Kuwait</option>
                                         <option value="14285|Langkawi|Malaysia">Langkawi,Malaysia</option>
                                         <option value="32827|Las Vegas|United States">Las Vegas,United States</option>
                                         <option value="34549|London|Canada">London,Canada</option>
                                         <option value="9245|London|United Kingdom">London,United Kingdom</option>
                                         <option value="18631|Los Angeles|United States">Los Angeles,United States</option>
                                         <option value="23273|Lucerne|Switzerland">Lucerne,Switzerland</option>
                                         <option value="13674|Macau|Macau">Macau,Macau</option>
                                         <option value="3000|Madrid|Spain">Madrid,Spain</option>
                                         <option value="14254|Mauritius|Mauritius">Mauritius,Mauritius</option>
                                         <option value="26916|Melbourne|Australia">Melbourne,Australia</option>
                                         <option value="11297|Milan|Italy">Milan,Italy</option>
                                         <option value="266|Munich|Germany">Munich,Germany</option>
                                         <option value="13443|Nairobi|Kenya">Nairobi,Kenya</option>
                                         <option value="28985|New York|United States">New York,United States</option>
                                         <option value="4419|Nice|France">Nice,France</option>
                                         <option value="19533|Orlando|United States">Orlando,United States</option>
                                         <option value="4775|Paris|France">Paris,France</option>
                                         <option value="36773|Pattaya Beach|Thailand">Pattaya Beach,Thailand</option>
                                         <option value="14321|Penang|Malaysia">Penang,Malaysia</option>
                                         <option value="17093|Phuket|Thailand">Phuket,Thailand</option>
                                         <option value="24332|Prague|Czech Republic">Prague\,Czech Republic</option>
                                         <option value="12771|Rome|Italy">Rome,Italy</option>
                                         <option value="27022|Salzburg|Austria">Salzburg,Austria</option>
                                         <option value="18857|San Diego|United States">San Diego,United States</option>
                                         <option value="18861|San Francisco|United States">San Francisco,United States</option>
                                         <option value="23909|Shanghai|China">Shanghai,China</option>
                                         <option value="23976|Shenzhen|China">Shenzhen,China</option>
                                         <option value="16532|Singapore|Singapore">Singapore,Singapore</option>
                                         <option value="34326|Sydney|Australia">Sydney,Australia</option>
                                         <option value="13420|Tokyo|Japan">Tokyo,Japan</option>
                                         <option value="34661|Toronto|Canada">Toronto,Canada</option>
                                         <option value="25561|Vancouver|Canada">Vancouver,Canada</option>
                                         <option value="11501|Venice|Italy">Venice,Italy</option>
                                         <option value="27059|Vienna|Austria">Vienna,Austria</option>
                                         <option value="23418|Zermatt|Switzerland">Zermatt,Switzerland</option>
                                         <option value="23424|Zurich|Switzerland">Zurich,Switzerland</option>
                    </select>
                 <!--<a href="cities/hotelcityList.html" id="SelectListInternational">Select from List</a>-->
             </div>
             <div class="wgtfrmrow">
                 <span class="wgthtldate">
                    <label>Check in</label>
                    <input class="wgtcal" type="text" id="checkInDate" name="checkInDate" value="DD/MM/YYYY" readonly="readonly" />
                 </span>
                 <span class="wgthtldate">
                        <label>Check out</label>
                        <input class="wgtcal" type="text" id="checkOutDate" name="checkOutDate" value="DD/MM/YYYY" readonly="readonly" />
                  </span>
                  <span class="wgthtlngt">
                        <label>Nights</label>
                        <input type="text" id="night_stay" value="0" name="night_stay"/>
                  </span>
             </div>
             <div class="wgtfrmrow">
                  <div class="wgtfrmleft">
                     <label>No. of Rooms</label>
                     <select class="room_select"  name="NoOfRooms" id="NoOfRooms">
                        <option selected="selected" value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option> 
                     </select>
                     <input type="hidden" value="1" id="PrevNoOfRooms" name="PrevNoOfRooms"/>
                  </div>
                  <div class="wgtfrmright">
                    <label> Nationality</label>
                    <select tabindex="5" name="Nationality" id="Nationality" class="width_99">
                                                 
                                                     <option value="Select"> Select</option>
                                                     <option value="IN"> Indian</option>
                                                     <option value="AF"> Afghan</option>
                                                 
                                                     <option value="AL"> Albanian</option>
                                                 
                                                     <option value="DZ"> Algerian</option>
                                                 
                                                     <option value="AS"> American Samoan</option>
                                                 
                                                     <option value="US"> American; US citizen</option>
                                                 
                                                     <option value="AD"> Andorran</option>
                                                 
                                                     <option value="AO"> Angolan</option>
                                                 
                                                     <option value="AI"> Anguillan</option>
                                                 
                                                     <option value="AQ"> Antarctica</option>
                                                 
                                                     <option value="AG"> Antiguan; Barbudian</option>
                                                 
                                                     <option value="AN"> Antillean</option>
                                                 
                                                     <option value="AR"> Argentinian</option>
                                                 
                                                     <option value="AM"> Armenian</option>
                                                 
                                                     <option value="AW"> Aruban</option>
                                                 
                                                     <option value="AU"> Australian</option>
                                                 
                                                     <option value="AT"> Austrian</option>
                                                 
                                                     <option value="AZ"> Azerbaijani</option>
                                                 
                                                     <option value="BS"> Bahamian</option>
                                                 
                                                     <option value="BH"> Bahraini</option>
                                                 
                                                     <option value="BD"> Bangladeshi</option>
                                                 
                                                     <option value="BB"> Barbadian</option>
                                                 
                                                     <option value="LS"> Basotho</option>
                                                 
                                                     <option value="BY"> Belarusian</option>
                                                 
                                                     <option value="BE"> Belgian</option>
                                                 
                                                     <option value="BZ"> Belizean</option>
                                                 
                                                     <option value="BJ"> Beninese</option>
                                                 
                                                     <option value="BM"> Bermudian</option>
                                                 
                                                     <option value="BT"> Bhutanese</option>
                                                 
                                                     <option value="BO"> Bolivian</option>
                                                 
                                                     <option value="BW"> Botswanan</option>
                                                 
                                                     <option value="BV"> Bouvet Islands</option>
                                                 
                                                     <option value="BR"> Brazilian</option>
                                                 
                                                     <option value="IO"> British Indian Ocean Territory</option>
                                                 
                                                     <option value="VG"> British Virgin Islander; BV Islander</option>
                                                 
                                                     <option value="BN"> Bruneian</option>
                                                 
                                                     <option value="BG"> Bulgarian</option>
                                                 
                                                     <option value="BF"> Burkinabe</option>
                                                 
                                                     <option value="MM"> Burmese</option>
                                                 
                                                     <option value="BI"> Burundian</option>
                                                 
                                                     <option value="KH"> Cambodian</option>
                                                 
                                                     <option value="CM"> Cameroonian</option>
                                                 
                                                     <option value="CB"> Canada Buffer</option>
                                                 
                                                     <option value="CA"> Canadian</option>
                                                 
                                                     <option value="CV"> Cape Verdean</option>
                                                 
                                                     <option value="KY"> Caymanian</option>
                                                 
                                                     <option value="CF"> Central African</option>
                                                 
                                                     <option value="TD"> Chadian</option>
                                                 
                                                     <option value="CL"> Chilean</option>
                                                 
                                                     <option value="CN"> Chinese</option>
                                                 
                                                     <option value="CX"> Christmas Islander</option>
                                                 
                                                     <option value="CC"> Cocos Islander</option>
                                                 
                                                     <option value="CO"> Colombian</option>
                                                 
                                                     <option value="KM"> Comorian</option>
                                                 
                                                     <option value="CD"> congo</option>
                                                 
                                                     <option value="CG"> Congolese</option>
                                                 
                                                     <option value="CK"> Cook Islander</option>
                                                 
                                                     <option value="CR"> Costa Rican</option>
                                                 
                                                     <option value="HR"> Croat</option>
                                                 
                                                     <option value="CU"> Cuban</option>
                                                 
                                                     <option value="CY"> Cypriot</option>
                                                 
                                                     <option value="CZ"> Czech</option>
                                                 
                                                     <option value="DK"> Dane</option>
                                                 
                                                     <option value="DJ"> Djiboutian</option>
                                                 
                                                     <option value="DO"> Dominican</option>
                                                 
                                                     <option value="DM"> Dominicana</option>
                                                 
                                                     <option value="NL"> Dutchman; Dutchwoman; Netherlander</option>
                                                 
                                                     <option value="TP"> East Timor</option>
                                                 
                                                     <option value="EC"> Ecuadorian</option>
                                                 
                                                     <option value="EG"> Egyptian</option>
                                                 
                                                     <option value="AE"> Emirati</option>
                                                 
                                                     <option value="GQ"> Equatorial Guinean</option>
                                                 
                                                     <option value="ER"> Eritrean</option>
                                                 
                                                     <option value="EE"> Estonian</option>
                                                 
                                                     <option value="ET"> Ethiopian</option>
                                                 
                                                     <option value="EU"> European Monetary Union</option>
                                                 
                                                     <option value="FO"> Faeroese</option>
                                                 
                                                     <option value="FK"> Falkland Islander</option>
                                                 
                                                     <option value="FJ"> Fiji Islander</option>
                                                 
                                                     <option value="PH"> Filipino</option>
                                                 
                                                     <option value="FI"> Finn</option>
                                                 
                                                     <option value="TF"> French Southern Territories</option>
                                                 
                                                     <option value="FR"> Frenchman; Frenchwoman</option>
                                                 
                                                     <option value="GA"> Gabonese</option>
                                                 
                                                     <option value="GM"> Gambian</option>
                                                 
                                                     <option value="GE"> Georgian</option>
                                                 
                                                     <option value="DE"> German</option>
                                                 
                                                     <option value="GH"> Ghanaian</option>
                                                 
                                                     <option value="GI"> Gibraltarian</option>
                                                 
                                                     <option value="GR"> Greece</option>
                                                 
                                                     <option value="GL"> Greenlander</option>
                                                 
                                                     <option value="GD"> Grenadian</option>
                                                 
                                                     <option value="GP"> Guadeloupean</option>
                                                 
                                                     <option value="GU"> Guamanian</option>
                                                 
                                                     <option value="GT"> Guatemalan</option>
                                                 
                                                     <option value="GF"> Guianese</option>
                                                 
                                                     <option value="GW"> Guinea-Bissau national</option>
                                                 
                                                     <option value="GN"> Guinean</option>
                                                 
                                                     <option value="GY"> Guyanese</option>
                                                 
                                                     <option value="HT"> Haitian</option>
                                                 
                                                     <option value="HM"> Heard &amp; Mcdonald Islands</option>
                                                 
                                                     <option value="HN"> Honduran</option>
                                                 
                                                     <option value="HK"> Hong Kong Chinese</option>
                                                 
                                                     <option value="HU"> Hungarian</option>
                                                 
                                                     <option value="IS"> Icelander</option>
                                                 
                                                     <option value="ID"> Indonesian</option>
                                                 
                                                     <option value="IR"> Iranian</option>
                                                 
                                                     <option value="IQ"> Iraqi</option>
                                                 
                                                     <option value="IE"> Irishman; Irishwoman</option>
                                                 
                                                     <option value="IL"> Israeli</option>
                                                 
                                                     <option value="IT"> Italian</option>
                                                 
                                                     <option value="CI"> Ivorian</option>
                                                 
                                                     <option value="JM"> Jamaican</option>
                                                 
                                                     <option value="JP"> Japanese</option>
                                                 
                                                     <option value="JO"> Jordanian</option>
                                                 
                                                     <option value="KZ"> Kazakh</option>
                                                 
                                                     <option value="KE"> Kenyan</option>
                                                 
                                                     <option value="KI"> Kiribatian</option>
                                                 
                                                     <option value="KN"> Kittsian; Nevisian</option>
                                                 
                                                     <option value="KW"> Kuwaiti</option>
                                                 
                                                     <option value="KG"> Kyrgyz</option>
                                                 
                                                     <option value="LA"> Lao</option>
                                                 
                                                     <option value="LV"> Latvian</option>
                                                 
                                                     <option value="LB"> Lebanese</option>
                                                 
                                                     <option value="LR"> Liberian</option>
                                                 
                                                     <option value="LY"> Libyan</option>
                                                 
                                                     <option value="LI"> Liechtensteiner</option>
                                                 
                                                     <option value="QL"> Lithuania (Dummy Code)</option>
                                                 
                                                     <option value="LT"> Lithuanian</option>
                                                 
                                                     <option value="LU"> Luxembourger</option>
                                                 
                                                     <option value="MO"> Macanese</option>
                                                 
                                                     <option value="MK"> Macedonia</option>
                                                 
                                                     <option value="YT"> Mahorais</option>
                                                 
                                                     <option value="MG"> Malagasy</option>
                                                 
                                                     <option value="MW"> Malawian</option>
                                                 
                                                     <option value="MY"> Malaysian</option>
                                                 
                                                     <option value="MV"> Maldivian</option>
                                                 
                                                     <option value="ML"> Malian</option>
                                                 
                                                     <option value="MT"> Maltese</option>
                                                 
                                                     <option value="MH"> Marshallese</option>
                                                 
                                                     <option value="MQ"> Martinican</option>
                                                 
                                                     <option value="MR"> Mauritanian</option>
                                                 
                                                     <option value="MU"> Mauritian</option>
                                                 
                                                     <option value="MX"> Mexican</option>
                                                 
                                                     <option value="MB"> Mexico Buffer</option>
                                                 
                                                     <option value="FM"> Micronesian</option>
                                                 
                                                     <option value="MD"> Moldovan</option>
                                                 
                                                     <option value="MC"> Monegasque</option>
                                                 
                                                     <option value="MN"> Mongolian</option>
                                                 
                                                     <option value="MS"> Montserratian</option>
                                                 
                                                     <option value="MA"> Moroccan</option>
                                                 
                                                     <option value="MZ"> Mozambican</option>
                                                 
                                                     <option value="NA"> Namibian</option>
                                                 
                                                     <option value="NR"> Nauruan</option>
                                                 
                                                     <option value="NP"> Nepalese</option>
                                                 
                                                     <option value="NC"> New Caledonian</option>
                                                 
                                                     <option value="NZ"> New Zealander</option>
                                                 
                                                     <option value="NI"> Nicaraguan</option>
                                                 
                                                     <option value="NG"> Nigerian</option>
                                                 
                                                     <option value="NE"> Nigerien</option>
                                                 
                                                     <option value="NU"> Niuean</option>
                                                 
                                                     <option value="NF"> Norfolk Islander</option>
                                                 
                                                     <option value="KP"> North Korean</option>
                                                 
                                                     <option value="MP"> Northern Mariana Islander</option>
                                                 
                                                     <option value="NO"> Norwegian</option>
                                                 
                                                     <option value="BA"> of Bosnia and Herzegovina</option>
                                                 
                                                     <option value="VA"> of the Holy See (of the Vatican) </option>
                                                 
                                                     <option value="OM"> Omani</option>
                                                 
                                                     <option value="PK"> Pakistani</option>
                                                 
                                                     <option value="PW"> Palauan</option>
                                                 
                                                     <option value="PS"> Palestinian Occ. Territories</option>
                                                 
                                                     <option value="PA"> Panamanian</option>
                                                 
                                                     <option value="PG"> Papua New Guinean</option>
                                                 
                                                     <option value="PY"> Paraguayan</option>
                                                 
                                                     <option value="PE"> Peruvian</option>
                                                 
                                                     <option value="PL"> Pole</option>
                                                 
                                                     <option value="PF"> Polynesian</option>
                                                 
                                                     <option value="PT"> Portuguese</option>
                                                 
                                                     <option value="PR"> Puerto Rican</option>
                                                 
                                                     <option value="QA"> Qatari</option>
                                                 
                                                     <option value="RE"> Reunionese</option>
                                                 
                                                     <option value="RO"> Romanian</option>
                                                 
                                                     <option value="RU"> Russian</option>
                                                 
                                                     <option value="RW"> Rwandan; Rwandese</option>
                                                 
                                                     <option value="EH"> Sahrawi</option>
                                                 
                                                     <option value="SH"> Saint Helenian</option>
                                                 
                                                     <option value="LC"> Saint Lucian</option>
                                                 
                                                     <option value="SV"> Salvadorian; Salvadoran</option>
                                                 
                                                     <option value="WS"> Samoan</option>
                                                 
                                                     <option value="SM"> San Marinese</option>
                                                 
                                                     <option value="ST"> São Toméan</option>
                                                 
                                                     <option value="SA"> Saudi Arabian</option>
                                                 
                                                     <option value="SN"> Senegalese</option>
                                                 
                                                     <option value="RS"> Serbian</option>
                                                 
                                                     <option value="SC"> Seychellois</option>
                                                 
                                                     <option value="SL"> Sierra Leonean</option>
                                                 
                                                     <option value="SG"> Singaporean</option>
                                                 
                                                     <option value="SK"> Slovak</option>
                                                 
                                                     <option value="SI"> Slovene</option>
                                                 
                                                     <option value="SB"> Solomon Islander</option>
                                                 
                                                     <option value="SO"> Somali</option>
                                                 
                                                     <option value="ZA"> South African</option>
                                                 
                                                     <option value="GS"> South Georgia &amp; South Sandwich</option>
                                                 
                                                     <option value="KR"> South Korean</option>
                                                 
                                                     <option value="SU"> Soviet Union</option>
                                                 
                                                     <option value="ES"> Spaniard</option>
                                                 
                                                     <option value="LK"> Sri Lankan</option>
                                                 
                                                     <option value="PM"> St-Pierrais; Miquelonnais</option>
                                                 
                                                     <option value="SD"> Sudanese</option>
                                                 
                                                     <option value="SR"> Surinamer</option>
                                                 
                                                     <option value="SJ"> Svalbard &amp; Jan Mayen Islands</option>
                                                 
                                                     <option value="SZ"> Swazi</option>
                                                 
                                                     <option value="SE"> Swede</option>
                                                 
                                                     <option value="CH"> Swiss</option>
                                                 
                                                     <option value="SY"> Syrian</option>
                                                 
                                                     <option value="TW"> Taiwanese</option>
                                                 
                                                     <option value="TJ"> Tajik</option>
                                                 
                                                     <option value="TZ"> Tanzanian</option>
                                                 
                                                     <option value="TH"> Thai</option>
                                                 
                                                     <option value="TG"> Togolese</option>
                                                 
                                                     <option value="TK"> Tokelauan</option>
                                                 
                                                     <option value="TO"> Tongan</option>
                                                 
                                                     <option value="TT"> Trinidadian; Tobagonian</option>
                                                 
                                                     <option value="TN"> Tunisian</option>
                                                 
                                                     <option value="TR"> Turk</option>
                                                 
                                                     <option value="TM"> Turkmen</option>
                                                 
                                                     <option value="TC"> Turks and Caicos Islander</option>
                                                 
                                                     <option value="TV"> Tuvaluan</option>
                                                 
                                                     <option value="UM"> U.S. Minor Outlaying Islands</option>
                                                 
                                                     <option value="UG"> Ugandan</option>
                                                 
                                                     <option value="UA"> Ukrainian</option>
                                                 
                                                     <option value="GB"> United Kingdom</option>
                                                 
                                                     <option value="UY"> Uruguayan</option>
                                                 
                                                     <option value="VI"> US Virgin Islander</option>
                                                 
                                                     <option value="UZ"> Uzbek</option>
                                                 
                                                     <option value="VU"> Vanuatuan</option>
                                                 
                                                     <option value="VE"> Venezuelan</option>
                                                 
                                                     <option value="VN"> Vietnamese</option>
                                                 
                                                     <option value="VC"> Vincentian</option>
                                                 
                                                     <option value="WF"> Wallisian; Futunan; Wallis and Futuna Islander</option>
                                                 
                                                     <option value="YE"> Yemeni</option>
                                                 
                                                     <option value="YU"> Yugoslavia</option>
                                                 
                                                     <option value="ZM"> Zambian</option>
                                                 
                                                     <option value="ZW"> Zimbabwean</option>
                                                 
                                             </select>
                  </div>
             </div>
             <div id="room-1" class="wgtfrmrow">
                 <span class="wgthtlroombox">
                     <b> Room 1</b>
                  </span>
                 <span class="wgthtlpax">
                    <label>Adults(18 + years)</label>
                        <select  name="adtRoom-1" id="adtRoom-1">
                            <option selected="selected" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <input type="hidden" value="0" id="PrevChildCount-1" name="PrevChildCount-1"/>
                 </span>
                 <span class="wgthtlpax">
                    <label>Children(till 18 years)</label>
                        <select name="chdRoom-1" id="chdRoom-1">
                           <option selected="selected" value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                        </select>
                 </span>
            </div>
             <div style="display:none;" id="room-2" class="wgtfrmrow">
                 <span class="wgthtlroombox">
                     <b>Room 2</b>
                  </span>
                 <span class="wgthtlpax">
                    <label>Adults(18 + years)</label>
                    <select name="adtRoom-2" id="adtRoom-2" class="hl_agecount">
                        <option selected="selected" value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <input type="hidden" value="0" id="PrevChildCount-2" name="PrevChildCount-2"/>
                 </span>
                 <span class="wgthtlpax">
                    <label>Children(till 18 years)</label>
                    <select name="chdRoom-2" id="chdRoom-2"  class="hl_agecount">
                           <option selected="selected" value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                    </select>
                 </span>
            </div>
             <div style="display:none;" id="room-3" class="wgtfrmrow">
                 <span class="wgthtlroombox">
                     <b>Room 3</b>
                  </span>
                 <span class="wgthtlpax">
                    <label>Adults(18 + years)</label>
                    <select name="adtRoom-3" id="adtRoom-3" class="hl_agecount">
                        <option selected="selected" value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <input type="hidden" value="0" id="PrevChildCount-3" name="PrevChildCount-3"/>
                 </span>
                 <span class="wgthtlpax">
                    <label>Children(till 18 years)</label>
                    <select name="chdRoom-3" id="chdRoom-3"  class="hl_agecount">
                           <option selected="selected" value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                    </select>
                 </span>
            </div>
             <div style="display:none;" id="room-4" class="wgtfrmrow">
                 <span class="wgthtlroombox">
                     <b>Room 4</b>
                  </span>
                <span class="wgthtlpax">
                    <label>Adults(18 + years)</label>
                    <select name="adtRoom-4" id="adtRoom-4" class="hl_agecount">
                        <option selected="selected" value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <input type="hidden" value="0" id="PrevChildCount-4" name="PrevChildCount-4"/>
                 </span>
                 <span class="wgthtlpax">
                    <label>Children(till 18 years)</label>
                    <select name="chdRoom-4" id="chdRoom-4"  class="hl_agecount">
                           <option selected="selected" value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                    </select>
                 </span>
            </div>
             
            <div id="childDetails" style="display: none;">
            <b>Specify ages of children at time of travel:</b>
             <div id="ChildBlock-1" class="wgtfrmrow" style="display:none;">
                 <span class="wgthtlchldbox">
                    <b>Room 1</b>
                 </span>
                 <span id="ChildBlock-1-Child-1" style="display:none;" class="wgthtlpax">
                    <label id="ChildBlock-1-ChildTxt-1" style="display:none;">Child 1</label>
                        <select  id="ChildBlock-1-ChildAge-1" name="ChildBlock-1-ChildAge-1">
                            <option selected="selected" value="-1">Age?</option>
                            <option value="0">&lt;1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                        </select>
                 </span>
                 <span id="ChildBlock-1-Child-2" style="display:none;" class="wgthtlpax">
                    <label id="ChildBlock-1-ChildTxt-2" style="display:none;">Child 2</label>
                        <select id="ChildBlock-1-ChildAge-2" name="ChildBlock-1-ChildAge-2" class="chld_age_count">
                            <option selected="selected" value="-1">Age?</option>
                            <option value="0">&lt;1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                        </select>
                 </span>
            </div>
             <div class="wgtfrmrow" id="ChildBlock-2" style="display:none;">
                <span class="wgthtlchldbox">
                   <b>Room 2</b>
                </span>
                 <span id="ChildBlock-2-Child-1" style="display:none;" class="wgthtlpax">
                    <label id="ChildBlock-2-ChildTxt-1" style="display:none;">Child 1</label>
                        <select id="ChildBlock-2-ChildAge-1" name="ChildBlock-2-ChildAge-1">
                            <option selected="selected" value="-1">Age?</option>
                            <option value="0">&lt;1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                        </select>
                 </span>
                 <span id="ChildBlock-2-Child-2" style="display:none;" class="wgthtlpax">
                    <label id="ChildBlock-2-ChildTxt-2" style="display:none;">Child 2</label>
                        <select id="ChildBlock-2-ChildAge-2" name="ChildBlock-2-ChildAge-2">
                            <option selected="selected" value="-1">Age?</option>
                            <option value="0">&lt;1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                        </select>
                 </span>
            </div>
             <div class="wgtfrmrow" id="ChildBlock-3" style="display:none;">
                 <span class="wgthtlchldbox">
                        <b>Room 3</b>
                 </span>
                 <span id="ChildBlock-3-Child-1" style="display:none;" class="wgthtlpax">
                    <label id="ChildBlock-3-ChildTxt-1" style="display:none;">Child 1</label>
                        <select id="ChildBlock-3-ChildAge-1" name="ChildBlock-3-ChildAge-1">
                            <option selected="selected" value="-1">Age?</option>
                            <option value="0">&lt;1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                        </select>
                 </span>
                 <span id="ChildBlock-3-Child-2" style="display:none;"  class="wgthtlpax">
                    <label id="ChildBlock-3-ChildTxt-2" style="display:none;">Child 2</label>
                        <select id="ChildBlock-3-ChildAge-2" name="ChildBlock-3-ChildAge-2">
                            <option selected="selected" value="-1">Age?</option>
                            <option value="0">&lt;1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                        </select>
                 </span>
            </div>
             <div class="wgtfrmrow" id="ChildBlock-4" style="display:none;">
                <span class="wgthtlchldbox">
                    <b>Room 4</b>
                </span>
                 <span id="ChildBlock-4-Child-1" style="display:none;" class="wgthtlpax">
                    <label id="ChildBlock-4-ChildTxt-1" style="display:none;">Child 1</label>
                        <select id="ChildBlock-4-ChildAge-1" name="ChildBlock-4-ChildAge-1">
                            <option selected="selected" value="-1">Age?</option>
                            <option value="0">&lt;1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                        </select>
                 </span>
                 <span  id="ChildBlock-4-Child-2" style="display:none;" class="wgthtlpax">
                    <label id="ChildBlock-4-ChildTxt-2" style="display:none;">Child 2</label>
                        <select id="ChildBlock-4-ChildAge-2" name="ChildBlock-4-ChildAge-2" >
                            <option selected="selected" value="-1">Age?</option>
                            <option value="0">&lt;1</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                        </select>
                 </span>
            </div>
           </div>
             <div class="wgtfrmrow">
               <div class="wgtfrmleft">
                     <label>Star Rating:</label>
                        <select name="Rating" id="Rating">
                            <option value="0" selected="selected">Show All</option>
                            <option value="1">1 Star or less</option>
                            <option value="2">2 Star or less</option>
                            <option value="3">3 Star or less</option>
                            <option value="4">4 Star or less</option>
                            <option value="5">5 Star or less</option>
                            <option value="6">1 Star or more</option>
                            <option value="7">2 Star or more</option>
                            <option value="8">3 Star or more</option>
                            <option value="9">4 Star or more</option>
                            <option value="10">5 Star or more</option>
                        </select>
                   </div>
                <div class="wgtfrmright">
                   <label>Hotel Name:</label>
                   <input type="text" name="HotelName" id="HotelName" value=""/>
                </div>
              </div>
             
            <div class="wgtfrmrow">
                <a href="#!" class="wgtsearchbtn fright" id="hotelSearch">Search Hotel</a>
            </div>
          </div>
        <!--hotels End-->
       </div>
    </form>
    </div>
    <div id="buses" class="tab-pane fade">
		<div class="wgtfrmbox">
          <form id="BusForm" action="" method="post">
      
       <!--Bus Starts-->
                  <div id="Bus" >
                        <div style="display: none;" class="error_msg" id="errMsg">
                          <span id="errMessage"></span>
                        </div>
                        <div class="wgtfrmrow">
							<div class="wgtfrmleft">
								<label>Leaving from</label>
								<input type="text" onblur="markout(this, 'Enter any city')" onfocus="markin(this, 'Enter any city')"
										 value="Enter any city" name="busSource" id="busSource" />
								<input type="hidden" value="" name="hidCityCode" id="hidCityCode" />
								<input type="hidden" value="" name="SourceId" id="SourceId" />
							</div>
							<div class="wgtfrmright">
								<label>Going to</label>
                                <select id="selectedDestinationCity" name="selectedDestinationCity">
                                    <option selected="selected" value="0">Choose From List</option>
                                </select>
                                <input type="hidden" value="" name="BusDestination" id="BusDestination" />
                                <input type="hidden" value="" name="DestinationId" id="DestinationId" />
                            </div>
						</div>	
                        <div class="wgtfrmrow">
							<div class="wgtfrmleft">  
								<label>Departure</label>
								<input type="text" id="departureDate" name="departureDate" value="DD/MM/YYYY" readonly="readonly" class="wgtcal"/>
                            </div>
						</div>
						<div class="wgtfrmrow">						
							<a href="#!" id="busSearch" class="wgtsearchbtn fright"><span class="fa fa-bus wgticon"></span> Search Bus</a>
                        </div>  
                    </div>
       <!--Bus ends here-->
   
          </form>
     </div>
    </div>
    <div id="packages" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

    </div>
    Surrender.  And we’ll take you where you want to go, but didn’t know.
			</div>
   </div> 
        <script src="js/page.js"></script>
		<script>
			$(function() {

				Page.init();

			});
		</script>   

            </body>
</html>
