@extends('layouts..app')
@section('content')
<a href="{{ URL::previous()  }}" class="btn btn-md btn-outline-secondary">Go Back</a>
    <br>
   
      <div class="col-lg-12">
          <h3 class="text-info">{{ $subject->name }} &nbsp;&nbsp;&nbsp;
            @if(Auth::user()->role_id==3)
              @if ($subject->is_active == 0 ) 
                <button type="button" class="btn btn-md btn-outline-primary" data-toggle="modal" data-target="#mod-subject">Activate Subject</button> 
              @endif
            @elseif(Auth::user()->role_id==2)
              @if ($subject->is_active == 1 ) 
                <button type="button" class="btn btn-md btn-outline-primary" data-toggle="modal" data-target="#mod-subject">Deactivate Subject</button> 
              @endif
            @endif
          </h3>
         <h6>Year Level: {{ $subject->year_level }}</h6>
     <muted class="text-secondary"><strong>Description: </strong>{{ $subject->description }}</muted>
     <hr>
     
      @if(Auth::user()->role_id == 3)
        @if ($subject->is_active == 0 ) 
          <a href="{{ url('learning-resources/subject/create').'/'.$subject_id }}" class="btn btn-md btn-info mt-3 pull-right">Add Topic</a>
        @endif
        <a href="{{ url('exams/'.$subject_id) }}" class="btn btn-md btn-info mt-3 pull-right">View Exam</a>
      @elseif(Auth::user()->role_id == 4)
         @if(count(App\Exam::where('subject_id', $subject->id)->get())>0)
            @if(count(App\StudentExam::where('student_id', Auth::user()->id)->where('subject_exam_id', $subject_id)->get())==2 && count(App\ExamRecord::where('student_id', Auth::user()->id)->where('quiz_id', $subject_id)->get())==0 || count(App\ExamRecord::where('student_id', Auth::user()->id)->where('quiz_id', $subject_id)->get())==1)
              <button type="button" class="btn btn-md btn-info mt-3 pull-right btnExam" data-toggle="modal" data-target="#mod-take-exam" disabled>Take Exam</button>
            {{-- @elseif(count(App\ExamRecord::where('student_id', Auth::user()->id)->where('quiz_id', $subject_id)->get())==1) --}}
            @else
              <button type="button" class="btn btn-md btn-info mt-3 pull-right btnExam" data-toggle="modal" data-target="#mod-take-exam">Take Exam</button>
            @endif
            {{-- <a href="{{ url('exams/'.$subject_id) }}" class="btn btn-md btn-info mt-3 pull-right btnExam">Take Exam</a> --}}
          @endif
      @elseif(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        @if(count(App\Exam::where('subject_id', $subject->id)->get())>0)
        <a href="{{ url('exams/'.$subject_id) }}" class="btn btn-md btn-info mt-3 pull-right">View Exam</a>
         @endif
      @endif
   
    </div>
    <div class="card card-info  my-3 ml-3">
        @foreach($topics as $topic)
          <div class="row">
            @if(Auth::user()->role_id==4)
              <h4 class="text-dark col-lg-12 mx-3 mt-2">{{ $topic->name }}
                  <br>
                  @if(count(App\Quiz::where('syllabus_id', $topic->id)->get())>0)
                  <a href="{{ url('quiz/'.$subject->id.'/'.$topic->id) }}" class="btn btn-sm btn-secondary mt-2 pull-right btn{{$topic->id}}">Take quiz</a>
                  <div class="div{{$topic->id}}"></div>
                  @endif
              </h4>
            @elseif(Auth::user()->role_id==3)
              <h4 class="text-dark col-lg-12 mx-3 mt-2">{{ $topic->name }} <br> 
                {{-- @if(count(App\Quiz::where('syllabus_id', $topic->id)->get())>0) --}}
                <a href="{{ url('quiz/'.$subject->id.'/'.$topic->id) }}" class="btn btn-sm btn-secondary mt-2 pull-right">View quiz</a>
                {{-- @endif --}}
              </h4>
            @else
              <h4 class="text-dark col-lg-12 mx-3 mt-2">{{ $topic->name }} <br> 
                @if(count(App\Quiz::where('syllabus_id', $topic->id)->get())>0)
                <a href="{{ url('quiz/'.$subject->id.'/'.$topic->id) }}" class="btn btn-sm btn-secondary mt-2 pull-right">View quiz</a>
                @endif
              </h4>
            @endif
            @if(count($subject_topics) > 0)
              @foreach($subject_topics as $subject_topic)
                @if($subject_topic->syllabus_id == $topic->id)
                <div class="col-sm-3">
                  <div class="card border-info my-3 mx-3" style="max-width: 25rem;">
                    <div class="card-header">
                      <h5><a href="{{ url('learning-resources/subject/details').'/'.$subject_id.'/'.$topic->id.'/'.$subject_topic->id }}" class="label text-info">{{$subject_topic->topic_title}}</a></h5>
                    </div>
                    
                    <div class="card-body">
                        <h6 class="text-info">Note</h6>
                        <p class="card-text">{{ str_limit($subject_topic->note, 10) }} </p>
                    </div>
                    @if(Auth::user()->role_id == 3)
                      <div class="card-footer">
                          <a href="{{url('learning-resources/subject/update/'.$subject_id.'/'.$subject_topic->id)}}" class="btn btn-sm btn-outline-success">Update</a>
                          <button class="btn btn-sm btn-outline-danger btnDelete" type="button" id="{{$subject_topic->id}}">Delete</button>
                      </div>
                    @endif
                  </div>
                </div>
                @endif
              @endforeach
            @else
              <p class="col-lg-12" style="padding-left: 50px;">No Topics Added.</p>
            @endif
          </div>



<div class="modal fade" id="mod-take-exam" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="POST" action="{{ url('student-exam/create') }}">
        {{ csrf_field() }}
        <div class="modal-header">
          <h5 class="modal-title">Take {{ $subject->name }} exam ?</h5>
        </div>
        <div class="modal-body">
          <label>Take note that taking exam cannot be interrupted. Take exam at your own risk. If it is interupted twice, you can no longer take the exam.</label>
          <input type="hidden" name="subject_exam_id" value="{{$subject_id}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-primary" >Yes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!--MODAL FOR DELETE--> 
<div class="modal fade" id="mod-subject-topic" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="POST" action="{{ url('subjecttopic/delete') }}">
        {{ csrf_field() }}
        <div class="modal-header">
          <h5 class="modal-title">Delete Subject topic?</h5>
        </div>
        <div class="modal-body">
          <label>Are you sure you want to delete this Subject topic?</label>
          <input type="hidden" name="subject_topic_id" id="del_sub_top_id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-primary" >Yes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="mod-subject" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="POST" action="{{ url('subjects/change-status') }}">
        {{ csrf_field() }}
        <div class="modal-header">
          <h5 class="modal-title">{{$subject->is_active == 0 ? 'Activate':'Deactivate'}} Subject?</h5>
        </div>
        <div class="modal-body">
          <label>Are you sure you want to {{$subject->is_active == 0 ? 'activate':'deactivate'}} this Subject?</label>
          <input type="hidden" name="subject_id" value="{{$subject->id}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="btn-delete-topic-no" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-primary" id="btn-delete">Yes</button>
        </div>
      </form>
    </div>
  </div>
</div>
        @endforeach
    </div>

@endsection
@push('scripts')
  <script type="text/javascript">
    $( document ).ready(function() {
      var fail_count = 0;
      @foreach($topics as $topic)
        @if(count($quiz_record)>0)
          @foreach($quiz_record as $record)
            @if($record->quiz_id == $topic->id)
              @if($record->pass_fail == 'pass')
                $('.btn{{$record->quiz_id}}').hide();
              @else
                fail_count = fail_count + 1;
              @endif
              $('.div{{$record->quiz_id}}').show();
              $('.div{{$record->quiz_id}}').html(' Quiz result: {{strtoupper($record->pass_fail)}} ');
            @endif
          @endforeach

        @endif
      @endforeach
                if(fail_count >= 1){
            $('.btnExam').hide();
          }
    });

    $('.btnDelete').click(function(){
      $('#del_sub_top_id').val(this.id);
      $('#mod-subject-topic').modal('show');
    });
  </script>
@endpush
