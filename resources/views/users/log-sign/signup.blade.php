
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('users.header')
    {{-- <title>Sign in & Sign up</title> --}}
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          @include('users.alert')
          <form action="/users/log-sign/signup/save" class="sign-up-form" method='POST'>
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name='name' placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name='email' placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name='password' placeholder="Password" />
            </div>
            @csrf
            <button type="submit" class="btn">Sign Up</button>
            <p class="social-text">Or Sign up with social platforms</p>
          
          </form>
          
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fa-brands fa-google"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <a href="{{ route('login') }}"> <button class="btn transparent" id="sign-up-btn">
            Log In
          </button></a>
        </div>
        <img src="/template/img/reg2.svg" class="image" alt="" />
      </div>
        
      </div>
    </div>

    @include('users.footer')
    
  </body>
</html>