<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="http://infiniteiotdevices.com/images/logo.png"
      rel="icon"
      sizes="16x16"
      type="image/gif"
    />
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="register.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <title>Register Form</title>
  </head>
  <body>

    

    

    <div class="wrapper">
      <div class="container main">
        <div class="row">
          <div class="col-md-6 side-image">
            <!-------Image-------->
            <img src="icclogo.png" alt="" />
          </div>
          <div class="col-md-6 right">
            
            <form action="signup.php" method="post">
            <div class="input-box">
              <header>Create account</header>
              <div class="input-field">
                <input type="text" class="input" id="Name" name="Name" required />
                <label for="Name">Name</label>
              </div>
              <div class="input-field">
                <input
                  type="text"
                  class="input"
                  id="email"
                  required
                  autocomplete="off"
                  name="email"
                />
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="text" class="input" id="address" name="address" required />
                <label for="address">Address</label>
              </div>
              <div class="input-field">
                <input type="tel" class="input" id="tel" name="phone"  required />
                <label for="phone">Phone Number</label>
              </div>
              <div class="input-field">
                <input type="password" class="input" id="password" name="password" required />
                <label for="password">Password</label>
              </div>
              <div class="input-field">
                <a href="home.html">
                <input type="submit" class="submit" value="Sign Up" /></a>
              </div>
            </form>
              <div class="signin">
                <span
                  >Already have an account?
                  <a href="login3.html">Log in here</a></span
                >
              </div>
              <div class="signup">
                <h5>Sign Up Using</h5>
                <ul style="margin-left: 12%;">
                  <li>
                    <a href="#" class="facebook"
                      ><i class="fa fa-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" class="google"><i class="fa fa-google"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
