<!DOCTYPE html>
<head>
    <title>TELL US WHAT YOU ARE LOOKING FOR</title>
    <link rel="stylesheet" type = "text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/61cd813530.js" crossorigin="anonymous"></script>
</head>
<?php
    // Retrieve the book details from the AJAX request
    $author = $_POST['author'];
    $title = $_POST['title'];
    $publisher = $_POST['publisher'];
    $isbn = $_POST['isbn'];

    // Establish a connection to your PostgreSQL database
    $host = 'localhost';
    $dbname = 'mydatabase';
    $username = 'postgres';
    $password = 'password';

    $dsn = "pgsql:host=$host;dbname=$dbname";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        // Create a new PDO instance
        $pdo = new PDO($dsn, $username, $password, $options);

        // Prepare the SQL statement
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM book WHERE author = :author OR title = :title OR publisher = :publisher OR isbn = :isbn");

        // Bind the parameter values
        $stmt->bindValue(':author', $author);
        $stmt->bindValue(':title', $title);
        $stmt->bindValue(':publisher', $publisher);
        $stmt->bindValue(':isbn', $isbn);

        // Execute the query
        $stmt->execute();

        // Fetch the result
        $count = $stmt->fetchColumn();

        // Check if any matching books were found
        if ($count > 0) {
            // At least one matching book found in the database
            echo 'found';
        } else {
            // No matching books found in the database
            echo 'not found';
        }
    } catch (PDOException $e) {
        // Handle any errors that occurred during the database connection or query execution
        echo 'Error: ' . $e->getMessage();
    }
?>
<script>
    // JavaScript code here
    function searchBook() {
        var author = document.getElementById('author').value;
        var title = document.getElementById('title').value;
        var publisher = document.getElementById('publisher').value;
        var isbn = document.getElementById('isbn').value;

        // Perform an AJAX request to the PHP script
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'check_book.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle the response from the PHP script
                var response = xhr.responseText;
                if (response === 'found') {
                    // At least one field matches a book in the database, redirect to "yeswehaveit" page
                    window.location.href = 'yeswehaveit.php';
                } else {
                    // No matching books found in the database, redirect to "bookunavailable" page
                    window.location.href = 'bookunavailable.php';
                }
            }
        };
        xhr.send('author=' + encodeURIComponent(author) + '&title=' + encodeURIComponent(title) + '&publisher=' + encodeURIComponent(publisher) + '&isbn=' + encodeURIComponent(isbn));
    }
</script>

<body class="looking_container">
    <a href = "login"><i class="fa-sharp fa-solid fa-book"></i></a>
    <div class="square_format">tell us what you are looking for</div>
    <div class="looking_form_holder">
        <div class="looking_col_1">
            <form class = "mini">
                <input class = "mini" name="author" type="text" placeholder="author">
                <input class = "mini"name="publisher" type="text" placeholder="publisher">
            </form>
        </div>
        <div class="looking_col_2">
            <form class = "mini">
                <input class = "mini" name="title" type="text" placeholder="title">
                <input class = "mini" name="ISBN" type="text" placeholder="ISBN">
            </form>
        </div>
    </div>
    <div class="looking_footer">
        <a href="projects" class="looking_back"><img src="public/img/back.svg"></a>
        <div class="looking_tick"><img src="public/img/tick.svg" onclick="searchBook()" ></div>
    </div>
</body>