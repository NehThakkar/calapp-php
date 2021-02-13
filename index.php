<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tip Calculator</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="clear.js" defer></script>
    <!--google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&family=Imbue:wght@300&display=swap" rel="stylesheet">
    <!--custom styles-->
    <link href="main.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <main>
            <header>
                <h1> Not Sure How Much To Tip?</h1>
                <h2> Let Our Tip Calculator Help! </h2>
            </header>
            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                <div class="form-group">
                    <label for="amount"> How much was the bill? </label>
                    <input type="text" name="amount" id="amount" class="form-control">
                </div>
                <div class="form-group">
                    <label for="percentage"> How much would you like to tip? </label>
                    <select name="percentage" id="percentage" class="form-control">
                        <option value="15">15%</option>
                        <option value="20">20%</option>
                        <option value="25">25%</option>
                        <option value="30">30%</option>
                        <option value="35">35%</option>
                    </select>
                </div>
                <input type="submit" value="submit" name="submit" class="btn btn-primary">
            </form>
            <button name="clear" class="btn btn-secondary"> clear calculator </button>
            <?php require('calculate-script.php'); ?>
        </main>
    </div>
    <!--end wrapper-->
</body>

</html>