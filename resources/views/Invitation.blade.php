<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<title>PUSPA ST-12 - Invitation {{$namadiundang}}</title>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .card-undangan{
        text-align: center;
        align-content: center;
        background-color: blueviolet;
        width: 50%;
       
    }
    .amplop-undangan {
        text-decoration: none;
        padding: 10px 20px;
        background-color: blue;
        color: white;
    }

</style>
</head>

<body class="bg-danger vh-100">
    <div class="container">
        <div class="row text-center ">
            <div class="d-flex justify-content-center vh-100 align-items-center ">
           <div class="bg-white p-5 rounded">
             <h6>Undangan Konsultasi Puspa</h6>
            <h6>Bapak/Ibu/Saudara/i</h6>
            <h6>Turut Mengundang</h6>
            <h6>{{$namadiundang}}</h6>
            <a class="amplop-undangan" href="{{ url('/')}}">Buka Undangan</a>
           </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
