<?php include "./routes.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include "./views/components/head.php";?>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-light">
        <?php include "./views/components/nav.php";?>
    </nav>
    </header>



    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($presents as $present) { ?>
            <tr>
                <td><?=$present->presentTitle?></td>
                <td><?=$present->price?></td>
                <td><?=$present->wrapped?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>



</body>
</html>