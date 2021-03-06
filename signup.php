<!-- Signup Page -->
<?php include('./apis/config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Mart</title>
    <?php include "./includes/core-styles.html"; ?>
</head>

<body>
    <div class="container-fluid">
        <?php include('./includes/navigation.php') ?>
        <div class="card account custom-shadow p-2">
            <h3 class="text-center">Create an account</h3>
            <hr>
            <form class="card-body" method="POST" action="./apis/account-daemon.php">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="What do we call you?" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="We will use this email to keep you updated?" required>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <select class="form-control" name="category" required>
                                <option value="customer" selected>I'm here to buy things</option>
                                <option value="seller">I'm here to sell</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select class="form-control" name="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other" selected>Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea type="text" class="form-control" name="address" cols="30" rows="3" max="250" placeholder="Where do you live?" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="number" class="form-control" name="phone" placeholder="9999999999" id="" required>
                        </div>
                    </div>
                </div>
                <label for="password">Password:</label>
                <div class="row">
                    <div class="col">
                        <input type="password" class="form-control" placeholder="password" name="password1" required>
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="confirm password" name="password2" required>
                    </div>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" name="signup" class="btn btn-outline-primary w-50">SIGN UP</button>
                </div>
            </form>
            <div class="card-footer text-center">
                <h6>Already an account? <a href="./login.php">LogIn</a></h6>
            </div>
        </div>
    </div>
</body>

</html>