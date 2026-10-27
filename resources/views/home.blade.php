
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CV {{ $username }}</title>

    <link rel="icon" type="image/x-icon"
          href="{{ asset('cv/assets/img/favicon.ico') }}">

    <link href="https://use.fontawesome.com/releases/v6.3.0/css/all.css"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i"
          rel="stylesheet">

<link href="{{ asset('cv/styles.css') }}" rel="stylesheet"></head>

<body id="page-top">

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"
         id="sideNav">

        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">{{ $username }}</span>

            <span class="d-none d-lg-block">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2"
src="{{ asset('cv/profile.jpg') }}"
                     alt="Foto {{ $username }}">
            </span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive"
                aria-expanded="false"
                aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">
                        Profil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experience">
                        Pengalaman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">
                        Pendidikan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#skills">
                        Keahlian
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#interests">
                        Minat
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">
                        Kontak
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Konten CV -->
    <div class="container-fluid p-0">

        <!-- Profil -->
        <section class="resume-section" id="about">
            <div class="resume-section-content">

                <h1 class="mb-0">
                    {{ $username }}
                </h1>

                <div class="subheading mb-5">
                    {{ $profesi }}
                </div>

                <p class="lead mb-5">
                    {{ $tentang }}
                </p>

                <div class="social-icons">
                    <a class="social-icon"
                       href="https://github.com/"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>

                    <a class="social-icon"
                       href="https://linkedin.com/"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>

<div class="cv-actions mt-4">


<div class="cv-actions mt-4">

<a href="{{ route('pelanggan.edit', ['pelanggan' => $pelanggan_id]) }}"
   class="btn btn-primary btn-edit-cv">
    <i class="fas fa-pen-to-square me-2"></i>
    Edit CV
</a>

    <a href="{{ route('pelanggan.index') }}"
       class="btn btn-outline-secondary btn-back-cv">
        <i class="fas fa-arrow-left me-2"></i>
        Kembali ke Data Pelanggan
    </a>
</div>


            </div>

        </section>

        <hr class="m-0">

        <!-- Pengalaman -->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">

                <h2 class="mb-5">Pengalaman dan Proyek</h2>

                <div class="mb-5">
                    <h3 class="mb-0">Website CV Pribadi</h3>
                    <div class="subheading mb-3">
                        Proyek Akademik
                    </div>
                    <p>
                        Membuat website CV menggunakan Laravel,
                        PHP, HTML, CSS, dan Bootstrap sebagai
                        bagian dari pembelajaran pengembangan web.
                    </p>
                </div>

                <div>
                    <h3 class="mb-0">Pengembangan Aplikasi Web</h3>
                    <div class="subheading mb-3">
                        Pembelajaran Mandiri
                    </div>
                    <p>
                        Mempelajari dasar pengembangan aplikasi,
                        pengelolaan database, dan pemrograman web.
                    </p>
                </div>

            </div>
        </section>

        <hr class="m-0">

        <!-- Pendidikan -->
        <section class="resume-section" id="education">
            <div class="resume-section-content">

                <h2 class="mb-5">Pendidikan</h2>

                @foreach ($list_pendidikan as $pendidikan)
                    <div class="mb-4">
                        <h3 class="mb-0">{{ $pendidikan }}</h3>
                        <div class="subheading mb-2">
                            Riwayat Pendidikan
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

        <hr class="m-0">

        <!-- Keahlian -->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">

                <h2 class="mb-5">Keahlian</h2>

                <div class="subheading mb-3">
                    Teknologi dan Kemampuan
                </div>

                <ul class="fa-ul mb-0">
                    @foreach ($keahlian as $skill)
                        <li class="mb-2">
                            <span class="fa-li">
                                <i class="fas fa-check"></i>
                            </span>
                            {{ $skill }}
                        </li>
                    @endforeach
                </ul>

            </div>
        </section>

        <hr class="m-0">

        <!-- Minat -->
        <section class="resume-section" id="interests">
            <div class="resume-section-content">

                <h2 class="mb-5">Minat</h2>

                <p>
                    Saya tertarik pada teknologi informasi,
                    pengembangan website, pemrograman, dan
                    pengembangan aplikasi menggunakan Laravel.
                </p>

                <p class="mb-0">
                    Saya juga ingin terus meningkatkan kemampuan
                    teknis, mempelajari teknologi baru, dan
                    mengembangkan proyek yang bermanfaat.
                </p>

            </div>
        </section>

        <hr class="m-0">

        <!-- Kontak -->
        <section class="resume-section" id="contact">
            <div class="resume-section-content">

                <h2 class="mb-5">Kontak</h2>

                <p>
                    <i class="fas fa-envelope me-2"></i>
                    Email: emailkamu@example.com
                </p>

                <p>
                    <i class="fas fa-phone me-2"></i>
                    Telepon: Isi nomor telepon kamu
                </p>

                <p>
                    <i class="fas fa-map-marker-alt me-2"></i>
                    Alamat: Isi kota tempat tinggal kamu
                </p>

            </div>
        </section>

        <hr class="m-0">

        <!-- Footer -->
        <footer class="p-4 text-center">
            <p class="mb-1">
                &copy; {{ date('Y') }} {{ $username }}
            </p>
            <small>
                Dibuat menggunakan Laravel
            </small>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('cv/scripts.js') }}"></script>
</body>
</html>
