<?php session_start();
require "./include/links.php"; ?>

<body class="bg-light">


    <div class="container-fluid">

        <!-- header -->
        <?php require "./include/header.php"; ?>
        <!-- header -->


        <!-- banner -->
        <div class="row bg-banner">
            <div class="col-sm-10 mx-auto my-5">
                <div class="row mt-5">
                    <div class="col-sm-12">

                        <div class=" d-flex justify-content-between">
                            <h4 class="fw-bold text-light">LOGIN</h4>


                            <h6 class="fw-bold text-light"><a href="./index.php" class="text-warning text-decoration-none">Home </a>/ Login</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->


        <div class="row">
            <div class="col-sm-6 mx-auto" style="margin: 50px auto;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card1">
                            <div class="card-header rounded-5">
                                <div class="text-center p-2">
                                    <img src="img/logo1.png" alt="" class="" width="70px" height="70px">

                                    <h5 class="portal-text ">Student Login</h5>
                                </div>
                            </div>

                            <div class="card-body  px-5 py-4">
                                <!-- <?php

                                // if (isset($_SESSION['logmsg'])) {
                                // ?>
                                //     <h6 class="alert alert-danger mb-3 py-3  text-center border-0 m-0 p-0"><?php echo $_SESSION['logmsg'] ?></h6>
                                // <?php

                                //     unset($_SESSION['logmsg']);
                                // }
                                // session_destroy();
                                ?> -->

                                <form action="code/logcode.php" class="form-group" method="post">
                                    <div class="mb-3 val">
                                        <input type="text" name="userid" placeholder="Enter Roll No." class="form-control shadow-none py-2" id="uid">
                                        <span class="text-danger" id="idError"></span>
                                    </div>

                                    <div class="mb-3 val">
                                        <input type="password" name="password" placeholder="Enter Password" class="form-control shadow-none py-2" id="upassword" autocomplete>
                                        <span class="text-danger" id="passerror"></span>
                                    </div>

                                    <!-- <div class="mb-3 val">
                                        <select name="usertype" id="utype" class="form-select shadow-none text-secondary">
                                            <option value="">--Select User Type --</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Student">Student</option>
                                        </select>
                                        <span class="text-danger" id="utypeError"></span>
                                    </div> -->

                                    <div class="">
                                        <input type="submit" name="login" value="LOGIN" class=" btn bg-brown text-light w-100 fw-bold py-2" autocomplete onclick="return validlogin()">
                                    </div>
                                </form>
                            </div>

                            <div class="card-footer rounded-5">
                                <div class="text-center my-3">
                                    <a href="#" class="portal-text text-decoration-none ">Forgot Password</a>
                                    <br>
                                    <a href="index.php" class="portal-text text-decoration-none ">Back To Home Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>


        <!-- footer -->
        <?php require "./include/footer.php"; ?>
        <!-- footer -->


        <!-- script -->
        <?php require "./include/scripts.php"; ?>
        <!-- script -->
    </div>

</body>