<!-- an overthinking girl needs one understaing guy... -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="stylesheet" href="style-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        * {
            /* @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,400&display=swap'); */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,400&display=swap');
            font-family: 'Poppins', sans-serif;
        }

        a {
            text-decoration: none;
            color: gray;
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

        .form-right i {
            font-size: 100px;
        }

        .logo img {
            /* height: 40px; */
            width: auto;

        }



        /* /Don't forget to add Font Awesome CSS : "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/ */
        input[type="text"],
        input[type="email"] {
            width: 50%;
            border: 1px solid #A952A5;
            border-radius: 4px;
            margin: 8px 0;
            outline: none;
            padding: 8px;
            box-sizing: border-box;
            transition: 0.3s;
        }


        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: dodgerBlue;
            box-shadow: 0 0 8px 0 dodgerBlue;
        }

        .inputWithIcon input[type="text"],
        .inputWithIcon input[type="email"] {
            padding-left: 10px;
        }


        .inputWithIcon {
            position: relative;
            display: flex;
            align-items: center;
        }


        .inputWithIcon input[type="text"]:focus+i,
        .inputWithIcon input[type="email"]:focus+i {
            color: dodgerBlue;
        }

        .inputWithIcon.inputIconBg i {
            background-color: #aaa;
            color: #fff;
            padding: 9px 4px;
            border-radius: 4px 0 0 4px;
        }

        .inputWithIcon.inputIconBg input[type="text"]:focus+i,
        .inputWithIcon.inputIconBg input[type="email"]:focus+i {
            color: #fff;
            background-color: dodgerBlue;
        }

        /* .signup-btn {
            width: 500px;
            padding: 1em 3em;
            border-radius: 2em;
            background: linear-gradient(to right, #56b8dd, #6e80e6, #8467e7, #b444ee, #e639f7, #c63bf0);
            color: white;
            font-size: 14px;
        } */
        /* .login-btn a:hover{
            color: white;
        } */
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
            /* display: inline-block; */
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

        .inline-block {
            text-align: center;
            display: inline-block;
            width: 100%;
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

            }

            .logo img {
                height: 28px;

            }

            .links span {
                font-size: 15px;
            }

            .container {
                width: 92% !important;
                margin: 5px auto !important;
                padding: 10px 15px !important;
            }


        }

        form input::placeholder {
            font-size: 15px;
            color: #999999;
        }


        .logo img {
            height: 30px;
            ;
        }
    </style>

</head>

<body>
    <div class="login-page bg-light">
        <div class="container bg-white pt-3 pb-3 pe-5 ps-5 d-flex flex-column justify-content-between" style="width:80%;min-height:430px;border-radius:10px; ;">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">

                    <img src="{{asset('assets/images/auth/logo.png')}}" alt="">

                </div>
                <div class="links">
                    <span></span>
                    <span><a href="" style="color:#E039F6;"></a></span>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                    <img src="{{asset('assets/images/auth/forgot.png')}}" alt="" style="width: 100%;">


                </div>
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                    <div class="header mb-3">
                        <h2><b>Forgot Your Password?</b></h2>
                        <span style="color: #808080	;
                        ">No problem. Let us know your Mobile Number.We will send a code this phone Number +88018******36 and reset password link that allow you to chose new one.</span>

                    </div>


                    <form method="POST" action="{{route('post_forgotten_password')}}">
                        @csrf
                        <div class="inputWithIcon">
                        </div>
                        @if ($errors->has('error'))
                        <div class="alert-danger">
                            {{ $errors->first('error') }}.
                            <ul>
                                <li>We can't find a user that Email Account.</li>
                            </ul>
                        </div>
                        @endif

                        <div class="inputWithIcon">
                            <input class="me-3" type="text" placeholder="Enter Your Mobile Number*" name="mobile">
                        </div>



                        <div class="mt-3">
                            <button class="inline-block" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>