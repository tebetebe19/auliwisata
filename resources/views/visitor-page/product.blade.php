@extends('visitor-layout.main')

@section('content')
    <section id="product">
        <div class="container">
            <div>
                <img src="https://images.pexels.com/photos/10205861/pexels-photo-10205861.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1000"
                    alt="">
            </div>
            <h1 class="header-title">Title</h1>
            <p class="sub-title-product">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Molestias dolores amet excepturi
                dolor ipsam
                possimus ratione voluptatem nam quos repudiandae.</p>

            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2 duration text-center">
                            X
                        </div>
                        <div class="col-4 flight text-center">
                            [ICON] <span>Emirates</span>
                        </div>
                        <div class="col-6 price text-end">
                            Rp 20.000.000<span>/pax</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itineraries mb-3">
                <h2>Jadwal Perjalanan</h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="deskripsi">
                                    <b>Deskripsi</b> <br>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam labore adipisci quasi
                                    reprehenderit quisquam odio! Tempore commodi maiores a asperiores!
                                </div>
                                <div class="meal">
                                    <b>Jadwal Makan</b> <br>
                                    <span class="badge bg-success">Sarapan</span>
                                    <span class="badge bg-success">Makan Siang</span>
                                    <span class="badge bg-success">Makan Malam</span>
                                    <span class="badge bg-light text-dark">Tidak Ada</span>
                                </div>
                                <div class="flight">
                                    <b>Penerbangan</b>
                                    <div>[ICON] Emirates :
                                        <i class="fas fa-plane-departure"></i>Jakarta (CGK) ->
                                        <i class="fas fa-plane-arrival"></i>Jeddah (JED)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
