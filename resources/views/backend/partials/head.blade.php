<head>

    <meta charset="utf-8" />

    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('backend/img/apple-icon.png')}}">

    <link rel="icon" type="image/png" href="{{asset('backend/img/favicon.png')}}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="_token" content="{{csrf_token()}}" />

    <title>

       @yield('title')

    </title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('backend/css/all.css') }}"

        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Files -->

    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('backend/css/now-ui-dashboard.min5136.css?v=1.6.0') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"  />
    <!-- CSS Just for demo purpose, don't include it in your project -->

    <link href="{{ asset('backend/demo/demo.css') }}" rel="stylesheet" />
    <style type="text/css">.table{border: solid 1px #ddd;   }.table-secondary, .table tr:nth-child(even)  { background: #efefef;} .table>thead>tr>th {font-size:1.2em ; font-weight: 500;} .table table {width: 100%;} .table tr th, .table tr td {padding: 10px!important;}</style>
</head>

