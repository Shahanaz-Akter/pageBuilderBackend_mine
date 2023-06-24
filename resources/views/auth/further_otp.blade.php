<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Jquery cdn link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Jquery cdn link -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,400&display=swap');
            font-family: 'Poppins', sans-serif;
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

            .num_container {
                width: 92% !important;
                margin: 5px auto !important;
                padding: 10px 15px !important;
            }

            .header {
                text-align: center;
            }
        }

        form input::placeholder {
            font-size: 15px;
            color: #999999;
        }



        .inputfield {
            /* width: 100%; */
            /* max-width: 400px;; */
            display: flex;
            justify-content: center;
        }

        .input {

            height: 3em;
            width: 3em;
            border: 2px solid #dad9df;
            outline: none;
            text-align: center;
            font-size: 1.5em;
            border-radius: 15em;
            background-color: rgb(216, 216, 216);
            outline: none;
            margin-right: 12px;
            ;

        }

        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .input:disabled {
            color: #89888b;
        }

        .input:focus {
            color: #ffffff;
            background-color: dodgerblue;
            border: 3px solid dodgerBlue;
        }

        #submit {
            text-align: center;

            width: 50%;
            padding: 1em 3em;
            border-radius: 2em;
            background: linear-gradient(to right, #56b8dd, #6e80e6, #8467e7, #b444ee, #e639f7, #c63bf0);
            color: white;
            margin: 1em auto 0 auto;
            font-size: 14px;
            cursor: pointer;
        }

        .show {
            display: block;
        }

        .hide {
            display: none;
        }

        .logo img {
            height: 40px;
            width: auto;
        }
    </style>

</head>

