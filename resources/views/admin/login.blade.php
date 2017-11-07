<!DOCTYPE html>
<html lang="en">

<!-- Tieu Long Lanh from Baobinh.net -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>login</title>

    <link rel="stylesheet" href="/themes/libs/font-awesome-4.7.0/css/font-awesome.css">

    <link rel="stylesheet" href="/themes/admin/css/quirk.css">

    <script src="/themes/admin/lib/modernizr/modernizr.js"></script>
    <script src="/themes/admin/lib/html5shiv/html5shiv.js"></script>
    <script src="/themes/admin/lib/respond/respond.src.js"></script>
    <![endif]-->
</head>

<body class="signwrapper">

<div class="sign-overlay"></div>
<div class="signpanel" style="background-color: #333333 !important;"></div>

<div class="panel signin" style="background-color: white !important;">
    <div class="panel-heading">
        <h3 class="panel-title" style="font-size: 30px; color: #333333; font-weight: bold">Admin Panel</h3>
    </div>
    <div class="panel-body">
        @include('flash::message')
        <form action="{{route('admin.login-handle')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group mb10">
                <div class="input-group" style="border: 1px solid darkgrey">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group nomargin">
                <div class="input-group" style="border: 1px solid darkgrey">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
            </div>

            <div class="form-group" style="margin-top: 5px">
                @if(isset($error_message))
                    <label style="color: red">{{$error_message}}</label>
                @endif
            </div>

            <div class="form-group">
                <button class="btn btn-success btn-quirk btn-block">Login</button>
            </div>
        </form>
        <hr class="invisible">
    </div>
</div><!-- panel -->

</body>
</html>
