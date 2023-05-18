<!DOCTYPE html>
<head>
    <link rel="stylesheet" type = "text/css" href="public/css/style.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
        <div class="logo-container">
            <form class ="login" action="login" method="POST">
                <div class="messages">
                    <?php
                        if (isset($messages)) {
                        foreach ($messages as $message) {
                            echo $message;
                            }
                        }
                    ?>
                </div>
                <input name="email" type="text" placeholder="e-mail@gmail.com">
                <input name="password" type="password" placeholder="password">
                <button type="submit">LOG IN</button>
                <button type="submit" class="smaller-font"><a href="createaccount">CREATE ACCOUNT</a></button>
            </form>
        </div>
    </div>
</body>