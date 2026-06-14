<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
</head>
<body style="font-family: Arial; text-align:center;">

    <h1>My Portfolio</h1>

    @if(isset($hero) && $hero)
        <h2>{{ $hero->name }}</h2>
        <h3>{{ $hero->profession }}</h3>

        <p>{{ $hero->description }}</p>

        @if($hero->profile_image)
            <img src="{{ asset('storage/' . $hero->profile_image) }}" width="200" style="border-radius: 10px;">
        @endif

    @else
        <p>No data found. Please add Hero from admin panel.</p>
    @endif

</body>
</html>