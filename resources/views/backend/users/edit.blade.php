@extends('backend.layouts.app')
@section('title')
    Users|Edit
@endsection
@section('content')
    <div class="content">
        <div class="col-md-4 offset-4">
            <div class="card card-signup text-center">
                <div class="card-header ">
                    <h4 class="card-title">Edit User</h4>
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
                    <form method="POST" action="{{ route('admin.user.update') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </div>
                            </div>
                            <input value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Name" type="text" name="name" required>
                        </div>
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </div>
                            </div>
                            <input value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email" type="email" name="email" required>
                        </div>
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="now-ui-icons tech_mobile"></i>
                                </div>
                            </div>
                            <input value="{{$user->mobile}}" class="form-control @error('mobile') is-invalid @enderror"
                                placeholder="Mobile" type="number" name="mobile" required>
                        </div>
                        <div class="card-footer ">
                            <button type="submit" class="btn btn-primary btn-round btn-lg">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
