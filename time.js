$(document).ready(function()
{
	/*
	if((!$('.day1').prop("checked"))&&(!$('.day1').prop("checked"))&&(!$('.day1').prop("checked"))&&(!$('.day1').prop("checked"))&&(!$('.day1').prop("checked")))
   		$('#weekday').hide();
   	else
   		$('#weekday')show();
   	if((!$('.end1').prop("checked"))&&(!$('.end2').prop("checked")))
   		$('#weekend').hide();
   	else
   		$('#weekend').show();*/
   	if($('.day1').prop("checked"))
		$('#weekday').show();
	else if($('.day2').prop("checked"))
		$('#weekday').show();
	else if($('.day3').prop("checked"))
		$('#weekday').show();
	else if($('.day4').prop("checked"))
		$('#weekday').show();
	else if($('.day5').prop("checked"))
		$('#weekday').show();
	else
		$('#weekday').hide();
	if($('.end1').prop("checked"))
   		$('#weekend').show();
   	else if($('.end2').prop("checked"))
   		$('#weekend').show();
   	else
   		$('#weekend').hide();
	$(document).on('change','.week',function()
	{
		if($('.day1').prop("checked"))
			$('#weekday').show();
		else if($('.day2').prop("checked"))
			$('#weekday').show();
		else if($('.day3').prop("checked"))
			$('#weekday').show();
		else if($('.day4').prop("checked"))
			$('#weekday').show();
		else if($('.day5').prop("checked"))
			$('#weekday').show();
		else
			$('#weekday').hide();
		if($('.end1').prop("checked"))
	   		$('#weekend').show();
	   	else if($('.end2').prop("checked"))
	   		$('#weekend').show();
	   	else
	   		$('#weekend').hide();
	});
});
//&&(!$('.day2').prop("checked"))&&(!$('.day3').prop("checked"))&&(!$('.day4').prop("checked"))&&(!$('.day5').prop("checked")))