<body>



    <div class="login-page bg-light">
        <div class="container bg-white pt-3 pb-3 pe-5 ps-5 d-flex align-items-center justify-content-center " style="width:80%;min-height:430px;border-radius:10px;">

            <div class="row" style="height:100%;">
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/auth/otp.png')}}" alt="" style="width:100%;height:auto;">
                </div>
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 d-flex flex-column justify-content-center">

                    <div class="header mb-3">
                        @if(session('error'))

                        <div class="alert alert-danger text-center">
                            {{ session('error') }}
                        </div>
                        @endif

                        <h2><b>OTP</b></h2>
                        <p id="" class="text-center text-white bg-danger p-2 time" style="color: #808080;"><b>Time Remaining : <span id="timer"></span></b></p>

                        <p class="text-center" style="color: #808080	;
                        ">A 4 digit Code has been sent to +880183*****36</p>
                    </div>
                    <form class="num_container" action="{{url('/post_further_otp')}}" method="post">
                        @csrf

                        <div class="inputfield">
                            <input type="number" maxlength="1" class="input" name="num1" disabled />
                            <input type="number" maxlength="1" class="input" name="num2" disabled />
                            <input type="number" maxlength="1" class="input" name="num3" disabled />
                            <input type="number" maxlength="1" class="input" name="num4" disabled />
                        </div>
                        <input type="text" name="otp" id="otp" style="display:none;">

                        <div class="text-center my-4">
                            <p>Didn't receive the code? <span style="color: dodgerblue;"> <a href="{{url('/signup')}}">RESEND</a> </span></p>
                        </div>

                        <button class="hide" type="submit" id="submit" onclick="popup_msg()">Verify</button>

                    </form>

                </div>

            </div>
        </div>
    </div>


    <script>
        //Initial references
        const input = document.querySelectorAll(".input");
        const inputField = document.querySelector(".inputfield");
        const submitButton = document.getElementById("submit");
        const otp = document.getElementById("otp");
        let inputCount = 0,
            finalInput = "";

        //Update input
        const updateInputConfig = (element, disabledStatus) => {
            element.disabled = disabledStatus;
            if (!disabledStatus) {
                element.focus();
            } else {
                element.blur();
            }
        };

        input.forEach((element) => {
            element.addEventListener("keyup", (e) => {
                e.target.value = e.target.value.replace(/[^0-9]/g, "");
                let {
                    value
                } = e.target;

                if (value.length == 1) {
                    updateInputConfig(e.target, true);
                    if (inputCount <= 3 && e.key != "Backspace") {
                        finalInput += value;
                        otp.setAttribute('value', finalInput);

                        if (inputCount < 3) {
                            updateInputConfig(e.target.nextElementSibling, false);
                        }
                    }
                    inputCount += 1;
                } else if (value.length == 0 && e.key == "Backspace") {
                    finalInput = finalInput.substring(0, finalInput.length - 1);
                    if (inputCount == 0) {
                        updateInputConfig(e.target, false);
                        return false;
                    }
                    updateInputConfig(e.target, true);
                    e.target.previousElementSibling.value = "";
                    updateInputConfig(e.target.previousElementSibling, false);
                    inputCount -= 1;
                } else if (value.length > 1) {
                    e.target.value = value.split("")[0];
                }
                submitButton.classList.add("hide");
            });
        });

        window.addEventListener("keyup", (e) => {
            if (inputCount > 3) {
                submitButton.classList.remove("hide");
                submitButton.classList.add("show");
                if (e.key == "Backspace") {
                    finalInput = finalInput.substring(0, finalInput.length - 1);
                    updateInputConfig(inputField.lastElementChild, false);
                    inputField.lastElementChild.value = "";
                    inputCount -= 1;
                    submitButton.classList.add("hide");
                }
            }
        });



        //Start
        const startInput = () => {
            inputCount = 0;
            finalInput = "";
            input.forEach((element) => {
                element.value = "";
            });
            updateInputConfig(inputField.firstElementChild, false);
        };

        window.onload = startInput();
    </script>



    <!-- <script>
        console.log("Timer Function");
        let i = 5;
        var intervalId = setInterval(function() {
            i--;
            console.log(i);
            document.getElementById("timeValue").textContent = i;
        }, 1000);

        // Stop the interval after 5 seconds
        setTimeout(function() {
            clearInterval(intervalId);
        }, 5000);
    </script> -->

    <script>
        // $(document).ready(function() {
        //     startTimer();
        // });

        // function startTimer() {
        //     var time = 5 // time to countdown
        //     var limit = 2; // time limit
        //     var countDownDate = new Date().getTime() + (time * 60 * 1000); // 5 minutes from now

        //     // timer
        //     var timer = setInterval(function() {
        //         var now = new Date().getTime();
        //         var distance = countDownDate - now;
        //         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        //         var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        //         $('#timer').text(minutes + "m " + seconds + "s ");

        //         // set color red if timer less than 2 minutes
        //         if (distance < (limit * 60 * 1000)) {
        //             $('#timer').css("color", "#f71616");
        //         }

        //         // give expired text by down
        //         if (distance < 0) {
        //             clearInterval(timer);
        //             $('#timer').text("EXPIRED");
        //         }
        //     }, 1000);

        //     // reset by click on DOM
        //     $('html').on('click', function() {
        //         clearInterval(timer);
        //         startTimer();
        //     });

        // }
    </script>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            startTimer();
        });

        function startTimer() {
            var time = 11; // time to countdown
            var limit = 1; // time limit
            var countDownDate = new Date().getTime() + (time * 60 * 1000); // 3 minutes from now
            console.log(countDownDate);
            var timerElement = document.getElementById('timer');

            // timer
            var timer = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                timerElement.textContent = minutes + "m " + seconds + "s ";

                // set color red if timer is less than 2 minutes
                if (distance < (limit * 60 * 1000)) {
                    // timerElement.style.color = "#f71616";
                    timerElement.style.color = "white";

                }

                // display expired text
                if (distance < 0) {
                    clearInterval(timer);
                    timerElement.textContent = "EXPIRED";
                }
            }, 1000);

            // reset timer on click
            document.documentElement.addEventListener('click', function() {
                clearInterval(timer);
                startTimer();
            });
        }
    </script>


    <!-- popup Message -->
    <script>
        // let error_msg = "{{session('error')}}";
        // alert(error_msg);
    </script>

</body>

</html>