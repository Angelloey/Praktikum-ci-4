<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
    <main>
    <section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">IoT Devices</h1>
            <p class="lead text-muted">IoT devices are the nonstandard computing devices that connect wirelessly to a network and have the ability to transmit data, such as the many devices on the internet of things ( IoT ).</p>
        </div>
    </div>
    </section>

    <div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sm">
            <img img class="image" width="340" height="350" src="bardi.jpg" text-align="center"></img>
            <div class="card-body">
                <h4> Smart CCTV </h4>
                <p class="card-text">A smart CCTV able to make sense from the images that it records.</p>
                <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Bardi CCTV</small>
                </div>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
            <img img class="image" width="340" height="350" src="arduino.jpeg" text-align="center"></img>
            <div class="card-body">
                <h4> Arduino </h4>
                <p class="card-text">Arduino acts as the brain of the system and processes the data from the sensor. </p>
                <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Genuino</small>
                </div>
            </div>
            </div>
        </div>
        <br>
        <br>
        <div class="col">
            <div class="card shadow-sm">
            <img img class="image" width="340" height="350" src="samsung.jpg" text-align="center"></img>
            <div class="card-body">
                <h4> Smart Cleaner </h4>
                <p class="card-text">A cleaner home featuring a 3D Camera with Object Recognition and real-time video. </p>
                <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Samsung</small>
                </div>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
            <img img class="image" width="340" height="350" src="computer.jpg" text-align="center"></img>
            <div class="card-body">
                <h4> Computer </h4>
                <p class="card-text">an electronic device for storing and processing data, typically in binary form. </p>
                <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">Apple Desktop</small>
                </div>
            </div>
            </div>
        </div>
        

       
        </div>
    </div>
    </div>

</main>
        <?= $this->endSection(); ?>