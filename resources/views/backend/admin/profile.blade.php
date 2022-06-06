@extends('backend.layouts.app')
@section('title')
    Users|Edit
@endsection
@section('content')
    <div class="content">
        <div class="col-md-4 offset-4">
            <div class="card card-signup text-center">
                <div class="card-header ">
                    <h4 class="card-title">Admin Profile</h4>
                </div>
                <div class="card-body ">
                <div class="card card-user">
            <div class="image">
                <img src="{{asset('backend/img/bg5.jpg')}}">
            </div>
            <div class="card-body">
                <div class="author">
                     <a href="">
                    <img class="avatar border-gray" src="{{ asset('backend/avatar/'.auth()->user()->avatar) }}">
                        <h5 class="title">{{auth()->user()->name}}</h5>
                    </a>
                    <p class="description">
                    {{auth()->user()->mobile}}
                    </p>
                </div>
                <p class="description text-center">
                {{auth()->user()->email}}
                </p>
            </div>
            <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
