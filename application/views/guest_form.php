<!DOCTYPE html>
    <html>
        <head>
            <title>Buku Tamu</title>
        </head>
    <body>
    <h2>Form Buku Tamu</h2>
<?php echo validation_errors(); ?>
    <?= form_open('guest'); ?>
        <label>Nama</label>
        <input type="text" name="name">
    <br>
        <label>Email</label>
        <input type="text" name="email">
    <br>
    <label>Pesan</label>
    <textarea name="message">
    </textarea>
    <br>
    <input type="submit" value="Kirim">
        </form>
    </body>
</html>
