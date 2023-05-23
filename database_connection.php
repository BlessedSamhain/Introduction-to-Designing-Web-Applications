<?php
// PostgreSQL database credentials
$host = 'localhost';
$port = '5432';
$dbname = 'mydatabase';
$user = 'postgres';
$password = 'password';

// Get the book title from user input (you can replace $_POST['book_title'] with your actual input source)
$bookTitle = $_POST['book_title'];

try {
    // Connect to the PostgreSQL database
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
    $pdo = new PDO($dsn);

    // Prepare a query to check if the book exists in the database
    $query = "SELECT title FROM book WHERE title = :title";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':title', $bookTitle);
    $stmt->execute();

    // Check if the book exists in the database
    if ($stmt->rowCount() > 0) {
        // Book found, redirect to onepage.php
        header("Location: onepage.php");
        exit();
    } else {
        // Book not found, redirect to twopage.php
        header("Location: twopage.php");
        exit();
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
