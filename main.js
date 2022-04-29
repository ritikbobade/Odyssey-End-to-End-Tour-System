   
$(document).ready(function(){ 
    $('#QuestionFormSubmit').on("click keypress", function () {
      $("#QuestionFormSubmit").hide();
      //$("#problem-submit-button-load").show();
        $.ajax({
          type: 'POST',
          url: 'submit-que-ans.php',
          data: $('#QuestionForm').serialize() // getting filed value in serialize form
        })
        .done(function(data){ // if getting done then call.  
            data=data.trim();
 
            $('#SuggDestBox').html(data);
            $('#alerterror').html(data);

            $('#QuizBox').hide();
            $("#QuizBox").css("display", "none");
            
            $('#SuggBox').show();
            
            // $('#SuggBox').focus();


            //var arr = data.split('-');

          //$('#PartialOrderSubmitResponse').html(arr[1]); 
          //swal("Good", ""+arr[1]+"", "success");

          //$('#order-id').val(arr[0]);
         // $('#delivery-mobile').attr('readonly', true);   
          //$("#problem-submit-button-load").hide();
        })
      .fail(function() { // if fail then getting message 
      //alert( "Posting failed." ); 

      //swal("Error", ""+data+"", "error");

         // $('#PartialOrderSubmitResponse').html(data); 
         // $("#QuestionFormSubmit").show();
          //$("#problem-submit-button-load").hide();

          
          $('#alerterror').html(data);
      });  
    return false; 
    });
  });


