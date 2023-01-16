<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        $(document).ready(function(){
            $("#deskrip").click(function(){
            $("#penjelasan").slideToggle(200)
            });
        });
    </script>
    <title></title>
</head>
<body>
<table border="1" class="table table-hover">
        <tr>
            <th>ID Film</th>
            <th>Image</th>
            <th>Deskripsi</th>
            <th>Trailer</th>
            @if(session()->get('status')=='admin')
            <th>Action</th>
            @endif
        </tr>
        @foreach($films as $b)
        <tr>
            <td>{{ $b->Idfilm }}</td>
            <td><image src="{{ Storage::url($b->Image) }}"  width="150" height="200"></td>
            <td style="max-width:600px">
                <p>Judul : <br>{{ $b->JudulFilm }}</p>
                <button type="button" id="deskrip">Deskripsi</button>
                <p id="penjelasan" style="display:none;">
                Pengarang : {{ $b->sutradara }}<br>
                Genre : {{ $b->Kategori }} <br>
                Sinopsis :<br>{{ $b->Sinopsis }}
                </p>
                </td>
            
            <td><button type="button" class="btn btn-info btn" data-bs-toggle="modal" data-bs-target="#ModalTrailer">Trailer</button></td>
            @if(session()->get('status')=='admin')
            <td>
                <a href="/show/{{$b->Idfilm}}"><button type="button" class="btn btn-success btn">Edit</button></a>
                <a href="/hapus/{{$b->Idfilm}}"><button type="button" class="btn btn-danger btn">Hapus</button></a>
            </td>
            @endif
        </tr>
        @endforeach
    </table>
    <div class="modal" id="ModalTrailer">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            
                {{ csrf_field() }}
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Trailer {{ $b->JudulFilm }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                <iframe width="768" height="350" src="{{ $b->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</body>
</html>