<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Beauty</title>
    <?php wp_head();?>
  </head>

  <body>
    <head>
      <div class="header-body">
        <nav class="header-body__menu">
          <div class="body-elems header-body__menu_theme">
            <ul class="uls header-menu__ul">
              <li class="lis header-menu__li">
                <a class="links header-menu__links" href="">Доставка</a>
              </li>
              <li class="lis header-menu__li">
                <a class="links header-menu__links" href="">Оплата</a>
              </li>
              <li class="lis header-menu__li">
                <a class="links header-menu__links" href="">Отзывы</a>
              </li>
              <li class="lis header-menu__li">
                <a class="links header-menu__links" href="">Вопрос - ответ</a>
              </li>
              <li class="lis header-menu__li">
                <a class="links header-menu__links" href="">Контакты</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="body-elems header-body__info">
          <div class="header-body__info_theme">
            <div class="info-theme-logo">
              <?php the_custom_logo();?>
              <span class="info-theme__logo-name">BEAUTY</span>
            </div>
            <div>
              <span class="info-theme__logo-phone">8 (812) 123-45-67</span>
            </div>
            <div>
              <button class="btn info-theme__btn">Обратный звонок</button>
            </div>
          </div>
        </div>
        <div class="line"></div>
        <div class="body-elems header-body__tabs">
          <div class="header-body__tabs_theme">
            <ul class="uls header-tabs__ul">
              <li class="lis header-tabs__li">
                <a class="links header-tabs__links" href="">Парикмахерская</a>
              </li>
              <li class="lis header-tabs__li">
                <a class="links header-tabs__links" href="">Барбершоп</a>
              </li>
              <li class="lis header-tabs__li">
                <a class="links header-tabs__links" href="">Маникюр</a>
              </li>
              <li class="lis header-tabs__li">
                <a class="links header-tabs__links" href="">Педикюр</a>
              </li>
              <li class="lis header-tabs__li">
                <a class="links header-tabs__links" href="">Массаж</a>
              </li>
              <li class="lis header-tabs__li">
                <a class="links header-tabs__links" href="">Мебель</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </head>
    <section>
      <div class="banner-wrapper">
        <div class="banner-elements">
          <div>
            <h1 class="banner-elements__title"><?php the_field('main_title');?></h1>
          </div>
          <div>
            <p class="banner-elements__text">
              Текст акции всегда отражает суть, а не просто болтовню, поэтому
              внимательнее
            </p>
          </div>
          <div>
            <button class="btn banner-elements__btn">Подробнее</button>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="goods-wrapper">
        <div class="body-elems goods-grid">
          <div class="goods-elements__title">
            <p>Специальные предложения</p>
          </div>
          <div class="goods-elements__sticker">
            <img class="sticker-img" src="<?php echo get_template_directory_uri()?>/img/car.svg" alt="" />
          </div>
          <div class="good-elements__product product-1">
            <img class="product__img" src="<?php echo get_template_directory_uri()?>/img/chair.png" alt="" />
            <p class="product__description">
              Парикмахерское кресло «Норм» гидравлическое
            </p>
            <p class="product__price">9 900 ₽</p>
            <button class="btn product__btn">Купить</button>
          </div>
          <div class="good-elements__product product-2">
            <img class="product__img" src="<?php echo get_template_directory_uri()?>/img/chair.png" alt="" />
            <p class="product__description">
              Парикмахерское кресло «Норм» гидравлическое
            </p>
            <p class="product__price">9 900 ₽</p>
            <button class="btn product__btn">Купить</button>
          </div>
          <div class="good-elements__product product-3">
            <img class="product__img" src="<?php echo get_template_directory_uri()?>/img/chair.png" alt="" />
            <p class="product__description">
              Парикмахерское кресло «Норм» гидравлическое
            </p>
            <p class="product__price">9 900 ₽</p>
            <button class="btn product__btn">Купить</button>
          </div>
          <div class="good-elements__product product-4">
            <img class="product__img" src="<?php echo get_template_directory_uri()?>/img/chair.png" alt="" />
            <p class="product__description">
              Парикмахерское кресло «Норм» гидравлическое
            </p>
            <p class="product__price">9 900 ₽</p>
            <button class="btn product__btn">Купить</button>
          </div>
          <div class="advert goods-elements__advert1">
            <div class="avert-title">
              <p>Получайте бонусы и подарки</p>
            </div>
            <div class="avert-description advert-description-1">
              <div>
                <p class="avert-description-text">
                  Каждый месяц разыгрываем 10000 рублей для наших клиентов
                </p>
              </div>
              <div class="advert-description-1-envelope">
                <img src="<?php echo get_template_directory_uri()?>/img/envelope.svg" alt="" />
              </div>
            </div>
            <div class="avert-input">
              <input
                class="advert-input-email"
                type="email"
                placeholder="Введите e-mail"
              />
            </div>
          </div>
          <div class="advert goods-elements__advert2">
            <div class="avert-title">
              <p>Заходите к нам</p>
            </div>
            <div class="avert-description advert-description-2">
              <p class="avert-description-text">
                Более 300 магазинов по всей России
              </p>
            </div>
            <div class="avert-button">
              <button class="btn advert-button__btn">Карта магазинов</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="footer-body">
        <div class="body-elems footer-body__info">
          <div class="footer-social-media">
            <ul class="uls footer_ul">
              <li class="lis footer__li">
                <a class="social-media-item social-youtube" href=""></a>
              </li>
              <li class="lis footer__li">
                <a class="social-media-item social-vk" href=""></a>
              </li>
              <li class="lis footer__li">
                <a class="social-media-item social-facebook" href=""></a>
              </li>
              <li class="lis footer__li">
                <a class="social-media-item social-instagram" href=""></a>
              </li>
            </ul>
          </div>
          <div>
            <span class="footer-adress">198555, Невский пр. 140, офис 140</span>
          </div>
          <div>
            <span class="footer-phone">8 (812) 123-45-67</span>
          </div>
          <div>
            <button class="btn info-theme__btn">Обратный звонок</button>
          </div>
        </div>
        <div class="footer-body__copyright">
          <div class="body-elems footer-copyright-elements">
            <div>
              <p>
                Лучший магазин (с) 2019 Все права защищены. Интернет-магазин
                оборудования для салонов красоты
              </p>
            </div>
            <div><p>Политика конфиденциальности</p></div>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer();?>
  </body>
</html>
