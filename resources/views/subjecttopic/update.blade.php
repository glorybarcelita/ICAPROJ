@extends('layouts.app')
@section('content')
<a href="{{ url('learning-resources/subject').'/'.$subject_id }}" class="btn btn-md btn-outline-secondary">Go Back</a>

<div class="container mt-4">
    <div class="card card-info">
        <div class="card-header">
            Update Syllabus Topic
        </div>
         <div class="card-body">
            <form method="POST" action="{{ url('learning-resources/subject/update') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('shared.alerts')
                <input type="hidden" class="form-control" id="" name="subject_topic_id" value = "{{ $subject_topics->id }}" >

                <div class="form-group row">
                  <label for="user-status" class="col-sm-2 col-form-label">Topic Title</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="" name="title" value = "{{ $subject_topics->topic_title }}"  placeholder="Title">
                  </div>
                </div>
                
              
              <div class="form-group row">
                  <label for="user-status" class="col-sm-2 col-form-label">Note</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="note" placeholder="Description">{{ $subject_topics->note }}</textarea>             
                  </div>
              </div>

              <div class="form-group row">
                  <label for="user-status" class="col-sm-2 col-form-label">Video Links:</label>
                  <div class="col-sm-10">
                    <div id="input_link_add">
                      <div class='input-group'>
                        <input type="text" class="form-control" name="links[]" placeholder="Video links">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-primary add_link_control">Add more links</button>
                        </span>
                      </div>
                      @foreach(App\Models\TopicVideo::where('subject_topic_id', $subject_topics->id)->get() as $link)
                      <div class="remove_this">
                        <br>
                        <div class="input-group">
                           <input type="text" class="form-control" name="links[]" value="{{$link->link}}" placeholder="Video links">
                          <span class="input-group-btn">
                            <button class="btn btn-danger remove_button" type="button">
                              Remove link
                            </button>
                          </span>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>

              <div class="form-group row">
                  <label for="user-status" class="col-sm-2 col-form-label">Attachment:</label>
                  <div class="col-sm-10">
                    <input type="file"  class="form-control" name="docs[]" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint, application/pdf" multiple>         
                  </div>
              </div>
              <center><button type="submit" class="btn btn-primary">Save</button></center>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
  // dynamic add question
  var linkContainer = $('#input_link_add'); //Input field wrapper
  var addLink = $('.add_link_control'); //Add button selector
  $(addLink).click(function(){ //Once add button is clicked
    $(linkContainer).append(
      '<div class="remove_this">'+
        '<br>'+
        '<div class="input-group">'+
          ' <input type="text" class="form-control" name="links[]" placeholder="Video links">'+
          '<span class="input-group-btn">'+
            '<button class="btn btn-danger remove_button" type="button">'+
              'Remove link'+
            '</button>'+
          '</span>'+
        '</div>'+
      '</div>'); 
  });
  linkContainer.on('click', '.remove_button', function(e){ //Once remove button is clicked
    e.preventDefault();
    $(this).closest('.remove_this').remove(); //Remove field html
  });
</script>
@endpush