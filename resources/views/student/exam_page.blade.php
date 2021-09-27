@extends('layout.e_exam_template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="heading-large text-center p-4 m-4">Bangla</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 align-vertical-center">
                <h2 class="subheading-small">Question: <span id="current_question_index">1</span>/<span id="total_question">3</span></h2>
                <div class="question container">
                    <h2 id="question">Question</h2>
                    <form action="" class="answer_section">
                        <div class="radio_input_group">
                            <input type="radio" name="question2" id="option1" /> <span>Option 1</span><br />
                        </div>
                        <div class="radio_input_group">
                            <input type="radio" name="question2" id="option2" /> <span>Option 2</span><br />
                        </div>
                        <div class="radio_input_group">
                            <input type="radio" name="question2" id="option3" /> <span>Option 3</span><br />
                        </div>
                        <div class="radio_input_group">
                            <input type="radio" name="question2" id="option4" /> <span>Option 4</span><br />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-12 align-right">
                <p><i class="bi bi-stopwatch"></i> <b id="timer">--:--</b></p>
                <img src="{{ asset('sourcefile_exam') }}/img/question_side_image.jpg" class="question_side_image" width="550px" alt="">
                <div class="action_buttons">                    
                    <a href="#" class="btn btn-primary" onclick="serveNextQuestion()" id="action_button">Next</a>                   
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        let current_page = 1;
        let total = 0;
        let exam_id = {{ $exam_id }};
        let response_record = [];
        async function serveQuestion() {
            get(routes.serveExamQuestion(exam_id, current_page)).then(response => { 
                console.log(response)
                current_page = response.current_page
                total = response.total

                document.getElementById("question").innerHTML = response.data[0].question;
                document.getElementById("option1").innerHTML = response.data[0].option1;
                document.getElementById("option2").innerHTML = response.data[0].option2;
                document.getElementById("option3").innerHTML = response.data[0].option3;
                document.getElementById("option4").innerHTML = response.data[0].option4;

                document.getElementById("total_question").innerHTML = response.total;
                document.getElementById("current_question_index").innerHTML = response.current_page;

                if(current_page === total) {
                    var action_button = document.getElementById("action_button");
                    action_button.innerHTML = 'Submit'
                }
            });
            
        }   
        function serveNextQuestion()
        {
            if(current_page !== total) {
                current_page += 1;
                serveQuestion();
            } 
            
        }   
        serveQuestion();  
        window.onload = function () {
            var fiveMinutes = 5;
            var display = document.querySelector('#timer');
            startTimer(fiveMinutes, display, function() {
                console.log("Time finished")
            });
        };
    </script>
@endsection