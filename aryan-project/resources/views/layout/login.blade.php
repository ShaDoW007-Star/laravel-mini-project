<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('resources/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/hf.css') }}">
</head>

<body onload="load()">
    <div id="loading"></div>
    <header>
        <nav class="navbar h-nav">
            <div class="container">
                <img src="{{ asset('resources/img/logo.png') }}" alt="Logo">
                <div class="navitem v-class">
                    <ul>
                    </ul>
                </div>
                <div class="btn v-class">
                    <a href="{{ url('') }}/signup"><button id="signup"><strong>Sign Up</strong></button></a>
                </div>
            </div>
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </header>

    <main>
        <div class="signup">
            <div class="form">
                <h1>Login</h1>
                <form action="{{url('/')}}/login" method="POST">
                    @csrf
                    <div class="fl">
                        <div class="lbl">
                            <label for="uname">Username</label>
                            <br>
                            <label for="pass">Password</label>
                            <br>
                        </div>
                        <div class="inp">
                            <input type="email" name="email" id="uname" placeholder="Email" required>
                            <br>
                            <input type="password" name="password" id="pass" placeholder="Password" required>
                            <br>
                        </div>
                    </div>
                    <button name="submit" id="submit"><strong>Submit</strong></button>
                    <button id="android" class="and"><strong>Submit</strong></button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div class="mainf">
            <div class="footlogo">
                <h3>Find Us Online</h3>
                <a href="https://facebook.com"><img src="{{ asset('resources/img/facebook.png') }}" alt="Facebook"
                        id="facebook"></a>
                <a href="https://instagram.com"><img src="{{ asset('resources/img/instagram.png')}}"
                        alt="Instagram"></a>
                <a href="https://linkedin.com"><img src="{{ asset('resources/img/linkedin.png')}}" alt="Linked-in"></a>
                <a href="https://twitter.com"><img src="{{ asset('resources/img/twitter.png')}}" alt="Twitter"></a>
            </div>
        </div>
        <h4>&copy; Copyright-2022 All Rights Reserved</h4>
    </footer>
</body>
<script src="../js/hf.js"></script>

</html>