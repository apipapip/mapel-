<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
</head>
<body>
    <h1>Mengirim data dengan method Get</h1>
    <a href="index.php?halaman=link1&nama=aliq">link 1</a>
    <hr>
    <h1>Mengirim data dengan method Post</h1>
    <form action="index.php?halaman=link2" method="post">
    <select required>
                <option value="" disabled selected>Kelas</option>
                <option>XI RPL1</option>
                <option>XI RPL2</option>
            </select><br>

            <select required>
                <option value="" disabled selected>Pilih jenis kelamin</option>
                <option >Laki-laki</option>
                <option >Perempuan</option>
            </select>
    <input type="text" name="kelas" id="kelas">
    <button type="submit">kirim</button>
    </form>
</body>
</html>