<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<!-- Header Part -->

@section('title')

Admin|Login

@endsection

@include('backend.partials.head')

<body class="login-page sidebar-mini" style="background-image: url(backend/img/bg14.jpg) ">

<div class="content">

<div class="container">

<div class="col-md-4 ml-auto mr-auto">

<form class="form"  method="POST" action="{{route('admin.login')}}" style="margin-top: 100px;background: teal;">

    @csrf

<div class="card card-login card-plain">

<div class="card-header ">

<div class="logo-container">

<img src="{{asset('backend/img/now-logo.png')}}" alt="">

</div>

</div>

<div class="card-body ">

<div class="input-group no-border form-control-lg">

<span class="input-group-prepend">

<div class="input-group-text">

<i class="now-ui-icons users_circle-08"></i>

</div>

</span>

<input type="email" class="form-control" name="email" class="form-control" required="true" placeholder="Admin Id">

</div>



<div class="input-group no-border form-control-lg">

<div class="input-group-prepend">

<div class="input-group-text">

<i class="now-ui-icons ui-1_lock-circle-open"></i>

</div>

</div>

<input type="password" placeholder="Password" name="password" id="password" class="form-control" required="true">

</div>

</div>

<div class="card-footer ">

<button type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3">Submit</button>

<!-- <div class="pull-right">

<h6 id="forget" style="cursor: pointer;color:white">Forget Password?</h6>

</div> -->

</div>

</div>

</form>

</div>

@include('backend.partials.js')

<script>

    $("#forget").click(function () {

        alert('hii');

    });

</script>

</body>


