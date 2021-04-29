<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="card card-login mx-auto text-center bg-dark w-50" style="padding:20px;margin-top:100px">
            <div class="card-header mx-auto bg-dark ">
                <span style="font-size:50px;color:white"> 𝐄𝐗𝐄𝐑𝐂𝐈𝐒𝐄 2 </span><br />
            </div> <center>
                 <form method="POST" name="post">
           <div class="form-group">
                <label for="exampleInputEmail1">Data</label>
                <input type="text" class="form-control w-75"   name="input" placeholder="Enter data" >
                <small id="caption" class="form-text text-muted">The data inputted will be added to the option value in the dropdown.</small>
            </div>
            </center>

                    <div class="form-group" >
                        <input type="submit" name="submit" value="Add" style="float:left;margin-top:30px;padding: 8px 30px"
                            class="btn btn-outline-danger float-right login_btn">
                                <select class="form-select form-select w-50" style="float:right;margin-top:30px;">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    class UserInput{
        public $input;
        public function AddOption($input){
                if(isset($_POST['post'])){
                $input=$_POST['input'];
                echo $input;

                }
        }
    }
$result=new UserInput();
$result->AddOption();

?>
</body>

</html>