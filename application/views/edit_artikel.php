<!DOCTYPE html>
<html>
<head>
    <title>Edit Klasifikasi Konten Artikel</title>
</head>
<body>
	<h1>Klasifikasi Konten Artikel</h1>
    <h2>Edit Artikel</h2>
    <?php echo form_open('artikel/update'); ?>
	<input type="hidden" name="id" value="<?php echo $artikel->id ?>">
    <?php
        echo form_label('Judul Artikel : ') . '<br/>';
        echo form_input('judul_artikel', $artikel->judul, array('style' => 'width: 100%;')) . '<br/>';
        $form_artikel = array('name' => 'isi_artikel', 'style' => 'width: 100%', 'value' => $artikel->isi);
        echo form_label('Isi artikel : ') . '<br/>';
        echo form_textarea($form_artikel) . '<br/>';
        echo form_submit('submit', 'Simpan');
        echo form_close(); 
    ?>
</body>
</html>