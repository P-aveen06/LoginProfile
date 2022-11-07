<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <script src="../js/profile.js" defer></script>
</head>

<body>
    <div class="row col-lg-8 mx-auto mt-5 border rounded shadow-lg p-2 pofile">
        <div class="profile-image col-md-4 text-center">
            <img src="../assets/profile.png" alt="Profile img" style="width: 180px;
            height:180px; object-fit: cover;" class="js-img border rounded img-fluid mb-4" />
            <div>
                <div class="mb-3">
                    <input class="js-img form-control" type="file" id="formFile" onchange="display_img(this.files[0])">
                </div>
                <button class="mx-auto btn btn-sm btn-primary d-inline-block m-3">Save</button>
                <a href="../profile.html"><button class="mx-auto btn btn-sm btn-info d-inline-block m-1">Back</button></a>
            </div>
        </div>
        <div class="col-md-8 user_detail">
            <div class="h2">User Profile</div>
            <table class="table table-striped">
                <tr>
                    <th colspan="2" class="h4">Details :</th>
                </tr>
                <tr>
                    <th><i class="bi bi-person-circle"></i> First Name</th>
                    <td id="firstName"><input type="text" class="from-control" placeholder="First Name"></td>
                </tr>
                <tr>
                    <th><i class="bi bi-person-circle"></i> Last Name</th>
                    <td id="lastName"><input type="text" class="from-control" placeholder="Last Name"></td>
                </tr>
                <tr>
                    <th><i class="bi bi-envelope"></i> User Email</th>
                    <td id="email"><input type="email" class="from-control" placeholder="Email"></td>
                </tr>
                <tr>
                    <th><i class="bi bi-phone"></i> Phone Number</th>
                    <td id="phoneNumber"><input type="number" class="from-control" placeholder="Phone Number"></td>
                </tr>
                <tr>
                    <th><i class="bi bi-gender-ambiguous"></i> Gender</th>
                    <td id="gender">Male</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>