<?php include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/header.php"; ?>

<body id="page-top">
    <div id="wrapper">

        <?php include "C:/xampp/htdocs/APMS/Lectures_panel/parts/navp.php";
        if (isset($_GET['user_id']) && isset($_GET['batch_id']) && isset($_GET['semester_id'])) {
            // Retrieve user_id and batch_id from the query string
            $user_id = $_GET['user_id'];
            $batch_id = $_GET['batch_id'];
            $semester_number = $_GET['semester_id'];

            // Now you can use $user_id and $batch_id as needed
            // echo "User ID: $user_id<br>";
            // echo "Batch ID: $batch_id <br>";
            // echo "semester_num" . $semester_number;
        }

        $sql_degree = "SELECT degree_id FROM tbl_degree WHERE lecture_id = $user_id AND Batch_id = $batch_id";

        $res_degree = mysqli_query($conn, $sql_degree);
        if ($res_degree == TRUE) {
            $count_degree = mysqli_num_rows($res_degree);
            if ($count_degree > 0) {
                while ($rows_degree = mysqli_fetch_assoc($res_degree)) {
                    $degree_id = $rows_degree['degree_id'];
                }
            }
        }

        //echo "<br>the degree id= " . $degree_id;

        $sql_semester = "SELECT semester_id FROM tbl_semester WHERE degree_id = $degree_id AND semester_number = $semester_number";

        $res_semester = mysqli_query($conn, $sql_semester);
        if ($res_semester == TRUE) {
            $count_semester = mysqli_num_rows($res_semester);
            if ($count_semester > 0) {
                while ($rows_semester = mysqli_fetch_assoc($res_semester)) {
                    $semester_id = $rows_semester['semester_id'];
                }
            }
        }

       // echo "<br> the semester id= " . $semester_id;


        ?>



        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0" id="Semester-Result">+Add 1 Semester&nbsp;Result&nbsp;</h3><button class="btn btn-success bg-success border rounded-pill" type="submit"><i class="far fa-arrow-alt-circle-up"></i>&nbsp;Submit</button>
            </div>
        </div>
        <form method="POST" enctype="multipart/form-data">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enrollment No</th>
                            <?php
                            // Fetch subject details from tbl_subject based on degree_id and semester_id
                            $sql_subjects = "SELECT * FROM tbl_subject WHERE degree_id = $degree_id AND semester_id = $semester_id";
                            $res_subjects = mysqli_query($conn, $sql_subjects);

                            if ($res_subjects) {
                                while ($subject_row = mysqli_fetch_assoc($res_subjects)) {
                                    $subject_id = $subject_row['subject_id'];
                                    $subject_name = $subject_row['subject_name'];
                                    $subject_code = $subject_row['subject_code'];
                                    $credits = $subject_row['credits'];
                            ?>
                                    <th>
                                        <p><?php echo $subject_name; ?>&nbsp;</p>
                                        <p><?php echo $subject_code; ?></p>
                                        <p><?php echo $credits; ?></p>
                                    </th>
                            <?php
                                }
                            }
                            ?>
                            <th>
                                <p>Current GPA</p>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="dropdown">

                                    <select class="btn btn-light active dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" type="button">Enrolment No</button>
                                        <div class="dropdown-menu">

                                            <option selected disabled>Enrollment No</option>
                                            <?php
                                            ob_start();

                                            //php for displya category from database;

                                            //ceate SQL for get all active categories inthe database
                                            $sql = "SELECT * FROM tbl_students WHERE Batch_id=$batch_id AND Degree_id=$degree_id";

                                            $res = mysqli_query($conn, $sql);

                                            //number of rows;
                                            $count = mysqli_num_rows($res);

                                            //if count is 0 we dont have category,else we have;

                                            if ($count > 0) {
                                                # we have
                                                // read the  datbase data line by line  
                                                while ($rows = mysqli_fetch_assoc($res)) {
                                                    # get the deatilsa o fcategories;

                                                    $student_id = $rows['stu_id'];
                                                    $Student_index = $rows['index_no'];



                                                    //displlay active categoryies in the site
                                            ?>

                                                    <option value="<?php echo $student_id; ?>"><?php echo $Student_index; ?></option>

                                                <?php

                                                }
                                            } else {
                                                # we dont have;
                                                ?>


                                                <option class="dropdown-item">Not-User Found</a>


                                                <?php


                                            }
                                            ob_end_flush();
                                                ?>
                                        </div>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <select class="btn btn-light active dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" type="button">Grade


                                        <div class="dropdown-menu">
                                            <option class="dropdown-item" href="#">A+</option>
                                            <option class="dropdown-item" href="#">A</option>
                                            <option class="dropdown-item" href="#">A-</option>
                                            <option class="dropdown-item" href="#">B+</option>
                                            <option class="dropdown-item" href="#">B</option>
                                            <option class="dropdown-item" href="#">B-</option>
                                            <option class="dropdown-item" href="#">C+</option>
                                            <option class="dropdown-item" href="#">C</option>
                                            <option class="dropdown-item" href="#">C-</option>
                                            <option class="dropdown-item" href="#">D+</option>
                                            <option class="dropdown-item" href="#">D</option>
                                            <option class="dropdown-item" href="#">E</option>
                                        </div>
                                    </select>

                                </div>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <select class="btn btn-light active dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" type="button">Grade


                                        <div class="dropdown-menu">
                                            <option class="dropdown-item" href="#">A+</option>
                                            <option class="dropdown-item" href="#">A</option>
                                            <option class="dropdown-item" href="#">A-</option>
                                            <option class="dropdown-item" href="#">B+</option>
                                            <option class="dropdown-item" href="#">B</option>
                                            <option class="dropdown-item" href="#">B-</option>
                                            <option class="dropdown-item" href="#">C+</option>
                                            <option class="dropdown-item" href="#">C</option>
                                            <option class="dropdown-item" href="#">C-</option>
                                            <option class="dropdown-item" href="#">D+</option>
                                            <option class="dropdown-item" href="#">D</option>
                                            <option class="dropdown-item" href="#">E</option>
                                        </div>
                                    </select>

                                </div>
                            </td>
                            <td>
                                <div class="dropdown"><button class="btn btn-light active dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" type="button">Grade</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">A+</a>
                                        <a class="dropdown-item" href="#">A</a>
                                        <a class="dropdown-item" href="#">A-</a>
                                        <a class="dropdown-item" href="#">B+</a>
                                        <a class="dropdown-item" href="#">B</a>
                                        <a class="dropdown-item" href="#">B-</a>
                                        <a class="dropdown-item" href="#">C+</a>
                                        <a class="dropdown-item" href="#">C</a>
                                        <a class="dropdown-item" href="#">C-</a>
                                        <a class="dropdown-item" href="#">D+</a>
                                        <a class="dropdown-item" href="#">D</a>
                                        <a class="dropdown-item" href="#">E</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown"><button class="btn btn-light active dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" type="button">Grade</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">A+</a>
                                        <a class="dropdown-item" href="#">A</a>
                                        <a class="dropdown-item" href="#">A-</a>
                                        <a class="dropdown-item" href="#">B+</a>
                                        <a class="dropdown-item" href="#">B</a>
                                        <a class="dropdown-item" href="#">B-</a>
                                        <a class="dropdown-item" href="#">C+</a>
                                        <a class="dropdown-item" href="#">C</a>
                                        <a class="dropdown-item" href="#">C-</a>
                                        <a class="dropdown-item" href="#">D+</a>
                                        <a class="dropdown-item" href="#">D</a>
                                        <a class="dropdown-item" href="#">E</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown"><button class="btn btn-light active dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" type="button">Grade</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">A+</a>
                                        <a class="dropdown-item" href="#">A</a>
                                        <a class="dropdown-item" href="#">A-</a>
                                        <a class="dropdown-item" href="#">B+</a>
                                        <a class="dropdown-item" href="#">B</a>
                                        <a class="dropdown-item" href="#">B-</a>
                                        <a class="dropdown-item" href="#">C+</a>
                                        <a class="dropdown-item" href="#">C</a>
                                        <a class="dropdown-item" href="#">C-</a>
                                        <a class="dropdown-item" href="#">D+</a>
                                        <a class="dropdown-item" href="#">D</a>
                                        <a class="dropdown-item" href="#">E</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown"><button class="btn btn-light active dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" type="button">Grade</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">A+</a>
                                        <a class="dropdown-item" href="#">A</a>
                                        <a class="dropdown-item" href="#">A-</a>
                                        <a class="dropdown-item" href="#">B+</a>
                                        <a class="dropdown-item" href="#">B</a>
                                        <a class="dropdown-item" href="#">B-</a>
                                        <a class="dropdown-item" href="#">C+</a>
                                        <a class="dropdown-item" href="#">C</a>
                                        <a class="dropdown-item" href="#">C-</a>
                                        <a class="dropdown-item" href="#">D+</a>
                                        <a class="dropdown-item" href="#">D</a>
                                        <a class="dropdown-item" href="#">E</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown"><button class="btn btn-light active dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" type="button">Grade</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">A+</a>
                                        <a class="dropdown-item" href="#">A</a>
                                        <a class="dropdown-item" href="#">A-</a>
                                        <a class="dropdown-item" href="#">B+</a>
                                        <a class="dropdown-item" href="#">B</a>
                                        <a class="dropdown-item" href="#">B-</a>
                                        <a class="dropdown-item" href="#">C+</a>
                                        <a class="dropdown-item" href="#">C</a>
                                        <a class="dropdown-item" href="#">C-</a>
                                        <a class="dropdown-item" href="#">D+</a>
                                        <a class="dropdown-item" href="#">D</a>
                                        <a class="dropdown-item" href="#">E</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown"><button class="btn btn-light active dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" type="button">Grade</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">A+</a>
                                        <a class="dropdown-item" href="#">A</a>
                                        <a class="dropdown-item" href="#">A-</a>
                                        <a class="dropdown-item" href="#">B+</a>
                                        <a class="dropdown-item" href="#">B</a>
                                        <a class="dropdown-item" href="#">B-</a>
                                        <a class="dropdown-item" href="#">C+</a>
                                        <a class="dropdown-item" href="#">C</a>
                                        <a class="dropdown-item" href="#">C-</a>
                                        <a class="dropdown-item" href="#">D+</a>
                                        <a class="dropdown-item" href="#">D</a>
                                        <a class="dropdown-item" href="#">E</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown"><button class="btn btn-light active dropdown-toggle border rounded-pill" aria-expanded="false" data-bs-toggle="dropdown" type="button">Grade</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">A+</a>
                                        <a class="dropdown-item" href="#">A</a>
                                        <a class="dropdown-item" href="#">A-</a>
                                        <a class="dropdown-item" href="#">B+</a>
                                        <a class="dropdown-item" href="#">B</a>
                                        <a class="dropdown-item" href="#">B-</a>
                                        <a class="dropdown-item" href="#">C+</a>
                                        <a class="dropdown-item" href="#">C</a>
                                        <a class="dropdown-item" href="#">C-</a>
                                        <a class="dropdown-item" href="#">D+</a>
                                        <a class="dropdown-item" href="#">D</a>
                                        <a class="dropdown-item" href="#">E</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p>4.00</p>
                            </td>
                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <?php include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/footer.php"; ?>