@extends('visitor-layout.main')

@section('content')
    <section id="product">
        <div class="container">
            <div>
                <img src="{{ $product[0]['thumbnail'] }}" alt="">
            </div>
            <h1 class="header-title">{{ $product[0]['name'] }}</h1>
            <p class="sub-title-product">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Molestias dolores amet excepturi
                dolor ipsam
                possimus ratione voluptatem nam quos repudiandae.</p>

            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2 duration text-center">
                            {{ $product[0]['duration'] }} <span>days</span>
                        </div>
                        <div class="col-4 flight text-center">
                            <img src="{{ $product[0]['airlines_icon'] }}" alt=""
                                style="width:28px; height:28px; object-fit:cover; margin-bottom: 0px">
                            <span>{{ $product[0]['airlines_name'] }}</span>
                        </div>
                        <div class="col-6 price text-end">
                            {{ $product[0]['price_discount'] != null ? $product[0]['price_discount'] : $product['price_normal'] }}<span>/pax</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itineraries mb-3">
                <h2>Jadwal Perjalanan</h2>
                <div class="accordion" id="accordionExample">
                    @foreach ($product[0]['itinerary'] as $itin)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#{{ $itin['id'] }}" aria-expanded="true"
                                    aria-controls="{{ $itin['id'] }}">
                                    {{ $itin['title'] }}
                                </button>
                            </h2>
                            <div id="{{ $itin['id'] }}" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="deskripsi">
                                        <b>Deskripsi</b> <br>
                                        {{ $itin['description'] }}
                                    </div>
                                    <div class="meal">
                                        <b>Jadwal Makan</b> <br>
                                        @foreach ($itin['meal'] as $meal)
                                            {!! $meal = null
                                                ? '<span class="badge bg-light text-dark">Tidak Ada</span>'
                                                : '<span class="badge bg-success">' . $meal . '</span>' !!}
                                        @endforeach
                                    </div>
                                    <div class="flight">
                                        <b>Penerbangan</b>
                                        @foreach ($itin['flight'] as $flight)
                                            <div>
                                                [ICON] {{ $flight['airlinesName'] }}({{ $flight['airlinesCode'] }}) :
                                                <i class="fas fa-plane-departure"></i>{{ $flight['airportDepartureCity'] }}
                                                ({{ $flight['airportDepartureCode'] }}) ->
                                                <i class="fas fa-plane-arrival"></i>{{ $flight['airportArrivalCity'] }}
                                                ({{ $flight['airportArrivalCode'] }})
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
