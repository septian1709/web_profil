<?= $this->extend('Layout/template');?>
<?= $this->section('content') ?>
<div class="container">
    <h1>Standar Layanan</h1>
    <div class="card">
        <div class="card-header">
            Jadwal Pelayanan
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">Senin - Kamis Pukul 08.00 - 16.00 WITA</p>
            <p class="card-text">Jumat Pukul 08.00 - 16.30 WITA</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Kontak
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">Email stageof.denpasar@bmkg.go.id</p>
            <p class="card-text">WhatsApp 089524663695</p>
            <p class="card-text">Telepon (0361) 226157</p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>