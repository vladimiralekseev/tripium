@extends('layouts.wrapper')

@section('title', "Discover local guides designed to help travelers explore Branson like a local friend.")
@section('label', "Our Publications")

@section('page_content')

    <div class="row">
        <div class="col-lg-6 mb-3">
            <h1 class="mb-3">@yield('title')</h1>
            <div class="mb-lg-5 mb-4">
                Need help figuring out where to eat, what to do, or what not to miss while you're in town? We’ve got you covered. Our publications are made for travelers who want to make the most of their Branson experience without stressing over the details. They're easy to read, full of useful tips, and designed to feel like advice from a local friend. Whether you’re browsing from your hotel room or flipping through while grabbing a bite to eat, our guides are always close by when you need them.
            </div>
            <div class="tag tag-special tag-sky mb-lg-5 mb-4 px-4">@yield('label')</div>
        </div>
        <div class="col-lg-6 mb-5">
            <div class="publications-slider">
                <div class="under"></div>
                <div class="in">
                    <section class="splide js-publications-slider" >
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="/img/flavor-cover-2021.png" alt="The Flavor"/>
                                </li>
                                <li class="splide__slide">
                                    <img src="/img/taste-cover-2021.jpg" alt="The Taste"/>
                                </li>
                                <li class="splide__slide">
                                    <img src="/img/dish-cover-2021.jpg" alt="The Dish"/>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="/js/publications.js?v=2.0"></script>
    @endpush


    <div class="row publications">
        <div class="col-md-4 col-sm-6 mb-lg-4 mb-3">
            <div class="it p-3 h-100">
                <div class="b01_card_text-2">
                    <h3>The Flavor</h3>
                    <small class="tag tag-special tag-sky mb-3">Branson</small>
                    <div class="b01_paragraph-2">The Flavor of Branson is the only mass distributed area publication dedicated to showcasing the diverse and fabulous restaurants of Branson. &nbsp;The Flavor has a number of coupons you may use while dining in Branson!</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-lg-4 mb-3">
            <div class="it p-3 h-100">
            <div class="b01_card_text-2">
                <h3>The Taste</h3>
                <small class="tag tag-special tag-sky mb-3">Branson</small>
                <div class="b01_paragraph-2">The Taste of Branson is the areas only in-room menu publication that is fund in over 10,000 hotel rooms across the Ozarks. If there isn't a copy in your room ask your front desk to get one for you, or contact us directly.</div>
            </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-lg-4 mb-3">
            <div class="it p-3 h-100">
            <div>
                <h3>The Dish</h3>
                <small class="tag tag-special tag-sky mb-3">Branson</small>
                <div class="b01_paragraph-2">Our goal with this publication is to provide menu samples and highlights of area restaurants. &nbsp;There are over 200 restaurants in the Branson area just waiting for you to discover.</div>
            </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-lg-4 mb-3">
            <div class="it p-3 h-100">
                <h3>PlayBranson</h3>
                <small class="tag tag-special tag-sky mb-3">Entertainer's Exposay</small>
                <div class="b01_paragraph-2">We will entertain you through a mix of celebrity interviews and spotlights on the real people and their extraordinary stories and talents.</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-lg-4 mb-3">
            <div class="it p-3 h-100">
                <h3>Legends in Concert</h3>
                <small class="tag tag-special tag-sky mb-3">Dick Clark's American Bandstand Theater</small>
                <div class="b01_paragraph-2">Internationally recognized as The World’s Greatest Live Tribute Show, Legends in Concert dazzles men, women and children alike with spectacular, fun filled entertainment the whole family will enjoy.</div>
            </div>
        </div>
    </div>

@endsection
