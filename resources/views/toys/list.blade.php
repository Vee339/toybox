<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/app.css">
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
    
    <?php if(session()->has('message')): ?>
        <div class="message" >
            <p><?= session()->get('message') ?></p>
        </div>
    <?php endif; ?>

    <main>
        <h2>Manage Toys</h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Child Id</th>
                    <th>Condition</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Material</th>
                    <th>Edit</th>
                    <th>Delete</th>
                <tr>
            </thead>
            <tbody>
                <?php foreach($toys as $key => $value): ?>
                    <tr>
                        <td><?= $value->id ?></td>
                        <td><?= $value->name ?></td>
                        <td><?= $value->child_id ?></td>
                        <td><?= $value->condition ?></td>
                        <td><?= $value->price ?></td>
                        <td><?= $value->description ?></td>
                        <td><?= $value->material ?></td>
                        <td><a href="/console/toys/edit/<?= $value->id ?>">Edit</a></td>
                        <td><a href="/console/toys/delete/<?= $value->id ?>">Delete</a></td>
                    <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a class="btn" href="/console/children/add">Add new</a>
    </main>
</body>
</html>