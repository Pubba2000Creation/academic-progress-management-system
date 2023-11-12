<?php include("C:/xampp/htdocs/APMS/student/parts/header.php"); ?>

<body id="page-top">

    <?php include("C:/xampp/htdocs/APMS/student/parts/navbar.php") ?>

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">

            <?php include("C:/xampp/htdocs/APMS/student/parts/searchbar.php") ?>
            <div style="margin-left: 3%;">
                <h1 style="margin-bottom: 20px;">Edit Profile</h1>
            </div>
            <section id="Edit-Profile">
                <form>
                    <div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6"><img class="rounded-circle" src="assets/img/dogs/image2.jpeg" style="width: 150px;height: 150px;margin-left: 40%;margin-bottom: 20px;"><input class="border rounded-pill form-control form-control-sm" type="file" required="" style="width: 300px;margin-left: 30%;" accept="image/*"></div>
                                <div class="col-md-6"><input class="border rounded-pill form-control" type="text" placeholder="Name" style="margin-bottom: 20px;" required=""><input class="border rounded-pill form-control" type="text" placeholder="Enrollment No" style="margin-bottom: 20px;" required=""><textarea class="border rounded-pill form-control" placeholder="Bio" required=""></textarea></div>
                            </div>
                        </div>
                        <div class="container" style="margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="dropdown" style="margin-bottom: 20px;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Gender</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Male</a><a class="dropdown-item" href="#">Femal</a></div>
                                    </div><label class="form-label">&nbsp; &nbsp;DOB</label><input class="border rounded-pill form-control" type="date" required="">
                                </div>
                                <div class="col-md-6"><textarea class="border rounded-pill form-control" placeholder="Address" required=""></textarea></div>
                            </div>
                        </div>
                        <div class="container" style="margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-md-6"><input class="border rounded-pill form-control" type="text" placeholder="NIC No" required=""></div>
                                <div class="col-md-6"><input class="border rounded-pill form-control" type="tel" placeholder="Mobile No" required=""></div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6"><input class="border rounded-pill form-control" type="url" placeholder="Git hub"></div>
                                <div class="col-md-6"><input class="border rounded-pill form-control" type="url" placeholder="Linkein"></div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col"><input class="btn border rounded-pill btn-success" type="submit" required="" style="margin: 0px;margin-left: 45%;margin-top: 20px;"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <?php include('C:/xampp/htdocs/APMS/student/parts/footer.php') ?>