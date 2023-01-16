<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <style> 
        @font-face {
            font-family: poppins;
            src: url(https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap);

        }
        * {
            font-family: poppins;
        }
    </style>
    <title>Welcome!</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; min-height: 100vh;background-image: url(https://wallpaperaccess.com/full/54688.jpg); background-size:cover;">
    <div class="container" style="width: 100%; display: flex; max-width: 425px; background: #3C4048; border-radius: 15px; box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);">
        <div class="login" style="width: 400px; color:#fff; font-family: 'poppins';">
            <form action="/login" method="POST" name="pengunjung" id="pengunjung" style="width: 250px; margin: 60px auto;">
            {{csrf_field()}}
                <h1 style="margin: 20px; text-align: center;font-weight: bolder; text-transform: uppercase;">login</h1>
                <hr style="border-top: 2px solid #ffa12c; width:270px;">
                <p style="text-align: center; margin: 10px;">Selamat Datang</p>
                <label style="display: block; font-size: 16px; font-weight: 600; padding: 5px;">Username</label>
                <input type="text" name="username"
                style="width: 100%; margin: 2px; border: none; outline: none; padding:8px; border-radius: 5px; border: 1px solid gray;">
                <label style="display: block; font-size: 16px; font-weight: 600; padding: 5px;">Password</label>
                <input type="password" name="password" placeholder="Password" style="width: 100%; margin: 2px; border: none; outline: none; padding:8px; border-radius: 5px; border: 1px solid gray;">
                <input type="submit" class="btn btn-success danger" id="login" value="Login" style="border: none;outline: none; padding: 8px; width: 270px; color: #fff; font-size: 16px; cursor: pointer; margin-top: 20px; border-radius: 5px; background: #ffa12c;">
                <p>
                    @if ($message=Session::get('error'))
                    {{ $message}}
                    @endif 
                    @if ($message=Session::get('success'))
                    {{ $message}}
                    @endif
                </p>
                <p>
                    <a href="/signin" style="margin-left:115px; color:#fff;" > Daftar</a>
                </p>
            </form>
        </div>
        
        <!-- <div class="right" >
            <img src="Referensi.jpg" style="width: 450px; height: 100%; border-top-right-radius: 15px; border-bottom-right-radius: 15px;">
        </div> -->
    </div>
</body>
</html>