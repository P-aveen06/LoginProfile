<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
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
  </head>
  <body>
    <div class="row col-lg-8 mx-auto mt-5 border rounded shadow-lg p-2 pofile">
      <div class="profile-image col-md-4 text-center">
        <img src="./assets/profile.png" alt="Profile img" style="width: 180px;
        height:180px; object-fit: cover;"
        class="border rounded img-fluid mb-4"/>
      </div>
      <div class="col-md-8 user_detail">
        <div class="h2">User Profile</div>
        <table class="table table-striped">
            <tr><th colspan="2" class="h4">Details :</th></tr>
            <tr><th>First Name</th><td id="firstName">Paveen</td></tr>
            <tr><th>Last Name</th><td id="lastName">Kumar</td></tr>
            <tr><th>User Email</th><td id="email">email@email.com</td></tr>
            <tr><th>Phone Number</th><td id="phoneNumber">9940946201</td></tr>
            <tr><th>Gender</th><td id="gender">Male</td></tr>
        </table>
      </div>
    </div>
  </body>
</html>
