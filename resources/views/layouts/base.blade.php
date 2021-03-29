<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Business Frontpage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/business-frontpage.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('css/custom.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.15.1/css/all.css">
  @stack('styles')

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap {{$_SERVER['REQUEST_URI']}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{asset('about')}}">Обо мне</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('portfolio')}}">Портфолио</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('contact')}}">Контакты</a>
          </li>

          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
@IF($_SERVER['REQUEST_URI'] == '/')
  <!-- Header -->
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Business Name or Tagline</h1>
          <p class="lead mb-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non possimus ab labore provident mollitia. Id assumenda voluptate earum corporis facere quibusdam quisquam iste ipsa cumque unde nisi, totam quas ipsam.</p>
        </div>
      </div>
    </div>
  </header>
@ENDIF
  <!-- Page Content -->
  @yield('content')
  <div id="contacts"></div>


  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark text-light">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>

      <div class="copygight text-center">
        <div itemscope="" itemtype="https://schema.org/Organization">
            <a href="https://ucp.by" target="_blank">Государственное учреждение образования "Универсистет гражданской защиты министерства по чрезвычайным ситуациям Республики Беларусь"</a>

            <div itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
                Юридический адрес:
                <span itemprop="postalCode">220118</span>,
                <span itemprop="addressLocality">Республика Беларусь, г.Минск</span>,
                <span itemprop="streetAddress">ул.Машиностроителей, 25</span>
            </div>
                телефон: <span itemprop="telephone"><a href="tel:+375(17)340-69-55">+375 (17) 340-69-55</a></span>,
                факс: <span itemprop="faxNumber"><a href="tel:+375(17)340-35-58">+375 (17) 340-35-58</a></span>,
                e-mail: <span itemprop="email"><a href="mailto:fpipk@ucp.by">fpipk@ucp.by</a></span>

            <div>
                <p>режим работы: будние дни c 09<sup>00</sup> до 18<sup>00</sup>; суббота-воскресенье — выходной<br>
                Лицензия от 30.09.2016 № 02100/559 выдана Министерством образования Республики Беларусь<br>
                УНП 192695026<br>

                </p>
            </div>


        </div>
    </div>

      <div class="paysystems">
        <div class="row d-flex">
            <div class="row m-auto align-items-center justify-content-center">
                <div class="p-2 m-2 mh-50 bg-white"><img class="" src="/images/paysystems/2.png"></div>
                <div class="p-2 m-2 mh-50 bg-white"><img class="" src="/images/paysystems/1.png"></div>
                <div class="p-2 m-2 mh-50 bg-white"><img class="" src="/images/paysystems/3.png"></div>
                <div class="p-2 m-2 mh-50 bg-white"><img class="" src="/images/paysystems/4.png"></div>
                <div class="p-2 m-2 mh-50 bg-white"><img class="" src="/images/paysystems/5.png"></div>
                <div class="p-2 m-2 mh-50 bg-white"><img class="" src="/images/paysystems/6.png"></div>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('../vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('../vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/js/app.js')}}"></script>

@stack('scripts')
</body>

</html>
