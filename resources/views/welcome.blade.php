<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pedicure Anet</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container justify-content-between">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/pedicure-anet-logo.svg') }}" alt="" width="100">
      </a>
      <div>
          <a href="mailto:pedicureanet@outlook.com" class="btn btn-primary text-light">
            Stuur een e-mail
          </a>
          <a href="tel:+31647262704" class="btn btn-primary text-light">
            Bel voor een afspraak
          </a>
          <a href="https://www.facebook.com/Pedicure-Anet-107111838095537" target="_blank"
             class="btn btn-primary text-light">
            Facebook
          </a>
      </div>
    </div>
  </nav>

  <div class="bg-light py-4 py-md-5">
    <div class="container py-4 py-md-5">
      <div class="row">
        <div class="col-xl-1"></div>
        <div class="col-12 col-md-4 col-xl-3">
          <span class="h1">Welkom bij</span><br /><br />
          <img class="mb-5" src="{{ asset('images/pedicure-anet-logo.svg') }}" alt="Pedicure Anet" width="206">
          <h1 class="invisible position-absolute">Pedicure Anet</h1>
          <p class="lead">
            Een gezellige pedicure voor de werkende mens en
            ontspanning met flexible werktijden.
          </p>
        </div>
        <div class="col-md-1 col-xl-1"></div>
        <div class="col-12 col-md-7 col-xl-6 mb-5">
          <img class="rounded" src="{{ asset('images/pedicure-anet-salon.jpeg') }}" alt="Pedicure Anet salon" width="100%" />
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
            <img src="{{ asset('images/anette-tempelaar-bakker.jpeg') }}" alt="Pedicure Anet" width="100%">
        </div>
        <div class="col-xl-1"></div>
        <div class="col-xl-6">
            <h2 class="text-light">Even voorstellen</h2>
            <span style="font-family: 'Dancing script', sans-serif;" class="display-3 text-secondary">
                Anette Tempelaar-Bakker
            </span>
            <p class="text-light lead">
                Ik ben Anette Tempelaar-Bakker. Ik ben 53 jaar oud, getrouwd en heb 2
                lieve kinderen van 28 & 30 jaar oud. Mijn energie haal ik uit het
                werken met mensen.
            </p>
            <p class="text-light">
                Ik vind het leuk om met mensen te werken. Daarnaast vind ik het
                ook fijn om mensen te verzorgen. Hierom heb ik jou graag als
                klant in mijn Pedicure salon.
            </p>
            <br /><br />
            <p class="text-light">
                <strong>Momenteel ben ik nog 2 dagen werkzaam in het Ziekenhuis. Hierdoor ben ik op dinsdag
                en donderdag pas vanaf 17:00 te bereiken.</strong>
            </p>
        </div>
        <div class="col-xl-1"></div>
      </div>
    </div>
  </div>

  <div class="bg-light py-4 py-md-5">
    <div class="container py-4 py-md-5">
      <div class="row">
        <div class="col-12">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-cf26a924-8251-4315-aff9-9d7c5cc7580e"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-light py-4 py-md-5">
    <div class="container py-4 py-md-5">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-12 col-md-10 text-center">
            <h2 style="font-family: alisha, sans-serif;" class="display-3 text-secondary">
                Prijslijst
            </h2><br />
            <a href="{{ asset('files/prijslijst.pdf') }}" download>
                <img src="{{ asset('images/prijslijst.jpg') }}" width="100%" alt="Prijslijst - Pedicure Anet">
            </a>
            <br /><br />
            <a href="{{ asset('files/prijslijst.pdf') }}" download class="btn btn-lg btn-primary text-light">
                Download de prijslijst
            </a>
        </div>
        <div class="col-md-1">
        </div>
      </div>
    </div>
  </div>

  <div class="bg-primary py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-xl-1"></div>
        <div class="col-xl-3">
            <h3 class="text-light">Contact</h3>
            <p class="text-light">
                Rietveld-erf 36<br />
                3315 DB, Dordrecht
            </p>
            <p class="text-light">
                <a class="text-light" href="mailto:pedicureanet@outlook.com">
                    pedicureanet@outlook.com
                </a><br />
                <a class="text-light" href="tel:+31647262704">
                    06 - 47 26 27 04
                </a>
            </p>

        </div>
      </div>
    </div>
  </div>


  <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
