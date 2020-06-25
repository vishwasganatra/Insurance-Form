var rangeSlider = document.getElementById("rs-range-line");
var rangeBullet = document.getElementById("rs-bullet");
var year=10;
var num=rangeSlider.value;
$(document).on('input','#rs-range-line',function (a) {
	num=rangeSlider.value;
	$("#range").text('$'+rangeSlider.value);
	$.ajax({
        url:'action.php',
        type:'POST',
        data:{year:year,range:num},

        success:function(response){
            $("#result").html(response);
        }
    });
})
function year1(myval) 
{
	if(myval.value!=65)
	{	
		$('#year').text(myval.value+' years');
	}
	else
	{
		$('#year').text('To age '+myval.value);
	}
	year=myval.value;
	$.ajax({
        url:'action.php',
        type:'POST',
        data:{year:year,range:num},

        success:function(response){
            $("#result").html(response);
        }
    });
}