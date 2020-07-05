<template>
    <div>
        <header>
            <section class="header-info container d-none d-md-block">
                <div class="d-flex small">
                    <div class="m-2">
                        <span class="tag-box text-primary"
                            ><i class="fas fa-bookmark fa-3x" style=""></i
                        ></span>
                        <span class="tag text-light">
                            <i class="fas fa-tag"></i>
                        </span>
                        <span class="ml-2">
                            Gratis Ebook 9 Cara Cerdas Menggunakan Domain [x]
                        </span>
                    </div>
                    <div class="p-2 ml-auto">
                        <i class="fas fa-phone-alt"></i>0274-5305505
                    </div>
                    <div class="p-2">
                        <i class="fas fa-comments"></i>Live Chat
                    </div>
                    <div class="p-2">
                        <i class="fas fa-user-circle"></i>Member Area
                    </div>
                </div>
            </section>
            <section
                class="top-nav container-fluid border-top border-bottom mb-5"
            >
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light px-0">
                        <router-link class="navbar-brand" :to="'/'">
                            <img src="/assets/images/logo.jpg" alt="" />
                        </router-link>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="ml-auto navbar-nav text-dark">
                                <li class="nav-item active">
                                    <router-link class="nav-link" :to="'/'"
                                        >Hosting</router-link
                                    >
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" :to="'/'"
                                        >Domain</router-link
                                    >
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" :to="'/'"
                                        >Server</router-link
                                    >
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" :to="'/'"
                                        >Website</router-link
                                    >
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" :to="'/'"
                                        >Afiliasi</router-link
                                    >
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" :to="'/'"
                                        >Promo</router-link
                                    >
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" :to="'/'"
                                        >Pembayaran</router-link
                                    >
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" :to="'/'"
                                        >Review</router-link
                                    >
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" :to="'/'"
                                        >Kontak</router-link
                                    >
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" :to="'/'"
                                        >Blog</router-link
                                    >
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </section>
        </header>
        <section class="hero container-fluid border-bottom pb-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="font-weight-bold mb-3">PHP Hosting</h1>
                        <h2 class="mb-4">
                            Cepat, handal, penuh dengan modul PHP yang Anda
                            butuhkan
                        </h2>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <i class="fas fa-check-circle text-success"></i>
                                Solusi PHP untuk performa query yang lebih cepat
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-check-circle text-success"></i>
                                Konsumsi memori yang lebih rendah
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-check-circle text-success"></i>
                                Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP
                                5.7
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-check-circle text-success"></i>
                                Fitur enkripsi IonCube dan Zend Guard Loaders
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img
                            src="/assets/svg/illustration_banner_php_hosting.svg"
                            alt=""
                            class="img-fluid"
                        />
                    </div>
                </div>
            </div>
        </section>
        <section class="logo-php-hosting container pt-5 mt-5">
            <div
                class="d-flex justify-content-center align-items-center text-center"
            >
                <div class="col-3">
                    <div class="image">
                        <img
                            src="/assets/svg/ic_php_hosting_zendguard.svg"
                            alt=""
                            class="img-fluid"
                        />
                    </div>
                    <h6>PHP Zend Guard Loader</h6>
                </div>
                <div class="col-3">
                    <div class="image">
                        <img
                            src="/assets/svg/ic_php_hosting_composer.svg"
                            alt=""
                            class="img-fluid"
                        />
                    </div>
                    <h6>PHP Composer</h6>
                </div>

                <div class="col-3">
                    <div class="image">
                        <img
                            src="/assets/svg/ic_php_hosting_ioncube.svg"
                            alt=""
                            class="img-fluid"
                        />
                    </div>
                    <h6>PHP ionCube Loader</h6>
                </div>
            </div>
        </section>
        <section class="list-packet container pt-5 mt-5">
            <div class="row text-center">
                <div class="col-12 mb-5">
                    <h2 class="h3 font-weight-bold">
                        Paket Hosting Singapura yang Tepat
                    </h2>
                    <h2 class="h4">
                        Diskon 40% + Domain dan SSL Gratis untuk Anda
                    </h2>
                </div>
                <div
                    class="item-packet col-3"
                    v-for="hostingCategory in hostingCategories"
                    :key="hostingCategory.id"
                >
                    <div class="card">
                        <ul class="list-group list-group-flush rounded-0">
                            <li class="list-group-item">
                                {{ hostingCategory.name_category }}
                            </li>
                            <li class="list-group-item">
                                Rp {{ hostingCategory.price }}<br />
                                Rp {{ hostingCategory.discount }}/bln
                            </li>
                            <li class="list-group-item">
                                938 Pengguna Terdaftar
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-star"></i>
                                0.5X RESOURCE Powerful
                                <router-link
                                    :to="'/'"
                                    class="btn btn-outline-dark rounded-pill font-weight-bold mt-5 mb-3"
                                    >Pilih Sekarang</router-link
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-advantage container pt-5 mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class=" mb-5">Powerful dengan Limit PHP yang Besar</h2>
                </div>
                <div
                    class="container mb-5 d-flex justify-content-center align-items-center text-center"
                >
                    <div class="col-5">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <i
                                            class="fas fa-check-circle text-success"
                                        ></i>
                                    </div>
                                    <div class="col-10">
                                        max execution time 300s
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <i
                                            class="fas fa-check-circle text-success"
                                        ></i>
                                    </div>
                                    <div class="col-10">
                                        max execution time 300s
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <i
                                            class="fas fa-check-circle text-success"
                                        ></i>
                                    </div>
                                    <div class="col-10">
                                        php memory limit 1024 MB
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-5">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <i
                                            class="fas fa-check-circle text-success"
                                        ></i>
                                    </div>
                                    <div class="col-10">
                                        post max size 128 MB
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <i
                                            class="fas fa-check-circle text-success"
                                        ></i>
                                    </div>
                                    <div class="col-10">
                                        upload max filesize 128 MB
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-2">
                                        <i
                                            class="fas fa-check-circle text-success"
                                        ></i>
                                    </div>
                                    <div class="col-10">
                                        max input vars 2500
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="divider"></div>
        <section class="all-in-packet container mt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class=" mb-5">Semua Paket Hosting Sudah Termasuk</h2>
                </div>
                <div class="col-4 text-center mb-5">
                    <img
                        src="/assets/svg/all_in_packet_all_version.svg"
                        alt=""
                    />
                    <h3 class="h5 font-weight-bold">PHP Semua Versi</h3>
                    <h6>
                        Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka
                        Anda!
                    </h6>
                </div>
                <div class="col-4 text-center mb-5">
                    <img src="/assets/svg/all_in_packet_mysql.svg" alt="" />
                    <h3 class="h5 font-weight-bold">MySQL Versi 5.6</h3>
                    <h6>
                        Nikmati MySQL versi terbaru, tercepat dan kaya akan
                        fitur.
                    </h6>
                </div>
                <div class="col-4 text-center mb-5">
                    <img src="/assets/svg/all_in_packet_cpanel.svg" alt="" />
                    <h3 class="h5 font-weight-bold">Panel Hosting cPanel</h3>
                    <h6>
                        Kelola website dengan panel canggih yang familiar di
                        hati Anda
                    </h6>
                </div>
                <div class="col-4 text-center mb-5">
                    <img src="/assets/svg/all_in_packet_uptime.svg" alt="" />
                    <h3 class="h5 font-weight-bold">Garansi Uptime 99.9%</h3>
                    <h6>
                        Data center yang mendukung kelangsungan website Anda
                        24/7.
                    </h6>
                </div>
                <div class="col-4 text-center mb-5">
                    <img src="/assets/svg/all_in_packet_innodb.svg" alt="" />
                    <h3 class="h5 font-weight-bold">
                        Database InnoDB Unlimited
                    </h3>
                    <h6>
                        Jumlah dan ukuran database yang tumbuh sesuai kebutuhan
                        Anda.
                    </h6>
                </div>
                <div class="col-4 text-center mb-5">
                    <img
                        src="/assets/svg/all_in_packet_mysql_remote.svg"
                        alt=""
                    />
                    <h3 class="h5 font-weight-bold">Wildcard Remote MySQL</h3>
                    <h6>
                        Mendukung s/d 25 max_user_connections dan 100
                        max_connections.
                    </h6>
                </div>
            </div>
        </section>
        <div class="divider"></div>
        <section
            class="additional-framework container-fluid mt-5 border-bottom"
        >
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class=" mb-5">Mendukung Penuh Framework Laravel</h2>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="description h6">
                            Tak perlu menggunakan dedicated server ataupun VPS
                            yang mahal. Layanan PHP hosting murah kami mendukung
                            penuh framework favorit Anda.
                        </h2>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <i class="fas fa-check-circle text-success"></i>
                                Install Larevel 1 klik dengan Softaculous.
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-check-circle text-success"></i>
                                Mendukung ekstensi PHP MCrypt, phar, mbstring,
                                json, dan fileinfo.
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-check-circle text-success"></i>
                                Tersedia Composer dan SSH untuk menginstall
                                packages pilihan anda.
                            </li>
                        </ul>
                        <p class="small mt-3 font-weight-light">
                            Nb. Composer dan SSH hanya tersedia pada paket
                            Personal dan Bisnis
                        </p>
                        <router-link
                            :to="'/'"
                            class="btn btn-primary rounded-pill font-weight-bold my-2"
                            >Pilih Hosting Anda</router-link
                        >
                    </div>
                    <div class="col-lg-6 d-flex">
                        <img
                            src="/assets/svg/support-laravel.svg"
                            alt=""
                            class="img-fluid mt-auto"
                        />
                    </div>
                </div>
            </div>
        </section>
        <section class="list-module container pt-5 mt-5">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="">
                        Modul Lengkap untuk Menjalankan Aplikasi PHP Anda
                    </h2>
                </div>
                <div class="col-3">
                    IcePHP<br />apc<br />apcu<br />apm<br />ares<br />bcmath<br />bcompiler<br />big_int<br />bitset<br />bloomy<br />bz2_filter<br />clamav<br />coin_acceptor<br />crack<br />dba
                </div>
                <div class="col-3">
                    http<br />huffman<br />idn<br />igbinary<br />imagick<br />imap<br />inclued<br />inotify<br />interbase<br />intl<br />ioncube_loader<br />ioncube_loader_4<br />jsmin<br />json<br />ldap
                </div>
                <div class="col-3">
                    nd_pdo_mysql<br />oauth<br />oci8<br />adbc<br />opcache<br />pdf<br />pdo<br />pdo_dblib<br />pdo_firebird<br />pdo_mysql<br />pdo_odbc<br />pdo_pgsql<br />pdo_sqlite<br />pdo_pgsql<br />phalcom
                </div>
                <div class="col-3">
                    stats<br />stem<br />stomp<br />suhosin<br />sybase_ct<br />sysvmsg<br />sysvshm<br />tidy<br />timezonedb<br />trader<br />translit<br />uploadprogress<br />uri_template<br />uuid
                </div>
                <div class="col-12 text-center mt-4">
                    <router-link
                        :to="'/'"
                        class="btn btn-outline-dark rounded-pill font-weight-bold mt-2"
                        >Selengkapnya</router-link
                    >
                </div>
            </div>
        </section>
        <section class="choose-us container pt-5 mt-5">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="">
                        Linux Hosting yang Stabil dengan Teknologi LVE
                    </h2>
                    <p>
                        SuperMicro Intel Xeon 24-Cores server dengan RAM 128 GB
                        dan teknologi LVE CloudLinux untuk stabilitas server
                        Anda. Dilengkapi dengan SSD untuk kecepatan MySQL dan
                        caching, Apache load balancer berbasis LiteSpeed
                        Technologies, CageFS security, Raid-10 Protection dan
                        auto backup untuk keamanan website PHP Anda
                    </p>
                    <router-link
                        :to="'/'"
                        class="btn btn-primary rounded-pill font-weight-bold my-2"
                        >Pilih Hosting Anda</router-link
                    >
                </div>
                <div class="col-lg-6 d-flex">
                    <img
                        src="/assets/images/image-support.png"
                        alt=""
                        class="img-fluid mt-auto"
                    />
                </div>
            </div>
        </section>
        <footer class="text-light">
            <div class="social container-fluid text-dark">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h6 class="font-weight-bold">
                                Bagikan jika Anda menyukai halaman ini.
                            </h6>
                        </div>
                        <div class="px-5">
                            <div class="pl-5 ml-5 row">
                                <i
                                    class="fab fa-facebook-square fa-2x"
                                    style="color:#23599B;"
                                >
                                </i>
                                <span
                                    class="tooltip-text h6 mr-2 text-black-50 small"
                                    >80k</span
                                >
                                <i
                                    class="fab fa-twitter-square twitter fa-2x"
                                    style="color:#00AEF1;"
                                ></i>
                                <span
                                    class="tooltip-text h6 mr-2 text-black-50 small"
                                    >450</span
                                >
                                <i
                                    class="fab fa-google-plus-square fa-2x"
                                    style="color:#FC4A35;"
                                ></i>
                                <span
                                    class="tooltip-text h6 mr-2 text-black-50 small"
                                    >1900</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="support container-fluid bg-primary">
                <div class="container">
                    <div
                        class="d-flex justify-content-between align-items-stretch"
                    >
                        <div class="">
                            <h2>
                                Perlu <b>BANTUAN?</b> Hubungi Kami :
                                <b>0274-5305505</b>
                            </h2>
                        </div>
                        <div class="border-right border-light mx-3"></div>
                        <div
                            class="d-flex justify-content-end align-items-center"
                        >
                            <div>
                                <router-link
                                    :to="'/'"
                                    class="btn btn-outline-light btn-lg text-light rounded-pill mr-4"
                                    ><i class="fas fa-comments"></i>Live
                                    Chat</router-link
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-3 mt-5 pt-3">
                            <h6 class="font-weight-bold mb-4">HUBUNGI KAMI</h6>
                            <p>
                                Telp: 0274-2885822<br />Senin - Minggu<br />24
                                Jam Non Stop
                            </p>
                            <p>
                                Jl. Palagan Tentara Pelajar<br />
                                No 81 Jongkang, Sariharjo, <br />
                                Ngaglik, Sleman <br />
                                Daerah Istimewa Yogyakarta 55581
                            </p>
                        </div>
                        <div class="col-3 mt-5 pt-3">
                            <h6 class="font-weight-bold mb-4">LAYANAN</h6>
                            <ul>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/domain-murah"
                                        >Domain</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/hosting-indonesia"
                                        >Shared Hosting</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/cloud-hosting"
                                        >Cloud Hosting</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/cloud-vps-hosting"
                                        >Cloud VPS Hosting</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/promosi-transfer"
                                        >Transfer Hosting</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/membuat-blog-weebly"
                                        >Web Builder</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/ssl-murah"
                                        >Keamanan SSL/HTTPS</a
                                    >
                                </li>
                                <li>
                                    <a href="https://www.niagaweb.co.id/"
                                        >Jasa Pembuatan Website</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/afiliasi"
                                        >Program Afiliasi</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/whois"
                                        >Whois</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://status.niagahoster.co.id/"
                                        target="__blank"
                                        >Niagahoster Status</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="col-3 mt-5 pt-3">
                            <h6 class="font-weight-bold mb-4">
                                SERVICE HOSTING
                            </h6>
                            <ul>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/hosting-murah"
                                        >Hosting Murah</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/hosting-indonesia"
                                        >Hosting Indonesia</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/hosting-singapore"
                                        >Hosting Singapore SG</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/wordpress-hosting"
                                        >Hosting Wordpress</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/email-hosting"
                                        >Email Hosting</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/reseller-hosting"
                                        >Reseller Hosting</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/web-hosting-unlimited"
                                        >Web Hosting Unlimited</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="col-3 mt-5 pt-3">
                            <h6 class="font-weight-bold mb-4">TUTORIAL</h6>
                            <ul>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/ebook"
                                        >Ebook Gratis</a
                                    >
                                </li>
                                <li>
                                    <a href="https://www.niagahoster.co.id/kb"
                                        >Knowledgebase</a
                                    >
                                </li>
                                <li>
                                    <a href="https://www.niagahoster.co.id/blog"
                                        >Blog</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/pembayaran"
                                        >Cara Pembayaran</a
                                    >
                                </li>
                                <li>
                                    <a href="https://course.niagahoster.co.id"
                                        >Niaga Course</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="col-3 mt-5 pt-3">
                            <h6 class="font-weight-bold mb-4">TENTANG KAMI</h6>
                            <ul>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/about-us"
                                        >Tentang</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/promosi"
                                        >Penawaran &amp; Promo Spesial</a
                                    >
                                </li>
                                <li>
                                    <a href="https://www.niagahoster.co.id/poin"
                                        >Niagahoster Poin</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/karir"
                                        >Karir</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/kontak"
                                        >Kontak Kami</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="col-3 mt-5 pt-3">
                            <h6 class="font-weight-bold mb-4">
                                KENAPA PILIH NIAGAHOSTER?
                            </h6>
                            <ul>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/hosting-terbaik"
                                        >Hosting Terbaik</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/datacenter-hosting"
                                        >Datacenter Hosting Terbaik</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/hosting-indonesia#hosting-price"
                                        >Domain Gratis</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/domain-gratis"
                                        >Bagi-bagi Domain Gratis</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/hosting-gratis"
                                        >Bagi-bagi Hosting Gratis</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://www.niagahoster.co.id/review"
                                        >Review Pelanggan</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="col-3 mt-5 pt-3">
                            <h6 class="font-weight-bold mb-4">NEWSLETTER</h6>
                            <ul>
                                <li>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input
                                            type="text"
                                            class="form-control form-control-sm"
                                            id="newsletter"
                                            placeholder="Email"
                                        />
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                Berlangganan
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="font-weight-light">
                                    Dapatkan promo dan konten menarik dari
                                    penyedia hosting terbaik Anda
                                </li>
                            </ul>
                        </div>
                        <div class="col-3 mt-5 pt-3">
                            <div class="d-flex mt-4 pt-3">
                                <div
                                    class="item-social mr-3 border rounded-circle"
                                >
                                    <i class="fab fa-facebook-f fa-2x"></i>
                                </div>
                                <div
                                    class="item-social mr-3 border rounded-circle"
                                >
                                    <i class="fab fa-twitter fa-2x"></i>
                                </div>
                                <div
                                    class="item-social mr-3 border rounded-circle"
                                >
                                    <i class="fab fa-google-plus-g fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="payment col-12 mt-5">
                            <h6 class="font-weight-bold mb-4">PEMBAYARAN</h6>
                            <div class="d-flex flex-nowrap overflow-auto">
                                <div class="border rounded p-1 mr-2">
                                    <img
                                        src="/assets/svg/payment/bca.svg"
                                        alt=""
                                    />
                                </div>
                                <div class="border rounded p-1 mr-2">
                                    <img
                                        src="/assets/svg/payment/mandiri.svg"
                                        alt=""
                                    />
                                </div>
                                <div class="border rounded p-1 mr-2">
                                    <img
                                        src="/assets/svg/payment/bni.svg"
                                        alt=""
                                    />
                                </div>
                                <div class="border rounded p-1 mr-2">
                                    <img
                                        src="/assets/svg/payment/visa.svg"
                                        alt=""
                                    />
                                </div>
                                <div class="border rounded p-1 mr-2">
                                    <img
                                        src="/assets/svg/payment/master.svg"
                                        alt=""
                                    />
                                </div>
                                <div class="border rounded p-1 mr-2">
                                    <img
                                        src="/assets/svg/payment/atm-bersama.svg"
                                        alt=""
                                    />
                                </div>
                                <div class="border rounded p-1 mr-2">
                                    <img
                                        src="/assets/svg/payment/alto.svg"
                                        alt=""
                                    />
                                </div>
                            </div>
                            <p class="font-weight-light mt-3">
                                Aktivasi instan dengan e-Payment. Hosting dan
                                domain langsung aktif!
                            </p>
                        </div>
                        <div class="col-12 pt-4 pb-5 border-top border-dark">
                            <div class="d-flex flex-wrap font-weight-light">
                                <div class="mr-auto">
                                    <span
                                        >Copyright ©2016 Niagahoster | Hosting
                                        powered by PHP7, CloudLinux, CloudFlare,
                                        BitNinja and DC Biznet Technovillage
                                        Jakarta</span
                                    >
                                    <br />
                                    <span
                                        >Cloud VPS Murah powered by Webuzo
                                        Softaculous, Intel SSD and cloud
                                        computing technology</span
                                    >
                                </div>
                                <div class="">
                                    <span
                                        >Syarat dan Ketentuan | Kebijakan
                                        Privasi</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    data() {
        return {
            hostingCategories: []
        };
    },
    created() {
        this.loadData();
    },
    methods: {
        loadData() {
            axios.get("/api/hosting_category").then(response => {
                this.hostingCategories = response.data;
            });
        }
    }
};
</script>
