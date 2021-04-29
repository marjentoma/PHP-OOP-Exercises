<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="three.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Niconne&display=swap" rel="stylesheet">

    <title>Login Form</title>
    <style>
    
    </style>
</head>

<body>
    <div class="container">
        <div class="image">
            <h1>Checking the <span>Email Address</span></h1>
        </div>
        <div class="content">
            <h1>Email Validation</h1>
            <form action="" method="POST">
            <div class="form-group">
                <label for="">Email Address</label>
                <br>
                <input type="text" class="form-control" name="email" id="email"  placeholder="EmailAddress">

            </div>

            <br>
            <button type="submit" class="btn"name="post" >Submit</a></button><br><br>
                <h4 style="color: blue">
                        <?php
            class EmailCheck{
                public $email;
                public $regex= "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

                public function validate(){
                    if(isset($_POST['post'])){
                    $email=$_POST['email'];
                    if(preg_match( "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email)){
                        echo "Valid Email Address";
                    }else{
                        echo "<h4 style='color:red'>Invalid email address</h4>";
                    }
                }
                }
            }
            $emailcheck= new EmailCheck();
            $emailcheck->validate();
        ?>
                    </h4>
            </form>
        </div>
    </div>
        
</body>

</html>