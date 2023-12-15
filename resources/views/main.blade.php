@extends('layouts.template')

@section('content')

  <x-banners.random/>

  <main>
    
    <section id="welcome" class="m-lg-5 m-4 p-lg-5 p-3 d-flex">
      <div id="welcome-image" class="d-xl-flex d-none col-xl-3 col-xxl-2 rounded-start-5" style="background-image: url('{{asset('assets/images/Hybrasil_map-cut.jpg')}}'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
      <div id="welcome-text" class="col-xl-9 col-12">
        <h1 class="col-12 text-center">Welcome to Hy Brasil Bank!</h1>
        <p class="text-end lh-lg p-0">
          Hy Brasil is the name of a mythical island that was very hard to find, that hide undold treasures and mysteries.<br>
          With a large story of conflicts around this place and its mysteries involving battles and treasure hunts accoured in our history, this island has become an important and remarkable place.<br>
          Today is a distant memory that a few remember, but Hy Brasil still remains in history books and out of maps.<br>
          We, of Hy Brasil, want to make your money like that. Big as a treasure island, secure and unreacheble like a mith.<br>
          No one knowing it's true. Nobody but you.
        </p>
      </div>
    </section>

    <section id="quick-actions" class="m-lg-5 m-4 p-lg-5 p-3">
      <h2 class="col-12 text-center mb-5">Quick Actions</h2>
      <div class="row g-5 row-cols-xxl-4 row-cols-md-3 row-cols-2">
        <div class="col">
          <div class="card quick-card p-3">
            <img src="{{asset('assets/images/credit-card-svgrepo-com.svg')}}" class="card-img-top" alt="..." style="width: 60px; height: 60px;">
            <div class="card-body">
              <h4>Credit Card</h4>
              <p class="card-text">Description</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card quick-card p-3">
            <img src="{{asset('assets/images/unlock-2-svgrepo-com.svg')}}" class="card-img-top" alt="..." style="width: 60px; height: 60px;">
            <div class="card-body">
              <h4>Unlock Your Card</h4>
              <p class="card-text">Description</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card quick-card p-3">
            <img src="{{asset('assets/images/financial-report-svgrepo-com.svg')}}" class="card-img-top" alt="..." style="width: 60px; height: 60px;">
            <div class="card-body">
              <h4>Financial Report</h4>
              <p class="card-text">Description</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card quick-card p-3">
            <img src="{{asset('assets/images/bullfight-svgrepo-com.svg')}}" class="card-img-top" alt="..." style="width: 60px; height: 60px;">
            <div class="card-body">
              <h4>Stock Market</h4>
              <p class="card-text">Description</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card quick-card p-3">
            <img src="{{asset('assets/images/contact-women-talking-svgrepo-com.svg')}}" class="card-img-top" alt="..." style="width: 60px; height: 60px;">
            <div class="card-body">
              <h4>Contact Us</h4>
              <p class="card-text">Description</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card quick-card p-3">
            <img src="{{asset('assets/images/mobile-app-svgrepo-com.svg')}}" class="card-img-top" alt="..." style="width: 60px; height: 60px;">
            <div class="card-body">
              <h4>Mobile App</h4>
              <p class="card-text">Description</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="products-and-services-banner" class="d-flex flex-md-row flex-column row g-4 g-md-0 m-0 p-0 my-5" style="min-height: 250px; background: linear-gradient(0deg, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('{{asset('assets/images/praia-do-aventureiro-ilha-grande-shutterstockk.webp')}}'); background-repeat: no-repeat; background-size: cover; background-position-y: 72%;">
      <div class="col-12 col-md-6 px-auto d-flex justify-content-center align-items-center">
        <button class="banner-big-button m-0 py-2 px-3 btn rounded-5 d-flex justify-content-center align-items-center" type="button">
          Check our products<br>and services
        </button>
      </div>
      <div class="col-12 col-md-6 m-0 p-0 px-md-5 px-0 d-flex flex-fill justify-content-center align-items-center">
        <img class="col-md-12 col-md-8 col-sm-9 col-10" src="{{asset('assets/images/banner-icons.svg')}}" alt="" style="max-width: 100%; max-height: 100%;">
      </div>
    </section>

    <section class="mb-5">
      <h2 class="col-12 text-center">Cards</h2>
      <div id="splide-cards" class="splide d-flex justify-content-center" role="group" aria-label="SplideCards">
        <div class="col-10 p-5 splide__track bg-light bg-gradient rounded-5 border border-dark-subtle">
          <ul class="splide__list">
            <li class="account-cards splide__slide text-center border border-black rounded">Slide 01</li>
            <li class="account-cards splide__slide text-center border border-black rounded">Slide 02</li>
            <li class="account-cards splide__slide text-center border border-black rounded">Slide 03</li>
            <li class="account-cards splide__slide text-center border border-black rounded">Slide 04</li>
            <li class="account-cards splide__slide text-center border border-black rounded">Slide 05</li>
            <li class="account-cards splide__slide text-center border border-black rounded">Slide 06</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="my-5 py-5">
      <h2 class="col-12 text-center">News</h2>
      <div id="splide-news" class="splide d-flex justify-content-center" role="group" aria-label="SplideCards">
        <div class="col-12 pb-5 splide__track">
          <ul class="splide__list">
            <li class="news-cards splide__slide p-3 border border-black rounded">Slide 01</li>
            <li class="news-cards splide__slide p-3 border border-black rounded">Slide 02</li>
            <li class="news-cards splide__slide p-3 border border-black rounded">Slide 03</li>
            <li class="news-cards splide__slide p-3 border border-black rounded">Slide 04</li>
            <li class="news-cards splide__slide p-3 border border-black rounded">Slide 05</li>
            <li class="news-cards splide__slide p-3 border border-black rounded">Slide 06</li>
          </ul>
        </div>
      </div>
    </section>

    <script>
      var cards = new Splide( '#splide-cards', {
        type        : 'loop',
        gap         : '5%',
        fixedWidth  : 'clamp(180px, 15vw, 232px)',
        fixedHeight  : 'clamp(310px, 23.42vw, 400px)',
        focus       : 'center',
        pagination  : false,
      } );
      var news = new Splide( '#splide-news', {
        type      : 'loop',
        gap       : '5%',
        focus     : '.05',
        fixedWidth: 'clamp(300px, 40vw, 600px)',
        fixedHeight: 'clamp(200px, 26.67vw, 400px)',
        pagination: false,
      } );
      cards.mount();
      news.mount();
    </script>

  </main>

@endsection
