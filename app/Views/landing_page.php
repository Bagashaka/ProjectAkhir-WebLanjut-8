<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assetspage/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?=base_url('assetspage/css/styles.css')?>" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">RSUD Tadika Mesra</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Dokter</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang di Website!</div>
                <div class="masthead-heading text-uppercase">RSUD Tadika Mesra</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Lebih Banyak Lagi</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <br>
                    <br>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-clock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Pelayangan 24 jam</h4>
                        <p class="text-muted">Pelayanan 7 hari dalam seminggu dengan dokter umum dan perawat yang profesional bahkan terdapat beberapa dokter spesialis yang dapat membantu dalam keperawatan.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-flask fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Laboratorium</h4>
                        <p class="text-muted">Dilengkapi dengan peralatan laboratorium dan didukung oleh staf yang terdiri dari para dokter dan analis yang profesional dan sangat berpengalaman.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-bed fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Tenaga Medis</h4>
                        <p class="text-muted">Kami didukung oleh tenaga kerja medis yang terlatih dan memiliki sertifikat penanggulangan pasien gawat darurat (PPGD).</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-ambulance fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Unit UGD</h4>
                        <p class="text-muted">Instalasi gawat darurat RSUD Tadika Mesra melayani kegawatdaruratan medik baik kasus trauma maupun non trauma, termasuk resusitasi secara optimal dan profesional.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Dokter</h2>
                    <br>
                    <br>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url("assetspage/assets/img/portfolio/a.jpg")?>"/>
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Jessica Lee</div>
                                <div class="portfolio-caption-subheading text-muted">spesialis Saraf</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url("assetspage/assets/img/portfolio/b.jpg")?>" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Daniel Mitchell</div>
                                <div class="portfolio-caption-subheading text-muted">spesialis Mata</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url("assetspage/assets/img/portfolio/c.jpg")?>" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Olivia Davis</div>
                                <div class="portfolio-caption-subheading text-muted">Spesialis Gigi</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url("assetspage/assets/img/portfolio/d.jpg")?>" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Laura Martinez</div>
                                <div class="portfolio-caption-subheading text-muted">Spesialis Anak</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url("assetspage/assets/img/portfolio/e.jpg")?>" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. Robert Clark</div>
                                <div class="portfolio-caption-subheading text-muted">Spesialis Penyakit Dalam</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?= base_url("assetspage/assets/img/portfolio/f.jpg")?>" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Dr. David Johnson</div>
                                <div class="portfolio-caption-subheading text-muted">Spesialis Bedah</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">about</h2>
                    <br>
                    <br>
                </div>
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <p class="text-white-75 mb-4">RSUD Tadika Mesra adalah bagian penting dari sistem kesehatan dan menyediakan perawatan medis kepada orang yang sakit, terluka, atau memerlukan perawatan medis khusus. Rumah sakit ini memiliki berbagai layanan dan staf medis untuk memenuhi berbagai kebutuhan medis, seperti perawatan darurat, operasi, perawatan inap, perawatan rawat jalan, uji diagnostik, rehabilitasi, dan lainnya.

                                Rumah sakit ini dikelola oleh dokter, perawat, ahli bedah, spesialis, dan staf pendukung. Mereka biasanya dikelompokkan ke dalam berbagai departemen atau unit, masing-masing fokus pada bidang kesehatan tertentu, seperti pediatri, kardiologi, onkologi, atau ortopedi. Rumah sakit ini memiliki peralatan dan fasilitas khusus untuk memberikan perawatan komprehensif, seperti ruang operasi, laboratorium radiologi, dan unit perawatan intensif.</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6"><img class="img-fluid mb-3 mb-lg-0" src="<?= base_url("assetspage/assets/img/about/about.jpg")?>" /></div>
                </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Team</h2>
                    <br>
                    <br>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url("assetspage/assets/img/team/a.jpg")?>" />
                            <h4>Rivanza Syifa Pujamara</h4>
                            <p class="text-muted">2117051072</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url("assetspage/assets/img/team/b.jpg")?>" />
                            <h4>Bagas Muhammad Shaka</h4>
                            <p class="text-muted">2117051047</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="<?= base_url("assetspage/assets/img/team/c.jpg")?>" />
                            <h4>Amalia Nurul Rahmawati</h4>
                            <p class="text-muted">2117051008</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact</h2>
                    <br>
                    <br>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Alamat</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">Kota Damai, 89654</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-envelope text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Email</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50"><a href="#!">rsudtadikamesra@gmail.com</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">No Telepon</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50">+62 12 7633 8967</div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Dr. Jessica Lee</h2>
                                    <br>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url("assetspage/assets/img/portfolio/a.jpg")?>" />
                                    <p>Dr. Jessica Lee adalah dokter spesialis saraf sebagai seorang profesional medis yang telah menyelesaikan pendidikan medis dasar, lulus dari sekolah kedokteran dan melanjutkan ke pelatihan lanjutan dalam neurologi atau ilmu saraf. Dan menjalani pendidikan residensi selama beberapa tahun di bawah pengawasan dokter spesialis saraf yang berpengalaman, di mana mempelajari berbagai gangguan saraf dan mengembangkan kemampuan untuk mendiagnosis dan mengobati kasus-kasus yang berkaitan dengan saraf.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Dr. Daniel Mitchell</h2>
                                    <br>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url("assetspage/assets/img/portfolio/b.jpg")?>" />
                                    <p>Dr. Daniel Mitchell seorang dokter spesialis mata yang telah menyelesaikan pendidikan medis dasar di sekolah kedokteran dan kemudian menjalani pelatihan lanjutan dalam oftalmologi, bidang ilmu yang berfokus pada mata dan masalah yang berkaitan dengan penglihatan. Dan mengikuti program residensi oftalmologi selama beberapa tahun, bahkan  memperoleh pengetahuan tentang anatomi mata, diagnosis dan pengobatan berbagai kondisi mata, serta teknik pengobatan penyakit dan penyakit terkait mata.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Dr. Olivia Davisl</h2>
                                    <br>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url("assetspage/assets/img/portfolio/c.jpg")?>" />
                                    <p>Dr. Olivia Davis adalah dokter spesialis gigi, sesuai dengan bidang keahliannya, seperti ortodonti, endodonti, atau periodonti, tugas seorang spesialis gigi meliputi diagnosis, perawatan, dan pencegahan berbagai masalah gigi dan mulut. Melakukan pemeriksaan, merencanakan perawatan yang tepat, dan menjalankan prosedur medis atau bedah yang mungkin diperlukan dalam bidang spesialisasi gigi adalah tanggung jawab mereka. Selain itu, mereka menasihati pasien tentang cara terbaik untuk merawat gigi dan gusi, mengajarkan tentang cara menghindari masalah, dan memastikan pasien merasa nyaman saat menerima perawatan.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Dr. Laura Martinez</h2>
                                    <br>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url("assetspage/assets/img/portfolio/d.jpg")?>" />
                                    <p>Dr. Laura Martinez seorang dokter spesialis anak yang telah menyelesaikan pendidikan kedokteran dasar dan kemudian melanjutkan ke pelatihan kedokteran anak yang lebih lanjut, yang bertanggung jawab terutama untuk merawat dan memberikan perawatan medis khusus kepada anak-anak, mulai dari bayi hingga remaja. Bahkan sangat memahami perkembangan fisik, mental, dan emosional anak-anak dan bertanggung jawab untuk mendiagnosis, merawat, dan mencegah berbagai kondisi medis yang dapat memengaruhi anak-anak. Dokter spesialis anak bertanggung jawab atas pemeriksaan rutin, diagnosa penyakit, perawatan penyakit, imunisasi, pertumbuhan dan perkembangan anak, serta memberikan saran kepada orangtua atau wali tentang perawatan dan masalah kesehatan khusus anak-anak. Selain itu, sering bekerja sama dengan dokter umum, spesialis lain, dan tenaga kesehatan anak lainnya untuk memberikan perawatan yang menyeluruh kepada pasien.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Dr. Laura Martinez</h2>
                                    <br>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url("assetspage/assets/img/portfolio/e.jpg")?>" />
                                    <p>Dr. Robert Clark adalah spesialis penyakit dalam, yang berkonsentrasi pada diagnosis, pengobatan, dan manajemen penyakit dalam, yaitu penyakit sistemik dan organ dalam tubuh manusia. Salah satu tugas utamanya yaitu melakukan pemeriksaan medis menyeluruh untuk mendiagnosis diabetes, penyakit jantung, penyakit paru-paru, gangguan imun, dan penyakit lainnya. Dokter spesialis penyakit dalam juga bertanggung jawab untuk merencanakan dan mengelola perawatan pasien selama periode waktu yang lama. Dan juga bertanggung jawab untuk mengawasi kondisi kronis, memberikan pengobatan, dan memberi saran kepada pasien tentang perubahan gaya hidup dan cara mencegah penyakit. Dokter penyakit dalam biasanya bertindak sebagai dokter pertama yang merujuk pasien ke dokter lain jika diperlukan untuk perawatan tambahan. Selain itu, internis bertanggung jawab untuk merawat pasien dengan berbagai kondisi medis yang berbeda dan seringkali membutuhkan koordinasi perawatan medis.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Dr. David Johnson</h2>
                                    <br>
                                    <br>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url("assetspage/assets/img/portfolio/f.jpg")?>" />
                                    <p>Dr. David Johnson seorang dokter spesialis bedah yang memiliki pengetahuan dan keterampilan khusus untuk melakukan prosedur bedah untuk mengobati berbagai penyakit dan cedera. Salah satu tugas utamanya adalah melakukan prosedur bedah yang diperlukan untuk mengatasi masalah kesehatan pasien, seperti pengangkatan tumor, pemulihan luka, perbaikan organ dalam tubuh, transplantasi organ, dan prosedur bedah lainnya. Selain itu, bertanggung jawab untuk mendiagnosis penyakit melalui pemeriksaan dan penilaian fisik, merencanakan prosedur bedah, dan memberikan perawatan pascaoperasi yang optimal untuk memastikan pemulihan pasien. Dokter bedah juga sering bekerja sama dengan tim medis lainnya, seperti anestesiolog, perawat bedah, dan ahli terkait lainnya, untuk memberikan perawatan yang aman dan menyeluruh kepada pasien.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?=base_url('assetspage/js/scripts.js')?>"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
