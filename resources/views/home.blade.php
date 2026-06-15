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
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero">

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

    <!-- About Section -->
    <section id="about" class="section about">

        <div class="section-header">
            <h2>About Me</h2>
            <p>Get to know me better</p>
        </div>

        @if($about)

            <div class="about-content">

                <p class="about-description">{{ $about->description }}</p>

                <div class="about-info">

                    <div class="about-card">
                        <h3>Education</h3>
                        <p>{{ $about->education }}</p>
                    </div>

                    <div class="about-card">
                        <h3>Location</h3>
                        <p>{{ $about->location }}</p>
                    </div>

                    <div class="about-card">
                        <h3>Experience</h3>
                        <p>{{ $about->experience }}</p>
                    </div>

                </div>

            </div>

        @endif

    </section>

    <!-- Skills Section -->
    <section id="skills" class="section skills">

        <div class="section-header">
            <h2>My Skills</h2>
            <p>Technologies I work with</p>
        </div>

        @if($skills->count())

            <div class="skills-grid">

                @foreach($skills as $skill)

                    <div class="skill-item">

                        <div class="skill-header">
                            <span class="skill-name">{{ $skill->name }}</span>
                            <span class="skill-percentage">{{ $skill->percentage }}%</span>
                        </div>

                        <div class="skill-bar">
                            <div class="skill-progress" style="width: {{ $skill->percentage }}%"></div>
                        </div>

                    </div>

                @endforeach

            </div>

        @endif

    </section>

    <!-- Projects Section -->
    <section id="projects" class="section projects">

        <div class="section-header">
            <h2>My Projects</h2>
            <p>Some of my recent work</p>
        </div>

        @if($projects->count())

            <div class="projects-grid">

                @foreach($projects as $project)

                    <div class="project-card">

                        @if($project->image)
                            <img
                                src="{{ asset('storage/' . $project->image) }}"
                                class="project-image"
                                alt="{{ $project->title }}"
                            >
                        @endif

                        <div class="project-body">
                            <h3>{{ $project->title }}</h3>
                            <p>{{ $project->description }}</p>

                            <div class="project-links">

                                @if($project->project_url)
                                    <a href="{{ $project->project_url }}" class="btn" target="_blank">Live Demo</a>
                                @endif

                                @if($project->github_url)
                                    <a href="{{ $project->github_url }}" class="btn-outline" target="_blank">GitHub</a>
                                @endif

                            </div>
                        </div>

                    </div>

                @endforeach

            </div>

        @endif

    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact">

        <div class="section-header">
            <h2>Contact Me</h2>
            <p>Get in touch</p>
        </div>

        @if($contacts->count())

            <div class="contact-grid">

                @foreach($contacts as $contact)

                    <div class="contact-card">

                        <h3>{{ $contact->label }}</h3>

                        @if($contact->link)
                            <a href="{{ $contact->link }}" target="_blank">{{ $contact->value }}</a>
                        @else
                            <p>{{ $contact->value }}</p>
                        @endif

                    </div>

                @endforeach

            </div>

        @endif

    </section>

    <!-- Footer -->
    <footer class="footer">
        © {{ date('Y') }} My Portfolio.
    </footer>

</body>
</html>
