<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="/form.css">
    <script src="/app.js"></script>
</head>
<body>

    <header>
       <h1>ToyBox Dashboard</h1> 
    </header>

    <section class="login">
       <form method="post" action="/console/login" novalidate>
           
            <?= csrf_field() ?>

            <div class="inputBox">
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" value=""<?= old('email') ?>>
            </div>

            <div class="inputBox">
                <label>Password:</label>
                <input type="password" name="password" id="password">
            </div>
        <button type="submit">Log In</button>
       </form>
    </section>
</body>
</html>