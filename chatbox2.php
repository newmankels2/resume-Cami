
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <title>home</title>
        <link rel="stylesheet" href="style.css" type="text/css">

        <style>

            * {
                padding:0;
                margin:0;
                box-sizing: border-box;
            }
            form {
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%);
                width: 350px;
                height: 220px;
                padding: 20px 19px 0 10px;
                background: rgb(255,255,255, 0.5);
                border-radius: 10px;
            }
            textarea{ 
                width: 100%;
                height: 60px;
                margin: 30px 0 30px 0;
                padding: 6px;
            }
            /* Display Form */
            .open-button {
                padding: 8px 12px;
                cursor: pointer;
                position: fixed;
                bottom: 50px;
                right: 50px;
                width: 120px;
                background-color: rgb(110, 255, 221);
                padding: 6px 8px;
                border: 1px solid rgb(110, 255, 221);
                border-radius: 6px;
                margin: 0 40px 0 20px;
            }
            .chat-popup {
                display: none;
            }
            
            .btn {
                background-color: rgb(110, 255, 221);
                padding: 4px 8px;
                border: 1px solid rgb(110, 255, 221);
                border-radius: 6px;
                margin: 0 40px 0 20px;
            }
        </style>
    </head>
    <body> 
        <div class="centralised">
            <button class="open-button" onclick="openform()">Message Us</button>    
            <div class="chatbox chat-popup" id="myform">
                <form action=""method="post">
                    <label style="font-weight: bold;">Let's Talk</label><br>
                    <textarea name="chat" placeholder="Enter message here..."></textarea><br>
                    <button type="submit" name="submit" class="btn">Submit</button>
                    <button type="button" name="cancel" class="btn cancel" onclick="closeform()">Close</button>
                </form>
            </div>
        <div>   
        <script>
            function openform() {
                document.getElementById('myform').style.display='block';
            }
            function closeform() {
                document.getElementById('myform').style.display='none';
            }
        </script>
    </body>
</html>
    
<?php
    include 'config.php';

    if(isset($_POST["chat"])) {
        $sql = "INSERT INTO testing (message) VALUES (?);";
        if($stmt = mysqli_prepare($connect, $sql)) {
            mysqli_stmt_bind_param($stmt,"s",$message);
            
            if(mysqli_stmt_execute($stmt)) {
                echo "Message submitted";
            }
        }
    }
?>
