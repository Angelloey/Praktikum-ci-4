<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
        <div class="container">
            <div class="row">
            <div class="container py-3">
            <main>
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Arduino</h4>
                    </div>
                    <div class="card-body">
                        <img img class="image" width="200" height="200" src="arduino.jpeg"></img>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>Genuino</li>
                        <li>19</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary"><a class="nav-link" href="/device-details">Back</a></button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>