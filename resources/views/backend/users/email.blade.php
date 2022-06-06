@extends('backend.layouts.app')
@section('title')
All|Emails
@endsection
<style>
    .ck-editor__editable {min-height: 300px;}
</style>
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h4 class="card-title">Send Message</h4>
                </div>
            <form action="{{route('compose.send')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$user->id}}">
                <div class="card-body ">
                    <form class="form-horizontal">
                        <div class="row">
                            <label class="col-md-3 col-form-label">To</label>

                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="email" class="form-control" required="true" name="email" value="{{$user->email}}" placeholder="Type  Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label">Message</label>

                            <div class="col-md-9">
                                <div class="form-group">
                                    <textarea name="message" id="message"></textarea>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer ">
                    <div class="row">
                        <label class="col-md-3"></label>
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-fill btn-success">Send</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')
<script>
    ClassicEditor
        .create( document.querySelector( '#message' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    $(document).ready(function() {
        $("#search").keyup(function(event) {
            if (event.which === 13) {
                event.preventDefault();
                $('#sort_users').submit();
            }
        });
    });
</script>
@endsection