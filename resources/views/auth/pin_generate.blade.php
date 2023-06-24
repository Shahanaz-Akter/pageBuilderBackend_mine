<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pin Generate</title>

    <!-- <link rel="stylesheet" href="style-1.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        * {

            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,400&display=swap');
            font-family: 'Poppins', sans-serif;
        }

        a {
            text-decoration: none;
        }

        .login-page {
            width: 100%;
            height: 100vh;
            display: inline-block;
            display: flex;
            align-items: center;
            background: url("{{asset('/assets/images/auth/bg.png')}}");
            background-size: cover;
            background-position: left center;
        }

        .logo img {

            width: auto;

        }

        input {
            width: 90%;
            border-radius: 4px;
            outline: none;
            padding: 8px;
            margin: 8px 0;
            font-size: 17px;
            color: gray;
            border: 1px solid gray;
            ;
        }

        .fa {

            font-size: 17px;
            margin-left: -31px;
            color: gray;
        }




        input[type="password"]:focus {
            border-color: dodgerBlue;
            box-shadow: 0 0 8px 0 dodgerBlue;
        }

        .inputWithIcon input[type="text"] {
            padding-left: 10px;
        }

        .inputWithIcon {
            position: relative;
            display: flex;
            align-items: center;
        }


        .inputWithIcon input[type="text"]:focus+i {
            color: dodgerBlue;
        }

        .inputWithIcon.inputIconBg i {
            background-color: #aaa;
            color: #fff;
            padding: 9px 4px;
            border-radius: 4px 0 0 4px;
        }

        .inputWithIcon.inputIconBg input[type="text"]:focus+i {
            color: #fff;
            background-color: dodgerBlue;
        }

        .login-with img {
            width: 20px;
            height: auto;

        }

        .login-with {
            display: flex;
            gap: 20px;
            align-items: center;

        }

        .icon-holder {

            height: 35px;
            width: 35px;
            border-radius: 50%;
            cursor: pointer;
            display: inline-flex;
            justify-content: center;
            box-shadow: inset 0 0 10px #EEEEEF;
            border: 2px solid #EEEEEF;
            align-items: center;
        }

        .button {
            text-align: center;
            display: inline-block;
            outline: none !important;

            padding: 1em 3em;
            border-radius: 2em;
            background: linear-gradient(to right, #56b8dd, #6e80e6, #8467e7, #b444ee, #e639f7, #c63bf0);
            color: white;
            font-size: 14px;
        }

        @media(max-width: 458px) {
            .login-page {
                align-items: flex-start;
                padding-top: 12px;
                ;
            }

            .logo img {
                height: 28px;
                ;
            }

            .links span:nth-child(1) {
                font-size: 15px;
                ;
            }

            .container {
                width: 92% !important;
                margin: 5px auto !important;
                padding: 10px 15px !important;
            }

            .btn-link {
                display: flex;
                align-items: center;
                justify-content: center;
            }

        }


        form input::placeholder {
            font-size: 15px;
            color: #999999;
        }
    </style>

</head>

<body>


    <div class="login-page bg-light">
        <div class="container bg-white pt-3 pb-3 pe-5 ps-5" style="width:70%;border-radius:10px; ;">

            <form class="row align-items-center" action="{{url('/post_pin/'.$user_id)}}" method="post">
                @csrf
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                    <img src="{{asset('assets/images/auth/pin.png')}}" alt="" style="width:100%;">

                </div>

                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                    <div class="header mb-3">
                        <h2><b>Pin Generate</b></h2>
                        <span style="color: #808080  ;
                        ">Create Your Pin Number</span>

                    </div>

                    <div class="my-3">
                        <div class="first-example">
                            <input type="password" id="password-field" placeholder="New Pin" name="new_pin">
                            <i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()"></i>
                        </div>

                    </div>
                    <div class="">
                        <div class="first-example">
                            <input type="password" id="password-field1" placeholder="Confirm Pin" name="confirm_pin">
                            <i id="pass-status1" class="fa fa-eye" aria-hidden="true" onClick="viewPassword1()"></i>
                        </div>

                    </div>

                    <div class="btn-link mt-3">
                        <button class="button mb-4" href="">Continue</button>

                    </div>

                </div>
            </form>
        </div>
    </div>


    <script>
        function viewPassword() {
            var passwordInput = document.getElementById('password-field');
            var passStatus = document.getElementById('pass-status');

            if (passwordInput.type == 'password') {
                passwordInput.type = 'text';
                passStatus.className = 'fa fa-eye-slash';

            } else {
                passwordInput.type = 'password';
                passStatus.className = 'fa fa-eye';
            }
        }

        function viewPassword1() {
            var passwordInput = document.getElementById('password-field1');
            var passStatus = document.getElementById('pass-status1');

            if (passwordInput.type == 'password') {
                passwordInput.type = 'text';
                passStatus.className = 'fa fa-eye-slash';

            } else {
                passwordInput.type = 'password';
                passStatus.className = 'fa fa-eye';
            }
        }
    </script>
</body>

</html>