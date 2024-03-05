@extends('layout')
@section('title', 'Nursing')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exam Nursing</title>
    </head>
<main class="container">
    <div class="">
    <div id="timer" class="d-flex justify-content-end" style="font-weight:bold; font-size: 36px; position: fixed; top: 0; right: 0; padding: 20px;">00:00:00</div>
    <style>
    .blink-red {color: red; animation: blink 1s infinite alternate; } @keyframes blink {from {opacity: 1;} to {opacity: 0;}}
</style>
    </div>
    <form id="dataForm">

    <div class="col-12 mb-4">
    <h class="lightened-heading " style="font-weight: bold;">COURSES: <span style="opacity: 0.7;">NURSING</span></h>  
        <div style="padding-top: 10px;">
        <h class="lightened-heading " style="font-weight: bold; "><span style="color: white;"></span>NAME:</h>
        <input type="text" name="Name" required>
        <h class="lightened-heading " style="font-weight: bold; padding-top: 3px;"><span style="color: white;">dd</span>IC:</h>
        <input type="text" name="NumberId" required>
        <h class="lightened-heading " style="font-weight: bold"><span style="color: white;">we</span>TEL:</h>
        <input type="text" name="NumberPhone" required>
        </div>

        
    </div>
    

    <h class="lightened-heading " style="font-weight: bold">QUESTION1</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question1" value="A" required> A University</div>
        <div><input type="radio" name="Question1" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question1" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION2</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question2" value="A" required> A University</div>
        <div><input type="radio" name="Question2" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question2" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION3</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question3" value="A" required> A University</div>
        <div><input type="radio" name="Question3" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question3" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION4</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question4" value="A" required> A University</div>
        <div><input type="radio" name="Question4" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question4" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION5</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question5" value="A" required> A University</div>
        <div><input type="radio" name="Question5" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question5" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION6</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question6" value="A" required> A University</div>
        <div><input type="radio" name="Question6" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question6" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION7</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question7" value="A" required> A University</div>
        <div><input type="radio" name="Question7" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question7" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION8</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question8" value="A" required> A University</div>
        <div><input type="radio" name="Question8" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question8" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION9</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question9" value="A" required> A University</div>
        <div><input type="radio" name="Question9" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question9" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION10</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question10" value="A" required> A University</div>
        <div><input type="radio" name="Question10" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question10" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION11</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question11" value="A" required> A University</div>
        <div><input type="radio" name="Question11" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question11" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION12</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question12" value="A" required> A University</div>
        <div><input type="radio" name="Question12" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question12" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION13</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question13" value="A" required> A University</div>
        <div><input type="radio" name="Question13" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question13" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION14</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question14" value="A" required> A University</div>
        <div><input type="radio" name="Question14" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question14" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION15</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question15" value="A" required> A University</div>
        <div><input type="radio" name="Question15" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question15" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION16</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question16" value="A" required> A University</div>
        <div><input type="radio" name="Question16" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question16" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION17</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question17" value="A" required> A University</div>
        <div><input type="radio" name="Question17" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question17" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION18</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question18" value="A" required> A University</div>
        <div><input type="radio" name="Question18" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question18" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION19</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question19" value="A" required> A University</div>
        <div><input type="radio" name="Question19" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question19" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION20</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question20" value="A" required> A University</div>
        <div><input type="radio" name="Question20" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question20" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION21</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question21" value="A" required> A University</div>
        <div><input type="radio" name="Question21" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question21" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION22</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question22" value="A" required> A University</div>
        <div><input type="radio" name="Question22" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question22" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION23</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question23" value="A" required> A University</div>
        <div><input type="radio" name="Question23" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question23" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION24</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question24" value="A" required> A University</div>
        <div><input type="radio" name="Question24" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question24" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION25</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question25" value="A" required> A University</div>
        <div><input type="radio" name="Question25" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question25" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION26</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question26" value="A" required> A University</div>
        <div><input type="radio" name="Question26" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question26" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION27</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question27" value="A" required> A University</div>
        <div><input type="radio" name="Question27" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question27" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION28</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question28" value="A" required> A University</div>
        <div><input type="radio" name="Question28" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question28" value="C" required> Career & Education Platform</div>
       </div>
    </div>

    <h class="lightened-heading " style="font-weight: bold">QUESTION29</h>
    <div class="col-12 mb-4">
        <h>What is YEG Academy</h>
      <div class="radio-inline">
        <div><input type="radio" name="Question29" value="A" required> A University</div>
        <div><input type="radio" name="Question29" value="B" required> IT Consultation Company</div>
        <div><input type="radio" name="Question29" value="C" required> Career & Education Platform</div>
       </div>
    </div>
     
    <div class="col-12 mb-4">
    <h class="lightened-heading " style="font-weight: bold">QUESTION30</h>
        <div><h class="">There have an old man and kids are crossing the road, what must we hit first </h></div>
        <div><input type="text" name="Question30" required></div>
    </div>


    <div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
    </div>
    </form>
