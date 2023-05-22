<!DOCTYPE html>
<head>
    <title>CREATE ACCOUNT</title>
    <link rel="stylesheet" type = "text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/61cd813530.js" crossorigin="anonymous"></script>
</head>
<body >
    <div class="create_account_container">
        <div class="create_account_image"><img src="public/img/createaccount.svg"></div>
                <div class="square2" style="text-transform: lowercase;"> tell us about yourself: </div>
                <a href = "login"><i class="fa-sharp fa-solid fa-book"></i></a>
            <div class="tell_us">
                <form class="tellform" style="gap: 1em;">
                    <input name="firstname" type="text" placeholder="first name">
                    <input name="lastname" type="text" placeholder="last name">
                    <input name="cardnumber" type="text" placeholder="card number">
                    <input name="email" type="text" placeholder="e-mail">
                    <input name="login" type="text" placeholder="login">
                    <input name="cvc" type="text" placeholder="cvc">
                    <input name="password" type="text" placeholder="password">
                    <input name="country" type="text" placeholder="country">
                    <input name="phonenumber" type="text" placeholder="phone number">
                </form>
            </div>
            <div class="create_account_crossedout">
                <button class="create_account_button"><a href="accountcreatedsuccessfully">CREATE ACCOUNT</a></button>
                <a href="login"><img style="scale: 0.45;" src="public/img/create_account_crossedout.svg"></a>
            </div>
        </div>
    </div>
</body>