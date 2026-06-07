<?php require "./include/links.php";
require "./include/db_config.php";
?>


<body class="bg-light">


    <div class="container-fluid">

        <!-- header -->
        <?php require "./include/header.php" ?>
        <!-- header -->


        <!-- banner -->
        <div class="row bg-banner">
            <div class="col-sm-10 mx-auto my-5">
                <div class="row mt-5">
                    <div class="col-sm-12">

                        <div class=" d-flex justify-content-between">
                            <h4 class="fw-bold text-light">REGISTRATION</h4>


                            <h6 class="fw-bold text-light"><a href="./index.php" class="text-warning text-decoration-none">Home </a>/ Registration</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->

        <div class="row">
            <div class="col-sm-6 mx-auto my-5" >
                <div class="row ">
                    <div class="col-sm-12">
                        <div class="card card1">
                            <div class="card-header rounded-5">
                                <div class="text-center p-2">
                                    <img src="img/logo1.png" alt="" class="" width="70px" height="70px">

                                    <h5 class="portal-text ">Student Registration</h5>
                                </div>
                            </div>

                            <div class="card-body px-5">
                                <form action="code/regcode.php" class="form-group" method="post" onsubmit="return reg()">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3 val">
                                            <input type="text" name="roll" class="form-control  shadow-none " placeholder="Roll Number" id="roll">

                                            <span class="text-danger" id="err"></span>
                                        </div>

                                        <div class="col-sm-6 mb-3 val">
                                            <input type="text" name="name" class="form-control  shadow-none " placeholder="Name Here " id="name">
                                            <span class="text-danger" id="err1"></span>
                                        </div>

                                        <div class="col-sm-6 mb-3 val">
                                            <input type="text" name="fname" class="form-control  shadow-none " placeholder="Father Name Here" id="fname">
                                            <span class="text-danger" id="err2"></span>
                                        </div>

                                        <div class="col-sm-6 mb-3 val">
                                            <input type="text" name="mname" class="form-control  shadow-none " placeholder="Mother Name Here " id="mname">
                                            <span class="text-danger" id="err3"></span>

                                        </div>

                                        <div class="col-sm-12 mb-3 val">
                                            <textarea name="address" class="form-control  shadow-none" placeholder="Address Here" id="address"></textarea>
                                            <span class="text-danger" id="err4"></span>

                                        </div>

                                        <div class="col-sm-6 mb-3 val">
                                            <div class="form-control  shadow-none d-flex justify-content-around ">
                                                <span class="text-secondary"> <input type="radio" name="gender" value="male" class="form-check-input"> Male</span>

                                                <span class="text-secondary"> <input type="radio" name="gender" value="female" class="form-check-input"> Female</span>
                                            </div>

                                            <span class="text-danger" id="err5"></span>

                                        </div>


                                        <div class="col-sm-6 mb-3 val">
                                            <select name="program" id="program" class="form-select shadow-none text-secondary">
                                                <option value="">--Select program--</option>

                                                <?php
                                                $query = "SELECT * FROM program";
                                                $result = mysqli_query($conn, $query);

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <option value="<?php echo $row['ProgramName'] ?>"><?php echo $row['ProgramName'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>

                                            <span class="text-danger" id="err6"></span>
                                        </div>


                                        <div class="col-sm-6 mb-3 val">
                                            <select name="branch" id="branch" class="form-select shadow-none text-secondary">
                                                <option value="">--Select Branch--</option>

                                                <?php
                                                $query1 = "SELECT * FROM branch";
                                                $result1 = mysqli_query($conn, $query1);
                                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                                ?>
                                                    <option value="<?php echo $row1['branchName'] ?>"><?php echo $row1['branchName'] ?></option>

                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <span class="text-danger" id="err7"></span>

                                        </div>


                                        <div class="col-sm-6 mb-3 val">
                                            <select name="year" id="year" class="form-select shadow-none text-secondary">
                                                <option value="">--Select Year--</option>


                                                <?php
                                                $query2 = "SELECT * FROM year";
                                                $result2 = mysqli_query($conn, $query2);
                                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                                ?>
                                                    <option value="<?php echo $row2['yearName'] ?>"><?php echo $row2['yearName'] ?></option>

                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <span class="text-danger" id="err8"></span>
                                        </div>



                                        <div class="col-sm-6 mb-3 val">
                                            <input type="email" name="email" class="form-control  shadow-none " placeholder="Email Address Here" id="email">
                                            <span class="text-danger" id="err9"></span>
                                        </div>

                                        <div class="col-sm-6 mb-3 val">
                                            <input type="number" name="contact" class="form-control  shadow-none " placeholder="Contact Number Here" id="contact">
                                            <span class="text-danger" id="err10"></span>
                                        </div>

                                        <div class="col-sm-6 mb-3 val">
                                            <input type="password" name="password" class="form-control  shadow-none " placeholder="Password" id="password" autocomplete>
                                            <span class="text-danger" id="err11"></span>

                                        </div>

                                        <div class="col-sm-6 mb-3 val">
                                            <input type="password" name="cpassword" class="form-control  shadow-none " placeholder="Confirm Password" id="cpassword" autocomplete>
                                            <span class="text-danger" id="err12"></span>

                                        </div>


                                        <div class="mb-3">
                                            <input type="submit" name="register" value="REGISTER" class=" btn bg-brown text-light w-100 fw-bold " autocomplete="off">
                                        </div>
                                    </div>


                                </form>
                            </div>

                            <div class="card-footer">
                                <div class="text-center">
                                    <a href="#" class="portal-text text-decoration-none ">Already Register? Login</a>
                                    <br>
                                    <a href="index.php" class="portal-text text-decoration-none ">Back To Home Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php require "./include/footer.php" ?>

    </div>


    <?php require "./include/scripts.php" ?>
</body>