<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="">
        @foreach ($users as $user)
            <h4>{{ $user->name }}</h4>
            <p>Post Count : {{ $user->posts->count() }}</p>
            <hr>
        @endforeach
    </div>
    <br>
    {{-- <div class="">
        @foreach ($address as $address)
            <h4>{{ $address->country }}</h4>
            <p>User : {{ $address->user->name . ' - ' . $address->user->email }}</p>
            <hr>
        @endforeach
    </div> --}}
</body>

</html>
