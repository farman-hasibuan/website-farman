<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
        }
        .logo {
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
            background-color: #444;
            margin: 0;
        }
        nav ul li {
            display: inline-block;
            position: relative;
        }
        nav ul li a {
            display: block;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
        }
        nav ul li a:hover {
            background-color: #555;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #444;
            min-width: 160px;
            z-index: 1;
        }
        .dropdown-content a {
            display: block;
            text-align: left;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        main {
            padding: 20px;
        }
        section {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Nama Anda</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang Saya</a></li>
                <li class="dropdown">
                    <a href="#projects" class="dropbtn">Proyek</a>
                    <div class="dropdown-content">
                        <a href="#project1">Proyek 1</a>
                        <a href="#project2">Proyek 2</a>
                        <a href="#project3">Proyek 3</a>
                    </div>
                </li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>Ini adalah halaman profil saya.</p>
        </section>
        <section id="about">
            <h2>Tentang Saya</h2>
            <p>Informasi tentang diri Anda.</p>
        </section>
        <section id="projects">
            <h2>Proyek</h2>
            <article id="project1">
                <h3>Proyek 1</h3>
                <p>Deskripsi Proyek 1.</p>
            </article>
            <article id="project2">
                <h3>Proyek 2</h3>
                <p>Deskripsi Proyek 2.</p>
            </article>
            <article id="project3">
                <h3>Proyek 3</h3>
                <p>Deskripsi Proyek 3.</p>
            </article>
        </section>
        <section id="contact">
            <h2>Kontak</h2>
            <p>Informasi kontak Anda.</p>
        </section>
    </main>
</body>
</html>
