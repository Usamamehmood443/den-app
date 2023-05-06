<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="/scss/logincss.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">

                <button type="submit">Login</button>
            </form>

            @if (session('error'))
            <div class="alert alert-danger" style="color:red; margin-top: 10px; text-align: center">
                {{ session('error') }}
            </div>
            @endif
        </div>
    </div>
</body>

</html>