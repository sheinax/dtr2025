
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Login</title>
    <link rel="stylesheet" href="{{ url('CSS/login.css') }}">
</head>

<style>

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url("{{ asset('img/background.jpg') }}");
    background-size: cover;
    background-position: center;
}
</style>

<body>
    
    <div class="container">
        <div class="left-panel">
            <img src="https://qrtor.net/qrbg.png" alt="">
            <button class="scanbtn">Scan Now</button>
         
        </div>

        <div class="right-panel">
            <h2 class = "title">LOGIN</h2>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <label for="username">Username</label>
                <input type="email" id="username" placeholder="Enter your username" name="email">
                
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password" name="password">
              

                <button type="submit" class="signin-btn">Sign In</button>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </form>
        </div>
    </div>
</body>
</html>