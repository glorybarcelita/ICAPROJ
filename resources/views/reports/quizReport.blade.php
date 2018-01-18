@extends('layouts..app')
@section('content')

<div class="container mt-4">
    <legend>Quiz</legend>
    {{-- <div class="btn-group">
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Subjects
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">All</a>
        <a class="dropdown-item" href="#">Lecturer</a>
        <a class="dropdown-item" href="#">Students</a>
       
      </div> --}}
    </div>
        <div class="card card-info mt-4">
        <div class="card-header">
            Quiz Question Statistics
             
        </div>
      <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <th>Action</th>
                    <th>Subject > Topic > Question </th>
                    <th>No. of answered correct</th>
                    <th>No. of answered wrong</th>
                    
                </thead>
                <tbody>
                   @foreach($quizes as $quiz)
                    <tr>
                        <td>
                                <a href="{{ url('reports/quiz/stats/'.$quiz->id) }}" class="btn btn-outline-info">View Statistics</a>
                        </td>
                        <td>
                            @foreach($syllabuses as $syllabus)
                                @if($syllabus->id == $quiz->syllabus_id )
                                        {{App\Models\Subjects::find($syllabus->subject_id)->name}} > {{ $syllabus->name}} > {{ $quiz->question }}
                                @endif
                            @endforeach
                        </td>
                        <td>{{$quiz->correct_count}}</td>
                        <td>{{$quiz->wrong_count}}</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
           A Total Registered Course of 
        </div>
      </div>
    </div>


    <h5>Count</h5>


@endsection
@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.0/css/buttons.dataTables.min.css">
@endpush
@push('scripts')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.0/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.5.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#myTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    });
</script>
<script type="text/javascript">
    $('.btnDelete').click(function(){
        $('#sub_id').val(this.id);
        $('#mod-subject-delete').modal('show');
    })
        
</script>
@endpush