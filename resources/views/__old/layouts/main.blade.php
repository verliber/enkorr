@if(!Input::get('ajax'))<!DOCTYPE html>
  <html lang="ru">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

      <title>@yield('title')</title>
      <meta property="og:title" content="@yield('title')">
      <meta property="og:type" content="website">
      <meta property="og:url" content="{{ lPath($node->absolute_path) }}">
      <meta property="og:image" content="@yield('image')">
      <meta name="description" content="@yield('description')">

      <link rel="manifest" href="{{ url('manifest.json') }}">
      <link rel="shortcut icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
      <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">

      <link rel="stylesheet" href="{{ asset('asset/vendor/font-awesome/css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="{{asset('asset/vendor/owl.carousel/dist/assets/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{asset('asset/vendor/jssocials/dist/jssocials.css') }}">
      <link rel="stylesheet" href="{{asset('asset/vendor/jssocials/dist/jssocials-theme-flat.css') }}">
      <link rel="stylesheet" href="{{ asset('asset/dist/css/bootstrap.min.css') }}">
      <!-- / Vendor styles -->

      <script src="{{ asset('asset/vendor/jquery/jquery-3.2.1/jquery.min.js') }}"></script>
      <script src="{{ asset('asset/vendor/chart-js/chart.min.js') }}"></script>
      <script src="{{ asset('asset/vendor/cookie/jquery.cookie.js')}}"></script>

      <!-- App styles -->
      <link rel="stylesheet" href="{{asset('asset/css/style.css?8')}}">
      <!-- / App styles -->
    </head>
    <body>

      <div class="brand-wall">
        @if(isset($main_banner))
          {{-- TODO: position: fixed якшо банер закріплений --}}
          <div class="visible-lg" style="{{ $main_banner->fix ? 'position: fixed;' : null }} background-image: url({{iPath($main_banner->image, 'full')}}); background-color: @if(isset($main_banner->color)) {{$main_banner->color}} @else #000 @endif;"></div>
        @endif
      </div>

      <header>

        <nav class="navbar navbar-inverse">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle x collapsed" data-toggle="collapse" data-target="#navbar-collapse-x">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ lPath('/') }}"><img src="{{ asset('/asset/img/logo.png') }}" alt="logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-x">
              <div class="menu-line">
                <ul class="nav navbar-nav navbar-right top-menu">
                  @foreach($additional_menu as $additional_menu_item)
                    <li class=""><a href="{{ lPath($additional_menu_item->link) }}">{{ $additional_menu_item->name }}</a></li>
                  @endforeach
                </ul>
              </div>
              <div class="menu-line text-center">


                <ul class="nav navbar-nav main-nav">
                  @foreach($sections as $section)
                    <li class=""><a href="{{ lPath($section->link) }}">{{ $section->name }}</a></li>
                  @endforeach
                </ul>

                <ul class="nav navbar-nav navbar-right main-nav-right">
                  <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                  <li><a href="{{ lPath('/auth/login') }}">{{ __('Войти') }}</a></li>
                </ul>
              </div>
              
              

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="scroll-top-container">
          <div class="scroll-top text-uppercase"><i class="fa fa-arrow-circle-up"></i> <span>{{__('Вверх')}}</span></div>
        </div>
      </header>

      @yield('section')

      <footer class="xs-pt-30 xs-pb-20 sm-pb-35 sm-pt-50">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="footer-logo-wrapp sm-mt-15">
                <img src="{{ asset('/asset/img/footer-logo.png') }}">
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="footer-form">
                <form>
                  <p class="email-label xs-mt-15 sm-mt-0">Подпишитесь на еженедельную рассылку:</p>
                  <div class="form-group footer-form">
                    <input type="email" class="form-control footer-email md-mt-20" id="email" placeholder="Email">
                    <button class="submit-email"><i class="fa fa-long-arrow-right"></i></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-12 col-md-5">
              <p class="footer-text md-ml-35 xs-mt-20 md-mt-20">При перепечатке материалов сайта гиперссылка на enkorr.com.ua обязательна. Все материалы, размещенные на enkorr.com.ua со ссылкой на ИА “Интерфакс-Украина”, не подлежат дальнейшему распространению, кроме как с письменного разрешения ИА.</p>
            </div>
          </div>
          <div class="footer-bottom-line row sm-mt-60 xs-mt-20">
            <div class="col-sm-6">
              <p class="license text-uppercase">© EnKorr 2017. Все права защищены</p>
            </div>
            <div class="col-sm-6 text-md-right">
              <ul class="footer-social">
                <li><a href="#" class="fb-color"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>




      <script src="{{asset('asset/vendor/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('asset/libs/pace/pace.min.js') }}"></script>
      <script src="{{asset('asset/vendor/owl.carousel/dist/owl.carousel.min.js') }}"></script>
      <script src="{{asset('asset/vendor/jssocials/dist/jssocials.min.js') }}"></script>
      <script src="{{asset('asset/vendor/bootstrap-sass/assets/javascripts/bootstrap.min.js')}}"></script>



      <!-- Latest compiled and minified JavaScript -->
      <script>
        $(document).ready(function(){
          $('.owl-carousel-home').owlCarousel({
            loop:false,
            margin:0,
            //navText: ['',''],
            nav:false,
            dots: true,
            responsive:{
              0:{
                items:1
              },
              600:{
                items:1
              },
              1000:{
                items:1
              }
            }
          });

          var navMain = $(".navbar-collapse");
          navMain.on("click", "a:not([data-toggle])", null, function () {
            navMain.collapse('hide');
          });

          $(document).on('click',function(){
            $('.collapse').collapse('hide');
          })

          var owl = $('.owl-carousel-home');
          owl.owlCarousel();

          $('.customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
          });

          $('.customPrevBtn').click(function() {
            owl.trigger('prev.owl.carousel', [300]);
          });

          var equalizeColumns = function(selector) {
            var maxDisplayPoint = 959;
            var columns = $(selector);
            var maxHeight = 0;
            if($(window).width() >= maxDisplayPoint)
            {
              columns.each(function(){
                $(this).height('auto');
              });
              columns.each(function(){
                var curentHeight = $(this).height();

                if(curentHeight > maxHeight){
                  maxHeight = curentHeight;
                }

              });

              $(selector).height(maxHeight);
            }
            else
            {
              columns.css('height','auto');
            }
          }

          $(function(){
            var selector = '.equal-block';
            setTimeout(function(){
              equalizeColumns(selector);
            }, 50);

            $(window).on('resize', function(){
              equalizeColumns(selector);
            });

          });
          $("#share").jsSocials({
            shares: ["twitter", "facebook"]
          });

          var lastScrollTop = 0;
          $(window).scroll(function(event){
            var st = $(this).scrollTop();
            if (st > lastScrollTop){
              $('.scroll-top').removeClass('active');
            } else {
              if($(window).scrollTop() >= 150)
              {
                $('.scroll-top').addClass('active');
              }
              else
              {
                $('.scroll-top').removeClass('active');
              }
            }
            lastScrollTop = st;
          });


          $('.scroll-top').on('click', function() {
            $('html, body').scrollTop(0);
            $(this).removeClass('active');
          });

          

        });
      </script>

      @yield('js')
    </body>
  </html>
@endif
