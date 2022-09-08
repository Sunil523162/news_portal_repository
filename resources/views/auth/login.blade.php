<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Page</title>
    <style>
        .login-section {
            margin: auto;
            margin-top: 10%;
            width: 60%;
            border: 3px solid rgb(2, 0, 36);
            padding: 50px;
        }

        .form-section {
            /* margin: 10px; */
        }

        .form-section>input {
            width: 40%;
            height: 30px;
            margin: 10px;
            padding-left: 10px;
            border-radius: 20px;
            border-bottom: 1px solid black;
            box-shadow: box-shadow: -1px 5px 5px 0px rgba(17, 73, 105, 0.75);
            -webkit-box-shadow: -1px 5px 5px 0px rgba(17, 73, 105, 0.75);
            -moz-box-shadow: -1px 5px 5px 0px rgba(17, 73, 105, 0.75);

        }

        .form-section>input:hover {
            cursor: pointer;
        }

        .message-text {
            color: rgb(235, 20, 20)
        }

        .login-button {
            margin-top: 10px;
            width: 150px;
            height: 30px;
            border-radius: 20px;
            background-color: rgb(18, 18, 68);
            color: white
        }

        .login-button:hover {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 28%, rgba(0, 212, 255, 1) 100%);
        }
    </style>
</head>

<body>
    <section class="login-section">
        <div class="container">
            <div class="login-wrapper">
                <center>
                    <div class="heading">
                        <h2> Admin Login</h2>

                    </div>
                    <hr>
                </center>
                <center>
                    @if (Session::has('error'))
                        <p>{{ Session::get('error') }}</p>
                    @endif
                    <form action="{{ route('authenticate') }}" class="login-form" method="POST">
                        @csrf
                        <div class="form-section">
                            <label for="email" style="margin-right: 15px;">Email</label>
                            <input type="text" class="form-control" name="email">
                            @error('email')
                                <p class="message-text">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-section">
                            <label for="name">Password</label>
                            <input type="password" class="form-control" name="password">
                            @error('email')
                                <p class="message-text">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-section">
                            <button class="login-button">Login</button>
                        </div>
                    </form>
                    <br>
                    <hr>
                    <a href="http://127.0.0.1:8000/"><input type="submit" value="Back_Home"/></a>
                </center>
            </div>
        </div>
    </section>
</body>

</html>
