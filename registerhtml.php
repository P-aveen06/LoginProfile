<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign-UP</title>
    <!-- CSS Via CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script src="./js/register.js" defer></script>
  </head>
  <body>
    <div class="main row col-lg-4 col-md-8 mx-auto mt-5 border rounded shadow-lg p-2">
      <div class="text-center mt-3"><h1>Oops! Singup</h1></div>
      <div class="mx-auto" style="max-width: 500px;">
        <form method="post" onsubmit="myaction.collect_data(event,'signup');">
          <div class="mb-3">
            <label for="firstName" class="form-label h5">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName"  />
            <div  class="form-text text-danger js-errors js-error-firstName"></div>
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label h5">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" />
            <div  class="form-text text-danger js-errors js-error-lastName"></div>
          </div>
          <div class="mb-3">
            <label for="userEmail" class="form-label h5">Email</label>
            <input
              type="email"
              class="form-control"
              id="userMail"
              name="email"

            />
            <div class="form-text text-danger js-errors js-error-email"></div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label h5">Password</label>
            <input
              type="password"
              class="form-control"
              id="password"
              name="password"
              
            />
            <div  class="form-text text-danger js-errors js-error-password">
              
            </div>
          </div>
          <div class="mb-3">
            <label for="confirmPassword" class="form-label h5"
              >Confirm Password</label
            >
            <input
              type="password"
              class="form-control"
              id="confirmPassword"
              name="confirmPassword"
              
            />
            <div class="form-text text-danger js-errors js-error-confirmPassword"></div>
          </div>
          <div class="mb-3">
            <label for="phoneNumber" class="form-label h5">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phoneNumber" />
            <div  class="form-text text-danger js-errors js-error-phoneNumber"></div>
          </div>
          <div class="mb-3">
            <label for="gender" class="form-label h5">Gender</label>
            <select
              class="form-select "
              aria-label="Default select example"
              name="gender"
            >
              <option selected>Select</option>
              <option value="Male" name="gender">Male</option>
              <option value="Female" name="gender" >Female</option>
              <option value="Trans" name="gender">Trans</option>
            </select>
            <div class="form-text text-danger js-errors js-error-gender"></div>
          </div>
          <div class="mb-3">
            <a href="loginhtml.php">Already Having Account !</a><!--**********-->
          </div>
          <div class="progress mb-3 d-none">
            <div
              class="progress-bar"
              role="progressbar"
              style="width: 25%"
            >
             Loading...25%
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-lg col-12 h5">
            Signup
          </button>
        </form>
      </div>
    </div>
  </body>
</html>