</main>

<script>
    document.getElementById('dataForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var formData = new FormData(this);
        // Retrieve the selected value from the radio button and add it to the form data
        var selectedOption = document.querySelector('input[name="Question1"]:checked');
        formData.append("Question1", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question2"]:checked');
        formData.append("Question2", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question3"]:checked');
        formData.append("Question3", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question4"]:checked');
        formData.append("Question4", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question5"]:checked');
        formData.append("Question5", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question6"]:checked');
        formData.append("Question6", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question7"]:checked');
        formData.append("Question7", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question8"]:checked');
        formData.append("Question8", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question9"]:checked');
        formData.append("Question9", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question10"]:checked');
        formData.append("Question10", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question11"]:checked');
        formData.append("Question11", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question12"]:checked');
        formData.append("Question12", selectedOption ? selectedOption.value : '');
        
        var selectedOption = document.querySelector('input[name="Question13"]:checked');
        formData.append("Question13", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question14"]:checked');
        formData.append("Question14", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question15"]:checked');
        formData.append("Question15", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question16"]:checked');
        formData.append("Question16", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question17"]:checked');
        formData.append("Question17", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question18"]:checked');
        formData.append("Question18", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question19"]:checked');
        formData.append("Question19", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question20"]:checked');
        formData.append("Question20", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question21"]:checked');
        formData.append("Question21", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question22"]:checked');
        formData.append("Question22", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question23"]:checked');
        formData.append("Question23", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question24"]:checked');
        formData.append("Question24", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question25"]:checked');
        formData.append("Question25", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question26"]:checked');
        formData.append("Question26", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question27"]:checked');
        formData.append("Question27", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question28"]:checked');
        formData.append("Question28", selectedOption ? selectedOption.value : '');

        var selectedOption = document.querySelector('input[name="Question29"]:checked');
        formData.append("Question29", selectedOption ? selectedOption.value : '');
        
        var selectedOption = document.querySelector('input[name="Question30"]:checked');
        formData.append("Question30", selectedOption ? selectedOption.value : '');


        fetch('https://script.google.com/macros/s/AKfycbzgl-85M7SBLwjKtwRfnU-B8Hf2TzyHm_3m_JOmOVa1g7hBXZ0ZMHqbzTnX1AFoaRLL/exec', {
            method: 'POST',
            body: formData})
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();})
        .then(data => {
            console.log(data); // Success message from Google Apps Script
            alert('Form submitted successfully!');})
        .catch(error => {
            console.error('There was an error!', error);
            alert('An error occurred while submitting the form.');});
    });
</script>
<script>
const timerElement = document.getElementById('timer');
const submitButton = document.querySelector('.btn-primary')

let hours = 0;
let minutes = 0;
let seconds = 0;
let isButtonEnabled = true;


function updateTimer() {
    seconds++;
    if (seconds === 60) {
        minutes++;
        seconds = 0;
    }
    // untuk tukar set timer
    if (minutes === 60) {
        hours++;
        minutes = 0;
        // submitButton.disabled = true;
        // isButtonEnabled = false;
    }
    if (hours === 24) {
        hours = 0;
        submitButton.disabled = true;
        isButtonEnabled = false;
    }
    if (hours === 1) {
      timerElement.classList.add('blink-red');
    }
    const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    timerElement.textContent = formattedTime;
}
setInterval(updateTimer, 5);

submitButton.addEventListener('click', function() {
    if (!isButtonEnabled) {
        alert('Button disabled after one minute.');
        return false; // Prevent form submission
    }
});
</script>



</main>

@endsection





   