<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.2-dist/css/bootstrap.css') }}">
    <title>Edit Data Film</title>
    <link rel="stylesheet" href="{{ asset('resources/css/update.css') }}">
</head>
<body>
    <form align= "center" action="/edit" method="post" enctype="multipart/form-data" >
    {{ csrf_field() }}
<table align="center" style="margin-top: 40px; height: 220px; width: 500px; text-align: center; border-radius: 10px; box-shadow: 10px 10px 10px;margin-bottom: 20px; background-color: blanchedalmond;">
        <tr>
        @foreach($films as $a)
        <td><b>ID Film<br>{{$a->Idfilm}}</b></td><td><input type="hidden" name="Idfilm" value="{{$a->Idfilm}}"></td>
            
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" id="JudulFilm" name="JudulFilm"  class="form-control" value="{{$a->JudulFilm}}"></td>
            </tr>
            <tr>
                <td>Sutradara</td><td><input type="text" id="sutradara" name="sutradara"  class="form-control" value="{{$a->sutradara}}"></td>
            </tr>
            <tr>
                <td valign="top">Sinopsis</td><td><textarea id="Sinopsis" name="Sinopsis" rows="4" cols="50" class="form-control" value="{{$a->Sinopsis}}"></textarea></td>
            </tr>
            
    
            <tr>
                <td>Genre</td>
                <td>
                    <select name="Kategori" id="Kategori" style="width: 170px;" class="form-select form-select-md" value="D">
                        <option value="Thriller">Thriller</option>
                        <option value="Horror">Horror</option>
                        <option value="Sci-Fi">Sci-Fi</option>
                        <option value="Animation">Animation</option>                        
                        
                    </select>
                </td>
            </tr>          

            @endforeach    
        </table>
            
            <image src="{{ Storage::url($a->Image) }} " width="250" height="300">
                
            <br><br>
            
            
            <input type="submit" class="btn btn-success" value="Save" style="width: 200px;">
    </form>
    
</body>
</html>