<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Dashboard</title>
    <link rel="stylesheet" href="../admin/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="/index.php" class="logout-btn">Logout</a></li>
        </ul>
    </nav>
    <header class="headerBackground">
        <div class="headerText">
            <h1> Welcome to the library</h1>
        </div>
    </header>

    <section class="dashboard">
        <div class="card">
            <h2>Books</h2>
            <p>100</p>
        </div>

        <div class="card">
            <h2>Authors</h2>
            <p>50</p>
        </div>

        <div class="card">
            <h2>Visits</h2>
            <p>500</p>
        </div>
    </section class="searchBar">
        <div class="wrap">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="What book are you looking for?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    <section class="searchDashboard">

    </section>

    <script src="https://kit.fontawesome.com/6a7e691908.js" crossorigin="anonymous"></script>
</body>
</html>