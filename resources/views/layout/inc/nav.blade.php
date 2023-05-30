
  <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd; >
  <div class="container-fluid">
  <a class="navbar-brand" href="#">{{ Auth::user() !=null ? Auth::user()->name : "Hello Guest" }}</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav">
        <li class="nav-item active">
         
            @auth
              
          
          
          <a class="nav-link" href="{{route('dashboard.index')}}">Dashboard</a>
        </li>
        <li class="nav-item">
          @endauth
          @guest
            <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Sign-In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Sign-Up</a>
        </li>
        @endguest
        @auth
          
  
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">LogOut</a>
          </li>
          @endauth
         
             
       
        <li class="nav-item">
          <a class="nav-link " href="{{route('about')}}">About Us</a>
        </li>
      
      </ul>
    </div>
    
  </nav>