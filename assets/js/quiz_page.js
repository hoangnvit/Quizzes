$(document).ready(function(){
    
    $("#no_correct").html("0");
    $("#no_total").html("0");
 function load_question(){$.ajax({
    type: "POST",
    url: "index.php?/Test/get_random", 
    data: {},
    dataType: "json",  
    cache:false,
    success: 
         function(data){
          // console.log(data['question']);
          $("#notice").html('');
           $("#question").html('<p>'+data['question']+'</p>');
           $("#option1").html(data['option1']);
           $("#option2").html(data['option2']);
           $("#option3").html(data['option3']);
           $("#option4").html(data['option4']);
           answer=data['answer'];
       
         
          $("#no_total").html(parseInt($("#no_total").text()) +1);
          
         }
     });}


     load_question();

     $("#next").hide();




                $("#send").click(function(){ 
                    $("#next").show();
                    $("#send").hide();

                    var radios = document.getElementsByName('genderS');

                for (var i = 0, length = radios.length; i < length; i++) {
                if (radios[i].checked) {
                    // do whatever you want with the checked radio
                    alert(radios[i].value);

                    // only one radio can be logically checked, don't check the rest
                    break;
                }
                }
                    var radios=document.getElementsByName('opt');
                    for( var i=0; i<radios.length;i++){

                        if(radios[i].checked){

                            user_answer=radios[i].value;
                            break;
                        }
                    }
                    console.log(user_answer);

                    if(user_answer!==answer)$("#notice").html("<p> Wrong anser. Correct anwser is "+ answer+"</p>");
                    else{


                        $("#notice").html("Great");
                    
                        $("#no_correct").html(parseInt($("#no_correct").text()) +1);
                    }
                    
                });

               $("#next").click(function(){

                $("#next").hide();
                $("#send").show();
                load_question();

               });




});