<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
    <!DOCTYPE html>
    <html>
    <style type="text/css">
        .button a {
            color: #ffffff;
            text-decoration: none;
        }
    </style>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mt-2">Daftar Barang</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Device Name</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <img img class="image" width="200" height="150" src="arduino.jpeg"></img>
                                </td>
                                <td>Arduino</td>
                                <td>Genuino</td>
                                <td>19</td>
                                <td>1</td>
                                <td class="button">
                                    <button type="button" class="btn btn-success"><a class="nav-link" href="/device-details/Arduino">Details</a></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    <img img class="image" width="200" height="200" src="bardi.jpg"></img>
                                </td>
                                <td>Smart CCTV</td>
                                <td>Bardi</td>
                                <td>4</td>
                                <td>1</td>
                                <td class="button">
                                    <button type="button" class="btn btn-success"><a class="nav-link" href="/device-details/SmartCCTV">Details</a></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>
                                    <img img class="image" width="200" height="200" src="samsung.jpg"></img>
                                </td>
                                <td>Smart Vacuum Cleaner</td>
                                <td>Samsung</td>
                                <td>2</td>
                                <td>0</td>
                                <td class="button">
                                    <button type="button" class="btn btn-success"><a class="nav-link" href="/device-details/SmartVacuumCleaner">Details</a></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>
                                    <img img class="image" width="200" height="200" src="computer.jpg"></img>
                                </td>
                                <td>Computer (PC)</td>
                                <td>Apple</td>
                                <td>10</td>
                                <td>1</td>
                                <td class="button">
                                    <button type="button" class="btn btn-success"><a class="nav-link" href="/device-details/Computer(PC)">Details</a></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</html>
<?= $this->endSection(); ?>