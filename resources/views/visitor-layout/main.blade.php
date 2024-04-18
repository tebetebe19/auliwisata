<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen:wght@400;700&display=swap" rel="stylesheet">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <!-- Visitor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Auli Wisata</title>
    <link rel="icon" href="{{ asset('visitor/img/icon.png') }}">
</head>

<body>

    @include('visitor-layout.navbar')

    @yield('content')

    @include('visitor-layout.footer')

    <section id="credit">
        Development by MONE Web Dev Team
    </section>

    <!-- Modal -->
    <div class="modal fade" id="legalitas" tabindex="-1" aria-labelledby="legalitasLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="legalitasLabel">Legalitas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li>
                            1. SK. KEMENKUMHAM
                            <p class="sub-title">
                                Nomor: AHU-0018782.AH.01.02. TAHUN 2020
                            </p>
                        </li>
                        <li>
                            2. TANDA DAFTAR USAHA PARIWISATA
                            <p class="sub-title">
                                Nomor: 022.K.1/3/-1.858.8/e/2020
                            </p>
                        </li>
                        <li>
                            3. NOMOR INDUK BERUSAHA
                            <p class="sub-title">
                                0220101312275
                            </p>
                        </li>
                        <li>
                            4. SERTIFIKAT USAHA PARIWISATA
                            <p class="sub-title">
                                Nomor: IMS-SUP-127
                            </p>
                        </li>
                        <li>
                            5. SK. PPIU
                            <p class="sub-title">
                                Nomor: U.263 TAHUN 20210
                            </p>
                        </li>
                    </ul>

                    <img src="{{ asset('assets/img/legal.jpg') }}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Owl Carousel Libraies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".bag-gallery:nth-child(4n+0)").removeClass("col-lg-4").addClass("col-lg-12");
        });
    </script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 1500,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
</body>

</html>
