<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = trim($_POST['post']);
    
    if (!empty($post)) {
        file_put_contents('../posts.txt', $post . PHP_EOL, FILE_APPEND);
    }
    
    header('Location: ../../index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Post</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <header>
        <h1>Upload New Blog Post</h1>
    </header>
    
    <main>
        <form action="uploadlol.php" method="POST">
            <textarea name="post" rows="5" cols="40" placeholder="Write your blog post here..." required></textarea><br>
            <input type="submit" value="Submit Post">
        </form>
        <a href="../index.php">Back to Blog</a>
    </main>

    <footer>
        <p>&copy; 2024 My Blog. All rights reserved.</p>
    </footer>
</body>
</html>
