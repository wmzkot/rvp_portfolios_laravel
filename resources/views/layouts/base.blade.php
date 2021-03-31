<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Коворкинг Изи</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/business-frontpage.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('css/custom.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  @stack('styles')

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">Коворкинг Изи {{--$_SERVER['REQUEST_URI']--}}</a>
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
            <a class="nav-link" href="{{asset('about')}}">О нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('portfolio')}}">Помещения/офисы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('contacts')}}">Контакты</a>
          </li>

          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                  </li>
              @endif
          @else
            <li class="nav-item">
                <a class="nav-link" href="{{asset('home')}}">Редактировать</a>
            </li>
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
  <header class="py-5 mb-5 main-header">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Коворкинг в центре Минска</h1>
          <p class="lead mb-5 text-white-50">Число людей, выбравших свободный график работы, растет во всем мире. Провести лекцию, семинар, тренинг, организовать полноценное рабочее место дома — трудно по многим причинам. Ведь уютная обстановка жилого помещения с детства ассоциируется у нас с отдыхом и комфортом. А разовая аренда помещений для тренинга без специализированной аппаратуры – неудобна и невыгодна, так как минимальный срок аренды начинается от трех месяцев. У нас вы можете взять абонемент на ежемесячное безлимитное пользование коворкингом и всеми удобствами, а также снять конференц-зал или переговорки.</p>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">

              <div class="cmsmasters_text">
                <h3 style="text-align: center;">Что мы можем предложить в новом коворкинге?</h3>
              </div>

              <div class="cmsmasters_text">
                <ul>
                  <li>круглосуточный доступ в коворкинг</li>
                  <li>места в коворинге фиксированные, т.е. закрепляются за каждым человеком</li>
                  <li>гостевые визиты</li>
                  <li>кухня с кофемашиной, чаем, какао, печеньем, холодильником, духовкой и посудомойкой</li>
                  <li>принтер</li>
                  <li>Wi-Fi, оптоволокно</li>
                  <li>аренда юридического адреса</li>
                  <li>4-метровые окна</li>
                  <li>6-метровые потолки</li>
                  <li>кухня</li>
                  <li>переговорные комнаты (3 помещения разного размера)</li>
                  <li>закрытая парковка</li>
                </ul>
              </div>

            </div>
            <div class="col-md-4 col-sm-12">

              <div class="cmsmasters_text">
                <h3 style="text-align: center;">Коворкинг-центр для бизнеса и неформального общения</h3>
              </div>

              <div class="cmsmasters_text">
                <p>Требуется провести лекцию для сотрудников или снять конференц-зал – приходите в новый коворкинг центр в центре города.
                Бизнес-клуб cwork.by рад всем, кто нуждается в красивом помещении для деловых встреч. К услугам клиентов:</p>
                <ul>
                  <li>небольшие уютные помещения для переговоров и совещаний,</li>
                  <li>компактные тренинг-комнаты, рассчитанные на 20-30 человек;</li>
                  <li>отдельные коворкинг места;</li>
                </ul>

                <div id="accordion">
                    <div class="card">
                        
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-success" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Подробнее о преимуществах...
                            </button>
                        </h5>
                        

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p>Посетителей ждет у нас современный дизайн, удобная мебель, современная аппаратура. У нас вы сможете взять
                            в аренду место на сутки или на месяц, организовать проведение мероприятия в Минске на достойном уровне.
                            Предусмотрена аренда рабочего места для самостоятельной работы и гостевые визиты, а также аренда переговорных
                            комнат, включенная в стоимость месячного абонемента (4 часа в месяц).</p>
                            
                            <ul>
                                <li>Самый центр города: кинотеатры, бары, кафе, рестораны и торговые центры в 2 остановках метро</li>
                                <li>Готовые планировочные решения для рассадки команд</li>
                                <li>Есть возможность гибкого размещения части сотрудников в коворкинге</li>
                                <li>Возможность использования за дополнительную плату переговорной комнаты в коворкинге</li>
                                <li>Закрытая парковка с возможностью помесячной аренды машиноместа</li>
                                <li>Крытая велопарковка</li>
                                <li>Зоны отдыха на улице и внутри здания</li>
                            </ul>

                        </div>
                        </div>
                    </div>
                    
                    </div>



                

              </div>
            </div>

            <div class="col-md-4 col-sm-12">

              <div class="cmsmasters_text">
                <h3 style="text-align: center;">Какие варианты есть для размещения в коворкинге?</h3>
              </div>

              <div class="cmsmasters_text">
                <p><strong>Рабочее место на месяц в коворкинг-пространстве на Пинской:</strong></p>
                <ul>
                  <li>160 евро по курсу НБРБ в бел.руб. на день оплаты без юр.адреса (стоимость указана с учетом НДС, возможна оплата по безналичному расчету)</li>
                  <li>180 евро по курсу НБРБ в бел. руб. на день оплаты с юр.адресом (стоимость указана с учетом НДС, возможна оплата по безналичному расчету)</li>
                  <li>место закреплено за вами</li>
                  <li>1 бесплатный гостевой визит на 1 сутки в течение месяца</li>
                  
                </ul>
                
              </div>
            </div>

          </div>
  </div>

  <div class="container slides">
    <div id="cmsmasters_hover_slider_6063845141a97" class="cmsmasters_hover_slider">
    
    <div id='slide' class='slide' style=''>
        <img id='slide_img' width="100%" src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-001-860x480.jpg" class="attachment-post-thumbnail size-post-thumbnail" alt="">
    </div>
  
    <ul class="thumbs">
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-001-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-002-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-003-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-004-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-005-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-006-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-007-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-008-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-009-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-010-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-011-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-012-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-013-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-014-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-015-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-016-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-017-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-018-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-019-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-020-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-021-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-022-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-023-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-024-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-025-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-026-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-027-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-028-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-029-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-030-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-036-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-037-860x480.jpg" alt="" width="100" height="60"></li>
        <li class="shortcode_animated"><img src="/images/slider/снять-место-в-коворкинге-в-аренду-в-минске-на-месяц-038-860x480.jpg" alt="" width="100" height="60"></li>
    </ul>
