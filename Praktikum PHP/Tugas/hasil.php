<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Biodata</title>
        <link rel="stylesheet" type="text/css" href="style-result-biodata.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <a href="biodata.php">Back to biodata form</a>
        <h1 class="title-page">Result Biodata</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td><?php  echo $_POST['nama'];?></td>
                <td><?php  echo $_POST['nim'];?></td>
                <td><?php  echo $_POST['prodi'];?></td>
                <td><?php  echo $_POST['agama'];?></td>
                <td><?php  echo $_POST['alamat'];?></td>
                <td><?php  echo $_POST['tgllahir'];?></td>
                <td><?php  echo $_POST['jeniskelamin'] ?></td>
                </tr>
            </tbody>
        </table>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>