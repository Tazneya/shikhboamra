@extends('layout.e_exam_template')
@section('content')
<div class="container content">
    <div class="row">
        <div class="col">
            <h1 class="heading-large text-center p-4 m-4">Bangla</h1>
        </div>
    </div>
    <div class="answers_heading m-3">
        <div class="question_count">Question: {{ $correct_answer_count }}/{{ count($answers) }}</div>
        <div class="heading">Answer</div>
        <div class="obtaining_marks">Obtaining Marks: {{ $st_exam->obtaining_marks }}</div>
    </div>
    <div class="all_answers">
        @foreach ($answers as $answer)
            @if ($answer->correct)
                <div class="question container">
                    <h4>{{ $answer->question->question }}</h4>
                    <form action="" class="answer_section">
                        <div class="radio_input_group {{ $answer->response === 1 ? 'correct_answer' : ''}}">
                            <input type="radio" name="question2" {{ $answer->response === 1 ? 'checked' : ''}} /> <span>{{ $answer->question->option1 }}</span><br />
                        </div>
                        <div class="radio_input_group {{ $answer->response === 2 ? 'correct_answer' : ''}}">
                            <input type="radio" name="question2" {{ $answer->response === 2 ? 'checked' : ''}} /> <span>{{ $answer->question->option2 }}</span><br />
                        </div>
                        <div class="radio_input_group {{ $answer->response === 3 ? 'correct_answer' : ''}}">
                            <input type="radio" name="question2" {{ $answer->response === 3 ? 'checked' : ''}} /> <span>{{ $answer->question->option3 }}</span><br />
                        </div>
                        <div class="radio_input_group {{ $answer->response === 4 ? 'correct_answer' : ''}}">
                            <input type="radio" name="question2" {{ $answer->response === 4 ? 'checked' : ''}} /> <span>{{ $answer->question->option4 }}</span><br />
                        </div>
                    </form>
                </div>
            @else
                <div class="question container">
                    <h4>{{ $answer->question->question }}</h4>
                    <form action="" class="answer_section">
                        <div class="radio_input_group {{ $answer->response === 1 ? 'wrong_answer' : ''}}">
                            <input type="radio" name="question2" {{ $answer->response === 1 ? 'checked' : ''}} /> <span>{{ $answer->question->option1 }}</span><br />
                        </div>
                        <div class="radio_input_group {{ $answer->response === 2 ? 'wrong_answer' : ''}}">
                            <input type="radio" name="question2" {{ $answer->response === 2 ? 'checked' : ''}} /> <span>{{ $answer->question->option2 }}</span><br />
                        </div>
                        <div class="radio_input_group {{ $answer->response === 3 ? 'wrong_answer' : ''}}">
                            <input type="radio" name="question2" {{ $answer->response === 3 ? 'checked' : ''}} /> <span>{{ $answer->question->option3 }}</span><br />
                        </div>
                        <div class="radio_input_group {{ $answer->response === 4 ? 'wrong_answer' : ''}}">
                            <input type="radio" name="question2" {{ $answer->response === 4 ? 'checked' : ''}} /> <span>{{ $answer->question->option4 }}</span><br />
                        </div>
                    </form>
                </div>
            @endif

        @endforeach
{{--
        <div class="question container">
            <h4>1. Which items help you create a 100% complete profile? (Please check all that apply.)</h4>
            <form action="" class="answer_section">
                <div class="radio_input_group correct_answer">
                    <input type="radio" name="question2" checked /> <span>A professional-looking profile photo of yourself</span><br />
                </div>
                <div class="radio_input_group">
                    <input type="radio" name="question2" /> <span>A title, overview, and employment history</span><br />
                </div>
                <div class="radio_input_group wrong_answer">
                    <input type="radio" name="question2" /> <span>A list of your top skills</span><br />
                </div>
                <div class="radio_input_group">
                    <input type="radio" name="question2" /> <span>A portfolio of work</span><br />
                </div>
            </form>
        </div>
        <div class="question container">
            <h4>1. Which items help you create a 100% complete profile? (Please check all that apply.)</h4>
            <form action="" class="answer_section">
                <div class="radio_input_group correct_answer">
                    <input type="radio" name="question2" checked /> <span>A professional-looking profile photo of yourself</span><br />
                </div>
                <div class="radio_input_group">
                    <input type="radio" name="question2" /> <span>A title, overview, and employment history</span><br />
                </div>
                <div class="radio_input_group wrong_answer">
                    <input type="radio" name="question2" /> <span>A list of your top skills</span><br />
                </div>
                <div class="radio_input_group">
                    <input type="radio" name="question2" /> <span>A portfolio of work</span><br />
                </div>
            </form>
        </div>
        <div class="question container">
            <h4>1. Which items help you create a 100% complete profile? (Please check all that apply.)</h4>
            <form action="" class="answer_section">
                <div class="radio_input_group correct_answer">
                    <input type="radio" name="question2" checked /> <span>A professional-looking profile photo of yourself</span><br />
                </div>
                <div class="radio_input_group">
                    <input type="radio" name="question2" /> <span>A title, overview, and employment history</span><br />
                </div>
                <div class="radio_input_group wrong_answer">
                    <input type="radio" name="question2" /> <span>A list of your top skills</span><br />
                </div>
                <div class="radio_input_group">
                    <input type="radio" name="question2" /> <span>A portfolio of work</span><br />
                </div>
            </form>
        </div> --}}
    </div>
    <a href="{{ route('show_course_details', ['id' => session('recent_course_id') ]) }}" class="btn btn-primary float-right mt-3 mb-3">Go to Exam Page</a>
</div>
@endsection
