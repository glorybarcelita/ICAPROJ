@extends('layouts..app')
@section('content')

<div class="container mt-4">
    <legend>Learning Resources</legend>

</div>
        <div class="card card-info mt-4">
        <div class="card-header">
            ALL
             
        </div>
      <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <th>Action</th>
                    <th>Course Name</th>
                    <th>Lecturer</th>
                    
                </thead>
                <tbody>
                    @foreach($subjects as $subject)
                    <tr>
                        <td><a href="{{url('reports/learningresources').'/'.$subject->id}}" class="btn btn-outline-info">View Syllabus</a></td>
                        <td>{{$subject->name}}</td>
                        <td>
                            @if($subject->user_id )
                            {{App\User::find($subject->user_id )->firstname}} {{App\User::find($subject->user_id )->lastname}}
                            @else
                            No assigned lecturer
                            @endif
                        </td>
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