<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            position: fixed;
            height: 100%;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            width: calc(100%);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center">Menu</h4>
        <a href="?page=siswa/Dashboard.php"><i class="bi bi-house"></i> Dashboard</a>
        <a href="?page=profile"><i class="bi bi-person"></i> Profile</a>
        <a href="?page=messages"><i class="bi bi-chat"></i> Messages</a>
        <a href="?page=settings"><i class="bi bi-gear"></i> Settings</a>
        <a href="?page=logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
    </div>

    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <!-- Main Content -->
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'siswa.dashboard';
        $pagePath = 'siswa/' . $page . '.php';
        if (file_exists($pagePath)) {
            include($pagePath);
        } else {
            echo "<h2>Page not found!</h2>";
        }
        ?>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
