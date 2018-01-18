@extends('layouts..app')
@section('content')

<div class="container mt-4">
    <legend>Exam</legend>
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
            Exam Statistics
             
        </div>
      <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <th>Action</th>
                    <th>Subject</th>
                    <th>Passed</th>
                    <th>Failed</th>
                    
                </thead>
                <tbody>
                   @foreach($distinct_exams as $distinct_exam)
                    <tr>
                        <td><a href="{{ url('reports/exam/question/stats/'.$distinct_exam->quiz_id) }}" class="btn btn-outline-info">View Statistics</a></td>
                        <td>
                            {{ App\Models\Subjects::find($distinct_exam->quiz_id)->name }}
                        </td>
                        <td>{{ count(App\ExamRecord::where('quiz_id', $distinct_exam->quiz_id)->where('pass_fail', 'pass')->get()) }}</td>
                        <td>{{ count(App\ExamRecord::where('quiz_id', $distinct_exam->quiz_id)->where('pass_fail', 'fail')->get()) }}</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>


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