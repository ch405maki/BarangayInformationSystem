
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>Barangay Information System</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset ('/css/login_register.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>   
    
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="register-navbar">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}" >barangay Information System</a>
            </div>
    
      </div>
      <!-- /.container-->
    </nav> 
    
    <div class="wrapper">
        <div class="register-background"> 
            <div class="filter-black"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                            <div class="register-card" >
                                <h3 class="title">Sign Up Page</h3>
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <label>Name</label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus >
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif

                                        <label>Middle Name</label>
                                        <input id="middlename" type="text" class="form-control" name="middlename" value="{{ old('middlename') }}" required autofocus>
                                        @if ($errors->has('middlename'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('middlename') }}</strong>
                                            </span>
                                        @endif

                                    <label>Last Name</label>
                                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>
                                        @if ($errors->has('lastname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('lastname') }}</strong>
                                            </span>
                                        @endif

                                    <label>E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                    <label>Phone Number</label>
                                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('') }}" required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                    
                                    <div class="form-group " style="padding-top:20px; width:150%">    
                                        <label for="role" class="col-md-2" >{{ __('Role') }}</label>
                                            <div class="col-sm-6" style="padding-top:3px;">
                                                 <select class="form-control" id="role" name="role" required focus>
                                                     <option value="Admin">Admin</option>        
                                                     <option value="Student">User</option>        
                                                     <option value="" disabled selected >Select Role</option>        
                                                 </select>
                                            </div>
                                    </div>


                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                                Your password must be more than 6 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.
                                        </p>
                                        </span>
                                    @endif

                                    <label>Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    <div style="padding-top:20px;">
                                        <input type="checkbox" id="checkbox"> Show Password
                                    </div>
                                    
                                    <input type="submit" class="btn btn-success btn-block" value="Sign Up" />
                                </form>
                                <div class="forgot">
                                    <a href="{{ route('login') }}" class="btn btn-simple btn-danger" style="background-color:transparent" onMouseOver="this.style.color='#FF7F7F'" onMouseOut="this.style.color='#66615B'">Already have an account ? Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
        </div>
    </div>      

</body>

<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function(){
        $('#checkbox').on('change', function(){
            $('#password').attr('type',$('#checkbox').prop('checked')==true?"text":"password"); 
            $('#password-confirm').attr('type',$('#checkbox').prop('checked')==true?"text":"password"); 
        });
    });
</script>

</html>