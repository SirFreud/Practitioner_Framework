<?php require('partials/head.php'); ?>

    <h1>All Users</h1>
    <!---
        Instead of the code below, we want a URI to display all users, and one to add users
    -->
        <?php foreach ($users as $user) : ?>
            <li><?php echo $user->name; ?></li>
        <?php endforeach; ?>

        <h1>Submit your name</h1>

        <form method="POST" action="/users">
            <input name="name"></input>
            <button type="submit">Submit</button>
        </form>
<?php require ('partials/footer.php'); ?>