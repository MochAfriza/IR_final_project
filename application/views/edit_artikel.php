<!DOCTYPE html>
<html>
<head>
    <title>Edit Klasifikasi Konten Artikel</title>
</head>
<body>
<?php foreach($artikel as $u){ ?>
   <form action="<?php echo base_url(). 'artikel/form_edit'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                    <input type="text" name="Judul Artikel" value="<?php echo $u->judul_artikel ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Isi Artikel" value="<?php echo $u->isi_artikel ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form> 
    <?php } ?>
</body>
</html>