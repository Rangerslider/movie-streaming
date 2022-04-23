<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="newstyle.css" />
    <title>NOF Studio::Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" action="actionlogin.php" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="mail" placeholder="Username" required type="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="pass" type="password" placeholder="Password" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form class="sign-up-form" action="actionregister.php" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="fname" placeholder="Frist Name" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="lname" placeholder="Last Name" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="mail" placeholder="Email" required type="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="pass" placeholder="Password" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" name="phn" placeholder="Phone Number" required/>
            </div>
            <div class="input-field">
              <i class="far fa-clock"></i>
              <input type="date" name="date" placeholder="24/02/2000" required/>
            </div>
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
            <button class="btn transparent" id="sign-up-btn">
              <a href="index.php" class="btn">Homepage</a>
            </button>
          </div>
          <img src="images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
            <button class="btn transparent" id="sign-up-btn">
              <a href="index.php" class="btn">Homepage</a>
            </button>
            </div>
              <img src="images/register.svg" class="image" alt="" />
            </div>
          </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>