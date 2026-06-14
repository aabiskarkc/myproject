<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <h2>My Portfolio</h2>

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    
   <!-- Hero ko Section ho yo -->
<section class="hero">

    @if($hero)

        <div class="hero-content">

            @if($hero->profile_image)
                <img
                    src="{{ asset('storage/' . $hero->profile_image) }}"
                    class="profile-image"
                    alt="Profile Image"
                >
            @endif

            <h4>Hello, I'm</h4>

            <h1>{{ $hero->name }}</h1>

            <h2>{{ $hero->profession }}</h2>

            <p>{{ $hero->description }}</p>

            <div class="hero-buttons">
                <a href="#" class="btn">Download CV</a>
                <a href="#contact" class="btn-outline">Contact Me</a>
            </div>

        </div>

    @endif

</section>

    <!-- Footer -->
    <footer class="footer">
        © {{ date('Y') }} My Portfolio. All Rights Reserved.
    </footer>

</body>
</html>