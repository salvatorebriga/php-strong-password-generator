<?php

include 'function.php';

$number = intval($_GET['number']);

if ($number < 4) {
    $number = 12;
}

$password = random_password($number);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Index</title>
</head>

<body class="bg-dark text-light">
    <div class="container text-center p-5">
        <header>
        </header>

        <main>
            <h1>RANDOM PASSWORD GENERATOR</h1>
            <p>Inserisci la lunghezza della password:</p>
            <form action="index.php" method="GET" style="display: flex; justify-content: center; align-items:center;" class="p-3">
                <input class="m-2" type="number" name="number" id="number" min="4" required value="<?php echo htmlspecialchars($number); ?>">
                <button class="btn btn-primary btn-sm">Submit</button>
            </form>
            <p>Password Generata:</p>
            <p><?php echo htmlspecialchars($password); ?></p>
        </main>

        <footer>
        </footer>
    </div>
</body>

</html>