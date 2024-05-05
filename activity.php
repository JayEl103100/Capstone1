<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Activities</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Custom CSS for activity.php */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .activity-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .activity-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Student Activities</h1>
    <a href="#" class="activity-link" id="activity-link">Click here to start your activity</a>
</div>

<script>
    // JavaScript for handling the link click event
    document.getElementById("activity-link").addEventListener("click", function(event) {
        event.preventDefault();
        // Replace '#' with your actual activity link
        window.location.href = "https://www.opencircuits.io/";
    });
</script>
</body>
</html>
