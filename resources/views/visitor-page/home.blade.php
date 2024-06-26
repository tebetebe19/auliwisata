@extends('visitor-layout.main')

@section('content')
    <section id="intro"
        style="background-image: linear-gradient(90deg, rgb(51, 51, 51, 0.5) 0%, rgba(194,194,194,0.4738270308123249) 100%), url('https://images.pexels.com/photos/7460557/pexels-photo-7460557.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1500');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bag">
                        <h5 class="header-title">Auliwisata</h5>
                        <p class="sub-title">
                            Happily traveling without forget about aqidah
                        </p>
                        <button class="btn btn-primary">Explore Now!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="str" class="mb-5">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <i class="fas fa-shield-alt"></i>
                            <h5>Safety</h5>
                        </div>
                        <div class="col-3">
                            <i class="fas fa-map-marked-alt"></i>
                            <h5>Guider</h5>
                        </div>
                        <div class="col-3">
                            <i class="fas fa-mosque"></i>
                            <h5>Religious</h5>
                        </div>
                        <div class="col-3">
                            <i class="fas fa-check-double"></i>
                            <h5>Legal</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 info">
                    <div class="bag">
                        <h4 class="header-title">
                            Tentang Auliwisata
                        </h4>
                        <p>
                            Auliwisata adalah brand dari PT. Auli Wisata Utama, sebuah biro perjalanan wisata yang telah
                            melakukan traveling ke berbagai negara seperti Bangkok, Malaysia, Korea Selatan, Turkey,
                            Jordan dan Palestina. Auliwisata telah bekerjasama dengan beberapa biro perjalanan umroh
                            untuk menemani jama’ah dalam melaksanakan ibadah umroh.
                            <br>
                            <br>
                            Alhamdulilah Kementrian Agama Republik Indonesia telah mempercayakan Auliwisata sebagai
                            Penyelenggara Umroh melalui Surat Keputusan Nomor U.263 Tahun 2021 tentang Izin Operasional
                            PT Auli Wisata Utama sebagai Penyelenggara Perjalanan Ibadah Umroh.
                            Auliwisata hadir untuk memenuhi kebutuhan umat Islam dan siap menjadi pelayan para tamu
                            Allah selama di tanah suci. Para tim pembimbing berpengalaman yangsiap membantu selama
                            pelaksanaan ibadah umroh, begitu pula bimbingan sebelum berangkat ke tanah suci sebagai
                            bekal dalam melaksanakan ibadah umroh.
                            Auliwisata adalah mitra terbaik dalam menemani perjalanan anda, baik ke tanah suci atau
                            menjelajahi berbagai negara yangmemiliki keindahan panorama alam, dengan tetap menjalankan
                            kewajiban selaku umat Islam dan menikmati sajian menu Halal selama perjalanan wisata.

                        </p>
                        {{-- <button class="btn btn-primary">
                            Cek Legalitas
                        </button> --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#legalitas">
                            Check Legalitas Kami
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="../assets/img/intro.png" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="program">
        <div class="item">
            <div class="info">
                <div class="bag">
                    <h5 class="header-title">
                        Umroh
                    </h5>
                    <p class="sub-title">
                        Bagi Umat Islam, ibadah Umroh adalah cara lain untuk menggenapkan pelaksanaan rukun Islam yang 5 perkara, ketika keberangkatan ibadah haji dibatasi dengan berbagai regulasi. Ibadah Umroh menjadi pilihan utama, karena disamping biaya perjalanan yang terjangkau dan waktu pelaksanaan hanya dalam hitungan hari. Ibadah umroh merupakan sarana dalam mendekatkan diri kepada Yang Maha Pencipta pemilik alam semesta. <br> <br>
                        
                        Nabi SAW menjanjikan Dari satu Umroh ke Umroh yang lain menghapus segala dosa di antara keduanya. <br> <br>

                        Auliwisata ingin berkhidmat dengan memberikan pelayanan maksimal kepada para Dhuyufurrahman tamu-tamu Allah. Berbagai program Umroh Auliwisata bisa menjadi pilihan karena kami menyedialan paket Umroh Reguler, Umroh Ramadhan, Umroh Syawal, Umroh Plus Al Aqsha, Umroh Plus Mesir atau bisa pilih Umroh Plus Turki.
                    </p>
                </div>
            </div>
            <div class="image">
                <img src="https://images.pexels.com/photos/9741288/pexels-photo-9741288.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
            </div>
        </div>
        <div class="item">
            <div class="image">
                <img src="https://images.pexels.com/photos/3214994/pexels-photo-3214994.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1500" alt="">
            </div>
            <div class="info">
                <div class="bag">
                    <h5 class="header-title">
                        Wisata Religi
                    </h5>
                    <p class="sub-title">
                        Berjalan menelusuri  bumi Allah yang memiliki jejak - jejak sejarah umat manusia atau sejarah peradaban manusia. Dari tinggalan sejarah tersebut, kita dapat memahami sejauh Kebudayaan masyarakat setempat berkembang. Melalui bukti sejarah tersebut kita dapat pula memahami sejarah perkembangan Islam. <br> <br>
                        
                        Auliwisata menyediakan paket Wisata Religi, yaitu mengunjungi destinasi Wisata diberbagai belahan dunia yang terkait dengan sejarah peradaban Islam. <br> <br>
                        
                        Wisata Religi tidak saja menikmati keindahan alam yang terhampar sebagai karunia, namun juga dapat memberikan pengetahuan dan kesan yang mendalam tentang perkembangan islam di berbagai belahan dunia seperti Mesir, Jordanian, Palestina, Maroko, Uzbekistan, Turki, Istana Al Hamra di Spanyol dll
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="info">
                <div class="bag">
                    <h5 class="header-title">
                        Wisata Halal
                    </h5>
                    <p class="sub-title">
                        Mengagumi indahnya hamparan alam diberbagai belahan dunia merupakan cara lain bagi kita dalam meningkatkan keimanan kepada Allah SWT. <br> <br>

                        Destinasi Wisata yang indah dipandang mata, terkadang ada disebuah negara yang berbeda budaya dan agama. Kami memahami bahwa kebutuhan tamu tidak saja pada keindahan destinasi, namun kenyamanan dalam mengkonsumsi beragam menu dan nyaman dalam beribadah merupakan kebutuhan mandasar para traveler. <br> <br>

                        Auliwisata memberikan pelayanan dalam paket Wisata Halal, yaitu melayani para “tamu” kami dalam mengkonsumsi makanan halal dan nyaman dalam beribadah selama berwisata
                    </p>
                </div>
            </div>
            <div class="image">
                <img src="https://images.pexels.com/photos/2187605/pexels-photo-2187605.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1500" alt="">
            </div>
        </div>
        <div class="item">
            <div class="image">
                <img src="https://images.pexels.com/photos/2499777/pexels-photo-2499777.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1500" alt="">
            </div>
            <div class="info">
                <div class="bag">
                    <h5 class="header-title">
                        Wisata Domestik
                    </h5>
                    <p class="sub-title">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A autem explicabo porro ea omnis nostrum deserunt consequuntur quas harum ipsa?
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="popular" style="">
        <div class="container">
            <h4 class="header-title">Featured Packages</h4>
            <p class="sub-title">Most Popular Tour</p>
            <div class="row">
                @foreach ($products as $item)
                    <div class="col-lg-4">
                        <div class="auli_card">
                            <div id="feat-1" class="carousel slide" data-ride="carousel" style="">
                                <img src="{{ $item['thumbnail'] }}">
                            </div>
                            <div class="overlay">
                                <div class="discount">
                                    20% OFF
                                </div>
                            </div>
                            <div class="info" style="">
                                <h5 class="name">{{ $item['name'] }}</h5>
                                <div class="price">
                                    {!! $item['price_discount'] == 0
                                        ? '<p>Mulai dari <span>Rp' . $item['price_normal'] . '</span></p>'
                                        : '<p>Mulai dari <span>Rp' . $item['price_discount'] . '</span> <del>Rp' . $item['price_normal'] . '</del></p>' !!}

                                </div>
                                <div class="extra">
                                    <div class="days-ppl">
                                        <div class="days">
                                            <i class="fas fa-clock mr-1"></i>
                                            <p>{{ $item['duration'] }} hari</p>
                                        </div>
                                        <div class="ppl">
                                            <i class="fas fa-plane"></i>
                                            <p>{{ $item['airlines_name'] }}</p>
                                        </div>
                                    </div>
                                    <div class="button">
                                        <a href="/product/{{ $item['slug'] }}" target="blank" style="color: black">
                                            Detail >
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="itinerary">
        <div class="container">
            <h4 class="header-title">Best Itinerary</h4>
            <p class="sub-title">Plan it better</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="auli_card">
                        <div id="iti-1" class="carousel slide" data-ride="carousel" style="">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        src="https://images.pexels.com/photos/2239422/pexels-photo-2239422.jpeg?auto=compress&cs=tinysrgb&w=1600">
                                </div>
                                <div class="carousel-item">
                                    <img
                                        src="https://images.pexels.com/photos/2867769/pexels-photo-2867769.jpeg?auto=compress&cs=tinysrgb&w=1600">
                                </div>
                                <div class="carousel-item">
                                    <img
                                        src="https://images.pexels.com/photos/6118470/pexels-photo-6118470.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#iti-1"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#iti-1"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="info" style="">
                            <h5 class="name">Full Day Horse</h5>
                            <a href="https://goo.gl/maps/Fnrarm2nAwaxFZVX7" target="blank_">
                                <div class="location">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    <p>Dessert</p>
                                </div>
                            </a>
                            <p class="description" style="">10 Pax tiket masuk, makan siang, beserta minumnya
                            </p>
                            <div class="price">
                                <p><span>Rp50.000.000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <h4 class="header-title">Gallery</h4>
            <p class="sub-title">Beautifull isn't it?</p>
            <div class="row justify-content-center">
                <div class="bag-gallery col-lg-4">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/10205861/pexels-photo-10205861.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000"
                            alt="">
                        <div class="overlay">
                            <div class="text">
                                <h3 class="header-title">Lorem ipsum dolor sit amet.</h3>
                                <p class="sub-title mb-0 mt-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bag-gallery col-lg-4">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/2325446/pexels-photo-2325446.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000"
                            alt="">
                        <div class="overlay">
                            <div class="text">
                                <h3 class="header-title">Lorem ipsum dolor sit amet.</h3>
                                <p class="sub-title mb-0 mt-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bag-gallery col-lg-4">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/2356045/pexels-photo-2356045.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000"
                            alt="">
                        <div class="overlay">
                            <div class="text">
                                <h3 class="header-title">Lorem ipsum dolor sit amet.</h3>
                                <p class="sub-title mb-0 mt-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bag-gallery col-lg-4">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/3757144/pexels-photo-3757144.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000"
                            alt="">
                        <div class="overlay">
                            <div class="text">
                                <h3 class="header-title">Lorem ipsum dolor sit amet.</h3>
                                <p class="sub-title mb-0 mt-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bag-gallery col-lg-4">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/3369102/pexels-photo-3369102.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000"
                            alt="">
                        <div class="overlay">
                            <div class="text">
                                <h3 class="header-title">Lorem ipsum dolor sit amet.</h3>
                                <p class="sub-title mb-0 mt-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bag-gallery col-lg-4">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/3214958/pexels-photo-3214958.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000"
                            alt="">
                        <div class="overlay">
                            <div class="text">
                                <h3 class="header-title">Lorem ipsum dolor sit amet.</h3>
                                <p class="sub-title mb-0 mt-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bag-gallery col-lg-4">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/4254555/pexels-photo-4254555.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000"
                            alt="">
                        <div class="overlay">
                            <div class="text">
                                <h3 class="header-title">Lorem ipsum dolor sit amet.</h3>
                                <p class="sub-title mb-0 mt-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bag-gallery col-lg-4">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/4356144/pexels-photo-4356144.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000"
                            alt="">
                        <div class="overlay">
                            <div class="text">
                                <h3 class="header-title">Lorem ipsum dolor sit amet.</h3>
                                <p class="sub-title mb-0 mt-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bag-gallery col-lg-4">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/3016353/pexels-photo-3016353.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000"
                            alt="">
                        <div class="overlay">
                            <div class="text">
                                <h3 class="header-title">Lorem ipsum dolor sit amet.</h3>
                                <p class="sub-title mb-0 mt-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bag-gallery col-lg-4">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/7026306/pexels-photo-7026306.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000"
                            alt="">
                        <div class="overlay">
                            <div class="text">
                                <h3 class="header-title">Lorem ipsum dolor sit amet.</h3>
                                <p class="sub-title mb-0 mt-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bag-gallery col-lg-4">
                    <div class="image">
                        <img src="https://images.pexels.com/photos/4340670/pexels-photo-4340670.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000"
                            alt="">
                        <div class="overlay">
                            <div class="text">
                                <h3 class="header-title">Lorem ipsum dolor sit amet.</h3>
                                <p class="sub-title mb-0 mt-4">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="healing" class="" style="background-image: ">
        <div class="bag">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 title">
                        <div>
                            <h4 class="header-title">" Dont let your soul start to exhausted "</h4>
                            <h3 class="sub-title">Let's umroh!</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 form">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Input your active Email"
                                            required>
                                        <small class="form-text text-muted">For feedback only</small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control"
                                            placeholder="Input Active WhatsApp Number" required>
                                        <small class="form-text text-muted">Faster response</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Input message to us" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group d-flex justify-content-end">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partner">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="{{ asset('assets/img/logo/logo-1.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/logo/logo-2.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/logo/logo-3.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/logo/logo-4.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/logo/logo-5.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('assets/img/logo/logo-6.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
