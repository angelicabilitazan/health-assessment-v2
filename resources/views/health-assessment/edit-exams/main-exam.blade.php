@extends('layout.master')
@section('contents')
  <form class="form-deta" id="form-deta" method="POST" action="{{ route('seeend')}}">
      @csrf
    <div class="container form-container" id="h-form-eh">
       <a href="{{route('listahan')}}" class="btn btn-warning submit-btn" >
          Back to list
       </a>
      <h2 class="text-center mb-4">Health Assessment Form</h2>
      
        @include('health-assessment.exams.exam-1')
        @include('health-assessment.exams.exam-2')
        @include('health-assessment.exams.exam-3')
        @include('health-assessment.exams.exam-4')
        @include('health-assessment.exams.exam-5')
        @include('health-assessment.exams.exam-6')
        @include('health-assessment.exams.exam-7')
        @include('health-assessment.exams.exam-8')
        @include('health-assessment.exams.exam-9')
        @include('health-assessment.exams.exam-10')
        @include('health-assessment.exams.exam-11')
        @include('health-assessment.exams.exam-12')
        @include('health-assessment.exams.exam-13')
        @include('health-assessment.exams.exam-14')
        @include('health-assessment.exams.exam-15')
        @include('health-assessment.exams.exam-16')
        @include('health-assessment.exams.exam-17')

        <div class="mt-5">
          <button
            type="submit"
            class="btn btn-success submit-btn"
          >
           Save!
          </button>
         
        </div>
       
         
        {{-- <div class="mt-5">
          <button
            type="button"
            class="btn btn-success submit-btn"
            onclick="window.print();"
          >
            Download PDF
          </button>
        </div>
       --}}
       
    </div>
    </form>
    
@endsection