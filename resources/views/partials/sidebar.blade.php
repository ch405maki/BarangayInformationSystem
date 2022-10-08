    
<div class="logo">

  <a href="http://127.0.0.1:8000/" class="simple-text">
    <img src="{{asset ('images/logo.png')}}" width="150" height="150" alt="">
    </a>
</div>

<ul class="nav" >
    <li >
        <a href="{{route('home')}}" >
            <i class="ti-panel"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li>
        <a href="{{route('index')}}">
            <i class="ti-user"></i>
            <p>Residents</p>
        </a>
    </li>
    <li>
        <a href="{{route('about')}}">
            <i class="ti-info-alt"></i>
            <p>About</p>
        </a>
    </li>

</ul>
