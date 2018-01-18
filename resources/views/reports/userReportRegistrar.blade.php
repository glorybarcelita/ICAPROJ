@extends('layouts..app')
@section('content')

<div class="container mt-4">
    <legend>Users</legend>
    <div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Reports
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{ url('reports/user') }}">All</a>
    <a class="dropdown-item" href="{{ url('reports/user/registrar') }}">Registrar</a>
    <a class="dropdown-item" href="{{ url('reports/user/academic-head') }}">Academic Head</a>
    <a class="dropdown-item" href="{{ url('reports/user/lecturer') }}">Lecturer</a>
    <a class="dropdown-item" href="{{ url('reports/user/student') }}">Students</a>
  </div>
</div>
        <div class="card card-info mt-4">
        <div class="card-header">
            ALL Registrar
             
        </div>
      <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Is active</th>
                    
                </thead>
                <tbody>
                   @foreach($users as $user)
                    <tr>
                        <td>{{ $user->firstname }} {{ $user->middlename }} {{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->is_active}}</td>
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