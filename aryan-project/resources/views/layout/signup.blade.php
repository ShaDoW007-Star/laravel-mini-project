<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="stylesheet" href="{{ asset('resources/css/signup.css') }}">
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
                    <a href="{{ url('') }}/login"><button id="login"><strong>Login</strong></button></a>
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
                <h1>Sign-Up</h1>
                <form action="{{url('/')}}/signup" method="POST" autocomplete="off">
                @csrf
                    <div class="fl">
                        <div class="lbl">
                            <label for="fname">First Name</label>
                            <br>
                            <label for="lname">Last Name</label>
                            <br>
                            <label for="contact">Contact No.</label>
                            <br>
                            <label for="email">Email</label>
                            <br>
                            <label for="pass">Password</label>
                            <br>
                            <label id="cpass" for="cpass">Confirm Password</label>
                            <br>
                        </div>
                        <div class="inp">
                            <input type="text" name="f_name" id="f_name" placeholder="First Name">
                            <span>
                                @error('f_name')
                                {{$message}}
                                @enderror
                            </span>
                                <br>
                            <input type="text" name="l_name" id="l_name" placeholder="Last Name">
                            <span>
                                @error('l_name')
                                {{$message}}
                                @enderror
                            </span>
                            <br>
                            <input type="text" name="contact" id="contact" placeholder="Contact">
                            <span>
                                @error('contact')
                                {{$message}}
                                @enderror
                            </span>
                            <br>
                            <input type="email" name="email" id="email" placeholder="Email">
                            <span>
                                @error('email')
                                {{$message}}
                                @enderror
                            </span>
                            <br>
                            <input type="password" name="password" id="password" placeholder="Password">
                            <span>
                                @error('password')
                                {{$message}}
                                @enderror
                            </span>
                            <br>
                            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
                            <span>
                                @error('cpassword')
                                {{$message}}
                                @enderror
                            </span>
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
