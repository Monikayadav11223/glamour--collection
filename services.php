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
                            <h4 class="fw-bold text-light">SERVICES</h4>


                            <h6 class="fw-bold text-light"><a href="./index.php" class="text-warning text-decoration-none">Home </a>/ Services</h6>
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
                    <span class="text-uppercase text-secondary fw-bold">Features <span class="text-brown">________________</span></span>
                    <h3 class="fw-bold text-uppercase">Student <span class="text-brown"> Services </span></h3>
                </div>



                <div class="row row-cols-1 row-cols-md-2 g-4 p-2 mt-3">
                    <div class="col">
                        <div class="card mb-3 h-100 py-4 service-card bg-light" >
                            <div class="row g-0">
                                <div class="col-md-2 text-center my-auto ">
                                    <img src="img/services/login.png" class=" w-75" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title fs-3 text-goldan">Login</h5>
                                        <p class="card-text fw-semibold">Make your way into the portal through the login page where different users are provided with a username and password to gain access to theuniversity’s programs and other learning related materials</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card mb-3 h-100 py-4 service-card bg-light" >
                            <div class="row g-0">
                                <div class="col-md-2 text-center my-auto ">
                                    <img src="img/services/dashboard.png" class=" w-75" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title fs-3 text-goldan">Dashboard</h5>
                                        <p class="card-text fw-semibold">The AI-based dashboard will serve as an administrative home page to access key Information about Course Details, Assignments, Quizzes/MCQs, Self-Learning Materials, Course Catalogue, Progress Report, Notifications and other useful tabs. There is a provision for Help to guide ad navigate through the portal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card mb-3 h-100 py-4 service-card bg-light" >
                            <div class="row g-0">
                                <div class="col-md-2 text-center my-auto ">
                                    <img src="img/services/online-course.png" class=" w-75" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title fs-3 text-goldan">Self-Learning Material</h5>
                                        <p class="card-text fw-semibold">IThe students enrolled in the university have a wide range of courses available online covering different subjects. These courses include videos, images, word/PDF files,external links, assignments and quizzes for their study material.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card mb-3 h-100 py-4 service-card bg-light" >
                            <div class="row g-0">
                                <div class="col-md-2 text-center my-auto ">
                                    <img src="img/services/e-content.png" class=" w-75" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title fs-3 text-goldan">e-Books</h5>
                                        <p class="card-text fw-semibold">The E-Books will give a digital access to the self- learning material that are course related e-Contents, presentations, PDF or Word file notes, videos and external links and self-assessment materials for the students like assignments and quizzes on a single platform.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col">
                        <div class="card mb-3 h-100 py-4 service-card bg-light" >
                            <div class="row g-0">
                                <div class="col-md-2 text-center my-auto ">
                                    <img src="img/services/self-assess.png" class=" w-75" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title fs-3 text-goldan">Self-Assessment Tools</h5>
                                        <p class="card-text fw-semibold">Self-Assessment allows the student to analyse and evaluate their academic performance through various Self-Assessment tools like e-Contents, Videos, assignments, quizzes/MCQs, external links and others. The self-assessment also enables testing the progress and learn better.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card mb-3 h-100 py-4 service-card bg-light" >
                            <div class="row g-0">
                                <div class="col-md-2 text-center my-auto ">
                                    <img src="img/services/performance.png" class=" w-75" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title fs-3 text-goldan">Performance</h5>
                                        <p class="card-text fw-semibold">The enrolled students will have courses ranging from certificate to degree course. The progress reports of these courses can be monitored by the students on their portal and give the student an in-depth analysis of the progress.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card mb-3 h-100 py-4 service-card bg-light" >
                            <div class="row g-0">
                                <div class="col-md-2 text-center my-auto ">
                                    <img src="img/services/feedback.png" class=" w-75" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title fs-3 text-goldan">Feedback</h5>
                                        <p class="card-text fw-semibold">Constructive feedback from students is a valuable resource for improving the learning process. The portal allows the students to provide feedback to address aspects of the course and self-learning material.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card mb-3 h-100 py-4 service-card bg-light" >
                            <div class="row g-0">
                                <div class="col-md-2 text-center my-auto ">
                                    <img src="img/services/course-cata.png" class=" w-75" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title fs-3 text-goldan">Course Catalogue</h5>
                                        <p class="card-text fw-semibold">The course catalogue is a document that lists the courses available in the university with a complete and brief description of each course. This course catalogue also provides a description that includes important details of the course like credits, course durations, modules, prerequisites and more.</p>
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