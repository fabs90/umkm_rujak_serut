<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('landingpage-rujak') }}/img/fotoproduk4 bagus.JPG" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown text-white"
                                    style="text-shadow: 5px 5px #FF0000">
                                    Fresh Rujak Klasik</h1>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('landingpage-rujak') }}/img/fotoubi3.JPG" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown text-white"
                                    style="text-shadow: 5px 5px rgb(129, 0, 129)">Bubur Ubi Ungu</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
<div class="container-fluid bg-light bg-icon py-6 mb-5" st>
    <div class="container" id="kastemer">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <h1 class="display-5 mb-3">Promo Kami!!!</h1>

        </div>

        <div class="container">
            <div class="row d-flex">
                @foreach ($promos as $promo)
                    <div class="col-md-6">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0 align-items-center">
                            <img class="img-fluid w-60" src="{{ asset('landingpage-rujak') }}/img/promo.jpg">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-center">{{ $promo->Menu->nama }}</h5>
                        <p class="text-justify">{{ $promo->deskripsi }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>




    </div>
</div>

{{-- About Start --}}
<div class="container-xxl py-5" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{ asset('landingpage-rujak') }}/img/fotobersama.jpeg">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="text-align:justify;">
                <h1 class="display-5 mb-4">Tentang Kami</h1>
                <p class="mb-4">Nama saya Ayu Putu Setuti Asih, orang-orang memanggil saya Ibu Ayu.
                    Memulai usaha kuliner rujak klasik dan bubur ubi ungu dari tahun 2018.
                    Rujak klasik menjadi pilihan, karena saya hobi makan rujak dan punya kenangan indah dengan ibu.
                    Selain itu saya ingin memberikan alternatif camilan sehat yang fresh dengan citarasa Indonesia yang
                    cocok di lidah orang kebanyakan.
                    Merk Rujak Klasik merupakan produk unggulan di bawah nama usaha Griya Kuliner Jaen 954 , yang
                    berdiri pada 9 Mei 2018.
                    Jaen sendiri singkatan dari Jajanan Enak dan dalam Bahasa Bali Jaen juga berarti enak.
                    Rujak Klasik merupakan rujak buah dari buah pilihan, diantaranya : buah mangga, kedondong,
                    bengkoang, nanas, timun dan ubi merah dengan sambal yang terbuat dari cabai dan bahan pilihan, level
                    kepedasan yang bervariasi dan nikmat disantap dalam suhu ruang dan dingin yang lebih memberikan rasa
                    segarnya.
                    Sambel rujak pun menjadi produksi saya yang disiapkan untuk konsumen yang ingin membuat rujak dengan
                    buah-buah pilihan sesuai selera konsumen tanpa harus repot membuat sambalnya.
                    Selain rujak klasik dan sambal rujak, produk unggulan saya lainnya adalah Bubur Ubi Ungu.
                    Bubur Ubi Ungu atau sering saya singkat dengan Burbiu merupakan olahan kuliner apa yang bisa
                    dinikmati oleh segala usia, bermanfaat dan menyehatkan.
                    Ubi ungu yang kaya akan manfaat, diantaranya anti oksidan dan anti kanker.
                    Untuk mengolah ubi ungu menjadi Burbiu ini sangat mudah membuatnya, perpaduan rasa manis dan
                    gurihnya santan yang diolah dari fiber cream dan rich cream menjadikan sensasi rasa tersendiri jika
                    disantap pada suhu ruang , hangat ataupun dingin.
                    Rujak Klasik, sambal rujak dan bubur ubi ungu tersedia dalam berbagai variasi ukuran berat dan cocok
                    untuk berbagai acara seperti arisan, acara pernikahan, reuni, rapat dan berbagai acara lainnya.
                    Kemudahan proses pengiriman dan bertransaksi menjadi fokus utama saya agar konsumen bisa menikmati
                    Rujak Klasik, sambal rujak dan Bubur Ubi Ungu tanpa terkendala oleh jarak dan waktu.

                </p>

            </div>
        </div>
    </div>
