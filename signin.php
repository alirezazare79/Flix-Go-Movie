<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="./img/logo.svg" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/signin.css">
    <title>SignIn</title>
</head>

<body>
    <div class="container">
        <div class="sign_content">
            <form action="#" class="sign_content_form">
                <a href="index.php">
                    <img src="./img/logo.svg" alt="">
                </a>
                <div class="sign_content_form_group">
                    <input type="text" placeholder="Email">
                </div>
                <div class="sign_content_form_group">
                    <input type="text" placeholder="Password">
                </div>
                <div class="sign_content_form_remember sign_content_form_group">
                    <input id="remember" name="remember" type="checkbox" checked="checked">
                    <label for="remember">Remember Me</label>
                </div>
                <button class="sign_content_form_btn">
                    Sign In
                </button>
                <span class="sign_text">
                    don't have an account?
                    <a href="#"> Sign up!</a>
                </span>
                <span class="sign_text">
                    <a href="#">
                        Forgot password
                    </a>
                </span>
            </form>

        </div>

        <script src="./js/placeholdem.min.js"></script>
        <script src="./js/script.js"></script>
</body>

</html>