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
                        <input type="text" class="form-control" name="title" placeholder="Pvz lego traktorius" value="<?=(isset($_GET['edit'])) ? $present->presentTitle : ""?>">
                    </div>
                    <div class="form-group">
                        <label>Kaina</label>
                        <input type="number" class="form-control" name="price" placeholder="Pvz 40.00" value="<?=(isset($_GET['edit'])) ? $present->price : ""?>">
                    </div>
                    
                    <div class="form-check">
                        <input type="checkbox" <?=$checked?>  class="form-check-input" name="isPacked" id="present">
                        <label class="form-check-label" for="present">Dovalėnė supakuota</label>
                    </div>
                    <?php if(!isset($_GET['edit'])) { ?>
                            <button class="btn btn-success" name="save" type="submit">išsaugoti</button>
                        <?php } else { ?>
                            <input type="hidden" name="id" value="<?=$present->id?>">
                            <button class="btn btn-primary" name="update" type="submit">atnaujinti</button>
                        <?php } ?>
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