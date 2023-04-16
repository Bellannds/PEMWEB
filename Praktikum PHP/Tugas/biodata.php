<!DOCTYPE html>
<html>

<head>
    <title>Form Biodata</title>
    <link rel="stylesheet" type="text/css" href="style-biodata.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class ="container">
        <div class="login-wrapper">
            <h1 class="text-center">Biodata</h1>  
            <div class="form-wrapper">
                <form class="form-content" action="hasil.php" method="post">
                    <div class="form-group">
                        <label>Nama Lengkap </label>
                        <input type="text" class="form-control" name="nama">
                    <div class="form-group">
                        <label>NIM </label>
                        <input type="text" class="form-control" name="nim">
                    </div>
                    <div class="form-group">
                        <label>Prodi </label>
                        <input type="text" class="form-control" name="prodi">
                    </div>
                    <div class="form-group">
                        <label>Agama </label>
                        <input type="text" class="form-control" name="agama">
                    </div>
                    <div class="form-group">
                        <label>Alamat </label>
                        <textarea type="text" class="form-control" name="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir </label>
                        <input type="text" class="form-control" name="tgllahir">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" value="Laki-laki">
                            <label class="form-check-label">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeniskelamin" value="Perempuan">
                            <label class="form-check-label">
                                Perempuan
                            </label>
                        </div>
                    <div class="btn-wrapper">
                        <button type="submit" class="btn btn-primary">Submit </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>