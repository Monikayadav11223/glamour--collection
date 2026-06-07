<?php
require "include/links.php";

session_start();
?>

<body class="bg-light">
    <div class="container-fluid" id="top">
        <!-- header -->
        <?php require "include/header.php"; ?>
        <!-- header -->


        <!-- banner -->
        <div class="row bg-banner">
            <div class="col-sm-10 mx-auto my-5">
                <div class="row mt-5">
                    <div class="col-sm-12">

                        <div class=" d-flex justify-content-between">
                            <h4 class="fw-bold text-light">CONTACT US</h4>


                            <h6 class="fw-bold text-light"><a href="./index.php" class="text-warning text-decoration-none">Home </a>/ Contact Us</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->


        <!-- contact Form -->
        <div class="row">
            <div class="col-sm-10 mx-auto my-5">
                <div class="row">
                    <div class="col-sm-6  ">
                        <div class="card card1 border-0">
                            <div class="card-header text-center  rounded-5">
                                <h4 class="mt-3 text-brown fw-bold">Get In Touch</h4>
                            </div>

                            <div class="card-body p-4">

                                <!-- <?php

                                // if (isset($_SESSION['msg2'])) {
                                // ?>
                                //     <h6 class="alert alert-success mb-3 py-3  text-center border-0 m-0 p-0"><?php echo $_SESSION['msg2'] ?></h6>
                                // <?php

                                //     unset($_SESSION['msg2']);
                                   
                                // } elseif (isset($_SESSION['msg1'])) {
                                // ?>
                                //     <h6 class="alert alert-danger text-center mb-3 py-3  border-0 m-0 p-0"><?php echo $_SESSION['msg1'] ?></h6>
                                // <?php
                                //     unset($_SESSION['msg1']);
                                    
                                // }
                                ?> -->
                                <form action="code/enq_code.php" class="form-group" method="post">
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control  shadow-none ">
                                        </div>


                                        <div class="col-sm-6 mb-3">
                                            <label for="">Email</label>
                                            <input type="email" name="email" class="form-control  shadow-none">
                                        </div>

                                        <div class="col-sm-6 mb-3">
                                            <label for="">Contact No</label>
                                            <input type="number" name="contact" class="form-control  shadow-none">
                                        </div>


                                        <div class="col-sm-6 mb-3">
                                            <label for="">Gender</label>
                                            <div class="form-control  shadow-none d-flex justify-content-around">
                                                <span> <input type="radio" name="gender" value="male" class="form-check-input"> Male</span>

                                                <span> <input type="radio" name="gender" value="male" class="form-check-input"> Female</span>
                                            </div>
                                        </div>


                                        <div class="col-sm-12 mb-3">
                                            <label for="">Address</label>
                                            <textarea name="address" class="form-control  shadow-none"></textarea>
                                        </div>


                                        <div class="col-sm-12 mb-3">
                                            <label for="">Enquiry Message</label>
                                            <textarea name="msg" class="form-control  shadow-none"></textarea>
                                        </div>

                                        <div class="text-center ">
                                            <input type="submit" value="Enquiry Here" name="enq" class="btn bg-brown text-light  fw-bold">
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mt-5 mt-lg-0 mt-md-0 ">
                        <div class="card1">
                            <iframe class="rounded rounded-5 p-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7224.794059733345!2d85.4542082406469!3d25.122264625000703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f2f22035c54b97%3A0x46687132915778f3!2sNalanda%2C%20Bihar%20803111!5e0!3m2!1sen!2sin!4v1739784042383!5m2!1sen!2sin" width="100%" height="507" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact Form -->


        <!-- address -->
        <div class="row">
            <div class="col-sm-10 mx-auto ">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ms-0 ms-lg-5 ms-md-5  align-items-center justify-content-center ">

                    <div class="col p-3">
                        <div class="card h-100 bg-transparent card1 border-0 p-4" style="width: 18rem;">
                            <div class="inner-card text-center position-relative">
                                <i class="fa-solid fa-location-dot rounded-circle icon p-3 fs-4"></i>
                                <div class="card-body  mb-3 mt-5">
                                    <h5 class="text-brown fw-bold fs-4">Location:</h5>
                                    <p class="portal-text ">2nd/3rd Floor, Biscomaun
                                        Gandhi Maidan, Patna</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col p-3">
                        <div class="card h-100 bg-transparent card1 border-0 p-4" style="width: 18rem;">
                            <div class="inner-card text-center position-relative">
                                <i class="fa-solid fa-envelope rounded-circle icon p-3 fs-4"></i>
                                <div class="card-body  mb-3 mt-5">
                                    <h5 class="text-brown fw-bold fs-4">Email:</h5>
                                    
                                    <a href="#" class="portal-text text-decoration-none">nou@nou.ac.in</a>
                                    <a href="#" class="portal-text text-decoration-none">registrar@nou.ac.in</a>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col p-3">
                        <div class="card h-100 bg-transparent card1 border-0 p-4" style="width: 18rem;">
                            <div class="inner-card text-center position-relative">
                                <i class="fa-solid fa-phone-volume rounded-circle icon p-3 fs-4"></i>
                                <div class="card-body  mb-3 mt-5">
                                    <h5 class="text-brown fw-bold fs-4">Phone:</h5>
                                    <a href="#" class="portal-text text-decoration-none">0612-2201013</a>
                                    <br>
                                    <a href="#" class="portal-text text-decoration-none">0612-2206916</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- address -->




        <!-- footer -->
        <?php require "include/footer.php"; ?>
        <!-- footer -->
    </div>

     <!-- scripts links -->
     <?php require_once 'include/scripts.php' ?>
    <!-- scripts links -->
</body>