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

    <section class="addToy">
       <form method="post" action="/console/toys/add" novalidate>
       <h2>Add a new toy</h2>
       <?= csrf_field() ?>     
       <div class="inputBox">
                <label for="name">Name of Toy:</label>
                <input type="name" name="name" id="name" value="<?= old('name') ?>">
            </div>
            <div class="inputBox">
                <label for="child">Child Id:</label>
                <input type="number" name="child_id" id="child" value="<?= old('child') ?>">
            </div>
            <div class="inputBox">
                <label for="image_name">Image File Name:</label>
                <input type="text" name="image" id="image_name" value="<?= old('image') ?>">
            </div>
            <div class="inputBox">
                <label for="condition">Condition:</label>
                <input type="text" name="condition" id="condition" value="<?= old('condition') ?>">
            </div>
            <div class="inputBox">
                <label for="price">Price:</label>
                <input type="number" min="1" step="any" name="price" id="price" value="<?= old('price') ?>">
            </div>
            <div class="inputBox">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" value="<?= old('description') ?>">
            </div>
            <div class="inputBox">
                <label for="material">Material:</label>
                <input type="text" name="material" id="material" value="<?= old('material') ?>">
            </div>
        <button type="submit">Add Toy</button>
       </form>
    </section>
</body>
</html>