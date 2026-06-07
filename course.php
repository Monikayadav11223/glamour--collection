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
                            <h4 class="fw-bold text-light">COURSES</h4>


                            <h6 class="fw-bold text-light"><a href="./index.php" class="text-warning text-decoration-none">Home </a>/ Courses</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner -->



        <!-- content -->
        <div class="row">
            <div class="col-sm-10 mx-auto my-5">
                <div class="ps-3">
                    <span class="text-uppercase text-secondary fw-bold">Course <span class="text-brown">________________</span></span>
                    <h3 class="fw-bold text-uppercase">Our <span class="text-brown"> Course Detail </span></h3>
                </div>

                <div class="row" id="portfolio">
                    <div class="col-sm-10 mx-auto pt-3">

                        <div class="pb-3 about-btn text-center  mt-3">
                            <button data-name="all" class="btn btn3 mb-3 me-3 active fw-bold">All</button>
                            <button data-name="UG Course" class="btn btn3 mb-3 me-3 fw-bold">UG Courses</button>
                            <button data-name="PG Course" class="btn btn3 mb-3 me-3 fw-bold">PG Courses</button>
                            <button data-name="Diploma Course" class="btn btn3 mb-3 fw-bold">Diploma Courses</button>
                            <button data-name="Certification Course" class="btn btn3 mb-3 fw-bold">Certification Courses</button>
                        </div>



                        <div class="row row-cols-1 row-cols-md-3 g-5 portfolio-gallery ">
                            <!-- ug courses -->
                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="UG Course">
                                    <img src="img/course/bba.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Bachelor in Business Administration</h6>

                                        <h6 class="fw-bold">Under Graduation Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 3 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="UG Course">
                                    <img src="img/course/bca.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Bachelor in Computer Application</h6>

                                        <h6 class="fw-bold">Under Graduation Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 3 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="UG Course">
                                    <img src="img/course/bag.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Bachelor of Arts(Geography)</h6>

                                        <h6 class="fw-bold">Under Graduation Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 3 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="UG Course">
                                    <img src="img/course/bcom.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Bachelor of Commerce (B.Com.)</h6>

                                        <h6 class="fw-bold">Under Graduation Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 3 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="UG Course">
                                    <img src="img/course/blis.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Bachelor of Library & Information Science</h6>

                                        <h6 class="fw-bold">Under Graduation Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 1 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="UG Course">
                                    <img src="img/course/bscchemistry.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Bachelor of Science(Chemistry)</h6>

                                        <h6 class="fw-bold">Under Graduation Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 3 Years</p>
                                    </div>
                                </div>
                            </div>

                            <!-- pg courses -->
                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="PG Course">
                                    <img src="img/course/maenvironmental.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Master of Arts (Environmental Science)</h6>

                                        <h6 class="fw-bold">Post Graduation Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 2 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="PG Course">
                                    <img src="img/course/masanskrit.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Master of Arts(Sanskrit)</h6>

                                        <h6 class="fw-bold">Post Graduation Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 2 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="PG Course">
                                    <img src="img/course/mca.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Master in Computer Application</h6>

                                        <h6 class="fw-bold">Post Graduation Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 2 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="PG Course">
                                    <img src="img/course/mcom.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Master of Commerce</h6>

                                        <h6 class="fw-bold">Post Graduation Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 2 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="PG Course">
                                    <img src="img/course/mlis.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Master in Library and Information Science</h6>

                                        <h6 class="fw-bold">Post Graduation Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 2 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="PG Course">
                                    <img src="img/course/mscphysics.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Master of Science(Physics)</h6>

                                        <h6 class="fw-bold">Post Graduation Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 2 Years</p>
                                    </div>
                                </div>
                            </div>

                            <!-- diploma -->
                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="Diploma Course">
                                    <img src="img/course/pgdfm.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">PG Diploma in Financial Management</h6>

                                        <h6 class="fw-bold">Certificate in Child Psychology and Guidance</h6>
                                        <p><span class="text-goldan">Duration:</span> 2 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="Diploma Course">
                                    <img src="img/course/pgdhet.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Post Graduation Diploma (Hindi-English Translate)</h6>

                                        <h6 class="fw-bold">Certificate in Child Psychology and Guidance</h6>
                                        <p><span class="text-goldan">Duration:</span> 2 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="Diploma Course">
                                    <img src="img/course/pgdys.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Post Graduation Diploma (Yogic Studies)</h6>

                                        <h6 class="fw-bold">Diploma Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 2 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="Diploma Course">
                                    <img src="img/course/pgdipr.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Post Graduation Diploma (Information and Public Relations)</h6>

                                        <h6 class="fw-bold">Diploma Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 2 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="Diploma Course">
                                    <img src="img/course/pgdmm.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Post Graduation Diploma (Marketing Management)</h6>

                                        <h6 class="fw-bold">Diploma Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 2 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="Diploma Course">
                                    <img src="img/course/pgdjmc.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Post Graduation Diploma (Journalism & Mass Communication)</h6>

                                        <h6 class="fw-bold">Diploma Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 2 Years</p>
                                    </div>
                                </div>
                            </div>

                            <!-- certification -->

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="Certification Course">
                                    <img src="img/course/cacl.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Certificate in Abolition of Child Labour</h6>

                                        <h6 class="fw-bold">Certification Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 1 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="Certification Course">
                                    <img src="img/course/caimvs.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Certificate in Artificial Insemination and Minor Veterinary Services</h6>

                                        <h6 class="fw-bold">Certification Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 1 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="Certification Course">
                                    <img src="img/course/cbep.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Certificate in Bio-Fertilizer Production</h6>

                                        <h6 class="fw-bold">Certification Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 1 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="Certification Course">
                                    <img src="img/course/cbl.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Certificate in Bhojpuri Language</h6>

                                        <h6 class="fw-bold">Certification Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 1 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="Certification Course">
                                    <img src="img/course/cbmanc.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Certificate in Basic Medical Assessment and Nursing Care</h6>

                                        <h6 class="fw-bold">Certification Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 1 Years</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card  h-100 border-0 service-card" data-name="Certification Course">
                                    <img src="img/course/ccpg.png" class="card-img-top  px-4 pt-4" alt="...">
                                    <div class="card-body text-center p-4 ">
                                        <h6 class="fw-bold text-brown" style="font-size: 15px;">Certificate in Child Psychology and Guidance</h6>

                                        <h6 class="fw-bold">Certification Course</h6>
                                        <p><span class="text-goldan">Duration:</span> 1 Years</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- content -->



        <!-- footer -->
        <?php require "include/footer.php"; ?>
        <!-- footer -->
    </div>

    <!-- scripts links -->
    <?php require_once 'include/scripts.php' ?>
    <!-- scripts links -->
</body>