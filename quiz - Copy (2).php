  
<style type="text/css">
    .stepwizard-step p {
        margin-top: 7px;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
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
    color: #000;
    opacity: 1;
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
    font-size: 13px;
    line-height: 1.428571429;
    border-radius: 15px;
    color: #000;
    opacity: 1;
}

#QuestionForm {
    padding-top: 35px;
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

    .checkbox, .radio {
        position: relative;
        display: block;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 25px;
        font-size: 15px;
    }

    #SuggBox {
        display: none;
    }
</style>





<div class="container"   > 
    <div class="" id="SuggBox">
        <h2 class="qa-title" style="margin-bottom: 50px;">
        Our Destination Recommendation
    </h2>
        <div class="" id="SuggDestBox">

        </div>
    </div>-
</div>


<div class="container"  id="QuizBox" >
    <h2 class="qa-title" style="margin-bottom: 50px;">
        Take Our Quiz
    </h2>

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
    
    <form role="form" id="QuestionForm" method="post">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">Question 1</h3>
            </div>
            <div class="panel-body">
                <div class="question-box"> 
                    <div class="custom-input-group">
                        <h4 class="question"> What's your favourite type of destination?</h4>
                        <label class="radio">
                          <input type="radio" name="optdestinationtype" required value="historical"  >Cities filled with history and culture
                        </label>  
                        <label class="radio">
                          <input type="radio" name="optdestinationtype"  value="wildlife" >Spotting wildlife
                        </label>  
                        <label class="radio">
                          <input type="radio" name="optdestinationtype" value="adventures"  >Anywhere with outdoor adventures
                        </label> 
                        <label class="radio">
                          <input type="radio" name="optdestinationtype"  value="nature" >Mesmerizing views
                        </label> 
                        <label class="radio">
                          <input type="radio" name="optdestinationtype"  value="pilgrimage" >Pilgrimage sites
                        </label> 
                    </div>
                </div>
                <button class="btn btn-primary book-btn nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title">Question 2</h3>
            </div>
            <div class="panel-body">
                <div class="question-box"> 
                    <div class="custom-input-group">
                        <h4 class="question">Who's your company?</h4>
                        <label class="radio">
                          <input type="radio" name="optcompany" value="Family"  required>Family
                        </label>
                        <label class="radio">
                          <input type="radio" name="optcompany" value="Friends"  >Friends
                        </label>
                        <label class="radio">
                          <input type="radio" name="optcompany" value="Partner" >Partner
                        </label>  
                    </div>
                </div>
                <button class="btn btn-primary book-btn nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title">Question 3</h3>
            </div>
            <div class="panel-body">
                <div class="question-box"> 
                    <div class="custom-input-group">
                        <h4 class="question">What's your favourite time to travel?</h4>
                        <label class="radio">
                          <input type="radio" name="opttime"  value="" required>Summer
                        </label>
                        <label class="radio">
                          <input type="radio" name="opttime" value="Winter" >Winter
                        </label>
                        <label class="radio">
                          <input type="radio" name="opttime" value="Monsoon" >Monsoon
                        </label> 
                        <label class="radio">
                          <input type="radio" name="opttime" value="Spring" >Spring
                        </label> 
                        <label class="radio">
                          <input type="radio" name="opttime" value="Autumn" >Autumn
                        </label> 
                    </div>
                </div>
                <button class="btn btn-primary book-btn nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
                 <h3 class="panel-title">Question 4</h3>
            </div>
            <div class="panel-body">
                <div class="question-box"> 
                    <div class="custom-input-group">
                        <h4 class="question">What's your age group?</h4>
                        <label class="radio">
                          <input type="radio" name="optagegroup" value="Young"  required>Young
                        </label>
                        <label class="radio">
                          <input type="radio" name="optagegroup" value="Mid-aged" >Mid-aged
                        </label>
                        <label class="radio">
                          <input type="radio" name="optagegroup" value="Old" >Old
                        </label>  
                    </div>
                </div>
                <button class="btn btn-primary book-btn nextBtn pull-right" type="button">Next</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-5">
            <div class="panel-heading">
                 <h3 class="panel-title">Question 5</h3>
            </div>
            <div class="panel-body">
                <div class="question-box"> 
                    <div class="custom-input-group">
                        <h4 class="question">What's your budget?</h4>
                        <label class="radio">
                          <input type="radio" name="optbudget" value="10,000"  required >10,000
                        </label>
                        <label class="radio">
                          <input type="radio" name="optbudget" value="25,000" >25,000
                        </label>
                        <label class="radio">
                          <input type="radio" name="optbudget" value="50,000" >50,000
                        </label> 
                        <label class="radio">
                          <input type="radio" name="optbudget" value="75,000" >75,000
                        </label> 
                        <label class="radio">
                          <input type="radio" name="optbudget" value="1,00,000 +" >1,00,000 +
                        </label>  
                    </div>
                </div>
                <button class="btn btn-primary book-btn nextBtn pull-right" type="button">Next</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-6">
            <div class="panel-heading">
                 <h3 class="panel-title">Question 6</h3>
            </div>
            <div class="panel-body">
                <div class="question-box"> 
                    <div class="custom-input-group">
                        <h4 class="question">Which mode of transportation do you prefer?</h4>
                        <label class="radio">
                          <input type="radio" name="opttransportationmode" value="Train"  required >Train
                        </label>
                        <label class="radio">
                          <input type="radio" name="opttransportationmode" value="Car" >Car
                        </label>
                        <label class="radio">
                          <input type="radio" name="opttransportationmode" value="Public transit" >Public transit
                        </label> 
                        <label class="radio">
                          <input type="radio" name="opttransportationmode" value="Airplane" >Airplane
                        </label>  
                    </div>
                </div>
                <button class="btn btn-primary book-btn nextBtn pull-right" type="button">Next</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-7">
            <div class="panel-heading">
                 <h3 class="panel-title">Question 7</h3>
            </div>
            <div class="panel-body">
                <div class="question-box"> 
                    <div class="custom-input-group">
                        <h4 class="question">Where would you rather stay?</h4>
                        <label class="radio">
                          <input type="radio" name="optstay" value="Hotel"  required >Hotel
                        </label>
                        <label class="radio">
                          <input type="radio" name="optstay" value="Luxury Resort" >Luxury Resort
                        </label>
                        <label class="radio">
                          <input type="radio" name="optstay" value="In a tent under the stars" >In a tent under the stars
                        </label> 
                        <label class="radio">
                          <input type="radio" name="optstay" value="Wilderness lodge" >Wilderness lodge
                        </label>  
                    </div>
                </div>
                <button class="btn btn-primary book-btn nextBtn pull-right" type="button">Next</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-8">
            <div class="panel-heading">
                 <h3 class="panel-title">Question 8</h3>
            </div>
            <div class="panel-body">
                <div class="question-box"> 
                    <div class="custom-input-group">
                        <h4 class="question">What do you like to do to relax?</h4>
                        <label class="radio">
                          <input type="radio" name="optrelax" value="Take a bath and read a good book"  required >Take a bath and read a good book
                        </label>
                        <label class="radio">
                          <input type="radio" name="optrelax" value="Watch a new documentary on Netflix" >Watch a new documentary on Netflix
                        </label>
                        <label class="radio">
                          <input type="radio" name="optrelax" value="Get back to nature" >Get back to nature
                        </label> 
                        <label class="radio">
                          <input type="radio" name="optrelax" value="Go for a sunrise hike" >Go for a sunrise hike
                        </label>  
                    </div>
                </div>
                <button class="btn btn-primary book-btn nextBtn pull-right" type="button">Next</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-9">
            <div class="panel-heading">
                 <h3 class="panel-title">Question 9</h3>
            </div>
            <div class="panel-body">
                <div class="question-box"> 
                    <div class="custom-input-group">
                        <h4 class="question">What do you like the most about preparing for a trip?</h4>
                        <label class="radio">
                          <input type="radio" name="optpreparing"  value="Reading about the history and culture of your destination" required >Reading about the history and culture of your destination
                        </label>
                        <label class="radio">
                          <input type="radio" name="optpreparing" value="Planning out all the adventurous activities you'll do" >Planning out all the adventurous activities you'll do
                        </label>
                        <label class="radio">
                          <input type="radio" name="optpreparing" value="Mapping out the route you want to follow and the stops you want to make" >Mapping out the route you want to follow and the stops you want to make
                        </label> 
                        <label class="radio">
                          <input type="radio" name="optpreparing" value="Dreaming about getting slow down and relax" >Dreaming about getting slow down and relax
                        </label>  
                    </div>
                </div>
                <button class="btn btn-primary book-btn nextBtn pull-right" type="button">Next</button>
            </div>
        </div>

        <div class="panel panel-primary setup-content" id="step-10">
            <div class="panel-heading">
                 <h3 class="panel-title">Question 10</h3>
            </div>
            <div class="panel-body">
                <div class="question-box"> 
                    <div class="custom-input-group">
                        <h4 class="question">Which travel essential can't you travel without?</h4>
                        <label class="radio">
                          <input type="radio" name="optessential" value="Hiking boots"  required >Hiking boots
                        </label>
                        <label class="radio">
                          <input type="radio" name="optessential" value="A good book" >A good book
                        </label>
                        <label class="radio">
                          <input type="radio" name="optessential" value="Your favourite playlist" >Your favourite playlist
                        </label> 
                        <label class="radio">
                          <input type="radio" name="optessential" value="Travel journal" >Travel journal
                        </label>  
                        <label class="radio">
                          <input type="radio" name="optessential" value="Camera" >Camera
                        </label>  
                    </div>
                </div>
                <button class="btn btn-success book-btn pull-right" id="QuestionFormSubmit" type="button">Finish!</button>
            </div>
        </div>

   
    </form>
</div>
 

