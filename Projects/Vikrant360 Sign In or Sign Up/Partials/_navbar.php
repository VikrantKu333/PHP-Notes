<!-- Header Page -->
<?php
session_start();

if (!isset($_SESSION['UserName'])) {
    header("location: index.php");
}

echo "<nav class='navbar navbar-expand-md navbar-dark bg-dark'>
        <div class='container'>
            <a class='navbar-brand text-warning' href='Welcome.php'>Vikran360</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav'
                aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
        
            <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link' aria-current='page' href='Like.php'>Like</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' aria-current='page' href='Share.php'>Share</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' aria-current='page' href='Comment.php'>Comment</a>
                    </li>
                </ul>
            </div>
            <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
                <ul class='navbar-nav text-center'>
                    <li class='nav-item dropdown'>
                        <a class='nav-link' href='#' id='navbarDarkDropdownMenuLink' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            <i class='fa-solid fa-circle-user'></i>
                        </a>
                        <ul class='dropdown-menu dropdown-menu-dark dropdown-menu-end'
                            aria-labelledby='navbarDarkDropdownMenuLink'>
                            <li><a class='dropdown-item' href='#'>Profile - " . $_SESSION['UserName'] . "</a></li>
                            <li><a class='dropdown-item' href='Partials/_Sign Out.php'>Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>";
?>