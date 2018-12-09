<!DOCTYPE html>
<html>
<head>
    <title>Klasifikasi Konten Artikel</title>
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>
<body>
    <h1>Klasifikasi Konten Artikel</h1>
    <h2>Daftar Artikel</h2>
    <a href="<?php echo base_url('artikel/form_insert'); ?>">Tambah Artikel</a>
    <table style="width: 100%" border="1px solid black" border-collapse="collapse">
        <thead>
            <tr>
                <th>Judul Artikel</th>
                <th>Topik</th>
                <th>Confidence</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($artikel->num_rows() == 0){ ?>
            <td colspan="4" text-align="center">Tidak ada data</td>
            <?php
            } else {      
                foreach ($artikel->result() as $art): ?>
                    <td><?php echo $art->judul; ?></td>
                    <td><?php echo $art->topic; ?></td>
                    <td><?php echo $art->confidence; ?></td>
                    <td>
                        <a href="">Edit</a>
                        <a href="">Delete</a>
                    </td>
                <?php endforeach; 
            }?>
        </tbody>
    </table>
</body>
</html>