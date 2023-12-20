<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/contoh.css">
</head>

<body>
    <div class="login">
        <h2 class="active"> sign in </h2>

        <h2 class="nonactive"> sign up </h2>
        <form action="/login" method="POST" enctype="multipart/form-data">
            @csrf


            <input type="text" class="text" name="name">
            <span>username</span>

            <br>

            <br>

            <input type="password" class="text" name="password">
            <span>password</span>
            <br>

            <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
            <label for="checkbox-1-1">Keep me Signed in</label>

            <button class="signin">
                Sign In
            </button>


            <hr>

            <a href="#">Forgot Password?</a>
        </form>

    </div>
</body>

</html>
