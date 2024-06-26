<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Success</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- eye icon -->
    <style>
        /* Custom styles */
        body {
            position: relative;
            background-color: lightskyblue;
        }

        .right_tick_icon {
            width: 80px; 
            height: 80px; 
            border-radius: 50%; 
            background-color: #24c324; 
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
        }
        .tick_icon {
            width: 50%;
            height: 50%;
            background-color: #fff; 
            clip-path: polygon(0% 50%, 45% 100%, 100% 0%, 45% 63%);
            transform: rotate(10deg); 
        }

        .title{
            font-weight: 600;
            font-size: 30px;
            margin-bottom: 5px !important;
        }

        .msg{
            margin-bottom: 30px;
            font-weight: 500;
            color: gray;
        }

        .success-card{
            background-color: #fff !important;
            max-width: 450px;
            margin: 12% auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .btn{
            background-color: #01cdc9;
            color: #fff;
        }
        .btn:hover{
            background-color: #29efeb;
            color: #fff;
        }

        .container {
            position: relative;
            overflow: hidden; 
        }

        .bg_style1 {
            position: absolute;
            width: 500px;
            height: 500px;
            z-index: -1;
            top: -200px;
            right: 100px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(254, 144, 144, 0.5), transparent);
        }
        .bg_style2 {
            position: absolute;
            width: 200px;
            height: 200px;
            z-index: -1;
            top: 300px;
            left: 200px;
            border-radius: 50%;
            background: linear-gradient(45deg, rgba(254, 144, 144, 0.8), transparent);
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="bg_style1"></div>
        <div class="bg_style2"></div>

        <div class="success-card">
            <div class="right_tick_icon mb-4">
                <div class="tick_icon"></div>
            </div>
            <p class="title text-center">Well done !</p>
            <p class="msg text-center">Your account is created successfully! </p>
            <a href="<?= base_url('login')?>" type="submit" class="btn btn-block mb-6">Sign In</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
