<!DOCTYPE html>
<html>
<head>
    <title>Klasifikasi Konten Artikel</title>
</head>
<body>
    <h1>Klasifikasi Konten Artikel</h1>
    <h2>Masukkan Artikel</h2>
    <?php echo form_open('artikel/add_artikel'); ?>
    <?php
        echo form_label('Judul Artikel : ') . '<br/>';
        echo form_input('judul_artikel', '', array('style' => 'width: 100%;')) . '<br/>';
        $form_artikel = array('name' => 'isi_artikel', 'style' => 'width: 100%');
        echo form_label('Isi artikel : ') . '<br/>';
        echo form_textarea($form_artikel) . '<br/>';
        echo form_submit('submit', 'Simpan');
        echo form_close(); 
    ?>
    <a href="<?php echo base_url('artikel') ?>">Kembali</a>
</body>
</html>