<?php require "./include/links.php"; ?>

<body class="bg-primary">


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 mx-auto" style="margin: 50px auto;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card1">
                            <div class="card-header">
                                <div class="text-center p-2">
                                    <img src="img/logo1.png" alt="" class="" width="70px" height="70px">

                                    <h5 class="portal-text ">University Login</h5>
                                </div>
                            </div>

                            <div class="card-body p-5">
                                <form action="" class="form-group">
                                    <div class="mb-3">
                                        <input type="text" name="userid" placeholder="Enter SignIn ID" class="form-control shadow-none rounded-pill py-3">
                                    </div>

                                    <div class="mb-3">
                                        <input type="password" name="password" placeholder="Enter Password" class="form-control shadow-none rounded-pill py-3">
                                    </div>

                                    <div class="mb-3">
                                        <input type="submit" name="login" value="LOGIN" class=" btn btn-primary rounded-pill w-100 fw-bold py-2">
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a href="#" class="portal-text text-decoration-none ">Forgot Password</a>
                                        <br>
                                        <a href="index.php" class="portal-text text-decoration-none ">Back To Home Page</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row bg-light " style="margin-top: 40px;">
            <div class="col-sm-12 sticky-bottom">
                <p class="text-center p-0 m-0 py-2 " style="font-size: 12px;">Copyright © 2025 | <b>NOU E-Gyan Portal, A Concept by Nalanda Open University, Bihar</b></p>
            </div>
        </div>
    </div>

</body>