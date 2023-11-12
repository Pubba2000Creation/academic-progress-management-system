<?php include("C:/xampp/htdocs/APMS/student/parts/header.php"); ?>

<body id="page-top">

    <?php include("C:/xampp/htdocs/APMS/student/parts/navbar.php") ?>

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">

            <?php include("C:/xampp/htdocs/APMS/student/parts/searchbar.php") ?>

            <div style="margin-left: 3%;">
                <h1 style="margin-bottom: 20px;">Profile</h1>
            </div>
            <section id="Edit-Profile">
                <form>
                    <div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col"><img class="rounded-circle" src="assets/img/dogs/image2.jpeg" style="width: 200px;height: 200px;margin-left: 36%;margin-bottom: 20px;"></div>
                                    </div>
                                    <div class="row">

                                        <div class="col">
                                            <button class="btn btn-primary border rounded-pill" type="button" style="margin: 0;margin-right: 20px;">Linkedin</button>
                                        </div>

                                        <div class="col">
                                            <button class="btn btn-dark border rounded-pill" type="button" style="margin: 0;margin-left: 23%;"><i class="far fa-edit"></i>&nbsp;<a href="/APMS/student/Student_profile/Std_Profile_edit.php">Edit Profile</a></button>
                                        </div>

                                        <div class="col">
                                            <button class="btn btn-primary border rounded-pill" type="button" style="margin: 0;margin-right: 0;margin-left: 20%;">Git hub</button>

                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col" style="margin-bottom: 20px;">
                                            <p>Gender</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="margin-bottom: 20px;">
                                            <p>Address</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="margin-bottom: 20px;">
                                            <p>Mobile No</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p>E mail</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container" style="margin-bottom: 20px;margin-top: 30px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>&nbsp;Name</p>
                                </div>
                            </div>
                        </div>
                        <div class="container" style="margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>&nbsp;Enrollment No</p>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>&nbsp;Bio</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <?php include('C:/xampp/htdocs/APMS/student/parts/footer.php') ?>