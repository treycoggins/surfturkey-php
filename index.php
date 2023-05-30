<?php

$requestPath = $_SERVER['REQUEST_URI'];
$os = PHP_OS;


if(strtoupper(substr($os, 0, 3)) === 'LIN') {
  $basePath = '/home/trey/Projects/surfturkey-php';
} else if (strtoupper(substr($os, 0, 3)) === 'DAR') {
  echo "Running MacOS";
  $basePath = '/Users/treycoggins/Projects/surfturkey-php';
}



if (substr($requestPath, 0, strlen($basePath)) === $basePath) {
  $requestPath = substr($requestPath, strlen($basePath));
}


if ($requestPath === '/') {
  include 'pages/home.php';
} else if ($requestPath === '/about') {
  include 'pages/about.php';
} else if ($requestPath === '/blog') {
  include 'pages/blog.php';
} else if ($requestPath === '/contact') {
  include 'pages/contact.php';
} else if ($requestPath === '/projects') {
  include 'pages/projects.php';
} else if ($requestPath === '/get-started') {
  include 'pages/get-started.php';
} else {
  include 'pages/404.php';
}
 ?>