</div>
<div class="container-xxl py-5" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{ asset('landingpage-rujak') }}/img/fotologoestetik.JPG">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="text-align:justify;">

                <p class="mb-4"><strong>#Kepoin Kuy apa itu Rujak Klasik#</strong><br><br>

                    Rujak Klasik adalah rujak buah seperti pada umumnya.
                    Dibuat dari aneka buah segar pilihan yaitu mangga, kedondong, bengkoang, nanas, timun dan ubi merah,
                    yang diserut dan dibumbui dengan sambal rujak original dari campuran gula merah,gula putih, cabai,
                    asam jawa,dan garam.
                    Bumbu rujak klasik tanpa dicampur dengan terasi dan kacang tanah sehingga memiliki citarasa
                    tersendiri yang bisa dipilih level kepedasannya sehingga menjadikan rujak klasik lebih nikmat dan
                    segar.
                    Rujak Klasik ini bertahan sekitar 24 jam pada suhu ruang, 7-10 hari di kulkas dan 1 bulan di
                    freezer.
                    Rujak Klasik dikemas dalam toples, box mika dan plastik pouch atau sesuai dengan permintaan
                    konsumen.
                    Dan yang pasti rujak klasik ini sudah bersertikat Halal. <br><br>
                    <strong> untuk 250 g rujak klasik dibandrol dengan harga 15K dan 25K untuk 430 gr.<br><br></strong>
                    Untuk pemesanan sesuai permintaan konsumen bisa dengan harga khusus.
                    Apapun kemasannya dijamin rasa rujak klasik tetep SEGER deh. <br><br>
                    <strong>#Reseller Welcome#</strong>
                </p>

            </div>
        </div>
    </div>
</div>
<!-- About End -->

<div class="container-xxl py-5" id="about">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="{{ asset('landingpage-rujak') }}/img/fotoubi3.JPG">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="text-align:justify;">

                <p class="mb-4"><strong>#Bubur Ubi Ungu alias Burbiu#<br></strong>

                    Bubur Ubi Ungu alias Burbiu , terbuat dari ubi jalar yang berwarna ungu, yang direbus kemudian
                    dicampur tepung sagu, gula putih dan sedikit garam.
                    Dihidangkan dengan santan yang dibuat dari Fiber Cream atau Rich Cream yang kaya akan serat sehingga
                    aman untuk dikonsumsi.
                    Bubur ubi ungu aman dikunsumsi dalam batas maksimal 12 jam pada suhu ruang atau 3 hari jika disimpan
                    di kulkas.
                    Proses pembuatannya yang mudah, bisa dinikmati oleh segala usia serta kaya manfaat antara lain ubi
                    ungu sebagai anti oksidan dan anti kanker menjadi alasan bubur ubi ungu ini diproduksi dan disantap
                    dingin lebih menambah cita rasa perpaduan manis dan gurihnya.
                    Burbiu dalam kemasan 150 gram hanya dengan harga 6K dan harga 10K bisa menikmati 300 gram burbiu.


                <p><i class="fa fa-check text-primary me-3"></i>Berkualitas</p>
                <p><i class="fa fa-check text-primary me-3"></i>Murah</p>
                <p><i class="fa fa-check text-primary me-3"></i>Terpercaya</p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
            </div>
        </div>
    </div>
</div>


