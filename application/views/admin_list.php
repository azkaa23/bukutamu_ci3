<!DOCTYPE html>
    <html>
        <head>
            <title>Daftar Tamu</title>
        </head>
        <body>
    <h2>Daftar Buku Tamu</h2>
<form method="get">
  Dari: <input type="date" name="from">
  Sampai: <input type="date" name="to">
  <button type="submit">Filter</button>
  <a href="<?= site_url('admin/export_csv?from='.$this->input->get('from').'&to='.$this->input->get('to')) ?>">Export CSV</a>
</form>
<table border="1">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Pesan</th>
    <th>Waktu</th>
</tr>

<?php foreach($guests as $g): ?>
    <tr>
     <td><?= $g['id'] ?></td>
     <td><?= $g['name'] ?></td>
     <td><?= $g['email'] ?></td>
     <td><?= $g['message'] ?></td>
     <td><?= $g['created_at'] ?></td>
</tr>
<?php endforeach;?>
</table>
</body>
</html>
