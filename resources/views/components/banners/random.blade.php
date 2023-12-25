<section id="random-carousel" class="w-100 carousel slide carousel-dark slide" data-bs-ride="carousel" data-bs-touch="false" style="height: 250px;">

  <div class="carousel-inner">

    @php
      $data = [
        ["praia-do-aventureiro-ilha-grande-shutterstockk.webp", "asset-utilization.png"],
        ["", "bank-svgrepo-com.svg"],
        ["", "bulletin-journal-magazine-svgrepo-com.svg"]
      ];
    @endphp

    @foreach ($data as $dt)
      <div class="carousel-item @if ($loop->first)active @endif" data-bs-interval="5000" style="background-image: url('{{ asset('assets/images/' . $dt[0]) }}'); background-repeat: no-repeat; background-position: center; background-position-y: 72%;">
        <img src="{{ asset('assets/images/' . $dt[1]) }}" class="d-block m-auto" style="height: 250px;" alt="...">
      </div>
    @endforeach

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#random-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#random-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</section>