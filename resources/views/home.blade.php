<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
    
    <script type="text/javascript"> 
    
        function lihatpustaka(){
            $.ajax({
            type:"GET",
            url:"/tabel"
            }).done(function(data){
            $('#tabel').html(data);
            });
        }

        function caripustaka(){
            var Idfilm = document.getElementById("Idfilm").value;
            $.ajax({
                type:"GET",
                url:"/cari/"+Idfilm
                }).done(function(data){
                $('#tabel').html(data);
                alert("Data ditemukan!");
                });
        }
    </script>
    <title>Tugas Akhir Praktek Website</title>
</head>
<body onload="lihatpustaka();">
<h1 class="container-fluid p-5 bg-dark text-white" style="text-align:center">Daftar Film Action <h1>
<div class="row">
            <h2 class="col-11">Welcome {{session()->get('username')}}</h2>
        
        <a href="/logout" class="col-1">
            <button type="button" class="btn btn-warning btn">Log Out</button>
        </a>
        </div>
    <h3>Data Film</h3>
    
    <br/>
    <label for="JudulFilm">Cari Film</label>
    <table>
        <tr>    
            <td>
                <input placeholder="Masukkan IdFilm" type="text" id="Idfilm" class="form-control form-control" style="width: 300px;">
            </td>
            <td>
                <button type="button" id="cari" class="btn btn-success btn" style="width:100px;" onclick="caripustaka();">Search</button>
            </td>
            <td>
                <button type="button" id="lihat" class="btn btn-danger btn" style="width:125px; margin-left:5px" onclick="lihatpustaka();">Lihat Semua</button>
            </td>    
            @if(session()->get('status')=='admin')
            <td>
                <button type="button" id="isi" class="btn btn-info btn" data-bs-toggle="modal" data-bs-target="#ModalInsert" style="margin-left:5px">Tambah Film Baru</button>
            </td>
            @endif
        </tr>
    </table>
    <br>
    
    <p></p>
    <div id="tabel">
    
    </div>
    <div class="modal" id="ModalInsert">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form action="/tambah" method="post" enctype="multipart/form-data" id="formdata">
                    {{ csrf_field() }}
    <!-- Modal Header -->
    <div class="modal-header">
        <h4 class="modal-title">Pendaftaran Film Baru</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
        <table>
            <tr>
                <td>Id Film :</td><td><input type="text" id="Idfilm" name="Idfilm" class="form-control"></td>
            </tr>
            <tr>
                <td>Judul Film:</td><td><input type="text" id="JudulFilm" name="JudulFilm"  class="form-control"></td>
            </tr>
            <tr>
                <td>Sutradara :</td><td><input type="text" id="sutradara" name="sutradara"  class="form-control"></td>
            </tr>
            <tr>
                <td valign="top">Sinopsis :</td><td><textarea id="Sinopsis" name="Sinopsis" rows="4" cols="50" class="form-control" ></textarea></td>
            </tr>
            

            <tr>
                <td>Jenis Film :</td>
                <td>
                    <select name="Kategori" id="Kategori" style="width: 200px; " class="form-select form-select-md">
                        <option value="Fantasi">Fantasi</option>
                        <option value="Fiksi">Fiksi</option>
                        <option value="Thriller">Thriller</option>                        
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>Upload Cover</td> 
                <td>
                    <input type="file" name="file">
                </td>
            </tr>
            
            <tr>
                <td>Link Trailer :</td><td><input type="text" id="video" name="video"  class="form-control"></td>
            </tr>
            
        </table>
        

    </div>

    <!-- Modal footer -->
        <div class="modal-footer">
            <input type="submit" class="btn btn-danger" value="submit" id="submit">
    </div>
    </form>
    </div>
</div>
</div>
<script src="{{ asset('/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js') }} "></script>
</body>
</html>