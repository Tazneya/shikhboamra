@extends('layout.e_exam_template')
@section('content')
    <div class="cover-img-container">
        <div class="cover-img">
            <img src="{{ asset('sourcefile_exam') }}/img/info.jpg" alt="">
            <div class="details">
            <p>{{ $exam->exam_name}} </p>
            <p><b>Total:</b> {{ $exam->total_marks }}</p>
            <p><b>Time:</b> {{ $exam->durationString }}</p>
                <a href="{{ route('exam_page', ['exam_id' => $exam->id ]) }}" class="btn btn-primary">Start Exam</a>
            </div>
        </div>
    </div>
@endsection