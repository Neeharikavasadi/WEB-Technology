<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Educate</title>
    <link rel="stylesheet" href="register.css">
    <style>
        body {
            background-color: black; /* Set the background color of the whole webpage to black */
            color: white; /* Set the text color to white */
        }

        table {
       
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }

        th, td {
            border: 1px solid white; /* Change border color to white */
            padding: 8px;
            text-align: left;
        }

        th {
            background-color:#c49a00;
        }

        .next-button-container {
            text-align: center;
            margin-top: 20px;
        }

        .next-button {
            display: inline-block;
            padding: 5px 10px;
            background-color: #f1c40f; /* Yellow color */
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px; /* Smaller font size */
            transition: background-color 0.3s;
        }

        .next-button:hover {
            background-color: #c49a00; /* Darker shade of yellow on hover */
        }

        #downloadexcel {
            display: inline-block; /* Change to inline-block to make it smaller */
            margin-top: 20px;
            padding: 5px 10px; /* Smaller padding */
            background-color: #f1c40f; /* Yellow color */
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px; /* Smaller font size */
            transition: background-color 0.3s;
        }

        #downloadexcel:hover {
            background-color: #c49a00; /* Darker shade of yellow on hover */
        }
    </style>
    <script src="table2excel.js"></script>
</head>
<body>
<button id="downloadexcel">Download to Excel</button>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    ?>
        <h2>Signup Details</h2>
        <table id="table">
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $username; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><?php echo $password; ?></td>
            </tr>
        </table>
        <div class="next-button-container">
            <a href="index.html" class="next-button">Next</a>
        </div>
    <?php } ?>
    <script>
    document.getElementById('downloadexcel').addEventListener('click', function() {
        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("#table"));
    });
</script>
</body>
</html>