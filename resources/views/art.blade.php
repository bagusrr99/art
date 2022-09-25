
@extends('layouts.main')

@section('container')
<!-- Featured Section Begin -->
<section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Karya Seni</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".ilustrasi">Ilustratsi</li>
                            <li data-filter=".kriya">Kriya</li>
                            <li data-filter=".lukis">Lukis</li>
                            <li data-filter=".musik">Musik</li>
                            <li data-filter=".patung">Patung</li>
                            <li data-filter=".rupa">Rupa</li>
                            <li data-filter=".tari">Tari</li>
                            <li data-filter=".teater">Teater</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                
                @include('partials.ilustrasi')
                @include('partials.kriya')
                @include('partials.lukis')
                @include('partials.musik')
                @include('partials.patung')
                @include('partials.rupa')
                @include('partials.tari')
                @include('partials.teater')

            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    @endsection