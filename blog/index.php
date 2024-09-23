<?php
$posts = file('posts.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My Blog</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="api/uploadlol.php">Upload Post</a>
        </nav>
    </header>
    
    <main>
        <section id="posts">
            <h2>Blog Posts</h2>
            <?php foreach (array_reverse($posts) as $post): ?>
                <article>
                    <p><em>Posted on <?php echo date("F j, Y"); ?></em></p>
                    <p><?php echo htmlspecialchars($post); ?></p>
                </article>
            <?php endforeach; ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 My Blog. All rights reserved.</p>
    </footer>
</body>
</html>
