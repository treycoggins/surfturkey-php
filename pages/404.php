<?php
// Set the response status code to 404
http_response_code(404);

// Display a custom error message
?>
<!DOCTYPE html>
<html>
<head>
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            font-size: 26px;
            margin: 0 0 10px;
        }

        p {
            font-size: 16px;
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>404 - Page Not Found</h1>
    <p>Oops! The requested page could not be found.</p>
</body>
</html>
