<?php include("header.php");?> 
  

<!--travel-box start-->
<section id="que"  class="travel-box" style="background: #0088ff;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="q-a-box">
                     <h2 class="qa-title">
                        Take Our Quiz
                    </h2>
                    <p> 
                    </p>

                    <form id="QuestionForm" method="post">

                        <div class="row">
 
                            <?php   
                                $sqlgetquedata = "SELECT * FROM questions";
                                $resultgetquedata = mysqli_query($conn, $sqlgetquedata);

                                if (mysqli_num_rows($resultgetquedata) > 0) { 
                                  while($rowresultgetquedata = mysqli_fetch_assoc($resultgetquedata)) {
                            ?> 

                            <div class="col-md-<?php echo $rowresultgetquedata["grid"]; ?>"> 
                                <div class="question-box"> 
                                    <div class="custom-input-group">
                                        <h4 class="question"> <?php echo $rowresultgetquedata["question"]; ?></h4>
 
                                        <?php   
                                            $question_id=$rowresultgetquedata["id"];
                                            $sqlgetqueopt = "SELECT * FROM que_options WHERE question_id='$question_id'";
                                            $resultgetqueopt = mysqli_query($conn, $sqlgetqueopt);

                                            if (mysqli_num_rows($resultgetqueopt) > 0) { 
                                              while($rowrgetqueopt = mysqli_fetch_assoc($resultgetqueopt)) {
                                        ?>
 
                                        <label class="radio-inline">
                                          <input type="radio" name="<?php echo $rowrgetqueopt["name"]; ?>" value="<?php echo $rowrgetqueopt["question_option"]; ?>" required ><?php echo $rowrgetqueopt["question_option"]; ?>
                                        </label> 

                                        <?php
                                              }
                                            } else { 
                                            }
                                        ?>
                                
                                    </div>
                                </div>
                            </div>

                            <?php
                                  }
                                } else { 
                                }
                            ?>
 

                            <div class="col-md-12">  
                                <div class="question-box"> 
                                    <div class="text-center"> 
                                        <button type="button" id="QuestionFormSubmit" class="appsLand-btn subscribe-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                             


                        </div>
 

                    </form> 

                </div> 

             </div><!--/.row-->
        </div><!--/.packages-content-->
    </div><!--/.container-->





<style type="text/css">
    .stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>


<style type="text/css">
    .col-xs-100 {
        width: 10%;
    }

    .col-xs-100 {
        float: left;
    }

    .col-xs-100 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }
</style>


<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-100"> 
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p><small>Question</small></p>
            </div>
            <div class="stepwizard-step col-xs-100"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p><small>Question</small></p>
            </div>
            <div class="stepwizard-step col-xs-100"> 
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p><small>Question</small></p>
            </div>
            <div class="stepwizard-step col-xs-100"> 
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p><small>Question</small></p>
            </div>
            <div class="stepwizard-step col-xs-100"> 
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                <p><small>Question</small></p>
            </div>
            <div class="stepwizard-step col-xs-100"> 
                <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                <p><small>Question</small></p>
            </div>
            <div class="stepwizard-step col-xs-100"> 
                <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                <p><small>Question</small></p>
            </div>
            <div class="stepwizard-step col-xs-100"> 
                <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
                <p><small>Question</small></p>
            </div>
            <div class="stepwizard-step col-xs-100"> 
                <a href="#step-9" type="button" class="btn btn-default btn-circle" disabled="disabled">9</a>
                <p><small>Question</small></p>
            </div>
            <div class="stepwizard-step col-xs-100"> 
                <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled">10</a>
                <p><small>Question</small></p>
            </div>
        </div>
    </div>
    
    <form role="form">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">Shipper</h3>
            </div>
            <div class="panel-body">
        ddddddd
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title">Destination</h3>
            </div>
            <div class="panel-body">
        dddddddddd
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title">Schedule</h3>
            </div>
            <div class="panel-body">
           ddddddd
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
                 <h3 class="panel-title">Cargo</h3>
            </div>
            <div class="panel-body">
     ddddddd
                <button class="btn btn-success pull-right" type="submit">Next!</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-5">
            <div class="panel-heading">
                 <h3 class="panel-title">Cargo</h3>
            </div>
            <div class="panel-body">
     ddddddd
                <button class="btn btn-success pull-right" type="submit">Next!</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-6">
            <div class="panel-heading">
                 <h3 class="panel-title">Cargo</h3>
            </div>
            <div class="panel-body">
     ddddddd
                <button class="btn btn-success pull-right" type="submit">Next!</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-7">
            <div class="panel-heading">
                 <h3 class="panel-title">Cargo</h3>
            </div>
            <div class="panel-body">
     ddddddd
                <button class="btn btn-success pull-right" type="submit">Next!</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-8">
            <div class="panel-heading">
                 <h3 class="panel-title">Cargo</h3>
            </div>
            <div class="panel-body">
     ddddddd
                <button class="btn btn-success pull-right" type="submit">Next!</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-9">
            <div class="panel-heading">
                 <h3 class="panel-title">Cargo</h3>
            </div>
            <div class="panel-body">
     ddddddd
                <button class="btn btn-success pull-right" type="submit">Next!</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-10">
            <div class="panel-heading">
                 <h3 class="panel-title">Cargo</h3>
            </div>
            <div class="panel-body">
     ddddddd
                <button class="btn btn-success pull-right" type="submit">Finish!</button>
            </div>
        </div>

   
    </form>
</div>

</section><!--/.packages-->
<!--packages end-->
 
  
 

<?php include("footer.php");?>

<script type="text/javascript">
    $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});
</script>



