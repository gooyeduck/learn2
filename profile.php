<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register System</title>
    <link rel="stylesheet" href="inc/bootstrap.min.css">
    <script src="inc/bootstrap.min.js"></script>
    <script src="inc/jquery.min.js"></script>
    <link rel="stylesheet" href="inc/login.css">
</head>

<body>

    <div class="container">
        <?php include('inc/header.php'); ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="">
                <div class="card my-5">
                    <div class="card-header text-end">
                        <h3>Hello Satyajit!</h3>
                    </div>
                    <form class="card-body cardbody-color p-lg-5 col-md-6 offset-md-3" method="POST">
                        <label for="">Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"  value="name">
                        </div>
                        <label for="">User Name</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"  value="user_name">
                        </div>
                        <label for="">Email</label>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"  value="email">
                        </div>
                        <label for="">Password</label>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password"  value="password">
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5" name="update">Update</button></div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="container"><?php include('inc/footer.php'); ?></div>

</body>

</html>