<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <header class="header-page">
    <div class="container">
      <a class="logo">
        <picture>
          <source srcset="img/logo-mobile.svg" media="(max-width: 480px)">
          <source srcset="img/logo-tablet.svg" media="(max-width: 1024px)">
          <img class="logo__img" src="img/logo.svg" alt="Логотип РостовЮг Трансфер">
        </picture>
      </a>
      <div class="header-contact-menu">
        <div class="messangers messangers_header">
          <?php include 'includes/messangers.php'?>
        </div>
        <div class="phones phones_header">
          <?php include 'includes/phones.php'?>
        </div>
        <button class="hamb" type="button">
          <span class="visually-hidden">открыть меню</span>
          <span class="hamb__line"></span>
        </button>
        <button class="close-menu" type="button">
          <span class="visually-hidden">закрыть меню</span>
        </button>
        <nav class="nav">
          <ul class="main-menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">Направления</a></li>
            <li><a href="#">Бронирование</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контаакты</a></li>
          </ul>
        </nav>
      </div><!-- header-contact-menu -->
    </div><!-- container -->
  </header>
  <main>

    <?php include 'includes/hero.php'?>

    <?php include 'includes/block-phones.php'?>

    <section class="rates">
      <h2 class="title-section">Тарифы</h2>
      <div class="container container_rates">
        <div class="tabs"></div><!-- tabs -->
      </div>
    </section><!-- rates -->

    <section class="servises">
      <h2 class="title-section">Наши услуги</h2>
      <div class="wrapper-list container">
        <div class="wrapper__item">
          <ul class="list list_servises">
            <li class="list__item">Пункт 1</li>
            <li class="list__item">Пункт 2</li>
            <li class="list__item">Пункт 2</li>
          </ul>
        </div><!-- wrapper__item -->
        <div class="wrapper__item">
          <h2 class="title-section sub-title">А также</h2>
          <ul class="list list_servises">
            <li class="list__item">Пункт 1</li>
            <li class="list__item">Пункт 2</li>
            <li class="list__item">Пункт 2</li>
          </ul>
        </div><!-- wrapper__item -->
      </div><!-- container -->
    </section><!-- servises -->

    <div class="booking">
      <p class="booking__slogan">Забронируйте поездку прямо сейчас</p>
      <p class="booking__call">Позпоните нам <?php include 'includes/phones.php'?></p>
      <p class="booking__online">или забронируйте <a href="#">онлайн</a> на сайте</p>
      <button class="order-btn" type="button">Забронировать</button>
    </div><!-- booking -->

    <section class="features">
      <h2 class="title-section">Наши дополнительные преимущества</h2>
      <ul class="list list_features">

        <li class="list__item">
          <div class="features__icon">
            <img src="img/icons/features/icon-comfort.svg" alt="">
          </div>
          <h3 class="features__title">Комфорт</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus, ea ex ipsam itaque maiores minima molestiae optio perferendis perspiciatis, quae quos recusandae repellat repudiandae sequi sint totam ullam veritatis?
          </p>
        </li><!-- list__item -->

        <li class="list__item">
          <div class="features__icon">
            <img src="img/icons/features/icon-time.svg" alt="">
          </div>
          <h3 class="features__title">Точность</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus, ea ex ipsam itaque maiores minima molestiae optio perferendis perspiciatis, quae quos recusandae repellat repudiandae sequi sint totam ullam veritatis?
          </p>
        </li><!-- list__item -->

        <li class="list__item">
          <div class="features__icon">
            <img src="img/icons/features/icon-price.svg" alt="">
          </div>
          <h3 class="features__title">Цена</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus, ea ex ipsam itaque maiores minima molestiae optio perferendis perspiciatis, quae quos recusandae repellat repudiandae sequi sint totam ullam veritatis?
          </p>
        </li><!-- list__item -->

        <li class="list__item">
          <div class="features__icon">
            <img src="img/icons/features/icon-doc.svg" alt="">
          </div>
          <h3 class="features__title">Квитанция</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus, ea ex ipsam itaque maiores minima molestiae optio perferendis perspiciatis, quae quos recusandae repellat repudiandae sequi sint totam ullam veritatis?
          </p>
        </li><!-- list__item -->

      </ul>
    </section>

    <section class="routs">
      <h2 class="title-section">Популярные направления</h2>

      <ul class="list list_routs">

        <li class="list__item">
          <img src="img/platov.jpg" alt="">
          <h3 class="routs__title">Аэропорт Платов</h3>
          <a class="routs__link" href="#">Заказать</a>
          <div class="routs__overlay"></div>
        </li><!-- list__item -->

        <li class="list__item">
          <img src="img/taganrog.jpg" alt="">
          <h3 class="routs__title">Таганрог</h3>
          <a class="routs__link" href="#">Заказать</a>
          <div class="routs__overlay"></div>
        </li><!-- list__item -->

        <li class="list__item">
          <img src="img/eysk.jpg" alt="">
          <h3 class="routs__title">Ейск</h3>
          <a class="routs__link" href="#">Заказать</a>
          <div class="routs__overlay"></div>
        </li><!-- list__item -->

        <li class="list__item">
          <img src="img/gelendgik.jpg" alt="">
          <h3 class="routs__title">Геленджик</h3>
          <a class="routs__link" href="#">Заказать</a>
          <div class="routs__overlay"></div>
        </li><!-- list__item -->

        <li class="list__item">
          <img src="img/krum.jpg" alt="">
          <h3 class="routs__title">Крым</h3>
          <a class="routs__link" href="#">Заказать</a>
          <div class="routs__overlay"></div>
        </li><!-- list__item -->

        <li class="list__item">
          <img src="img/volgodonsk.jpg" alt="">
          <h3 class="routs__title">Волгодонск</h3>
          <a class="routs__link" href="#">Заказать</a>
          <div class="routs__overlay"></div>
        </li><!-- list__item -->
      </ul>
    </section>

  </main>
  <footer class="footer-page">
    <div class="container">
      <h2>Контакты</h2>
      <h3>Наши телефоны</h3>
      <div class="phones phohes_footer">
        <?php include 'includes/phones.php'?>
      </div>
      <p class="email-footer">
        Эл. почта: <a href="mailto:taxiizrostova@gmail.com">taxiizrostova@gmail.com</a>
      </p>
      <h3>Мы в соц. сетях</h3>
      <ul class="list list_social">

        <li class="list__item">
          <a class="social__link social__link_vk" href="#"><span class="visually-hidden">РостовЮгТрансфер в вконтакте</span></a>
        </li><!-- list__item -->

        <li class="list__item">
          <a class="social__link social__link_facebook" href="#"><span class="visually-hidden">РостовЮгТрансфер в facebook</span></a>
        </li><!-- list__item -->

        <li class="list__item">
          <a class="social__link social__link_instagram" href="#"><span class="visually-hidden">РостовЮгТрансфер в instagram</span></a>
        </li><!-- list__item -->

        <li class="list__item">
          <a class="social__link social__link_twitter" href="#"><span class="visually-hidden">РостовЮгТрансфер в twitter</span></a>
        </li><!-- list__item -->

        <li class="list__item">
          <a class="social__link social__link_youtube" href="#"><span class="visually-hidden">РостовЮгТрансфер на youtube</span></a>
        </li><!-- list__item -->
      </ul>
      <ul class="footer-menu">
        <li><a href="#">Главная</a></li>
        <li><a href="#">Услуги</a></li>
        <li><a href="#">Направления</a></li>
        <li><a href="#">Бронирование</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Контаакты</a></li>
      </ul>
      <div class="copyright">
        <div>
          <a href="#">Пользовательское соглашение</a>
          <a href="#">Оферта</a>
        </div>
        <span>&copy; <?php echo date('Y') ?> РостовЮгТрансфер</span>
        <a href="#">Design by S. Polyanskay@</a>
      </div><!-- copyright -->
    </div><!-- container -->
  </footer>
<button class="btn-up" type="button"><span class="visually-hidden">Наверх</span></button>
</body>
</html>