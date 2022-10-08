<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>Barangay Information System</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="author" content="Sreejith BS">
    
    <!-- Style-CSS --> 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset ('/css/login_register.css')}}" type="text/css" media="all" /> 

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>    
</head>

<body>
    <nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="register-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ url('/') }}">Barangay Information System</a>
        </div>
    
      </div><!-- /.container-->
    </nav> 
    
    <div class="wrapper">
        <div class="register-background"> 
            <div class="filter-black"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                            <div class="register-card">
                                <h3 class="title">Login Page</h3>
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                 {{ csrf_field() }}
                                    <label>Email</label>
                                    <input id="email" type="email" name="email" class="form-control" placeholder="E-Mail Address" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control " placeholder="Password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                <div style="padding-top:20px; " >
                                    <input type="checkbox" id="checkbox"> Show Password
                                </div>
                                    
                                    <input type="submit" class="btn btn-success btn-block" value="Login" />
                                </form>

                                <div class="forgot">
                                    <a href="#" class="btn btn-simple btn-danger" style="background-color:transparent" onMouseOver="this.style.color='#FF7F7F'" onMouseOut="this.style.color='#66615B'">Forgot Password?</a>
                                </div>

                                <div class="forgot">
                                    <a href="{{ route('register') }}" class="btn btn-simple btn-danger" style="background-color:transparent" onMouseOver="this.style.color='#FF7F7F'" onMouseOut="this.style.color='#66615B'">Don't have an account ? Sign Up</a>
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
        });
    });
</script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>


</html>