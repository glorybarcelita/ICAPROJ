@extends('layouts..app')
@section('content')
<a href="{{ URL::previous()  }}" class="btn btn-md btn-outline-secondary">Go Back</a>
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
            Exam Question Statistics
             
        </div>
      <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <th>Subject > Question </th>
                    <th>No. of answered correct</th>
                    <th>No. of answered wrong</th>
                    
                </thead>
                <tbody>
                   @foreach($questions as $question)
                    <tr>
                        <td>
                            {{App\Models\Subjects::find($question->subject_id)->name}} > {{$question->question}}
                        </td>
                        <td>{{$question->correct_count}}</td>
                        <td>{{$question->wrong_count}}</td>
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