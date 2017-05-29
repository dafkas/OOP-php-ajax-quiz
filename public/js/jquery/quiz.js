$(document).ready(function() {
	    
	$(".playQuizForm").hide();
	$(".playQuizForm").first().show();
	
	$(".endQuiz").hide();
	
	var countForms = $(".playQuizForm").length;
	var counter = 0;
	var score = 0;
	
	
	
	$('.playQuizForm').submit(function(event){
		
		event.preventDefault();
		counter++
		
		$(this).hide();
		$(this).next().show()
		
		if(counter > countForms)
		{
			$(".endQuiz").show();
		}
		
		var radio = $(".playQuizRadio:checked");
		
		if(radio.is(":checked"))
		{
			if(radio.next().val() == 1)
			{
				score++;
			}
		}
			
		$(".showScore").html( "Je hebt " + score + " van de " + countForms + " vragen goed");
		
		$(this).remove();
		
	});  
});



