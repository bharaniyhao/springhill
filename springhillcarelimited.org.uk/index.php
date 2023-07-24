<?php
// Start the session
session_start();

// Get the requested page from the URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Include the header file
include_once 'inc/header.php';

// Use a switch statement to determine which page to include
switch ($page) {
    case 'home':
        include 'pages/home.php';
        break;
        case 'about':
            include 'pages/about.php';
            break;
        case 'services':
            include 'pages/home.php';
            break;
        case 'portfolio':
            include 'pages/portfolio.php';
            break;
        case 'contact':
            include 'pages/contact.php';
            break;
        case 'blog':
            include 'pages/blog.php';
            break;
    default:
        include 'pages/home.php';
        break;
}

// Include the footer file
include_once 'inc/footer.php';

?>
<!-- Include your JavaScript scripts here -->
