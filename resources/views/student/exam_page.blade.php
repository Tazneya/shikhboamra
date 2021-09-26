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
                <h2 class="subheading-small">Question: {{ $current_page }}/{{ $total_page }}</h2>
                <div class="question container">
                    <h2>{{  $question->question }}</h2>
                    <form action="" class="answer_section">
                        <div class="radio_input_group">
                            <input type="radio" name="question2" /> <span>{{  $question->option1 }}</span><br />
                        </div>
                        <div class="radio_input_group">
                            <input type="radio" name="question2" /> <span>{{  $question->option2 }}</span><br />
                        </div>
                        <div class="radio_input_group">
                            <input type="radio" name="question2" /> <span>{{  $question->option3 }}</span><br />
                        </div>
                        <div class="radio_input_group">
                            <input type="radio" name="question2" /> <span>{{  $question->option4 }}</span><br />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-12 align-right">
                <p><i class="bi bi-stopwatch"></i> <b id="timer">--:--</b></p>
                <img src="{{ asset('sourcefile_exam') }}/img/question_side_image.jpg" class="question_side_image" width="550px" alt="">
                <div class="action_buttons">
                    @if ($next_page_url !== null)
                        <a href="{{ $next_page_url }}" class="btn btn-primary">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_js')
    <script>
        window.onload = function () {
            var fiveMinutes = 5;
            var display = document.querySelector('#timer');
            startTimer(fiveMinutes, display, function() {
                console.log("Time finished")
            });
        };
    </script>
@endsection