<?php require('partials/head.php') ?>

    <div>
        <ul>
            <?php foreach ($users as $user) : ?>
                <li><?= $user->name ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div>
        <h1>Submit yout name</h1>

        <form method="POST" action="/names">
            <input name="name">
            <button type="submit">submit</button>
        </form>

    </div>

<?php require('partials/footer.php') ?>