<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                        <div class="col-md-5 p-lg-5 mx-auto my-5">
                            <h1 class="display-4 fw-normal">Monitoring with SPIKE</h1>
                            <p class="lead fw-normal">Website application for monitoring IoT devices in an office. Start your monitoring with our Application.</p>
                            <a class="btn btn-outline-secondary" href="#">Launching Now</a>
                        </div>
                        <div class="product-device shadow-sm d-none d-md-block"></div>
                        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
                    </div>

                    <hr class="featurette-divider">
                    <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Standard Devices <span class="text-muted">It’ll blow your mind.</span></h2>
                        <p class="lead">Standard Devices
                            ITS recommends the following devices that meet our IT standards for security and compatibility with our services. Please select a device type you are interested in purchasing to expand the menu and view all available options.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="image" width="500" height="500" src="arduino.jpeg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

                    </div>
                    </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                        <p class="lead">All desktops, laptops, other device IT can be monitoring through our Application</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="image" width="400" height="400" src="AOC.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

                    </div>
                    </div>

                    <hr class="featurette-divider">

                    <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                        <p class="lead">And yes, We can check our device through SPIKE. Wherever you go, anytime you can monitor your device remotely without having to come to your office in person </p>
                    </div>
                    <div class="col-md-5">
                        <img img class="image" width="400" height="400" src="PC.jpg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

                    </div>
                    </div>

                    <hr class="featurette-divider">

                    <!-- /END THE FEATURETTES -->

                </div><!-- /.container -->


                <!-- FOOTER -->
                <footer class="container">
                    <p class="float-end"><a href="#">Back to top</a></p>
                    <p>&copy; 2022 Spike Company, Inc. &middot; </p>
                </footer>
                </main>
                </div>
                </div>
            </div>
        </div>



        <?= $this->endSection(); ?>