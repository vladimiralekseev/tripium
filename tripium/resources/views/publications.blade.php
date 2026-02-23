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
                                    <img src="/img/publications/flavor-2025-26-1.jpg" alt="The Flavor"/>
                                </li>
                                <li class="splide__slide">
                                    <img src="/img/publications/taste-2025-26-1.jpg" alt="The Taste"/>
                                </li>
                                <li class="splide__slide">
                                    <img src="/img/publications/play-branson-2025-2026-1.jpg" alt="The Play Branson"/>
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

    <div class="row publications justify-content-center">
        <div class="col-lg-4 col-sm-6 mb-lg-4 mb-3">
            <div class="it p-3 h-100">
                <div class="b01_card_text-2">
                    <h3>The Flavor</h3>
                    <small class="tag tag-special tag-sky mb-3">Branson</small>
                    <div class="b01_paragraph-2">The Flavor of Branson is the only mass distributed area publication dedicated to showcasing the diverse and fabulous restaurants of Branson. &nbsp;The Flavor has a number of coupons you may use while dining in Branson!</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-lg-4 mb-3">
            <div class="it p-3 h-100">
            <div class="b01_card_text-2">
                <h3>The Taste</h3>
                <small class="tag tag-special tag-sky mb-3">Branson</small>
                <div class="b01_paragraph-2">
                    The Taste of Branson is the areas only menu magazine and also  in-room hotel publication that is found in thousands of rooms across the Ozarks.  So look for it in racks around Branson and also in hotel rooms.
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-lg-4 mb-3">
            <div class="it p-3 h-100">
                <h3>PlayBranson</h3>
                <small class="tag tag-special tag-sky mb-3">Entertainer's Exposay</small>
                <div class="b01_paragraph-2">
                    Branson’s #1 free magazine offering visitors a true scope of all there is to do in Branson.
                    Play Branson’s tv show will entertain you with a mix of celebrity interviews and spotlights on the real stories and talents behind the entertainers
                </div>
            </div>
        </div>
    </div>

@endsection
