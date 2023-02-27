<?php
// data
$nama = "Aqil Jawadal Furqon";
$prodi = "S1 Rekayasa Perangkat Lunak";
$univ = "Institut Teknologi Telkom Purwokerto";

$passion1 = "Front End Developer";
$passion2 = "UI/UX Designer";

// link media sosial
$instagram = "https://instagram.com/aqiljf_";
$github = "https://github.com/awaqo";
$dribbble = "https://dribbble.com/awaqo";
$linkedin = "https://linkedin.com/in/aqiljawadal";

$whatsapp = "https://wa.me/628176741866";
$email = "mailto:aqiljawadalfurqon@gmail.com";

// link eksplorasi coding
$kacamatakuv1 = "https://awaqo.github.io/kacamataku.github.io/";
$kacamatakuv2 = "https://awaqo.github.io/kacamatakuv2.github.io/";
$luxspace = "https://github.com/awaqo/luxspace-rfd";

// link eksplorasi desain
$i_do = "https://www.figma.com/proto/xyoIEgAN9HMNMaO54z6BiJ/Desain?page-id=0%3A1&node-id=54%3A38&scaling=scale-down&starting-point-node-id=54%3A38&show-proto-sidebar=1";
$simba = "https://www.figma.com/proto/Te4Y6UnnurDxrOg2w1sbg2/Desain-Aplikasi?page-id=0%3A1&node-id=9%3A7&scaling=scale-down&starting-point-node-id=264%3A801&show-proto-sidebar=1";

