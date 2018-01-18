@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <legend>Courses</legend>
    <div class="card card-info mt-4">
        <div class="card-header">
            Courses table
             <a href="{{ route('courses.create') }}" class="btn btn-info btn-sm float-right">Create Course</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <th>Actions</th>
                    <th>Status</th>
                    <th>Course Name</th>
                    <th>Description</th>
                    
                </thead>
                <tbody>
                   @foreach($courses as $course)
                    <tr>
                        <td>
                            <a href="{{ route('courses.edit',['id' => $course->id ] ) }}" class="btn btn-sm btn-outline-info">Edit</a>
                           <button type="button" id="{{$course->id}}" class="btn btn-sm btn-outline-danger btnDelete">Delete</button>
                        </td>
                        <td>{{ $course->is_active }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
           A Total Registered Course of {{ $courses->count() }}
        </div>
        </div>
    </div>
</div>

<!--MODAL FOR DELETE--> 
<div class="modal fade" id="mod-course-delete" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="POST" action="{{ url('course/delete') }}">
        {{ csrf_field() }}
        <div class="modal-header">
          <h5 class="modal-title">Delete course?</h5>
        </div>
        <div class="modal-body">
          <label>Are you sure you want to delete this course?</label>
          <input type="hidden" id="course_id" name="course_id_delete">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="btn-delete-topic-no" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-primary" id="btn-delete">Yes</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
@endpush
@push('scripts')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#myTable').DataTable();
</script>
<script type="text/javascript">
    $('.btnDelete').click(function(){
        $('#course_id').val(this.id);
        $('#mod-course-delete').modal('show');
    });
</script>
@endpush
