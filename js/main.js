$(document).ready(function () {
setTimeout('tp()',1000);
});

function tp() {
		$('#myPicker').timepicker(
			{
    			'step': '30',
    			'minTime': '9:00am',
    			'maxTime': '10:00pm',
    			'timeFormat': 'h:i A',
			}
		);	
        $('#myPicker1').timepicker(
			{
    			'step': '30',
    			'minTime': '9:00am',
    			'maxTime': '10:00pm',
    			'timeFormat': 'h:i A',
			}
		);
}