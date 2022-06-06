@extends('backend.layouts.app')
@section('title')
Company
@endsection
<style>
    .ck-editor__editable {min-height: 300px;}
    .bootstrap-tagsinput {
        border: 1px solid black;
        width: 900px;
    }
</style>
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card" id="card">
                @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="card-header">
                    <h4 class="card-title">All Users ({{$count}})</h4>
                </div>

                <div class="card-header float-right" style="margin-top: -69px;">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#new_user">Add New</button>
                </div>
                <div class="card-header float-right" style="margin-top: -58px;">
                    <div class="form-outline">
                        <form class="" id="sort_users" action="" method="GET">
                            <input id="search-focus" type="text" value="{{$search}}" name="search" placeholder="Search" class="form-control" style="height: 40px;width: 250px;" />
                        </form>
                    </div>
                </div>

                {{-- Modal Add user --}}
                <div class="col-md-4 offset-4 text-center modal fade" id="new_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="new_userModal">Add New Company</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="now-ui-icons users_circle-08"></i>
                                            </div>
                                        </div>
                                        <input value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Name" type="text" name="name" required>
                                    </div>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="now-ui-icons ui-1_email-85"></i>
                                            </div>
                                        </div>
                                        <input value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="Email" type="email" name="email" required>
                                    </div>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="now-ui-icons tech_mobile"></i>
                                            </div>
                                        </div>
                                        <input value="{{old('logo')}}" class="form-control @error('logo') is-invalid @enderror" type="file" name="logo" required>
                                    </div>
                                    <div class="card-footer ">
                                        <button type="submit" class="btn btn-primary btn-round btn-lg">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <img src="" alt="" id="loader">
                        <table class="table" id="datatable">

                            <thead>
                                <tr>
                                    <th class="">Name</th>
                                    <th class="">Email</th>
                                    <th class="r">Logo</th>
                                    <th class=" text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($company as $item)
                                <tr>
                                    <td class="">{{ $item->name }}</td>
                                    <td class="">{{ $item->email }}</td>
                                    <td class=""><img src="http://localhost:8000/{{ $item->logo }}" alt="" srcset=""></td>
                                    </td>
                                    <td class="td-actions text-center">

                                        <a href="{{route('company.edit',['company'=>$item->id])}}" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                                            <i title="Edit This User" class="now-ui-icons ui-2_settings-90"></i>
                                        </a>
                                        {{-- <a href="{{route('company.destroy',['company'=>$item->id])}}" onclick="return confirm('Are you sure?')" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                                            <i title="Delete This User" class="now-ui-icons ui-1_simple-remove"></i>
                                        </a> --}}
                                        <form action="{{route('company.destroy',['company'=>$item->id])}}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                               <button type="submit" class="btn btn-danger btn-sm btn-icon"><i title="Delete This User" class="now-ui-icons ui-1_simple-remove"></i></button>
                                           </form>
                                    </td>
                                </tr>

                                @empty <h3 class="text-center">No Data found</h3>
                                @endforelse

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $company->onEachSide(5)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')


@endsection
