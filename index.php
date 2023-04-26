<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./styles/login/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP</title>
</head>
<body>
    <main>
        <article>
            <div class="login-box">
                <div class="change-tab">
                    <button onclick="abriAba(0,1)" class="aba1 tabs active">Accout</button>
                    <button onclick="abriAba(1,0)" class="aba2 tabs">Password</button>
                </div>
                <form action="./includes/menu.php" method="POST">
                    <div id="accout" class="accout">
                        <p>Name</p>
                        <input type="text" required>
                        <p>Gmail</p>
                        <input type="email" required>
                    </div>
                    <div id="password" class="password">
                        <p>Password</p>
                        <input type="password" required minlength="8">
                        <p>password Again</p>
                        <input type="password" required minlength="8">
                    </div>
                    <div class="submit">
                        <input type="submit" value="Save">
                    </div>
                </form>
            </div>
            <div class="image-Login"></div>
        </article>
    </main>
    <script src="./public/login.js"></script>
</body>
</html>