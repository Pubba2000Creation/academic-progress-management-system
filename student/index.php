<?php include("C:/xampp/htdocs/APMS/student/parts/header.php"); ?>


<body id="page-top">

    <?php include("C:/xampp/htdocs/APMS/student/parts/navbar.php") ?>


    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <?php include("C:/xampp/htdocs/APMS/student/parts/searchbar.php") ?>
            <div style="margin-left: 3%;">
                <section>
                    <h1 style="margin-bottom: 20px;">Dashboard</h1>
                    <div></div>
                </section>
            </div>
            <div class="container" style="margin-bottom: 30px;">
                <div class="row">
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <p class="text-start text-primary">Semester 1</p><span>4.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <p class="text-success">Semester 2</p><span>4.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <p class="text-info">Semester 3</p><span>4.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow border-start-success py-2" style="margin-top: 20px;">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <p class="text-warning">Semester 4</p><span>4.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-bottom: 30px;">
                <div class="row">
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <p class="text-info">Semester 5</p><span>4.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <p class="text-warning">Semester 6</p><span>4.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="margin-top: 20px;">
                        <div class="card shadow border-start-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <p class="text-primary">Semester 7</p><span>4.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow border-start-success py-2" style="margin-top: 20px;">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <p class="text-success">Semester 8</p><span>4.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;semester 1&quot;,&quot;semester 2&quot;,&quot;semester 3&quot;,&quot;semester 4&quot;,&quot;semester 5&quot;,&quot;semester 6&quot;,&quot;semester 7&quot;,&quot;semester 8&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;3.00&quot;,&quot;2.00&quot;,&quot;1.00&quot;,&quot;4.00&quot;,&quot;3.00&quot;,&quot;1.5&quot;,&quot;3.20&quot;,&quot;4.00&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;},{&quot;label&quot;:&quot;&quot;,&quot;fill&quot;:true,&quot;data&quot;:[]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;position&quot;:&quot;top&quot;},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('C:/xampp/htdocs/APMS/student/parts/footer.php') ?>