<?php
    require_once('DB.php');
    $db = new DB();

?>

<!DOCTYPE html>
<head>
    <title>TELL US WHAT YOU ARE LOOKING FOR</title>
    <link rel="stylesheet" type = "text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/61cd813530.js" crossorigin="anonymous"></script>
</head>
<body class="looking_container">
    <a href = "login"><i class="fa-sharp fa-solid fa-book"></i></a>
    <div class="square_format">tell us what you are looking for</div>
    <div class="looking_form_holder">
        <div class="looking_col_1">
            <form class = "mini">
                <input class = "mini" id="author" name="author" type="text" placeholder="author">
                <input class = "mini" id="publisher" name="publisher" type="text" placeholder="publisher">
            </form>
        </div>
        <div class="looking_col_2">
            <form class = "mini">
                <input class = "mini" id="title" name="title" type="text" placeholder="title">
                <input class = "mini" id="ISBN" name="ISBN" type="text" placeholder="ISBN">
            </form>
        </div>
    </div>
    <div class="looking_footer">
        <a href="projects" class="looking_back"><img src="public/img/back.svg"></a>
        <div class="looking_tick"><img src="public/img/tick.svg" onclick="searchBook()" ></div>
    </div>
</body>