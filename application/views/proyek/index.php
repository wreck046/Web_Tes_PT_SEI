<h1>Daftar Proyek dan Lokasi</h1>
<h2>Proyek</h2>
<ul>
    <?php foreach ($proyek['data'] as $p): ?>
        <li><?php echo $p['namaProyek']; ?> - Lokasi: <?php echo $p['lokasi']['namaLokasi']; ?></li>
    <?php endforeach; ?>
</ul>

<h2>Lokasi</h2>
<ul>
    <?php foreach ($lokasi['data'] as $l): ?>
        <li><?php echo $l['namaLokasi']; ?></li>
    <?php endforeach; ?>
</ul>
