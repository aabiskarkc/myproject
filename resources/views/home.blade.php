<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $hero->name ?? 'Portfolio' }} — Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<nav class="navbar">
    <div class="container">
        <h2 class="logo">Aabiskar KC</h2>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        
    </div>
</nav>

<section id="hero" class="hero">
    @if($hero)
    <div class="hero-wrapper">
        <div class="hero-text">
            <p class="tag">Hello, I'm</p>
            <h1>{{ $hero->name }}</h1>
            <h3>{{ $hero->profession }}</h3>
            <p class="desc">{{ $hero->description }}</p>
            <div class="hero-buttons">
                <a href="#" class="btn">Download CV</a>
                <a href="#contact" class="btn-outline">Contact</a>
            </div>
        </div>
        <div class="hero-image">
            @if($hero->profile_image)
                <img src="{{ asset('storage/' . $hero->profile_image) }}" alt="{{ $hero->name }}">
            @else
                <div class="placeholder">{{ strtoupper(substr($hero->name, 0, 1)) }}</div>
            @endif
        </div>
    </div>
    @endif
</section>

<section id="about" class="section">
    <div class="section-head"><h2 class="section-title">About me</h2></div>
    @if($about)
    <div class="about-grid">
        <div class="card-main reveal">
            <h3>Description</h3>
            <p>{{ $about->description }}</p>
        </div>
        <div class="about-stats">
            <div class="stat-card reveal"><h3>Education</h3><p>{{ $about->education }}</p></div>
            <div class="stat-card reveal"><h3>Location</h3><p>{{ $about->location }}</p></div>
            <div class="stat-card reveal"><h3>Experience</h3><p>{{ $about->experience }}</p></div>
        </div>
    </div>
    @endif
</section>

<section id="skills" class="section dark">
    <div class="section-head"><h2 class="section-title">Skills</h2></div>
    <div class="skills-grid">
        @foreach($skills as $skill)
        <div class="skill-card reveal">
            <div class="skill-top"><span>{{ $skill->name }}</span><span>{{ $skill->percentage }}%</span></div>
            <div class="bar"><div class="fill" style="--w: {{ $skill->percentage }}%"></div></div>
        </div>
        @endforeach
    </div>
</section>

<section id="projects" class="section">
    <div class="section-head"><h2 class="section-title">Projects</h2></div>
    <div class="project-grid">
        @foreach($projects as $project)
        <div class="project-card reveal">
            @if($project->image)
            <div class="media"><img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"></div>
            @endif
            <div class="project-body">
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
                <div class="project-links">
                    @if($project->project_url)<a href="{{ $project->project_url }}" target="_blank" rel="noopener">Live</a>@endif
                    @if($project->github_url)<a href="{{ $project->github_url }}" target="_blank" rel="noopener">Code</a>@endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section id="contact" class="section dark">
    <div class="section-head"><h2 class="section-title">Contact</h2></div>
    <div class="contact-grid">
        @foreach($contacts as $contact)
        <div class="contact-card reveal">
            <h3>{{ $contact->label }}</h3>
            @if($contact->link)
                <a href="{{ $contact->link }}" target="_blank" rel="noopener">{{ $contact->value }}</a>
            @else
                <p>{{ $contact->value }}</p>
            @endif
        </div>
        @endforeach
    </div>
</section>

<footer class="footer">
    <p>&copy; {{ date('Y') }} Aabiskar KC. Built with Laravel.</p>
</footer>

</body>
</html>