<?php
include 'pageformat.php';
//session_start();
$mid = $_SESSION['mid'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAS</title>
    <style>
    h2{
            margin-top:0px;
            text-align: center;
            background-color: rgb(103 98 185/48%);
            padding:4px;
        }

        .button-container {
            text-align: center;
        
        }

        .st {
            display: block;
            width: 200px;
            padding: 10px 20px;
            background-color: #100a89;
            color: #fff;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            cursor: pointer;
        }
        .rd {
            display: block;
            width: 200px;
            padding: 10px 20px;
            background-color: #100a89;
            color: #fff;
            border: none;
            border-radius: 5px;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Request List</h2>
        <form method="post" enctype="multipart/form-data">
            
                <input type="submit" value="Sent" formaction="sentlist.php" class="st" />
                <input type="submit" value="Received" formaction="receivedlist.php" class="rd" />
            
        </form>
    </div>
    <footer>
        <p>MULTIPARTY AUTHENTICATION SYSTEM</p>
    </footer>
</body>

</html>