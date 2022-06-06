@extends('backend.layouts.app')
@section('title')
    Password|Edit
@endsection
@section('content')
    <div class="content">
        <div class="col-md-4 offset-4">
            <div class="card card-signup text-center">
                <div class="card-header ">
                    <h4 class="card-title">Update Password</h4>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body ">
                <form method="POST" action="{{route('admin.password.update')}}">
                        @csrf
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </div>
                            </div>
                            <input  class="form-control @error('current_password') is-invalid @enderror" placeholder="Enter old password" type="text" name="current_password" required>
                        </div>
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </div>
                            </div>
                            <input  class="form-control @error('new_password') is-invalid @enderror" placeholder="Enter new password" type="password" name="new_password" required>
                        </div>
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </div>
                            </div>
                            <input  class="form-control @error('new_confirm_password') is-invalid @enderror" placeholder="Confirmed new password" type="password" name="new_confirm_password" required>
                        </div>
                        <div class="card-footer ">
                            <button type="submit" class="btn btn-primary btn-round btn-lg">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
