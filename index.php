
  <?php include 'header.php'?>
  
  <main>

    <?php include 'includes/hero.php'?>

    <?php include 'includes/block-phones.php'?>

    <section class="rates">
      <div class="container container_rates">
        <h2 class="title-section">Тарифы</h2>
        <div class="tab-wrapper">

          <header class="tab-menu">
            <ul>
              <li>Стандарт</li>
              <li>Комфорт</li>
              <li>Бизнес</li>
            </ul>
            <button class="order-btn" type="button">Заказать</button>
          </header>
          <div class="tab-content">

          </div>
        </div><!-- tabs -->
      </div>
    </section><!-- rates -->

    <section class="servises">
      <h2 class="title-section">Наши услуги</h2>
      <div class="wrapper-list container">
        <div class="wrapper__item">
          <ul class="list list_services">
            <li class="list__item">Пункт 1</li>
            <li class="list__item">Пункт 2</li>
            <li class="list__item">Пункт 2</li>
          </ul>
        </div><!-- wrapper__item -->
        <div class="wrapper__item">
          <h2 class="title-section sub-title visually-hidden">А также</h2>
          <ul class="list list_services">
            <li class="list__item">Пункт 1</li>
            <li class="list__item">Пункт 2</li>
            <li class="list__item">Пункт 2</li>
          </ul>
        </div><!-- wrapper__item -->
      </div><!-- container -->
    </section><!-- servises -->

    <div class="booking">
      <p class="booking__slogan">Забронируйте поездку прямо сейчас</p>
      <p class="booking__call">Позвоните нам <?php include 'includes/phones.php'?></p>
      <p class="booking__online">или забронируйте <a href="page-booking.php">онлайн</a> на сайте</p>
      <button class="order-btn" type="button">Забронировать</button>
    </div><!-- booking -->

    <section class="features">
      <h2 class="title-section">Наши дополнительные преимущества</h2>
      <ul class="list list_features container">

        <li class="list__item">
          <div class="features__icon">
            <img src="img/icons/features/icon-comfort.svg" alt="">
          </div>
          <h3 class="features__title">Комфорт</h3>
          <div class="list__desc">
            Поездка должна быть комфортной. Это обеспечивают наши автомобили известных брендов
          </div>
        </li><!-- list__item -->

        <li class="list__item">
          <div class="features__icon">
            <img src="img/icons/features/icon-time.svg" alt="">
          </div>
          <h3 class="features__title">Точность</h3>
          <div class="list__desc">
            Мы ценим Ваше время. Наши пунктуальные водители никогда не опаздывают на заказ
          </div>
        </li><!-- list__item -->

        <li class="list__item">
          <div class="features__icon">
            <img src="img/icons/features/icon-price.svg" alt="">
          </div>
          <h3 class="features__title">Цена</h3>
          <div class="list__desc">
            Фиксированная цена поездки вне зависимости от времени в пути и пробок
          </div>
        </li><!-- list__item -->

        <li class="list__item">
          <div class="features__icon">
            <img src="img/icons/features/icon-doc.svg" alt="">
          </div>
          <h3 class="features__title">Квитанция</h3>
          <div class="list__desc">
            Предоставляем документы о поездке, Бланки Строгой Отчетности
          </div>
        </li><!-- list__item -->

      </ul>
    </section>

    <section class="routs">
      <h2 class="title-section">Популярные направления</h2>
      <div class="container">
        <ul class="list list_routs">
          <?php foreach ($routs as $item) : ?>
          <li class="list__item">
            <img class="routs__img" src="<?php echo $item['img']; ?>" alt="">
            <h3 class="routs__title"><?php echo $item['title']; ?></h3>
            <a class="routs__link" href="./page-booking.php?title=<?php echo $item['title']; ?>">Заказать</a>
            <div class="routs__overlay"></div>
          </li><!-- list__item -->
          <?php endforeach; ?>
        </ul>
      </div>
    </section>

  </main>

</html>