<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>webp_games</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <div class="header-left">
        <h1>webp_Games</h1>
    </div>
    <div class="header-right">
        <?php if (isset($_SESSION['username'])): ?>
            <a href="profile.php" class="profile-icon">👤 <?php echo $_SESSION['username']; ?></a> |
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a> |
            <a href="signup.php">Sign Up</a>
        <?php endif; ?>
    </div>
</header>

<main>
    <h2>Welcome to webp_games</h2>
    <p>Enjoy free online games!</p>

    <section id="games">
        <h3>Featured Games</h3>
        <div class="game-list">
            <div class="game">
                <p><a href="games/snake.html"><img src="games/snakeio.jpg" alt="Game 1" width="100" height="180"></a></p>
                <p>Game 1</p>
            </div>
            <div class="game">
            <p><a href="games/sudoku.html"><img src="games/sudoku.jpg" alt="Game 2"></a></p>
                <p>Game 2</p>
            </div>
            <div class="game">
            <p><a href="games/tic_tac_toe.html"><img src="games/tic_tac_toe.png" alt="Game 2"></a></p>
                <p>Game 3</p>
            </div>
        </div>
    </section>
</main>

<section id="abstract">
    <h2>Abstract</h2>
    <p>This website is a basic onlibe web games created for academic learning. It includes a game showcase,
       user registration, login system, profile management, and database integration using HTML, CSS, PHP, and MySQL.</p>
</section>

<footer>
    <p>© 2025 webp_games Project</p>
</footer>

</body>
</html>
