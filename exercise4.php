<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <title>Document</title>
</head>

<body>
   
    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt=""
                    class="img-fluid mb-3 d-none d-md-block">
                <h1>Create an Account</h1>
                
            </div>

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="http://192.168.0.27:8081/Sd204-Elsa/create_save.php" name="post" method="POST">
                    <div class="row">

                        <!-- Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted" style="padding:10px;"></i>
                                </span>
                            </div>
                            <input id="name" type="text" name="name" placeholder="Name"
                                class="form-control bg-white border-left-0 border-md" style="padding:10px">
                        </div>

                        <!-- Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-map-marker text-muted" style="padding:10px;"></i>
                                </span>
                            </div>
                            <input id="address" type="text" name="address" placeholder=" Address"
                                class="form-control bg-white border-left-0 border-md" style="padding:10px" >
                        </div>

                        <!-- Age -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted" style="padding:10px;"></i>
                                </span>
                            </div>
                            <input id="age" type="number" name="age" placeholder="Age"
                                class="form-control bg-white border-left-0 border-md" style="padding:10px">
                        </div>
                        <!-- Contact Number -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-phone text-muted" style="padding:10px;"></i>
                                </span>
                            </div>
                            <input id="contact" type="number" name="contact" placeholder="Contact Number"
                                class="form-control bg-white border-left-0 border-md" style="padding:10px">
                        </div>



                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                           <button class="btn btn-secondary" name="post">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        class FormVerification{
            public $name;
            public $address;
            public $age;
            public $contact;

            public function checking($name,$address,$age,$contact){
                if(isset($_POST['post'])){
                    $name=$_POST['name'];
                    $address=$_POST['address'];
                }
            }
        }        

?>
</body>

</html>