<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Friends, Cloudflare, Argo Tunnel">
        <meta name="author" content="Vishal Pranav">

        <title>Friends</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
            body {
                background: whitesmoke;
                font-family: 'Poppins', sans-serif;
            }
            .u-data {
                font-weight: 500 !important;
            }
            .p-data:hover {
                background-color: rgb(203, 203, 207) !important;
            }
            .form-set {
                background: whitesmoke;
                width: fit-content;
                margin: 0 auto;
            }
            #preloader {
                position: absolute;
                z-index: 9999;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.25);
                display: none;
            }
            #preloader > div {
                position: absolute;
                width: 250px;
                height: 200px;
                left: 50%;
                top: 50%;
                margin-top: -100px;
                margin-left: -125px;
            }
            .mobile {
                margin-top: 5px;
                display: none;
            }
            @media only screen and (max-width : 860px) {
                .form-set {
                    width: 96%;
                    margin: 2%;
                }
                .u-data {
                    margin-bottom: 25px;
                }
                .mobile {
                    display: block;
                }
                .last {
                    margin-top: 20px; 
                }
                #bg-video {
                    display: none;
                }
            }
            @media only screen and (min-width : 860px) {
                .form-set {
                    width: 30%;
                    margin-top: 12.5vh;
                }
                #bg-video {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: -1;
                }
            }
        </style>
        @if (request()->is('users/*/edit') || request()->is('users/create'))
    <script>
            const Email = new RegExp(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
        
            function fieldTracer() {
                let X = $('#fname').val(), Y = $('#lname').val(), Z = $('.register-msg').html();
                if (X.length > 0 || Y.length > 0) {
                    $('.register-msg').html("Welcome, " + X + " " + Y);
                } else {
                    $('.register-msg').html("Welcome New User");
                }
            }

            function rightField(ID) {
                $(ID).attr('class', 'form-control border border-success');
                $(ID + '-text').html('');
            }

            function wrongField(ID, Text) {
                $(ID).attr('class', 'form-control border border-danger');
                $(ID + '-text').html(Text);
            }

            function Validation() {
                let Form = 0;
                if($('#fname').val().length > 0) {
                    rightField('#fname');   ++Form;
                }   else {
                    wrongField('#fname', 'Invalid Name');   Form = 0;
                }
                ($('#lname').val().length > 0) ? $('#lname').addClass("border border-success") : $('#lname').removeClass("border border-success");
                ($('#gender').val().length > 0) ? $('#gender').addClass("border border-success") : $('#gender').removeClass("border border-success");
                ($('#dob').val().length > 0) ? $('#dob').addClass("border border-success") : $('#dob').removeClass("border border-success");
                if(Email.test($('#email').val())) {
                    rightField('#email'); ++Form;
                }   else {
                    wrongField('#email', 'Invalid Email'); Form = 0;
                }
                if(Form == 2) return true;
                return false;
            }
        </script>            
        @endif
    </head>
    <body class="antialiased">

        <!-- Status Icons -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>
    
        @yield('content')

        <!-- AJAX Preloader -->
        <div id="preloader">
            <div class="p-5 bg-light shadow-lg rounded text-center">
                <img src="{{ url('storage/trisection.gif') }}" alt="Loading ...">
                <h4 class="mt-3">LOADING ...</h4>
            </div>
        </div>

        @if (request()->is('/') || request()->is('about'))
        <!-- Footer -->
        <div class="footer mt-3 p-4 text-center bg-light">
            &copy; Copyright: <a href="{{ url('/') }}" style="text-decoration: none"> Friends Community </a>
        </div>
        @endif

        <!-- Vector Background -->
        {{-- <video id="bg-video" src="{{ asset('storage/network.webm') }}" autoplay muted loop></video> --}}
    
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>