<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToyBox - Add new Toy</title>
    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="/form.css">
    <script src="/app.js"></script>
</head>
<body>

<header>
       <h1>ToyBox Dashboard</h1> 
       <div class="actions">
            <?php if(Auth::check()):?>
                <p> You are logged in as 
                    <?= auth()->user()->name ?>
                </p>
                <ul id="menu">
                    <li><a href="/console/logout">Logout</a></li>
                    <li><a href="/console/dashboard">Dashboard</a></li>
                    <li><a href="/">Website Home Page</a></li>
                </ul>
            <?php else: ?>
                <a href="/">Return to my HomePage </a>
            <?php endif; ?>
        </div>
    </header>

    <section class="addChild">
       <form method="post" action="/console/children/add" novalidate>
       <?= csrf_field() ?>     
       <div class="inputBox">
                <label for="name">Name of Child:</label>
                <input type="name" name="name" id="name" <?= old('name') ?>?>
            </div>
            <div class="inputBox">
                <label for="image_name">Image File Name:</label>
                <input type="text" name="image" id="image_name" <?= old('image') ?>>
            </div>
            <div class="inputBox">
                <label for="gender">Gender:</label>
                <input type="text" name="gender" id="gender" <?= old('gender') ?>>
            </div>
            <div class="inputBox">
                <label for="birthDate">Date of Birth:</label>
                <input type="date" name="date_of_birth" id="birthDate" <?= old('date_of_birth') ?>>
            </div>
        <button type="submit">Add Child</button>
       </form>
    </section>
</body>
</html>