<!DOCTYPE html>
<html>
<head>
    <title>Klasifikasi Konten Artikel</title>
</head>
<body>
    <h3>Masukkan Artikel</h3>
    <p>Masukkan isi artikel untuk diklasifikasi jenis kontennya.</p>
    <?php echo form_open('artikel/add_artikel'); ?>
    <?php
        $form_artikel = array('name' => 'isi_artikel', 'cols' => '150', 'rows' => '20');
        echo form_textarea($form_artikel) . '<br/>';
        echo form_submit('submit', 'Simpan');
        echo form_close(); 
    ?>
</body>
</html>