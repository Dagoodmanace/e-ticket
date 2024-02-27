<?php require 'layouts/navbar.php'; ?>
<?php

$jadwal = query("SELECT * FROM jadwal_penerbangan 
INNER JOIN rute ON rute.id_rute = jadwal_penerbangan.id_rute 
INNER JOIN maskapai ON rute.id_maskapai = maskapai.id_maskapai ORDER BY tanggal_pergi, waktu_berangkat");

?>
<div class="list-e-ticketing">
    <h1>Jadwal Penerbangan E-Ticketing</h1>
    <div class="wrapper-e-ticketing">
        <?php foreach($jadwal as $data) : ?>
            <div class="card-e-ticketing">
                <div class="image"><img src="assets/images<?= $data ["logo_maskapai"]; ?>" width="80"></div>
                <div class="nama-maskapai"<?= $data["nama_maskapai"]; ?>></div>
                <div class="rute-penerbangan"><?= $data["rute_asal"] ?> - <?= $data["rute_tujuan"]; ?></div>
                <div class="text-harga">Rp <?= number_format($data["harga"]); ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>