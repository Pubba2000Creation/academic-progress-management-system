<?php include "c:/xampp/htdocs/APMS/Lectures_panel/parts/header.php"; ?>

<body id="page-top">
    <div id="wrapper">

        <?php include "C:/xampp/htdocs/APMS/Lectures_panel/parts/navp.php";
        if (isset($_GET['user_id']) && isset($_GET['batch_id']) && isset($_GET['semester_id'])) {
            // Retrieve user_id and batch_id from the query string
            $user_id = $_GET['user_id'];
            $batch_id = $_GET['batch_id'];
            $semester_id = $_GET['semester_id'];

            // Now you can use $user_id and $batch_id as needed
            echo "User ID: $user_id<br>";
            echo "Batch ID: $batch_id <br>";
            echo $semester_id;
        }

        ?>

        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0" id="Semester-Result">1 Semester&nbsp;Result&nbsp;</h3>
                <button class="btn btn-primary bg-info border rounded-pill" type="button" onclick="window.location.href='../lecturesResult(edit)/Result(edit)1.php?user_id=<?php echo $user_id; ?>&batch_id=<?php echo $batch_id; ?>&semester_id=<?php echo 1; ?>'"><i class="far fa-edit"></i>Edit</button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enrolment No</th>
                        <th>
                            <p>Subject Name&nbsp;</p>
                            <p>Subject Code</p>
                            <p>Credits Value</p>
                        </th>
                        <th>
                            <p>Subject Name&nbsp;</p>
                            <p>Subject Code</p>
                            <p>Credits Value</p>
                        </th>
                        <th>
                            <p>Subject Name&nbsp;</p>
                            <p>Subject Code</p>
                            <p>Credits Value</p>
                        </th>
                        <th>
                            <p>Subject Name&nbsp;</p>
                            <p>Subject Code</p>
                            <p>Credits Value</p>
                        </th>
                        <th>
                            <p>Subject Name&nbsp;</p>
                            <p>Subject Code</p>
                            <p>Credits Value</p>
                        </th>
                        <th>
                            <p>Subject Name&nbsp;</p>
                            <p>Subject Code</p>
                            <p>Credits Value</p>
                        </th>
                        <th>
                            <p>Subject Name&nbsp;</p>
                            <p>Subject Code</p>
                            <p>Credits Value</p>
                        </th>
                        <th>
                            <p>Subject Name&nbsp;</p>
                            <p>Subject Code</p>
                            <p>Credits Value</p>
                        </th>
                        <th>
                            <p>Subject Name&nbsp;</p>
                            <p>Subject Code</p>
                            <p>Credits Value</p>
                        </th>
                        <th>
                            <p>Current GPA</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>UWU/ICT/20/025</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>4.00</td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td>1</td>
                        <td>UWU/ICT/20/025</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>4.00</td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td>1</td>
                        <td>UWU/ICT/20/025</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>A+</td>
                        <td>4.00</td>
                    </tr>
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/footer.php"; ?>