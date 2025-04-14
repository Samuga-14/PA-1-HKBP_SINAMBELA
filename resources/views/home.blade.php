<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKBP Bakkara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Poppins', sans-serif; }
        section { padding: 100px 20px; min-height: 100vh; }
        .section-title {
            text-transform: uppercase;
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 40px;
            position: relative;
            padding-bottom: 20px;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: rgb(9, 9, 121);
        }
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://source.unsplash.com/1600x900/?church');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 150px 20px;
        }
        footer {
            background: linear-gradient(180deg, rgb(10, 10, 77) 0%, rgb(9, 9, 81) 50%, rgb(46, 46, 148) 100%);
            color: white;
            padding: 40px 20px;
            text-align: center;
        }
        .navbar {
            background-color: transparent !important;
            position: absolute !important;
            width: 100%;
            z-index: 1000;
        }
        .navbar-brand { color: white !important; }
        .nav-link { color: white !important; }
        .nav-link:hover { color:rgb(175, 6, 6) !important; }
        .sejarah-img {
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .sejarah-img:hover {
            transform: scale(1.02);
        }
        .sejarah-text {
            padding: 30px;
        }
        .contact-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .contact-card:hover {
            transform: translateY(-10px);
        }
        .contact-icon {
            font-size: 2.5rem;
            color: rgb(9, 9, 121);
            margin-bottom: 20px;
        }
        .navbar-toggler {
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#home">
            <img src="#" alt="Logo HKBP" height="40" class="me-2">
                HKBP Bakkara
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="#sejarah">Sejarah Gereja</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-hover dropdown-toggle" href="#" id="beritaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Berita Gereja
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="beritaDropdown">
                            <li><a class="dropdown-item" href="#">Berita Terkini</a></li>
                            <li><a class="dropdown-item" href="#">Artikel</a></li>
                            <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="#pengurus">Warta Jemaat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="#galeri">Struktur Kepengurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover" href="#pengumuman">Galeri Kegiatan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
    .nav-hover {
        position: relative;
    }
    
    .nav-hover::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background: rgb(9, 9, 121);
        left: 0;
        bottom: 0;
        transition: width 0.3s ease;
    }
    
    .nav-hover:hover::after {
        width: 100%;
    }

    .dropdown-menu {
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .dropdown-item:hover {
        background-color: rgb(9, 9, 121);
        color: white;
    }
    </style>
     <!-- Hero Section -->
    <section id="home" class="hero" style="background-image: url('https://awsimages.detik.net.id/community/media/visual/2024/12/24/suasana-persiapan-natal-di-gereja-katedral-santa-perawan-maria-ratu-rosario-suci-di-kelurahan-randusari-kecamatan-semarang-sel-1_169.jpeg?w=1200'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; color: white; position: relative;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);"></div>
        <h1 class="display-3 fw-bold" style="position: relative; z-index: 1;">Selamat Datang di HKBP Bakkara</h1>
        <p class="lead" style="position: relative; z-index: 1;">Gereja yang melayani dengan kasih dan kebersamaan</p>
    </section>

    <!-- Sejarah Section -->
    <section id="sejarah" class="bg-light">
        <div class="container">
            <h2 class="section-title text-center">SEJARAH GEREJA</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Milan_Cathedral_from_Piazza_del_Duomo.jpg/1200px-Milan_Cathedral_from_Piazza_del_Duomo.jpg" alt="HKBP Bakkara" class="img-fluid sejarah-img">
                </div>
                <div class="col-md-6 sejarah-text">
                    <p class="lead">HKBP Bakkara memiliki sejarah panjang dalam melayani jemaat. Berdiri sejak abad ke-19, gereja ini menjadi pusat peribadatan bagi umat Kristen Batak, khususnya di wilayah Bakkara.</p>
                    <p>Seiring perkembangan zaman, HKBP Bakkara terus berkembang dengan berbagai pelayanan rohani dan sosial untuk jemaat serta masyarakat sekitar.</p>
                    <a href="#}" class="btn btn-primary mt-3">Selengkapnya</a>
                    </div>
            </div>
        </div>
    </section>
    <!-- Layanan Ibadah Section -->
    <section id="layanan-ibadah" style="font-family: 'Poppins', sans-serif;">
        <div class="container">
            <h2 class="section-title mb-5">LAYANAN IBADAH HKBP SINAMBELA</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="jadwal-ibadah">
                        <div class="mb-4">
                            <h4 class="fw-bold"><i class="fas fa-church me-2"></i>Ibadah Minggu</h4>
                            <p>Setiap Minggu pukul 10:00 WIB</p>
                        </div>
                        <div class="mb-4">
                            <h4 class="fw-bold"><i class="fas fa-users me-2"></i>Ibadah Tamu</h4>
                            <p>Setiap Minggu ke-2 pukul 14:00 WIB</p>
                        </div>
                        <div class="mb-4">
                            <h4 class="fw-bold"><i class="fas fa-bible me-2"></i>Pembacaan Ayat</h4>
                            <p>Setiap Rabu pukul 18:00 WIB</p>
                        </div>
                        <div class="mb-4">
                            <h4 class="fw-bold"><i class="fas fa-child me-2"></i>Sekolah Minggu</h4>
                            <p>Setiap Minggu pukul 08:00 WIB</p>
                        </div>
                        <div class="mb-4">
                            <h4 class="fw-bold"><i class="fas fa-pray me-2"></i>Ibadah Pemuda</h4>
                            <p>Setiap Sabtu pukul 19:00 WIB</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://example.com/path-to-your-church-image.jpg" alt="HKBP Sinambela" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section -->
<footer style="background: linear-gradient(180deg, #87CEEB 0%, #13294B 100%);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mb-4">
                <h4 class="fw-bold mb-4">Kontak & Media Sosial</h4>
                <div class="contact-info mb-3">
                    <p><i class="fas fa-phone me-2"></i> (123) 456-7890</p>
                    <p><i class="fas fa-envelope me-2"></i> info@hkbpbakkara.org</p>
                    <p><i class="fab fa-whatsapp me-2"></i> +62 812-3456-7890</p>
                </div>
                <div class="social-media">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-youtube fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <h4 class="fw-bold mb-4">Layanan Gereja</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-church me-2"></i> Ibadah Minggu</li>
                    <li class="mb-2"><i class="fas fa-child me-2"></i> Sekolah Minggu</li>
                    <li class="mb-2"><i class="fas fa-pray me-2"></i> Ibadah Pemuda</li>
                    <li class="mb-2"><i class="fas fa-users me-2"></i> Ibadah Keluarga</li>
                    <li class="mb-2"><i class="fas fa-bible me-2"></i> Penelaahan Alkitab</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h4 class="fw-bold mb-4">Visi Gereja</h4>
                <p>"Menjadi gereja yang melayani dengan kasih, membangun iman, dan menjadi berkat bagi sesama dalam terang Kristus."</p>
                <p class="mt-3">Melayani dengan ketulusan dan kerendahan hati untuk kemuliaan Tuhan.</p>
            </div>
            <div class="col-md-3 mb-4 text-center">
                <img src="{{ asset('images/logo-hkbp.png') }}" alt="Logo HKBP" height="120" class="mb-3">
                <h4 class="fw-bold">HKBP Bakkara</h4>
                <p class="small">Huria Kristen Batak Protestan</p>
                <p class="small">Est. 1919</p>
            </div>
        </div>
        
        <hr class="mt-4 mb-4" style="border-color: white; opacity: 0.2;">
        
        <div class="text-center">
            <p class="mb-0">© 2025 HKBP Bakkara. Semua hak dilindungi. | Developed with <i class="fas fa-heart text-danger"></i> for HKBP Bakkara</p>
        </div>
    </div>
</footer>

<style>
    .social-media a {
        transition: all 0.3s ease;
        display: inline-block;
    }
    .social-media a:hover {
        color: #87CEEB !important;
        transform: translateY(-3px);
    }
    footer {
        padding: 60px 0 30px;
        color: white;
        position: relative;
    }
    footer h4 {
        position: relative;
        padding-bottom: 15px;
    }
    footer h4::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 50px;
        height: 2px;
        background: #87CEEB;
    }
    footer .col-md-3:last-child h4::after {
        left: 50%;
        transform: translateX(-50%);
    }
    footer i {
        width: 20px;
    }
    footer ul li {
        transition: all 0.3s ease;
    }
    footer ul li:hover {
        transform: translateX(5px);
        color: #87CEEB;
    }
</style>


    <!-- Script untuk smooth scrolling -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navLinks = document.querySelectorAll(".nav-link");
            navLinks.forEach(link => {
                link.addEventListener("click", function (e) {
                    e.preventDefault();
                    let targetId = this.getAttribute("href").substring(1);
                    let targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        let offset = 80;
                        let elementPosition = targetElement.offsetTop - offset;
                        window.scrollTo({ top: elementPosition, behavior: "smooth" });
                    }
                });
            });
        });
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
