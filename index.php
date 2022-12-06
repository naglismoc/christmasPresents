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


    <div class="container">
        <div class="row">
            <div class="col-6 mb-4">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Dovalėnės pavadinimas</label>
                        <input type="text" class="form-control" name="title" placeholder="Pvz lego traktorius">
                    </div>
                    <div class="form-group">
                        <label>Kaina</label>
                        <input type="number" class="form-control" name="price" placeholder="Pvz 40.00">
                    </div>
                    
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="isPacked" id="present">
                        <label class="form-check-label" for="present">Dovalėnė supakuota</label>
                    </div>
                        <button class="btn btn-success" type="submit">išsaugoti</button>
                </form>
            </div>
            <div class="col-6"></div>

    </div>


        <table class="table table-striped">
            <?php include "./views/components/table.php";?>
        </table>
    </div>


</body>
</html>