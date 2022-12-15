<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <center><h2>Creat Your Account</h2></center>

    <div class ="col-5 mx-auto mt-5">
        <form action="./controller/post.php" method="POST">
            <label class="w-100">
                <b>First Name</b>
                <input type="text" class="form-control" name="fn" id="" value ="<?= isset($_SESSION["old data"] ["fn"]) ? $_SESSION["old data"] ["fn"] : "" ?>">
                <span style="color:red">
                <?php
                if (isset($_SESSION ["errors"] ["fn"])) {
                    echo $_SESSION["errors"]["fn"];
                }
                ?>
                </span>
            </label>
            <label class="w-100">
                <b>Last Name</b>
                <input type="text" class="form-control" name="ln" id="" placeholder="" value ="<?= isset($_SESSION["old data"] ["ln"]) ? $_SESSION["old data"] ["ln"] : "" ?>">
                <span style="color:red">
                <?php
                if (isset($_SESSION["errors"]["ln"])) {
                    echo $_SESSION["errors"]["ln"];
                }
                ?>
                </span>
            </label>
            <label class="w-100">
                <b>Date of Birth</b>
                <input type="date"class="form-control" name="db" id="" value ="<?= isset($_SESSION["old data"] ["db"]) ? $_SESSION["old data"] ["db"] : "" ?>">
                <span style="color:red">
                <?php
                if (isset($_SESSION["errors"]["db"])) {
                    echo $_SESSION["errors"]["db"];
                }
                ?>
                </span>
            </label>
            <label class="w-100">
                <b>Username</b>
                <input type="text" class="form-control" name="un" id="" placeholder="" value ="<?= isset($_SESSION["old data"] ["un"]) ? $_SESSION["old data"] ["un"] : "" ?>">
                <span style="color:red">
                <?php
                if (isset($_SESSION["errors"]["un"])) {
                    echo $_SESSION["errors"]["un"];
                }
                ?>
                </span>
            </label>
            <label class="w-100">
                <b>Password</b>
                <input type="text"class="form-control" name="pd" id="">
                <span style="color:red">
                <?php
                if (isset($_SESSION["errors"]["pd"])) {
                    echo $_SESSION["errors"]["pd"];
                }
                ?>
                </span>
            </label>
            <label class="w-100">
                <b>Confirm Password</b>
                <input type="text"class="form-control" name="cd" id="" >
                <span style="color:red">
                <?php
                if (isset($_SESSION["errors"]["cd"])) {
                    echo $_SESSION["errors"]["cd"];
                } elseif(isset($_SESSION["errors"]["dm"])){
                    echo $_SESSION["errors"] ["dm"];
                } 
                
                ?>
                </span>
            </label>
            <button class="btn btn-primary mt-2 w-100 rounded-0" name="creat" value="submited">Creat</button>                
        </form>
    </div>
    
</body>
</html>
<?php session_unset(); ?>;