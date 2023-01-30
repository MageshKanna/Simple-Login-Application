<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signup</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />
    <link rel="stylesheet" href="../nav.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class=" d-flex align-items-center justify-content-center" id='varnam' href="#">
        <img src="../logo.png" id='img' alt="" class='' style='height:50px;'>
        <label for="img" class='font-weight-bold h5'>Varnam Technologies</label>
    </div>

    <div class="cont p-3">
        <div class="text-center p-2 d-flex justify-content-center">
            <form method="post" class="form-group p-2">
                <h3 class="mt-4 mb-3 font-weight-bold">Please Register a New Account!</h3>
                <div class="dropdown-divider dd"></div>
                <div class="d-flex flex-column justify-content-right mb-4">
                    <label for="fullname" class='text-left'>Fullname</label>
                    <input type="text" id="fullname" name="fullname" class="form-control"
                        placeholder="Fullname Goes Here...">
                </div>
                <div class="d-flex flex-column justify-content-right mb-4">
                    <label for="email" class='text-left'>Email</label>
                    <input type="email" id="html" name="email" class="form-control" placeholder="Email Goes Here...">
                </div>
                <div class="d-flex flex-column justify-content-right mb-4">
                    <label for="password" class='text-left'>Password</label>
                    <input type="password" id="password" name="password" class="form-control"
                        placeholder="Password Goes Here...">
                </div>
                <button class="btn btn-primary w-50 m-2" formaction="../Includes/signup.inc.php" name="submit"
                    type="submit">Register</button>
                <h5 class='m-2 font-weight-bold'>OR</h5>
                <div class="m-2">
                    <a href="login.php" class='text-center h5 text-primary font-weight-bold'>
                        Already have an account?
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>