<!-- Feature Start -->
<div class="container-fluid bg-light bg-icon my-5 py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <h1 class="display-5 mb-3">Projek Kita</h1>
            <p>Rujak buah jadi salah satu alternatif buat kamu yang pengen dapet nutrisi dari berbagai macam buah. Beli
                sekarang juga hanya di warung kita</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="{{ asset('landingpage-rujak') }}/img/project1.jpeg"
                        alt="">
                    <h4 class="mb-3">Kebersamaan Kami</h4>
                    <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed vero
                        dolor duo.</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="{{ asset('landingpage-rujak') }}/img/project2.jpeg"
                        alt="">
                    <h4 class="mb-3">Mengecek Produk</h4>
                    <p class="mb-4">Kami sedang mengecek produk kami apakah sudah baik dan segar atau belum</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="{{ asset('landingpage-rujak') }}/img/project3.jpeg"
                        alt="">
                    <h4 class="mb-3">Mencicipi Produk</h4>
                    <p class="mb-4">Kami sedang mencicipi produk kami apakah dari segi rasa dan buahnya sudah segar
                        atau belum</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container" id="prodak">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Produk Kami</h1>
                    <p>Produk Kami sangat Berkualitas dan juga fresh tentunya</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill"
                            href="#tab-1">Rujak</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Ubi </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    @foreach ($menus as $menu)
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100 ratio ratio-1x1"
                                        src="{{ asset('storage/menu/' . $menu->gambar) }}" alt="">

                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">{{ $menu->nama }}</a>
                                    <span
                                        class="text-primary me-1">Rp.{{ number_format($menu->harga, 0, ',', '.') }}</span>
                                    <span class="text-body text-decoration-line-through">Rp29.000</span>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-50 text-center border-end py-2">
                                        <a class="text-body" href=""><i
                                                class="fa fa-eye text-primary me-2"></i>View detail</a>
                                    </small>
                                    <small class="w-50 text-center py-2">
                                        <a class="text-body" href=""><i
                                                class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="col-12 text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('landingpage-rujak') }}/img/fotoubi1.JPG"
                                    alt="">
                                <div
                                    class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                    New</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Ubi Ungu (150g)</a>
                                <span class="text-primary me-1">Rp 6.000</span>
                                <span class="text-body text-decoration-line-through">Rp 10.000</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-eye text-primary me-2"></i>View detail</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100"
                                    src="{{ asset('landingpage-rujak') }}/img/produk ubi ungu1.jpeg" alt="">
                                <div
                                    class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                    New</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Ubi Ungu</a>
                                <span class="text-primary me-1">Rp 6.000</span>
                                <span class="text-body text-decoration-line-through">Rp 10.000</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-eye text-primary me-2"></i>View detail</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('landingpage-rujak') }}/img/fotoubi2.JPG"
                                    alt="">
                                <div
                                    class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                    New</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Ubi Ungu</a>
                                <span class="text-primary me-1">Rp 7.000</span>
                                <span class="text-body text-decoration-line-through">Rp 11.000</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-eye text-primary me-2"></i>View detail</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('landingpage-rujak') }}/img/jambu.jpg"
                                    alt="">
                                <div
                                    class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                    New</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Jambu </a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-eye text-primary me-2"></i>View detail</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('landingpage-rujak') }}/img/nanas.jpg"
                                    alt="">
                                <div
                                    class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                    New</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Nanas</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-eye text-primary me-2"></i>View detail</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('landingpage-rujak') }}/img/ubi1.jpg"
                                    alt="">
                                <div
                                    class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                    New</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Ubi</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-eye text-primary me-2"></i>View detail</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('landingpage-rujak') }}/img/mangga.png"
                                    alt="">
                                <div
                                    class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                    New</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href="">Mangga</a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through">$29.00</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-eye text-primary me-2"></i>View detail</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i
                                            class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->


    <!-- Firm Visit Start -->

    <!-- Firm Visit End -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5" st>
        <div class="container" id="kastemer">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Testimoni Customer!</h1>
                <p>Penilaian terhadap costumer yang sudah membeli produk kami.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div id="review-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('landingpage-rujak') }}/img/fotowhatsapp.jpeg"
                                        class="d-block w-50" alt="Review Foto 1">
                                </div>
                                @foreach ($testimonis as $testimoni)
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/testimoni/' . $testimoni->gambar) }}"
                                            class="d-block w-50" alt="Review Foto 3">
                                    </div>
                                @endforeach

                            </div>
                            <div class="carousel-control-prev" type="button" data-bs-target="#review-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </div>
                            <div class="carousel-control-next" type="button" data-bs-target="#review-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Testimonial Start -->
    <div class="container-fluid bg-light bg-icon py-6 mb-5" st>
        <div class="container" id="kastemer">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Customer Review</h1>
                <p>Penilaian terhadap costumer yang sudah membeli produk kami.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s"
                style="text-align: left;">
                @foreach ($reviews as $review)
                    <div class="testimonial-item position-relative bg-white p-5 mt-4">
                        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                        <p class="mb-4">{{ $review->comments }}</p>
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 rounded-circle"
                                src="{{ asset('Assets/person_circle_icon.svg') }}" alt="">
                            <div class="ms-3">
                                <h5 class="mb-1">{{ $review->name }}</h5>
                                <span>
                                    @if ($review->star_rating == '5')
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                    @elseif ($review->star_rating == '4')
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                    @elseif ($review->star_rating == '3')
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                    @elseif ($review->star_rating == '2')
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                    @else
                                        <i class="fa-solid fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                        <i class="fa-regular fa-star" style="color: #ffdd00;"></i>
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-xxl py-5" id="blog">
        <div class="container" id="blog">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Blog Kami</h1>
                <p>Selamat Datang di Dunia Kelezatan: "Rujak Serut Sensasi Segar!"

                    Mari bersama-sama merayakan kelezatan buah-buahan segar yang dipadu dengan saus unik dalam setiap
                    gigitan. Di blog kami, kita akan menjelajahi keindahan dan kenikmatan dari Rujak Serut, hidangan
                    segar yang tak tertandingi.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('landingpage-rujak') }}/img/orgmenanampohon.jpg"
                        alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Bagaimana cara menanam pohon yang baik</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2023</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="{{ asset('landingpage-rujak') }}/img/orgmemetikbuah.jpg"
                        alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Bagaimana cara memetik buah dengan baik</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2023</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/orgmemetikbuah2.jpg" alt="">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Bagaimana menyeleksi buah yang segar</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