?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website - <?= $nama ?></title>
    <link href="dist/output.css" rel="stylesheet">
    <link rel="shortcut icon" href="dist/img/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Header start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home">
                        <img src="dist/img/logo.png" alt="Logo" class="w-52 py-6">
                    </a>
                </div>

                <div class="flex items-center px-4">
                    <button type="button" id="hamburger" name="hamburger" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg w-full right-0 top-full lg:block lg:static lg:bg-transparent lg:shadow-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Tentang Saya</a>
                            </li>
                            <li class="group">
                                <a href="#portfolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Portfolio</a>
                            </li>
                            <li class="group">
                                <a href="#explore" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Eksplorasi</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Kontak</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header end -->
    
    <!-- Hero section start -->
    <section id="home" class="pt-36 h-screen">
        <div>
            <img src="dist/img/bubble.png" alt="bubble" class="absolute left-0 -z-10">
        </div>
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 self-center lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary mb-2 md:text-xl">Hallo 👋🏻 saya <span class="block font-bold text-sky-800 text-4xl mt-1 lg:text-5xl"><?= $nama ?></span></h1>
                    <h2 class="font-normal text-secondary text-lg mb-5 lg:text-2xl"><span class="font-medium text-dark"><?= $passion1 ?></span> & <?= $passion2 ?></h2>
                    <p class="font-normal text-secondary mb-10 leading-relaxed">Coding sangat menyenangkan <i class="text-red-500 font-bold">ketika tidak ada error atau bug </i>💪😁👍</p>

                    <a href="#contact" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-xl hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out ">Hubungi Saya</a>
                </div>

                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="mt-10">
                        <img src="dist/img/foto-diri.png" alt="Foto Aqil" class="max-w-full mx-auto" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!-- About section start -->
    <section id="about" class="pt-36 pb-32 bg-gradient-to-r from-sky-700 to-blue-900">
        <div class="relative">
            <div>
                <img src="dist/img/Vector 105.png" width="77px" class="absolute right-0 -top-10 hidden lg:block" alt="">
            </div>
            <div>
                <img src="dist/img/Ellipse 115.png" width="70px" class="absolute left-0 -top-20 hidden lg:block" alt="">
            </div>
        </div>
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-white text-lg mb-1">Tentang Saya</h4>
                    <div class="h-1 w-16 bg-white rounded-full mb-5"></div>
                    <p class="text-sky-100 max-w-xl text-justify">Halo, saya <?= $nama ?>, saya mahasiswa <?= $prodi ?> di <?= $univ ?>. Saya memiliki passion pada dunia pemrograman, untuk sekarang saya sedang terus mendalami Front End Programming. Saya juga memiliki sedikit pengetahuan pada bidang UI/UX Design.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-bold text-white text-2xl mb-4 lg:text-3xl lg:pt-12 w-full lg:max-w-md mx-auto">Let's Connect</h3>
                    <div class="flex items-center w-full lg:max-w-md mx-auto">
                        <!-- Instagram -->
                        <a href="<?= $instagram ?>" target="_blank" class="w-9 h-9 text-slate-300 mr-3 rounded-full flex items-center justify-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>

                        <!-- Github -->
                        <a href="<?= $github ?>" target="_blank" class="w-9 h-9 text-slate-300 mr-3 rounded-full flex items-center justify-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>

                        <!-- Dribbble -->
                        <a href="<?= $dribbble ?>" target="_blank" class="w-9 h-9 text-slate-300 mr-3 rounded-full flex items-center justify-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Dribbble</title><path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"/></svg>
                        </a>

                        <!-- LinkedIn -->
                        <a href="<?= $linkedin ?>" target="_blank" class="w-9 h-9 text-slate-300 mr-3 rounded-full flex items-center justify-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->

    <!-- Portfolio section start -->
    <section id="portfolio" class="pt-36 pb-16">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-1">Portfolio</h4>
                    <div class="h-1 w-16 bg-primary rounded-full mb-5 mx-auto"></div>
                    <h2 class="font-bold text-3xl text-dark mb-4">Project Terbaru</h2>
                    <p class="text-secondary">Berikut merupakan beberapa hasil project yang telah saya kerjakan</p>
                </div>
            </div>

            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/img/portfolio/cikembulan.png" alt="Website Desa Cikembulan" />
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 truncate">Website Desa Cikembulan</h3>
                    <p class="text-base text-secondary">Sebuah website desa yang di dalamnya warga sebagai user dapat melakukan pelaporan pencurian atau keresahan lainnya di dalam website</p>
                </div> 
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/img/portfolio/banteran.png" alt="Website Desa Banteran" />
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 truncate">Website Desa Banteran</h3>
                    <p class="text-base text-secondary">Sebuah website desa yang dapat memudahkan warga desa dalam pengecekan penerima dana bantuan</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="dist/img/portfolio/smpn1sidareja.png" alt="Website Sekolah" />
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 truncate">Website SMP Negeri 1 Sidareja</h3>
                    <p class="text-base text-secondary">Website CMS sekolah yang di dalamnya terdapat fitur blog atau artikel dan galeri yang berisikan update terbaru informasi di SMP Negeri 1 Sidareja</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio section end -->

    <!-- Eksplorasi section start -->
    <section id="explore" class="pt-36 pb-32 bg-slate-100 ">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-1">Eksplorasi</h4>
                    <div class="h-1 w-16 bg-primary rounded-full mb-8 mx-auto"></div>
                    <h2 class="font-bold text-3xl text-dark mb-4">#Coding Exploration</h2>
                </div>
            </div>

            <div class="flex flex-wrap items-stretch gap-y-8">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden h-full">
                        <a href="<?= $kacamatakuv1 ?>" target="_blank" class="block">
                            <img src="dist/img/eksplorasi/coding/kacamataku.png" alt="Kacamataku" class="w-full" />
                        </a>
                        <div class="py-8 px-6">
                            <h3>
                                <a href="<?= $kacamatakuv1 ?>" target="_blank" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Website kacamataku.com</a>
                            </h3>
                            <p class="text-secondary mb-8 line-clamp-3">Eksplorasi saya dalam web programming. Website ini saya buat menggunakan HTML, Bootstrap, dan JavaScript</p>
                            <a href="<?= $kacamatakuv1 ?>" target="_blank" class="font-medium text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Lihat Website</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden h-full">
                        <a href="<?= $kacamatakuv2 ?>" target="_blank" class="block">
                            <img src="dist/img/eksplorasi/coding/kacamatakuv2.png" alt="Kacamataku" class="w-full" />
                        </a>
                        <div class="py-8 px-6">
                            <h3>
                                <a href="<?= $kacamatakuv2 ?>" target="_blank" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Website kacamataku.com V2</a>
                            </h3>
                            <p class="text-secondary mb-8 line-clamp-3">Versi ke-2 dari website kacamataku.com yang saya buat menggunakan HTML, Tailwind CSS, dan JavaScript</p>
                            <a href="<?= $kacamatakuv2 ?>" target="_blank" class="font-medium text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Lihat Website</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden h-full">
                        <a href="<?= $luxspace ?>" target="_blank" class="block">
                            <img src="dist/img/eksplorasi/coding/luxspace.png" alt="Kacamataku" class="w-full" />
                        </a>
                        <div class="py-8 px-6">
                            <h3>
                                <a href="<?= $luxspace ?>" target="_blank" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Website E-Commerce Furniture</a>
                            </h3>
                            <p class="text-secondary mb-8 line-clamp-3">Eksplorasi website yang saya buat menggunakan React JS dan untuk styling saya menggunakan Tailwind CSS sebagai framework CSS</p>
                            <a href="<?= $luxspace ?>" target="_blank" class="font-medium text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Lihat Repository</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-2xl border-t border-primary mt-16 mx-auto"></div>
            <div class="w-full px-4 mt-16">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2 class="font-bold text-3xl text-dark mb-4">#Design Exploration</h2>
                </div>
            </div>

            <div class="flex flex-wrap items-stretch gap-y-8">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden h-full">
                        <a href="<?= $i_do ?>" target="_blank" class="block">
                            <img src="dist/img/eksplorasi/design/aplikasi-adiksi.png" alt="Kacamataku" class="w-full" />
                        </a>
                        <div class="py-8 px-6">
                            <h3>
                                <a href="<?= $i_do ?>" target="_blank" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Aplikasi berhenti dari adiksi</a>
                            </h3>
                            <p class="text-secondary mb-8 line-clamp-3">UI/UX Design aplikasi yang digunakan sebagai pendukung user dalam proses berhenti dari adiksi (rokok, alkohol, narkoba, medsos, dll)</p>
                            <a href="<?= $i_do ?>" target="_blank" class="font-medium text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Lihat Prototype</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden h-full">
                        <a href="<?= $simba ?>" target="_blank" class="block">
                            <img src="dist/img/eksplorasi/design/aplikasi-posyandu.png" alt="Kacamataku" class="w-full" />
                        </a>
                        <div class="py-8 px-6">
                            <h3>
                                <a href="<?= $simba ?>" target="_blank" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Aplikasi Posyandu</a>
                            </h3>
                            <p class="text-secondary mb-8 line-clamp-3">UI/UX Design dari aplikasi Posyandu yang di dalamnya terdapat fitur jadwal pemberian posyandu, maps untuk mencari lokasi posyandu terdekat, dan fitur chat</p>
                            <a href="<?= $simba ?>" target="_blank" class="font-medium text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Lihat Prototype</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Eksplorasi section end -->

    <!-- Kontak section start -->
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-10">
                    <h4 class="font-semibold text-lg text-primary mb-1">Kontak</h4>
                    <div class="h-1 w-16 bg-primary rounded-full mb-5 mx-auto"></div>
                    <h2 class="font-bold text-3xl text-dark mb-4">Hubungi Saya</h2>
                </div>
            </div>

            <div class="flex flex-wrap justify-center items-center">
                <!-- whatsapp -->
                <div class="w-full px-4 lg:w-1/4">
                    <div class="w-48 py-4 text-slate-400 rounded-xl mx-auto hover:text-green-500 transition duration-500">
                        <a href="<?= $whatsapp ?>" target="_blank">
                            <div class="flex items-center justify-center">
                                <svg role="img" width="40" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                <p class="inline-block ml-2 text-2xl font-semibold">WhatsApp</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- email -->
                <div class="w-full px-4 lg:w-1/4">
                    <div class="w-48 py-4 text-slate-400 rounded-xl mx-auto hover:text-red-600 transition duration-500">
                        <a href="<?= $email ?>" target="_blank">
                            <div class="flex items-center justify-center">
                            <svg role="img" width="40" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Gmail</title><path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/></svg>
                                <p class="inline-block ml-2 text-2xl font-semibold">Email</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-10">
                    <p class="text-secondary">atau</p>
                </div>
            </div> -->

            <!-- email -->
            <!-- <form>
                <div class="w-full mx-auto lg:w-2/3">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-primary font-bold">Nama</label>
                        <input type="text" id="name" name="name" class="w-full mt-1 bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" required>
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-primary font-bold">Email</label>
                        <input type="email" id="email" name="email" class="w-full mt-1 bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" required>
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="subject" class="text-primary font-bold">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full mt-1 bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" required>
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="message" class="text-primary font-bold">Pesan</label>
                        <textarea id="message" name="message" class="w-full h-32 mt-1 bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary"></textarea>
                    </div>
                    <div class="w-full px-4">
                        <a href="mailto:aqiljawadalfurqon@gmail.com" target="_blank" class="block text-center font-semibold text-white bg-primary py-3 rounded-full w-full transition duration-300 hover:opacity-80 hover:shadow-lg">Kirim</a>
                    </div>
                </div>
            </form> -->
        </div>
    </section>
    <!-- Kontak section end -->

    <!-- Footer start -->
    <footer class="bg-slate-900 pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 md:w-1/3">
                    <div>
                        <img src="dist/img/logo.png" alt="Logo" class="w-52 mb-5">
                    </div>
                    <h3 class="font-bold text-xl mb-3">Hubungi saya</h3>
                    <p class="mb-2">aqiljawadalfurqon@gmail.com</p>
                    <p class="mb-2">Jl Sutomo, Dk. Lenggak RT31/RW07</p>
                    <p>Pemalang, Jawa Tengah</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Project</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#portfolio" class="inline-block text-base mb-3 hover:text-primary">Portfolio Project</a>
                        </li>
                        <li>
                            <a href="#explore" class="inline-block text-base mb-3 hover:text-primary">Eksplorasi Project</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Tautan Situs</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#home" class="inline-block text-base mb-3 hover:text-primary">Beranda</a>
                        </li>
                        <li>
                            <a href="#about" class="inline-block text-base mb-3 hover:text-primary">Tentang Saya</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="inline-block text-base mb-3 hover:text-primary">Portfolio</a>
                        </li>
                        <li>
                            <a href="#explore" class="inline-block text-base mb-3 hover:text-primary">Eksplorasi</a>
                        </li>
                        <li>
                            <a href="#contact" class="inline-block text-base mb-3 hover:text-primary">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- Instagram -->
                    <a href="<?= $instagram ?>" target="_blank" class="w-9 h-9 text-slate-300 mr-3 rounded-full flex items-center justify-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>

                    <!-- Github -->
                    <a href="<?= $github ?>" target="_blank" class="w-9 h-9 text-slate-300 mr-3 rounded-full flex items-center justify-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>

                    <!-- Dribbble -->
                    <a href="<?= $dribbble ?>" target="_blank" class="w-9 h-9 text-slate-300 mr-3 rounded-full flex items-center justify-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Dribbble</title><path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"/></svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="<?= $linkedin ?>" target="_blank" class="w-9 h-9 text-slate-300 mr-3 rounded-full flex items-center justify-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
                <p class="font-medium text-xs text-slate-500 text-center mb-2">Dibuat dengan ❤️ oleh <a href="<?= $instagram ?>" target="_blank" class="text-white hover:text-primary"><?= $nama ?></a></p>
                <p class="text-xs text-slate-500 text-center">Studi Independen Bersertifikat - <a href="https://kampusmerdeka.kemdikbud.go.id/" target="_blank" class="hover:text-white">Kampus Merdeka</a> || <a href="https://gits.id/" target="_blank" class="hover:text-white">Gits Indonesia</a></p>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Back to Top -->
    <a id="back-to-top" href="#home" class="fixed z-[9999] bottom-6 right-6 hidden items-center justify-center w-14 h-14 bg-primary rounded-full p-4 hover:animate-pulse">
        <span class="block w-5 h-5 border-t-4 border-l-4 rotate-45 mt-2"></span>
    </a>

    <script src="dist/js/script.js"></script>
</body>
</html>