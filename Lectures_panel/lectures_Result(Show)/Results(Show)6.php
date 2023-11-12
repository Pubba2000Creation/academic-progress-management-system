<?php include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/header.php"; ?>

<body id="page-top">
    <div id="wrapper">

        <?php include "C:/xampp/htdocs/APMS/Lectures_panel/parts/navp.php"; ?>
        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0" id="Semester-Result">6 Semester&nbsp;Result&nbsp;</h3>
                <button class="btn btn-primary bg-info border rounded-pill" type="button" onclick="window.location.href='../lecturesResult(edit)/Result(edit)6.php?user_id=<?php echo $user_id; ?>'"><i class="far fa-edit"></i>Edit</button>
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
                </tbody>
            </table>
        </div>
    </div>
    <?php include_once "c:/xampp/htdocs/APMS/Lectures_panel/parts/footer.php"; ?>