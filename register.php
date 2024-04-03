<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row text-center mt-5">
            <h1>Rejestracja</h1>
        </div>
        <div class="row">
            <form action="login.php">
                <div class="mb-3 col-4 offset-4">
                    <label class="form-label" for="emailInput">Email:</label>
                    <input class="form-controll w-100" type="email" name="email" id="emailInput">
                </div>
                <div class="mb-3 col-4 offset-4">
                    <label class="form-label" for="passwordInput">Hasło:</label>
                    <input class="form-controll w-100" type="password" name="password" id="passwordInput">
                </div>
                <div class="mb-3 col-4 offset-4">
                    <label class="form-label" for="repeatPasswordInput">Powtórz hasło:</label>
                    <input class="form-controll w-100" type="repeatPassword" name="repeatPassword" id="repeatPasswordInput">
                </div>
                <div class="mb-3 col-4 offset-4">
                    <label class="form-label" for="checkbox">Potwierdź przetworzenie danych ;D</label>
                    <input type="checkbox" id="checkbox">
                </div>
                
                <div class="mb-3 col-4 offset-4">
                    <button type="submit" class="btn btn-primary w-100">Zaloguj</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>