@extends('backend.layouts.app')
@section('title')
    Users|Edit
@endsection
@section('content')
    <div class="content">
        <div class="col-md-4 offset-4">
            <div class="card card-signup text-center">
                <div class="card-header ">
                    <h4 class="card-title">Company User</h4>
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
                    <form method="POST" action="{{ route('company.update',['company'=>$company->id]) }}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </div>
                            </div>
                            <input value="{{$company->name}}" class="form-control @error('name') is-invalid @enderror"
                                placeholder="Name" type="text" name="name" required>
                        </div>
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </div>
                            </div>
                            <input value="{{$company->email}}" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email" type="email" name="email" required>
                        </div>
                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="now-ui-icons tech_mobile"></i>
                                </div>
                            </div>
                            <input value="{{old('logo')}}" class="form-control @error('logo') is-invalid @enderror" type="file" name="logo">
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
