<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pedicure Anet</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="https://use.typekit.net/ybg3bti.css">

</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="/images/pedicure-anet-logo.svg" alt="" width="100">
      </a>
    </div>
  </nav>

  <div class="bg-light py-4 py-md-5">
    <div class="container py-4 py-md-5">
      <div class="row">
        <div class="col-xl-1"></div>
        <div class="col-12 col-md-4 col-xl-3">
          <span class="h1">Welkom bij</span><br /><br />
          <img class="mb-5" src="/images/pedicure-anet-logo.svg" alt="Pedicure Anet" width="206">
          <h1 class="invisible position-absolute">Pedicure Anet</h1>
          <p class="lead">
            Een gezellige pedicure voor de werkende mens en
            ontspanning met flexible werktijden.
          </p>
        </div>
        <div class="col-md-1 col-xl-1"></div>
        <div class="col-12 col-md-7 col-xl-6 mb-5">
          <img class="rounded" src="/images/pedicure-anet-salon.jpeg" alt="Pedicure Anet salon" width="100%" />
        </div>
        <div class="col-xl-1"></div>
      </div>
    </div>
  </div>

  <div class="bg-primary py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-xl-1"></div>
        <div class="col-xl-3">
            <img src="/images/anette-tempelaar-bakker.jpeg" alt="Pedicure Anet" width="100%">
        </div>
        <div class="col-xl-1"></div>
        <div class="col-xl-6">
            <h2 class="text-light">Even voorstellen</h2>
            <span style="font-family: alisha, sans-serif;" class="display-3 text-secondary">
                Anette Tempelaar
            </span>
            <p class="text-light lead">
                Ik ben Anette Tempelaar. Ik ben 52 jaar oud, getrouwd en heb 2
                lieve kinderen van 27 & 30 jaar oud. Mijn energie haal ik uit het
                werken met mensen.
            </p>
            <p>

            </p>
            <p>
                Ik vind het leuk om met mensen te werken. Daarnaast vind ik het
                ook fijn om mensen te verzorgen. Hierom heb ik jou graag als
                klant in mijn Pedicure salon.
            </p>
        </div>
        <div class="col-xl-1"></div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
