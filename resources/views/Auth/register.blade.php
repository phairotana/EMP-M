<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: rgb(228, 229, 247);
        }
        a {
            text-decoration: none;
        }

        .card {
            font-family: sans-serif;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 3em;
            margin-bottom: 3em;
            border-radius: 10px;
            background-color: #ffff;
            padding: 1.8rem;
            box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="card">
        <form action="register-me" method="POST">
            @csrf
            <h4 class="title mb-3">Create New Account</h2>
            <div class="email-login">
                <div class="form-group">
                    <input type="text" class="form-control item col-md-12" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control item" name="password" placeholder="Password">
                </div>
            </div>

            <div>
                <button class="btn btn-primary">Submit</button>
                <a class="float-right pt-3" href="/login">Login</a>
            </div>
        </form>
    </div>
</body>
</html>
