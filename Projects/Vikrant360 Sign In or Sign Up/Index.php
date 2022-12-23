<!-- Index Page -->

<?php
session_start();
if (isset($_SESSION['UserName'])) {
    header("location: Welcome.php");
}

// Sign In & Sign Up POST Method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include Database Connection File
    include "Partials/_dbConnect.php";

    // Sign Up POST Method
    if (isset($_POST['signUp'])) {
        $full_name = $_POST["fullName"];
        $user_name = $_POST["userName"];
        $user_password = $_POST["userPassword"];
        $user_confirm_password = $_POST["userConfirmPassword"];

        $sql = "SELECT * FROM `all_users` WHERE user_name='$user_name'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            echo '<div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
                    This User Name is already in use by another account.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        } else {
            if ($user_password == $user_confirm_password) {
                $hashPassword = password_hash($user_password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `all_users` (`name`, `user_name`, `password`, `created_date`) VALUES ('$full_name', '$user_name', '$hashPassword', current_timestamp())";
                $result = mysqli_query($conn, $sql);

                echo '<div class="alert alert-success alert-dismissible fade show m-2" role="alert">
                        You have signed up successfully
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
                        Password and Confirm Password does not match.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            }
        }
    }

    // Sign In POST Method
    if (isset($_POST['signIn'])) {
        $user_name = $_POST["userName"];
        $user_password = $_POST["userPassword"];

        $sql = "SELECT * FROM `all_users` WHERE user_name='$user_name'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($user_password, $row['password'])) {
                    session_start();
                    $_SESSION["UserName"] = $user_name;
                    header("location: Welcome.php");
                } else {
                    echo '<div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
                                Incorrect User Name & Password. Please correct and try again.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                }
            }
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
                        The credentials provided are incorrect. Please correct the errors and try again.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
        }
    }
}
?>

<!-- Require Header File -->
<?php require "Partials/_header.php"; ?>

<!-- Home Page | Sign In & Sign Up Form -->
<section class="container bg-light rounded py-5 my-5">
    <div class="row align-items-center justify-content-center py-xs-0 my-xs-0 py-sm-5 my-sm-5">
        <div class="col text-center py-5">
            <h1 class="text-warning">Vikrant360</h1>
            <p class="h5">This company services provided also such as - <br> Website Designing, Graphic Designing, Services of Software related . . . . . </p>
        </div>
        <div class="col-10 col-sm-8 col-md-5 col-lg-4 col-xl-3 shadow p-3 m-3 bg-body rounded">
            <!-- Sign In Form -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" class="form-control my-2" name="userName" placeholder="User Name" maxlength="15" required>
                <input type="password" class="form-control my-2" name="userPassword" placeholder="Password" maxlength="20" required>
                <input type="submit" class="form-control btn btn-primary fw-bold" name="signIn" value="Sign In">
            </form>
            <!-- Forgotten password Link -->
            <a class="d-flex justify-content-center my-2" href="">Forgotten Password?</a>
            <hr>
            <!-- Sign Up Button -->
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-success fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign Up</button>
            </div>
            <!-- Sign Up Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Sign Up</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <input type="text" class="form-control my-2" name="fullName" placeholder="Name" maxlength="20" required>
                                <input type="text" class="form-control my-2" name="userName" placeholder="User Name" maxlength="15" required>
                                <input type="password" class="form-control my-2" name="userPassword" placeholder="Password" maxlength="20" required>
                                <input type="password" class="form-control my-2" name="userConfirmPassword" placeholder="Confirm Password" maxlength="20" required>
                                <input type="submit" class="form-control btn btn-primary fw-bold" name="signUp" value="Sign Up">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Require Footer File -->
<?php require "Partials/_footer.php"; ?>