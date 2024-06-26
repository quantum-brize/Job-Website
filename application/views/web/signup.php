<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Toastify CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

        .signup-form {
            background-color: #e9faff !important;
            max-width: 450px;
            height: auto;
            margin: 12% auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .signup-form h2 {
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

        .Terms-link {
            text-align: center;
            margin-top: 20px;
            color: gray;
            font-size: 12px;
        }
        .Terms-link a {
            color: #007bff;
        }

        .Login-link{
            font-size: 14px;
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

        .container {
            position: relative;
            overflow: hidden; 
        }

        .bg_style1 {
            position: absolute;
            width: 700px;
            height: 700px;
            z-index: -1;
            top: -200px;
            right: 600px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(254, 144, 144, 0.8), transparent);
        }

        .bg_style2 {
            position: absolute;
            width: 2000px;
            height: 2000px;
            z-index: -1;
            bottom: -500px;
            left: -900px;
            background: linear-gradient(-45deg, rgba(255, 255, 255, 0.7), transparent);
            overflow: hidden;
            border-radius: 50%;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="bg_style1"></div>
        <div class="bg_style2"></div>
        <div class="signup-form">
            <h2 class="title">Create New Account</h2>
            <p class="msg text-center">Get your free account now</p>
            <form>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                    <label for="username">Username *</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="number">Phone Number *</label>
                    <input type="number" class="form-control" id="number" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    <div class="input-group-append">
                            <span class="input-group-text" id="showHidePassword">
                                <i class="fa fa-eye-slash"></i>
                            </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password *</label>
                    <input type="password" class="form-control" id="Confirm_password" placeholder="Enter your password">
                    <div class="input-group-append">
                            <span class="input-group-text" id="showHideConPassword">
                                <i class="fa fa-eye-slash"></i>
                            </span>
                    </div>
                </div>
                <button type="button" id="signupBtn" class="btn btn-block">Sign In</button>
                <div class="Login-link text-center mt-3">
                    <p>Already have an account? <a href="<?= base_url('login')?>" class="">Sign in</a></p>
                </div>
                <div class="Terms-link text-left fst-italic">
                    <p>By registering you to the Store <a href="#">Terms of use</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!-- Toastify JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
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
            $('#showHideConPassword').click(function () {
                var passwordInput = $('#Confirm_password');
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

        $('#signupBtn').click(function () {
                let userName = $('#username').val();
                let email = $('#email').val();
                let phone = $('#number').val();
                let password = $('#password').val();
                let confirmPassword = $('#Confirm_password').val();

                $.ajax({
                    type: 'POST',
                    url: '<?= base_url('Common/signup') ?>',
                    data: {
                        userName: userName,
                        email: email,
                        phone: phone,
                        password: password,
                        confirmPassword: confirmPassword,
                    },
                    beforeSend: function () {
                        $('#signupBtn').prop("disabled", true)
                        $('#signupBtn').html(`<div class="spinner-border text-light"></div>`)
                    },
                    success: function (resp) {
                        resp = JSON.parse(resp)
                        console.log(resp)
                        Toastify({
                            text: resp.message.toUpperCase(),
                            duration: 3000,
                            position: "center",
                            stopOnFocus: true,
                            style: {
                                background: resp.status ? 'darkgreen' : 'darkred',
                            },

                        }).showToast();
                        if (resp.status) {
                            setTimeout(function () {
                                location.href = '<?= base_url('signup-success') ?>'
                            }, 1000)
                        }
                    },
                    error: function (err) {
                        Toastify({
                            text: 'Server Error',
                            duration: 3000,
                            position: "center",
                            stopOnFocus: true,
                            style: {
                                background: 'darkred',
                            },

                        }).showToast();
                    },
                    complete: function(){
                        $('#signupBtn').prop("disabled", false)
                        $('#signupBtn').html(`Sign In`)
                    }
                })
            })
    </script>

</body>

</html>
