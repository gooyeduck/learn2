<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register System</title>
    <link rel="stylesheet" href="inc/bootstrap.min.css">
    <link rel="stylesheet" href="inc/login.css">
    <script src="inc/bootstrap.min.js"></script>
    <script src="inc/jquery.min.js"></script>
</head>

<body>

    <div class="container">
        <?php include('inc/header.php'); ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5">
                    <form class="card-body p-lg-5 " method="POST">

                        <div class="text-center">
                            <h2 class="text-center text-dark mb-4">Register</h2>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Your Name" name="name">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="User Name" name="user_name">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="password" name="password">
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100" name="register">Register</button></div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="container"><?php include('inc/footer.php'); ?></div>

</body>

</html>