@extends('layouts..app')
@section('content')

<div class="container mt-4">
    <legend>Course</legend>
    
        <div class="card card-info mt-4">
        <div class="card-header">
            ALL
             
        </div>
      <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <th>Course Name</th>
                    <th>Status</th>
                    <th>Description</th>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr>
                        <td>{{$course->name}}</td>
                        <td>{{$course->is_active}}</td>
                        <td>{{$course->description}}</td>
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