</div>
  </div>



@ENDIF

  <!-- Page Content -->
  <div class="container my-4">

    <div class="row">
      <div class="col">
        @yield('content')
      </div>
    </div>
  </div>
  <!-- /.container -->








  <div id="contacts" class='mb-4 mt-4'></div>


  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark text-light">
    <div class="container">

      <div class="copygight text-center">
        <div itemscope="" itemtype="https://schema.org/Organization">
            &copy; <a href="https://cwork.ga" target="_blank">Открытое акционерное общество "Коворкинг Изи"</a>

            <div itemprop="address" itemscope="" itemtype="https://schema.org/PostalAddress">
                Юридический адрес:
                <span itemprop="postalCode">220118</span>,
                <span itemprop="addressLocality">Республика Беларусь, г.Минск</span>,
                <span itemprop="streetAddress">ул.Пинская, 26</span>
            </div>
                телефон: <span itemprop="telephone"><a href="tel:+375 (17) 451-70-66">+375 (17) 451-70-66</a></span>,
                факс: <span itemprop="faxNumber"><a href="tel:+375 (17) 451-46-69">+375 (17) 451-46-69</a></span>,
                e-mail: <span itemprop="email"><a href="mailto:info@cwork.ga">info@cwork.ga</a></span>

            <div>
                <p>режим работы: будние дни c 09<sup>00</sup> до 18<sup>00</sup>; суббота-воскресенье — выходной<br>
                Лицензия от 30.09.2016 № 1**11/660 выдана Министерством по налогам и сборам Республики Беларусь<br>
                УНП 19*696*37<br>
                

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

    <p class='text-center'>Все изображения и текст на сайте заимствованы с реального сайта coworking.by с незначительными изменениями</p>

    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('../vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('../vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/js/app.js')}}"></script>
  <script src="{{asset('/js/slide.js')}}"></script>

@stack('scripts')
</body>

</html>
