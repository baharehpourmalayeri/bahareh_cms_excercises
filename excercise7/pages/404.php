<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Lost in News</title>
    <link rel="stylesheet" href="/css/pages/404.css?10">
</head>
<body>
    <div class="container">
        <h1 class="headline">Oops! Looks like you're lost in the maze of news.</h1>
        <p class="description">The page you're looking for doesn't exist.<br> But don't worry, we’ll help you find your way!</p>
        <img src="../images/newspaper.png" alt="News Mascot" class="mascot">
        <div class="search-bar">
            <input type="text" placeholder="Search for news...">
            <button>Search</button>
        </div>
        <div class="links">
            <button class="home-button" onclick="goHome()">Take Me Home 🏠</button>
        </div>
    </div>
    <script>
        function goHome() {
            window.location.href = '/index.php';
        }
    </script>

</body>
</html>
