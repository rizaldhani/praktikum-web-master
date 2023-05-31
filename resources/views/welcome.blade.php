<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-image: linear-gradient(
60deg,
#ac0064,
#df4c09,
#275cac


)">
{{--@foreach($makanan as $value)--}}
{{--    <p>Nama : {{$value['nama']}}, Harga : {{$value['harga']}}</p>--}}
{{--@endforeach--}}
{{--<br>--}}
<div class="container" style="
padding: 1rem;
border: 2px solid black;
border-radius: 2rem;
margin-top: 1rem;
display: flex;
flex-direction: column;
align-items: center;
justify-items: center;
background: rgba(108,130,245,0.42);
"

>
    <img src='images/ijat.jpg'
         alt="aku"
         style="
         margin-top: 1rem;
         border-radius: 50%;
         width: 10rem;
         height: 10rem;
         border: 5px solid #7f13aa;
         box-shadow: 5px 5px 10px rgba(182, 194, 11, 0.63);

         "
    >
    <div class="list"
         style="background: rgba(184, 184, 184, 0.42);
    margin-top: 1rem;
    padding: 2rem;
    border-radius: 2rem;box-shadow: 5px 5px 10px rgba(80,80,80,0.63);
    "
    >

        @if(isset($biodata))
            <p>Nama   : {{$biodata['nama']}}</p>
            <p>Nim    : {{$biodata['nim']}}</p>
            <p>Kuliah : {{$biodata['kuliah']}}</p>
            <p>Alamat : {{$biodata['alamat']}}</p>
            <p>Hobi   : @foreach($biodata['hobis'] as $value)
                    {{$value}},
                @endforeach
            </p>
            <p>Cita   : {{$biodata['cita']}}</p>
        @else
            <p>Data Kosong</p>
        @endif
    </div>

</div>
</body>
</html>
