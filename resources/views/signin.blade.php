<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
    <title>Pendaftaran Akun</title>
</head>
<body style="background-color: rgb(177, 255, 229); ">
    <form action="/registrasi" method="POST" name="pengunjung" id="pengunjung">
    {{csrf_field()}}
        <table>
            <tr>
                <td>Nama :</td>
                <td>
                    <input type="text" id="nama" name="nama" required placeholder="Nama Panggilan" pattern="[a-z].{1,}" class="form-control" style="width:300px;">
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>
                    <input type="email" id="email" name="email" required placeholder="Email Aktif" class="form-control" style="width:300px;">
                </td>
            </tr>
            <tr>
                <td>Username :</td>
                <td>
                    <input type="text" id="username" name="username" required pattern="[a-z].{1,}" class="form-control" style="width:300px;">
                </td>
            </tr>
            <tr>
                <td>Kata Sandi :</td>
                <td>
                    <input type="password" id="password" name="password" required placeholder="Password" class="form-control" style="width:250px;">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir :</td>
                <td>
                    <input type="date" id="tanggal" name="tanggal">
                </td>
            </tr>
            <tr>
                <td>Jenis kelamin :</td>
                <td>
                    <input type="radio" id="cowok" name="kelamin" value="1" class="form-check-input">
                    <label for="cowok" class="form-check-label">Laki-laki</label>
                    <input type="radio" id="cewek" name="kelamin" value="2" class="form-check-input">
                    <label for="cewek" class="form-check-label">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Kategori Film yang disukai</td>
                <td>
                    <input type="checkbox" id="fantasi" name="kategori" value="fantasi" class="form-check-input">
                    <label for="fantasi" class="form-check-label">Fantasi</label>
                    <input type="checkbox" id="komedi" name="kategori" value="komeid" class="form-check-input">
                    <label for="komedi" class="form-check-label">komedi</label>
                    <input type="checkbox" id="thriller" name="kategori" value="thriller" class="form-check-input">
                    <label for="thriller" class="form-check-label">Thriller</label>
                </td>
            </tr>
        </table>
        <input type="submit" id="submit" value="Sign In" class="btn btn-danger btn-lg" style="width:150px; margin-left: 400px;">
    </form>
</body>
</html>