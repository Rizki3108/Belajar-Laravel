<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Raja Hewan : {{ $king }} <br>
    Daftar hewan :
    @foreach ($hewan as $data)
        @if ($data == 'crocodile')
            <li>{{ $data }} - dia hewan setia</li>

        @elseif ($data == 'monkey')
            <li>{{ $data }} - dia hewan pintar</li>

        @elseif ($data == 'dragonfly')
            <li>{{ $data }} - dia hewan terbang</li>

        @elseif ($data == 'tiger')
            <li>{{ $data }} - dia hewan kuat</li>

        @elseif ($data == 'butterfly')
            <li>{{ $data }} - dia hewan indah</li>
            
        @else
            <li>{{ $data }}</li>
        @endif
    @endforeach
</body>

</html>
