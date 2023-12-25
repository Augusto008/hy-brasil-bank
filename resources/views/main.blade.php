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

    <section id="quick-actions" class="m-lg-5 m-4 p-lg-5 p-2 p-md-3">
      <h2 class="col-12 text-center mb-5">Quick Actions</h2>
      <div class="row g-5 row-cols-xxl-4 row-cols-md-3 row-cols-2">
        <div class="col">
          <div class="card quick-card p-2 p-md-3">
            <img src="{{asset('assets/images/credit-card-svgrepo-com.svg')}}" class="card-img-top" alt="..." style="width: 60px; height: 60px;">
            <div class="card-body">
              <h3>Credit Card</h3>
              <p class="small-text">Description</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card quick-card p-2 p-md-3">
            <img src="{{asset('assets/images/unlock-2-svgrepo-com.svg')}}" class="card-img-top" alt="..." style="width: 60px; height: 60px;">
            <div class="card-body">
              <h3>Unlock Your Card</h3>
              <p class="small-text">Description</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card quick-card p-2 p-md-3">
            <img src="{{asset('assets/images/financial-report-svgrepo-com.svg')}}" class="card-img-top" alt="..." style="width: 60px; height: 60px;">
            <div class="card-body">
              <h3>Financial Report</h3>
              <p class="small-text">Description</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card quick-card p-2 p-md-3">
            <img src="{{asset('assets/images/bullfight-svgrepo-com.svg')}}" class="card-img-top" alt="..." style="width: 60px; height: 60px;">
            <div class="card-body">
              <h3>Stock Market</h3>
              <p class="small-text">Description</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card quick-card p-2 p-md-3">
            <img src="{{asset('assets/images/contact-women-talking-svgrepo-com.svg')}}" class="card-img-top" alt="..." style="width: 60px; height: 60px;">
            <div class="card-body">
              <h3>Contact Us</h3>
              <p class="small-text">Description</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card quick-card p-2 p-md-3">
            <img src="{{asset('assets/images/mobile-app-svgrepo-com.svg')}}" class="card-img-top" alt="..." style="width: 60px; height: 60px;">
            <div class="card-body">
              <h3>Mobile App</h3>
              <p class="small-text">Description</p>
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
            <li class="flip-card splide__slide">
              <div class="account-cards flip-card-inner text-center border border-black rounded">
                <div class="flip-card-front p-4 d-flex flex-column justify-content-between">
                  <div class="d-flex h-70 flex-column justify-content-between">
                    <img src="{{asset('assets/images/playing-card-11-svgrepo-com.svg')}}" class="mx-auto" alt="Avatar" style="width:80%;">
                    <h2 class="col-12 text-center">A</h2>
                  </div>
                  <div class="d-flex justify-content-start p-3">
                    <img src="{{asset('assets/images/credit-card-chip-svgrepo-com.svg')}}" alt="" style="width: 32%; transform: rotate(270deg);">
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-row">
                  <div class="col-8 p-2 text-start d-flex flex-column">
                    <h5>Sofonisba<br>Anguissola</h5>
                    <br>
                    <div class="d-flex">
                      <div class="col-4 d-flex justify-content-start">
                        <p style="writing-mode: vertical-rl;">1000 0000 0000 0000</p>
                      </div>
                      <div class="col-8">
                        <div class="col-12 d-flex" style="writing-mode: vertical-rl;">
                          <div class="m-0 p-0">
                            <div class="col-6">
                              <p class="fw-bold mt-auto small-text">validity</p>
                              <p class="mt-auto smaller-text">11/32</p>
                            </div>
                            <div class="col-6">
                              <p class="fw-bold mt-auto small-text">cod.</p>
                              <p class="mt-auto smaller-text">.624</p>
                            </div>
                          </div>
                          <div class="m-0 p-0">
                            <div class="col-6">
                              <p class="fw-bold mt-auto small-text">agency</p>
                              <p class="mt-auto smaller-text">A54D6I8</p>
                            </div>
                            <div class="col-6">
                              <p class="fw-bold mt-auto small-text">Account</p>
                              <p class="mt-auto smaller-text">000 B00-0</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-fill">
                      <p class="mt-auto small-text">+000 000 000 0000</p>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="col-8 mx-auto bg-dark h-100"></div>
                  </div>
                </div>
              </div>
            </li>
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
            <li class="news-cards splide__slide p-3 border border-black rounded-4">
              <div class="card-content" style="overflow: hidden; height: 98%;">
                <img src="{{asset('assets/images/bulletin-journal-magazine-svgrepo-com.svg')}}" alt="" class="float-end px-4 pt-4" style="width: 40%;">
                <h3>Title</h3>
                <p style="text-align: justify; font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </li>
            <li class="news-cards splide__slide p-3 border border-black rounded-4">news 2</li>
            <li class="news-cards splide__slide p-3 border border-black rounded-4">news 3</li>
            <li class="news-cards splide__slide p-3 border border-black rounded-4">news 4</li>
            <li class="news-cards splide__slide p-3 border border-black rounded-4">news 5</li>
            <li class="news-cards splide__slide p-3 border border-black rounded-4">news 6</li>
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
        gap       : '2.5%',
        focus     : '.05',
        fixedWidth: 'clamp(339px, 40vw, 678px)',
        fixedHeight: 'clamp(200px, 26.67vw, 400px)',
        pagination: false,
      } );
      cards.mount();
      news.mount();

      // document.addEventListener('DOMContentLoaded', function () {
      //   var observer = new IntersectionObserver(handleIntersection, { threshold: 1 });

      //   var cards = document.querySelectorAll('.account-cards');
      //   cards.forEach(function(card) {
      //     observer.observe(card);
      //   });

      //   function handleIntersection(entries) {
      //     entries.forEach(function(entry) {
      //       var isHorizontallyVisible = entry.boundingClientRect.left > 0 && entry.boundingClientRect.right < entry.rootBounds.width;

      //       if (!isHorizontallyVisible) {
      //         entry.target.style.filter = 'blur(2px)';
      //       } else {
      //         entry.target.style.filter = 'none';
      //       }
      //     });
      //   }
      // });

      document.addEventListener('DOMContentLoaded', function () {
        var observer = new IntersectionObserver(handleIntersection, { threshold: 1 });

        var cards = document.querySelectorAll('.news-cards');
        cards.forEach(function(card) {
          observer.observe(card);
        });

        function handleIntersection(entries) {
          entries.forEach(function(entry) {

            if (!entry.isIntersecting) {
              entry.target.style.filter = 'blur(2px)';
            } else {
              entry.target.style.filter = 'none';
            }
          });
        }
      });

    </script>

  </main>

@endsection
