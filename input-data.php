<!doctype HTML>
<html>
<head>
    <title>Form Input Buku</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-data.php" method="POST">
                    <div class="form-group">
                        <label for="nim">ISBN</label>
                        <input type="number" name="isbn" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <select name="jenis" class="form-control">
                            <option value="Pemrograman">Pemrograman</option>
                            <option value="Desain grafis">Desain grafis</option>
                            <option value="Database">Database</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tahun_terbit">Tahun terbit</label>
                        <input type="text" name="tahun_terbit" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="pengarang">Pengarang</label>
                        <input type="text" name="pengarang" class="form-control">
                    </div>

                

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>