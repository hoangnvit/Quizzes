
<h2 class="text-center text-primary"><?= $title ?></h2>
<div class="border border-2 border-warning rounded px-3 py-3">
<h3> Question:</h3>
<div id="question" class="h3 text-info"></div>
<hr>
<div id="answer">
        <div class="form-check">
        <input class="form-check-input" type="radio" name="opt" id="exampleRadios1" value="a" checked>
        <label class="form-check-label" for="exampleRadios1">
            <p id="option1"></p>
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="opt" id="exampleRadios2" value="b">
        <label class="form-check-label" for="exampleRadios2">

        <p id="option2"></p>
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="opt" id="exampleRadios2" value="c">
        <label class="form-check-label" for="exampleRadios2">
        <p id="option3"></p>
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="opt" id="exampleRadios2" value="d">
        <label class="form-check-label" for="exampleRadios2">
        <p id="option4"></p>
        </label>
        </div>
</div>
<div id="notice"></div>
<div>

    <input class='button' type="button" name="send" id="send" value="Answer">
    <input class='button' type="button" name="next" id="next" value="Next Question">
</div>

</div>
<div class="h2 text-success">
     <span>  Correct Quiz:</span> <span id="no_correct" class='label' > </span>  
      <span>/ Total Quizes: </span> <span id="no_total" class='label' > </span>
</div>


