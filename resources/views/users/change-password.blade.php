@extends('layouts.app')
@section('content')
<div class="container mt-4">
  <div class="card card-info">
    <div class="card-header">
      Change password
    </div>
    <div class="card-body">
      @include('shared.alerts')
        <form method="POST" action="{{ url('users/change-password') }}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="old_password" class="col-sm-2 col-form-label">Old Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="old_password" name="old_password" value="" placeholder="Old Password">
            </div>
          </div>
          <div class="form-group row">
            <label for="new_password" class="col-sm-2 col-form-label">New Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="new_password" name="new_password" value="" placeholder="New Password">
            </div>
          </div>
          <div class="form-group row">
            <label for="confirm_new_password" class="col-sm-2 col-form-label">Confirm new password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" value="" placeholder="Confirm new password">
            </div>
          </div>
          <center><button type="submit" class="btn btn-primary">Save</button></center>
        </form>
    </div>
  </div>
</div>
@endsection
@push('scripts')

@endpush