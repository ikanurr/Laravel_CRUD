<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ikha Nur Rochayatin</h1>
    <h1>SMK N 1 SAYUNG,{{$nama}},{{$kelas}}</h1>

    @if($nama=='admin')
    <a href ="">Ke Halaman ADMIN</a>
    @elseif($nama=='user')
    <a href ="">Ke Halaman USER</a>
    @else
    <h2>Anda Bukan ADMIN dan USER</h2>
    @endif

    @switch($i)
    
    @case(1)
        First case...
        @break
 
    @case(2)
        Second case...
        @break
 
    @default
        Default case...
    @endswitch

    
<br>

    @for ($i = 0; $i < 10; $i++)
     {{ $i }}
    @endfor

    @foreach ($buah as $nama)
         {{ $nama }}</br>
    @endforeach
</body>
</html>