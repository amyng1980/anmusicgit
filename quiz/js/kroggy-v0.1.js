$(function(){
	var progress = $('#progress'),
		progressKeeper = $('#progressKeeper'),
		notice = $("#notice"),
		progressWidth = 548,
		answers= kroggy.answers,
		userAnswers = [],
		questionLength= answers.length,
		questionsStatus = $("#questionNumber")
		questionsList = $(".question");
        
    	function checkAnswers(){
            var resultArr = [], 
			flag = false;

            for (i = 0; i < answers.length; i++){                
                if (answers[i] == userAnswers[i]){
                    flag = true;
                }else{
                    flag = false;
                }
                resultArr.push(flag);
            }
            return resultArr;
		}
		  
		function roundReloaded(num, dec) {
			var result = Math.round(num*Math.pow(10,dec))/Math.pow(10,dec);
			return result;
		}
			
		function judgeSkills(score) {
			var returnString;
			if (score==100) returnString = "Execellent!"
			else if (score>70) returnString = "Great job! Keep up the good work."
			else if (score>50) returnString = "Good try! But you can surely do better than this."					
			else returnString = "Well, please revise the lesson and try again."
			return returnString;
		}

		progressKeeper.hide();
		notice.hide();
		$("#main-quiz-holder input:radio").attr("checked", false);
			
		$('.answers li input').click(function() {
			$(this).parents('.answers').children('li').removeClass("selected");
        	$(this).parents('li').addClass('selected');

 		});
	
		//Start button	  
		$('.btnStart').click(function(){
 			$(this).parents('.questionContainer').fadeOut(500, function(){
                $(this).next().fadeIn(500, function(){ progressKeeper.show(); });
            });
					 
			// questionsStatus.text("");
			// return false;    
        });	  
			  
			
		//Next button
        $('.btnNext').click(function(){
			var tempCheck = $(this).parents('.questionContainer').find('input[type=radio]:checked');
            if (tempCheck.length == 0) {
                notice.fadeIn(300);return false; //show the error message if no answer is checked
            }

			notice.hide(); //hide the error message when 1 radio button is checked
            $(this).parents('.questionContainer').fadeOut(500, function(){
                $(this).next().fadeIn(500);
            });
                
            progress.animate({ width: progress.width() + Math.round(progressWidth/questionLength), }, 500 );
			return false;
        });			
				

    //Previous button
    $('.btnPrev').click(function(){
		notice.hide(); //don't show the error message since the previous question has been answered
        $(this).parents('.questionContainer').fadeOut(500, function(){
            $(this).prev().fadeIn(500)
        });
                
        progress.animate({ width: progress.width() - Math.round(progressWidth/questionLength), }, 500 );
		return false;
    });
				
           
    //Finish button of the last question
    $('.btnShowResult').click(function(){
		var tempCheck = $(this).parents('.questionContainer').find('input[type=radio]:checked');
        if (tempCheck.length == 0) {
            notice.fadeIn(300);return false;
        }
        
        notice.hide();
        var tempArr = $('input[type=radio]:checked');
            for (var i = 0, ii = tempArr.length; i < ii; i++) {
            userAnswers.push(tempArr[i].getAttribute('data-key'));
        }

        progressKeeper.hide();
        var results = checkAnswers(), 
			resultSet = '',
			trueCount = 0,
			answerKey = ' Answers <br />',
			score; 

        for (var i = 0, ii = results.length; i < ii; i++){
            if (results[i] == true) trueCount++;
            resultSet += '<div class="resultRow"> Question #' + (i + 1) + (results[i]== true ? "<div class='correct'><span>Correct</span></div>": "<div class='wrong'><span>Wrong</span></div>") + "</div>";
			answerKey += (i+1) +" : "+ answers[i] +' &nbsp;  &nbsp;  &nbsp;   ';
        }

		score =  roundReloaded(trueCount / questionLength*100, 2);
		answerKey = "<div id='answer-key'>" + answerKey + "</div>";	 
        resultSet = '<h2 class="qTitle">' +judgeSkills(score) + '</br>' + ' You scored '+score+'%</h2>' + resultSet + answerKey;

        $('#resultKeeper').html(resultSet).show();
		$(this).parents('.questionContainer').fadeOut(500, function(){
            $(this).next().fadeIn(500);
        });

		return false;
    });
})