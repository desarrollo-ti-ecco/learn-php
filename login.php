<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.php' ?>

<body>
    <div class="mx-auto mt-4 w-6/12">

        <h1 class="text-3xl mb-4">Log in</h1>

        <form class="flex flex-col" action="/api/auth.php">
            <input type="email" required max="50" class="input mb-4" placeholder="email">
            <input type="password" required max="20" class="input mb-4" placeholder="password">
            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
    </div>
</body>

</html>