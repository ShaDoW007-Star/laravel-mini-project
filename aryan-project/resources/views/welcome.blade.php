<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <a href="{{url('/')}}/signup">
        <button class="btn btn-primary">Sing-up</button>
    </a>
    <a href="{{url('/')}}/login">
        <button class="btn btn-primary">Login</button>
    </a>
        <form action="{{url('/')}}/" method="post">
        @csrf
        <div class="container ">
            <h1 class="text-center">Registation</h1>
            <x-input name="name" label="name" type="text"/>
            <x-input name="email" label="email" type="email"/>
            <label for="">Gender -> Male</label>
            <input type="radio" name="gender" id="male" value="M">
            <label for="">Female</label>
            <input type="radio" name="gender" id="female" value="F"><br>
            <label for="">Address</label><br>
            <textarea name="address" id="" cols="40" rows="5"></textarea>
            <x-input name="password" label="password" type="password"/>
            <x-input name="cpassword" label="Confirm password" type="password"/>
            <x-input name="cv" label="Upload CV" type="file"/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>