<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="Ayang_Gami2.png">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    
    <!-- Navigation Bar -->
    <nav class="navbar">
        <a href="#home" class="navbar-logo">
            <img src="{{ asset('/images/Ayang_Gami2.png') }}" alt="Logo" class="logo">
        </a>
        <div class="nav-links" id="nav-links">
            <a href="#home" class="test">Home</a>
            <a href="#services" class="test">Services</a>
            <a href="#projects" class="test">Projects</a>
            <a href="#contact" class="test">Contact</a>
            <a href="#resume" class="resume">Resume</a>
        </div>
        <div class="hamburger" id="hamburger-icon">
            <i data-feather="menu"></i>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-text">
            <h1>Tobiichi Origami</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem nihil non inventore similique odit possimus. Beatae modi asperiores incidunt sint, suscipit culpa nam aliquid tempore quos at quisquam voluptatem aperiam!</p>
            <a href="#projects" class="cta">Project</a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('/images/Ayang_Gami3.png') }}" alt="ayang" class="hero-img">
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="services-header">
            <h2>My Services</h2>
            <p>What I offer to help you achieve your goals</p>
        </div>
        <div class="services-list">
            <div class="service-card" id="web-development">
                <i data-feather="code" class="service-icon"></i>
                <h3>Web Development</h3>
                <p>Custom websites and applications designed to meet your needs with a focus on functionality and user experience.</p>
            </div>
            <div class="service-card" id="game-development">
                <i data-feather="airplay" class="service-icon"></i>
                <h3>Game Development</h3>
                <p>Creating engaging and fun games for all platforms with a focus on performance and user experience.</p>
            </div>
            <div class="service-card" id="ui-ux">
                <i data-feather="layout" class="service-icon"></i>
                <h3>UI/UX Design</h3>
                <p>Crafting beautiful and user-friendly interfaces with a seamless experience to maximize engagement.</p>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects" id="projects">
        <div class="projects-header">
            <h2>My Projects</h2>
            <p>Showcasing some of my recent work</p>
        </div>
        <div class="projects-list">
            <div class="project-card" id="web-project">
                <div class="project-img">
                    <img src="{{ asset('/images/Ayang_Gami3.png') }}" alt="Web Project">
                </div>
                <div class="project-info">
                    <h3>Website</h3>
                    <p>A custom website built to provide seamless user experience and functionality.</p>
                    <div class="tags">
                        <span>Website</span>
                    </div>
                </div>
            </div>
            
            <a href="https://github.com/ItsukaChiyogami/-tugas-kuliah-web-gamify-project-ending" style="text-decoration: none;">
                <div class="project-card" id="web-project">
                <div class="project-img">
                <img src="{{ asset('/images/Ayang_Gami3.png') }}" alt="Web Project">
                </div>
                <div class="project-info">
                    <h3>Gamify</h3>
                    <p>""Gamify" adalah proyek web yang dirancang untuk meningkatkan pengalaman wisatawan, khususnya mereka yang berencana mengunjungi Indonesia, dengan fokus di Makassar. Platform ini menawarkan permainan interaktif yang memungkinkan pengguna memperoleh poin saat menjelajahi dan menikmati berbagai tujuan wisata. Setelah mengumpulkan poin yang cukup, pengguna dapat menukarkan kode voucher untuk mendapatkan hadiah nyata.</p>
                    <div class="tags">
                        <span>Website</span>
                    </div>
                </div>
            </div>
        </a>
            
            <div class="project-card" id="web-project">
                <div class="project-img">
                <img src="{{ asset('/images/Ayang_Gami3.png') }}" alt="Web Project">
                </div>
                <div class="project-info">
                    <h3>Overrun</h3>
                    <p>Sebuah Game Yang Dirancang Agar Dimainkan Dengan Menggunakan Kamera,Overrun adalah sebuah game yang saya kembangkan beserta kelompok saya dengan menggunakan beberapa tools...... (still updating)</p>
                    <div class="tags">
                        <span>Game</span>
                    </div>
                </div>
            </div>
            
            <div class="project-card" id="web-project">
                <div class="project-img">
                <img src="{{ asset('/images/Ayang_Gami3.png') }}" alt="Web Project">
                </div>
                <div class="project-info">
                    <h3>Website</h3>
                    <p>A custom website built to provide seamless user experience and functionality.</p>
                    <div class="tags">
                        <span>Website</span>
                    </div>
                </div>
            </div>
    </section>
        
    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="contact-header">
            <h2>Contact Me</h2>
            <p>Have a project in mind? Let’s work together!</p>
        </div>
        <div class="contact-form">
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" id="name" name="name" placeholder="Your Name" autocomplete="off" required >
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Your Email" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="contact-btn">Send Message</button>
            </form>
        </div>
    </section>

    <footer class="footer">

        <div class="footer-text">
            <p>&copy; 2024 Tobiichi Origami</p>
        </div>
    </footer>
    

    <script>
        feather.replace();
    </script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
