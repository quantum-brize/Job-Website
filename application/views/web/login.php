<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- eye icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        body {
            position: relative;
            background-color: lightskyblue;
        }

        .title{
            font-weight: 400;
            margin-bottom: 5px !important;
        }

        .msg{
            margin-bottom: 30px;
            font-weight: 500;
            color: gray;
        }

        .login-form {
            background-color: #e9faff !important;
            max-width: 450px;
            margin: 12% auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 400;
            color: #252525;
            font-size: 15px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .form-check{
            display: flex;
            align-items: center;
            justify-content: start;
        }

        .form-check-label {
            font-weight: 400;
        }

        .form-check-input{
            margin-left: -205px;
        }
        .form-check-label{
            padding-left: 7px;
            color: gray;
            font-weight: 300;
            font-size: 14px;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .signup-link a {
            color: #007bff;
        }
        #showHidePassword {
            cursor: pointer;
        }
        
        .btn{
            background-color: #01cdc9;
            color: #fff;
        }
        .btn:hover{
            background-color: #29efeb;
            color: #fff;
        }

        .input-group-append {
            position: absolute;
            right: 4px;
            top: 73%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        #showHidePassword {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-form">
            <h2 class="title">Welcome Back !</h2>
            <p class="msg text-center">Sign in to continue</p>
            <form>
                <div class="form-group">
                    <label for="emailOrNumber">Email or Number</label>
                    <input type="text" class="form-control" id="emailOrNumber" placeholder="Enter your email or number">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    <div class="input-group-append">
                            <span class="input-group-text" id="showHidePassword">
                                <i class="fa fa-eye-slash"></i>
                            </span>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <button type="submit" class="btn btn-block">Sign In</button>
            </form>
            <div class="signup-link">
                <p>Don't have an account? <a href="web/load/load_user_signup">Sign Up</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom JS -->
    <script>
        $(document).ready(function () {
            $('#showHidePassword').click(function () {
                var passwordInput = $('#password');
                var passwordIcon = $(this).find('i');

                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    passwordIcon.removeClass('fa-eye-slash').addClass('fa-eye');
                } else {
                    passwordInput.attr('type', 'password');
                    passwordIcon.removeClass('fa-eye').addClass('fa-eye-slash');
                }
            });
        });
    </script>


</body>

</html>
