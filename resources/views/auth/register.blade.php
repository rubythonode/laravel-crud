@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="regForm" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $().ready(function(){
            $("#regForm").validate({
                rules: {
                    name:{
                        required: true,
                        minlength: 2
                    },
                    email:{
                        required:true,
                        email:true
                    },
                    password:{
                        required: true,
                        minlength: 6
                    },
                    password_confirmation:{
                        required: true,
                        minlength: 6,
                        equalTo:"#password"
                    },
                },
                messages:{
                    name:"אנא הכניסו שם בעל 2 תווים ומעלה",
                    password:{
                        required:"שדה הסיסמה הוא חובה",
                        minlength:"הסיסמה חייבת להיות עם 6 תווים ומעלה"
                    },
                    email:{
                        required:"אנא הכניסו כתובת אי-מייל",
                        email:"אנא הכניסו כתובת אי-מייל תקינה"
                    },
                    password_confirmation:{
                        required:"חובה למלא שדה זה",
                        minlength: "לפחות 6 תווים ומעלה",
                        equalTo:"הסיסמאות חייבות להיות זהות"
                    }
                },
            });
        });
    </script>
@stop