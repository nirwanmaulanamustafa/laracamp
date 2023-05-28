<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/navbarlibrary.scss">
    <link href="hamburgers/dist/hamburgers.css" rel="stylesheet">

    <style>
      .container-hamburger{
        display: grid;
        cursor: pointer;
        gap: 6px;
        }

      .bar1,
      .bar2,
      .bar3{
        width: 35px;
        height: 5px;
        background-color: #000;
        border-radius: 16px;
        transition: .3s;
      }
      .change .bar1{
        transform: translate(0, 11px) rotate(-45deg);
      }
      .change .bar2{
        opacity: 0;
      }
      .change .bar3{
        transform: translate(0, -11px) rotate(45deg);
      }

    </style>

</head>

<body>

    <div class="tester">
      <img src="{{'/assets/images/logo.png'}}" alt="" width="90">
      <div>
        <link rel="stylesheet" href="">
      </div>
      <div class="container-hamburger" onclick="NavbarX(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
    </div>


    <script>
      function NavbarX(x) {
        x.classList.toggle("change");
      }
    </script>
</body>

</html>
