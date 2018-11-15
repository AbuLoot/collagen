<?php session_start(); ?>
<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
  <link rel="shortcut icon" href="images/favicon.png"/>
  <title>100% Говяжий Протеин</title>
  <meta name="description" content="Протеин полученный из натурального говяжьего белка, для набора мыщечной массы, для укрепления суставов и связок.">

  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/settings.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="css/owl.transitions.css" type="text/css" media="all"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="css/custom.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="css/my.css" type="text/css" media="all"/>
  <!-- <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900%7CLibre+Baskerville:400,400i,700" rel="stylesheet"/> -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- <div class="noo-spinner">
    <div class="spinner">
      <div class="cube1"></div>
      <div class="cube2"></div>
    </div>
  </div> -->

  <div class="site">
    <main id="main">
      <header class="bg-header pt-3">
        <div class="section">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <div class="branding__logo">
                  <a href="/">
                    <img src="images/collagen/logo.png" alt="Biotic Collagen»" class="main-logo">
                  </a>
                  <h3 class="heading small fz-24 white"> Натуральный продукт</h3>
                </div>
              </div>
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
                <div class="phones">
                  <a href="tel:+77759557171" target="_top" data-attr="phone"><i class="fa fa-phone"></i> 8 (775) 955 71 71</a>
                  <a href="whatsapp://send?phone=+77759557171" target="_top" data-attr="whatsapp_call"><i class="fa fa-whatsapp"></i> 8 (775) 955 71 71</a>
                </div>
              </div>
            </div>
            <div class="row header-main-content">
              <div class="col-sm-7">
                <h3 class="heading primary-color text-uppercase header-title"> 100% Говяжий Протеин</h3>
                <div class="row">
                  <div class="col-sm-10">
                    <p class="primary-color- white fz-28 lh-28 ls-1">Протеин полученный из натурального говяжьего белка, для набора мыщечной массы, для укрепления суставов и связок.</p>
                  </div>
                </div>
                <h3 class="heading primary-color header-price fz-60 "> 9500〒</h3>
              </div>
              <div class="col-sm-5">
                <img src="images/collagen/banka1.png" class="banka1">
                <img src="images/collagen/banka2.png" class="banka2">
              </div>
            </div>
          </div>
        </div>
      </header>

      <?php if (isset($_SESSION['notifications'])) : ?>
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php foreach ($_SESSION['notifications'] as $key => $notifications) : ?>
            <ul>
              <?php foreach ($notifications as $notification) : ?>
                <li><?= $key . ' - ' . $notification ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <?php unset($_SESSION['notifications']); ?>

      <!-- OUR PRODUCTS -->
      <section class="section pt-8 pb-8">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-8 offset-sm-2">
              <h4 class="text-center text-uppercase"> Они говорят что мы лучшие</h4>
              <h2 class="text-center text-uppercase mb-5"> Наши продукты</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <div class="product-item">
                <div class="product-thumbnail">
                  <a href="#">
                    <img class="img-responsive" src="images/collagen/banka1.png" alt="" />
                  </a>
                  <div class="actions">
                    <div class="action action-view-detail">

                    </div>
                    <div class="action action-add-to-cart">
                      <a href="#" class="button-add-to-cart" data-toggle="modal" data-target="#appModal">Заказать</a>
                    </div>
                  </div>
                </div>
                <div class="product-info">
                  <a href="shop-detail.html">
                    <h2 class="product-title">Коллаген 1 кг.</h2>
                    <span class="price">9500〒</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="product-item">
                <div class="product-thumbnail">
                  <a href="#">
                    <img class="img-responsive" src="images/collagen/banka2.png" alt="" />
                  </a>
                  <div class="actions">
                    <div class="action action-view-detail">

                    </div>
                    <div class="action action-add-to-cart">
                      <a href="#" class="button-add-to-cart" data-toggle="modal" data-target="#appModal">Заказать</a>
                    </div>
                  </div>
                </div>
                <div class="product-info">
                  <a href="shop-detail.html">
                    <h2 class="product-title">Коллаген 1 кг.</h2>
                    <span class="price">9500〒</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="product-item">
                <div class="product-thumbnail">
                  <a href="#">
                    <img class="img-responsive" src="images/collagen/banka1.png" alt="" />
                  </a>
                  <div class="actions">
                    <div class="action action-view-detail">

                    </div>
                    <div class="action action-add-to-cart">
                      <a href="#" class="button-add-to-cart" data-toggle="modal" data-target="#appModal">Заказать</a>
                    </div>
                  </div>
                </div>
                <div class="product-info">
                  <a href="shop-detail.html">
                    <h2 class="product-title">Коллаген 1 кг.</h2>
                    <span class="price">8500〒</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="product-item">
                <div class="product-thumbnail">
                  <a href="#">
                    <img class="img-responsive" src="images/collagen/banka2.png" alt="" />
                  </a>
                  <div class="actions">
                    <div class="action action-view-detail">

                    </div>
                    <div class="action action-add-to-cart">
                      <a href="#" class="button-add-to-cart" data-toggle="modal" data-target="#appModal">Заказать</a>
                    </div>
                  </div>
                </div>
                <div class="product-info">
                  <a href="shop-detail.html">
                    <h2 class="product-title">Коллаген капсулы</h2>
                    <span class="price">5000〒</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ABOUT -->
     <!--  <section class="section section-about pt-8 pb-8">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <img src="images/collagen/products.jpg"  class="img-responsive rounded" alt="" />
            </div>
            <div class="col-sm-5"> -->
              <!-- <h2 class="mt-5 fz-60">О компании</h2> -->
              <!-- <h4 class="fw-normal mt-9 lh-30 fz-22">Производственная компания ТОО «Turan Collagen» на рынке Казахстана более 3 лет. Основным видом деятельности компании является производство говяжьего пищевого белка (протеина).</h4>
              <div class="mt-4"></div>
              <p class="dark">Мы производим говяжий белок(протеин) на высококачественном оборудовании. Продукт производится в виде легко-волокнистого порошка.</p>
            </div>
          </div>
        </div>
      </section> -->

      <!-- STANDARTS -->
      <section class="section bg-black pt-7 pb-2">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <ul class="nav nav-pills nav-fill">
                <li class="nav-item mb-2">
                  <img src="images/standarts/eac2.png" class="img-responsive">
                </li>
                <li class="nav-item mb-2">
                  <img src="images/standarts/eco2.png" class="img-responsive">
                </li>
                <!-- <li class="nav-item mb-2">
                  <img src="images/standarts/haccp2.png" class="img-responsive">
                </li> -->
                <li class="nav-item mb-2">
                  <img src="images/standarts/kap3.png" class="img-responsive">
                </li>
                <li class="nav-item mb-2">
                  <img src="images/standarts/gmo2.png" class="img-responsive">
                </li>
                <li class="nav-item mb-2">
                  <img src="images/standarts/madeinkz2.png" class="img-responsive">
                </li>
                <li class="nav-item">
                  <img src="images/standarts/halal2.png" class="img-responsive">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- WHY YOU DO YOU NEED COLLAGEN? -->
      <section class="section pt-8 pb-8 bg-black">
        <div class="container">
          <h2 class="text-uppercase- text-center mb-5 fz-60 primary-color">Чем полезен коллаген?</h2>
          <div class="row">
            <div class="col-sm-6 col-lg-4">
              <div class="box-icon style-1 text-center">
                <div class="content-wrap">
                  <div class="image">
                    <img class="rounded" src="images/collagen/muscules-org.jpg" alt="Коллаген помогает эффективно набрать мышечную массу">
                  </div>
                  <h4 class="white"><i class="primary-color fa fa-check"></i> Коллаген помогает эффективно набрать мышечную массу</h4>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="box-icon style-1 text-center">
                <div class="content-wrap">
                  <div class="image">
                    <img class="rounded" src="images/collagen/orthopaedics1-org.jpg" alt="Восстанавливает целостность структуры хрящевой ткани и тканей сухожилий">
                  </div>
                  <h4 class="white"><i class="primary-color fa fa-check"></i> Восстанавливает целостность структуры хрящевой ткани и тканей сухожилий</h4>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="box-icon style-1 text-center">
                <div class="content-wrap">
                  <div class="image">
                    <img class="rounded" src="images/collagen/shoulder_impingement2-org.jpg" alt="Его употребление приводит к повышению прочности и износостойкости костей">
                  </div>
                  <h4 class="white"><i class="primary-color fa fa-check"></i> Его употребление приводит к повышению прочности и износостойкости костей</h4>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <h4 class="white"><i class="primary-color fa fa-check"></i> Укрепляет суставы и связки</h4>
              <!-- <h4 class="white"><i class="primary-color fa fa-check"></i> Отвечает за состояние связок и сухожилий, увеличивает их прочность и упругость</h4> -->
              <h4 class="white"><i class="primary-color fa fa-check"></i> Повышает упругость кожи</h4>
              <h4 class="white"><i class="primary-color fa fa-check"></i> Укрепляет ногти и волосы</h4>
              <h4 class="white"><i class="primary-color fa fa-check"></i> Повышает иммунитет</h4>
              <h4 class="white"><i class="primary-color fa fa-check"></i> Дает силу и бодрость</h4><br>
            </div>
            <div class="offset-3- col-sm-8 col-lg-8 mt-4-">
              <!-- <p class="white">Коллаген представляет собой основной белок, который обеспечивает прочность хрящей, связывающих ткани и стенки сосудов. Благодаря содержанию в своем складе специальных аминокислот ― оксилизина и оксипролина ― его невозможно заменить любым другим белком. Как показали исследования американских медиков, регулярный и своевременный прием коллагена может помочь остановить развитие даже таких болезней, как артрит и целлюлит.</p> -->
              <p class="white">Многочисленные исследования неоднократно показали эффективность коллагена. Среди наиболее значимых работ можно выделить экспериментальные исследования доктора Д. Пирсона, исследовательской группы К. Вея (в частности – их фундаментальная резюмирующая работа «Идентификация пищевых продуктов-производных коллагеновых пептидов в крови человека после перорального приема гидролизата коллагена»), а также труды М. Барнетта и Х. Матсумото.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- SERTIFICATES -->
      <section class="section pt-8 pb-8">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 offset-sm-2">
              <h2 class="text-center text-uppercase mb-5"> Наши сертификаты</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-9 mx-auto">
              <div class="row">
                <div class="col-6 col-sm-4">
                  <a target="_blank" href="images/sertificates/Svidetelstvo-sport-pit.jpg">
                    <img class="img-responsive" src="images/sertificates/Svidetelstvo-sport-pit-mini.jpg">
                  </a>
                </div>
                <div class="col-6 col-sm-4">
                  <a target="_blank" href="images/sertificates/Svidetelstvo-sport-pit-1.jpg">
                    <img class="img-responsive" src="images/sertificates/Svidetelstvo-sport-pit-1-mini.jpg"><br><br>
                  </a>
                </div>
                <div class="col-6 col-sm-4">
                  <a target="_blank" href="images/sertificates/Декларация-о-соответствии-товара.jpg">
                    <img class="img-responsive" src="images/sertificates/Декларация-о-соответствии-товара-mini.jpg"><br>
                  </a>
                </div>
                <div class="col-6 col-sm-4">
                  <a target="_blank" href="images/sertificates/Сертификат-качества.jpg">
                    <img class="img-responsive" src="images/sertificates/Сертификат-качества-mini.jpg">
                  </a><br>
                </div>
                <!-- </div>
                <div class="row"> -->
                <div class="col-6 col-sm-4">
                  <a target="_blank" href="images/sertificates/Сертификат-Халал.jpg">
                    <img class="img-responsive" src="images/sertificates/Сертификат-Халал-mini.jpg">
                  </a>
                </div>
                <div class="col-6 col-sm-4">
                  <a target="_blank" href="images/sertificates/Сертификат-Халал-на-Анг.яз.-2017.jpg">
                    <img class="img-responsive" src="images/sertificates/Сертификат-Халал-на-Анг.яз.-2017-mini.jpg">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- WHO NEEDS COLLAGEN -->
      <section class="section bg-who-needs">
        <div class="container">
          <div class="row pt-8 pb-8">
            <div class="col-sm-12 col-lg-8">
              <h3 class="text-uppercase- fz-58 primary-color"> Для кого нужен коллаген?</h3>
              <ul class="list-who-needs">
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Говяжий коллаген предназначен в первую очередь для регулировки режима питания <span class="primary-color">спортсменов</span> при сильных нагрузках на связки и суставы, при которых наблюдается ускорение процессов обмена веществ</li>
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Способствует естественному сбросу лишнего веса при дозеровке от 25 гр. с небольшой физ. нагрузкой</li>
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Коллаген будет полезен людям получившим травму или перенесшие операцию в период реабилитации</li>
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Для людей занимающихся тяжелым физическим трудом, чтобы заряжаться <span class="primary-color">силой и энергией</span></li>
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Для тех кто хочет сохранить <span class="primary-color">молодость</span> и избавиться от дряблости кожи</li>
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Для <span class="primary-color">беременных и кормящих</span>, для полноценного питания организма</li>
                <!-- <li><span class="primary-color"><i class="fa fa-check"></i></span> Для постящихся которые сильно истощаются от голода</li> -->
                <!-- <li><span class="primary-color"><i class="fa fa-check"></i></span> Для тех чей ежедневный рацион питания не может удовлетворить рекомендуемую суточную норму белка</li> -->
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Если ваш <span class="primary-color">ребенок</span> занимается спортом или ненормированно питается Наш коллаген лучшее решения так как производится из натурального говяжьего белка и в составе имеет все необходимые витамины для укрепления роста мышц и суставов</li>
              </ul>
            </div>
            <div class="col-sm-12 col-lg-4">
              <img class="d-block mt-10 mx-auto" src="images/collagen/banka2.png" alt="">
              <div class="text-center">
                <a href="#" class="btn-app btn-app-p mt-2" data-toggle="modal" data-target="#appModal">Заказать</a>
              </div>
          </div>
        </div>
      </section>

      <!-- BENEFITS OF COLLAGEN -->
      <section class="section bg-benefits pt-8- pb-8-">
        <div class="container">
          <div class="row pt-8 pb-8">
            <div class="order-xs-2 col-sm-12 col-lg-6">
              <img class="d-block mt-5 mx-auto" src="images/collagen/banka2.png" alt="">
              <div class="text-center">
                <a href="#" class="btn-app btn-app-p mt-2" data-toggle="modal" data-target="#appModal">Заказать</a>
              </div>
            </div>
            <div class="col-sm-12 col-lg-6">
              <h2 class="fz-52 primary-color">Преимущества нашего продукта</h2>
              <ul class="list-benefist">
                <li><span class="primary-color"><i class="fa fa-check"></i></span> 100% натуральный, без ГМО</li>
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Витамины A, B12, D, C</li>
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Полный состав Аминокислот</li>
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Высокая скорость усвоения</li>
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Усвояемость продукта на 98%</li>
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Отсутствие аллергенов</li>
                <!-- <li><span class="primary-color"><i class="fa fa-check"></i></span> Снижает возможность появления травм при нагрузках и механических воздействиях</li> -->
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Приятный вкус и легко разбавляемый</li>
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Повышает Иммунитет</li>
                <li><span class="primary-color"><i class="fa fa-check"></i></span> Рекомендует Казахская Академия Питания</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- STANDARTS -->
      <section class="section bg-black pt-7 pb-7">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <ul class="nav nav-pills nav-fill">
                <li class="nav-item mb-2">
                  <img src="images/standarts/eac2.png" class="img-responsive">
                </li>
                <li class="nav-item mb-2">
                  <img src="images/standarts/eco2.png" class="img-responsive">
                </li>
                <li class="nav-item mb-2">
                  <img src="images/standarts/haccp2.png" class="img-responsive">
                </li>
                <!-- <li class="nav-item mb-2">
                  <img src="images/standarts/kap2.png" class="img-responsive">
                </li> -->
                <li class="nav-item mb-2">
                  <img src="images/standarts/gmo2.png" class="img-responsive">
                </li>
                <li class="nav-item mb-2">
                  <img src="images/standarts/madeinkz2.png" class="img-responsive">
                </li>
                <li class="nav-item">
                  <img src="images/standarts/halal2.png" class="img-responsive">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- REVIEWS -->
      <section class="section reviews">
        <div class="reviews-overlay pt-8 pb-8">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 offset-sm-2">
                <h3 class="text-uppercase- text-center heading mb-5 white primary-color">Отзывы</h3>
              </div>
              <div class="col-sm-12">
                <div class="testimonials-slider" data-auto-play="true" data-desktop="1" data-laptop="1" data-tablet="1" data-mobile="1">
                  <div class="testimonial-item style-1">
                    <div class="testimonial-desc white">Замечательный продукт. Беру уже 3-й раз. Действительно результат виден. Намного улучшилось состояние кожи (кожа стала боле упругой, мелкие морщины разгладились) и волос (блеск, стали меньше выпадать). Более того, этот коллаген еще использую и как маску для лица. Лифтинг просто впечатляющий!</div>
                    <div class="testimonial-header">
                      <div class="inner">
                        <div class="testimonial-info">
                          <h6 class="testimonial-name white">Татьяна З.</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-item style-1">
                    <div class="testimonial-desc white">Квалифицированная консультация, быстрая доставка, отменное качество (прекрасно растворяется, приятный вкус, вернее, как бы, его отсутствие). Благодарю! Надеюсь и результаты будут такие же.</div>
                    <div class="testimonial-header">
                      <div class="inner">
                        <div class="testimonial-info">
                          <h6 class="testimonial-name white">Наталья К.</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial-item style-1">
                    <div class="testimonial-desc white">Коллаген пью уже третий месяц. Пью больше для профилактики, так что не могу определить на сколько он эффективен при проблемах с суставами, у меня с ними проблем нет, а вот на кожу он оказывфает определенно положительный эффект! Спасибо магазину за оперативную доставку и приятные цены!</div>
                    <div class="testimonial-header">
                      <div class="inner">
                        <div class="testimonial-info">
                          <h6 class="testimonial-name white">Ольга Х.</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- WHY IS IT PROFITABLE TO BUY FROM US? -->
      <section class="section bg-black pt-8 pb-8">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-12">
              <div class="mt-3"></div>
              <h3 class="heading white fz-50 fw-normal text-center"> Почему выгодно покупать у нас?</h3>
              <div class="mb-4"></div>
            </div>
            <div class="col-6 col-sm-4 col-lg-4">
              <div class="text-center">
                <div class="icon primary-color fz-100">
                  <i class="icon-trophy"></i>
                </div>
                <p class="heading white fz-22 fw-normal"> Лучший продукт</p>
              </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-4">
              <div class="text-center">
                <div class="icon primary-color fz-100">
                  <i class="icon-badge"></i>
                </div>
                <p class="heading white fz-22 fw-normal"> Продукт от производителя</p>
              </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-4">
              <div class="text-center">
                <div class="icon primary-color fz-100">
                  <i class="icon-earphones-alt"></i>
                </div>
                <p class="heading white fz-22 fw-normal">Грамотная консультация</p>
              </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-4">
              <div class="text-center">
                <div class="icon primary-color fz-100">
                  <i class="icon-wallet"></i>
                </div>
                <p class="heading white fz-22 fw-normal"> Лучшая цена</p>
              </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-4">
              <div class="text-center">
                <div class="icon primary-color fz-100">
                  <i class="icon-flag"></i>
                </div>
                <p class="heading white fz-22 fw-normal">Доставка по Казахстану</p>
              </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-4">
              <div class="text-center">
                <div class="icon primary-color fz-100">
                  <i class="icon-docs"></i>
                </div>
                <p class="heading white fz-22 fw-normal">Сопровождение документами и информацией</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="section pt-10 pb-6">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h3 class="heading fw-normal fz-40 mb-8"> Часто задаваемые вопросы</h3>
              <div id="accordion" class="accordion">
                <div class="accordion-section">
                  <div class="accordion-header" id="headingOne">
                    <h6 class="accordion-title">
                      <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Продолжительность курса приема</div>
                      <span class="accordion-icon"></span>
                    </h6>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="accordion-content">Продолжительность курса составляет не менее 3 месяцев.
                    Кожа. Ногти. Волосы. Ожоги. Восстановление после операций. Продолжительность курса должна быть такова, чтобы клетки этих тканей успели смениться новыми.
                    Хрящевая ткань одна из самых медленно возобновляемых. Это объясняется тем, что хрящи не имеют прямого капиллярного питания из кровотока. Хрящи получают питательные вещества только посредством осмоса и диффузии при омовения его синовиальной жидкостью. Омовения происходит при движении сустава, поэтому для нормальной регенерации хрящей и восстановление всего сустава обязательно нужна умеренная физическая активность.
                    Если вы принимаете коллаген вместе с препаратами глюкозамина / хондроитина, в приеме последних необходимо делать перерыв после каждых 2-3 месяцев, но в приеме коллагена перерыва делать не рекомендуется.

                    Более эффективным будет более длительный курс приема только коллагена, чем более короткий курс приема коллагена вместе с препаратами хондроитина и глюкозамина.

                    Длительность курса приема коллагена бывает от трех месяцев до нескольких лет, а в тяжелых случаях и всю жизнь, курсами. Восстановление хрящевых тканей, к сожалению, требует долгого времени.</div>
                  </div>
                </div>
                <div class="accordion-section">
                  <div class="accordion-header" id="headingTwo">
                    <h6 class="accordion-title">
                      <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Рекомендации по питанию</div>
                      <span class="accordion-icon"></span>
                    </h6>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="accordion-content">Оптимальная дозировка по коллагена составляет примерно 0,2 г / кг тела / сутки. Рассчитывается как 25- 30% от общего количества употребляемого человеком в сутки белка. Которая, в свою очередь составляет 0.8-1.5 г / кг тела / сут.

                    А для спортсменов, людей, занимающихся физическим трудом или используют диеты для уменьшения жировой прослойки, количество употребляемого с пищей белка несколько выше: 1.5-2 г / кг тела / сут.

                    Если организм не будет получать необходимое ему количество аминокислот в виде употребляемого с пищей белка, и еще хуже, когда это происходит хронически, то употребляемый коллаген может быть использован организмом не для восстановления ваших проблемных мест — суставов или кожи, а на выполнение более важных для организма процессов, для которых ощущается нехватка именно этих необходимых элементов.

                    Поэтому, полноценное питание — сверхважная составляющая процесса питания и восстановления коллагеновых тканей организма.

                    Кроме белка, нужно стараться обеспечить в рационе питания достаточное количество витаминов, ( в особенности, витамина С), минералов (в особенности. железа), Омега-3 и пить достаточно жидкости.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="pt-7 pr-5 pl-5 pb-9 bg-white box-contact-shadow">
                <div class="text-center">
                  <i class="fa fa-envelope-o primary-color fz-30"></i>
                  <div class="mb-1"></div>
                  <h3 class="heading fw-normal fz-32"> Форма для заявки</h3>
                  <div class="mb-5"></div>
                  <div class="contact-form-wrapper">
                    <form method="post" action="sendmail.php">
                      <div class="row">
                        <div class="col-md-12"> 
                          <input type="text" name="name" placeholder="Введите имя*" minlength="2" maxlength="40" value="" required>
                        </div>
                        <div class="col-md-12">
                          <input type="tel" name="phone" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="" required>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="btn-app mt-3">Отправить</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- APP MODAL -->
    <div class="modal fade" id="appModal" tabindex="-1" role="dialog" aria-labelledby="appModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="appModalLabel"><i class="fa fa-envelope-o primary-color fz-30"></i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body row p-5">
            <div class="col-lg-6">
              <h3 class="heading fw-normal fz-32 mb-1">Заполните форму</h3>
              <p class="fz-20 dark mb-1">и наш менеджер свяжется с Вами в ближайшее время</p>
              <div class="contact-form-wrapper">
                <form method="post" action="sendmail.php">
                  <div class="row">
                    <div class="col-md-12"> 
                      <input type="text" name="name" placeholder="Введите имя*" minlength="2" maxlength="40" value="" required>
                    </div>
                    <div class="col-md-12">
                      <input type="tel" name="phone" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="" required>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn-app mt-3">Отправить</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <br>
              <img src="images/collagen/banka2.png" class="d-block mx-auto">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL MESSAGE -->
    <div class="modal fade" id="message-status" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Статус заявки</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <p class="alert <?=$_SESSION['status']?>"><?=$_SESSION['message']?></p>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer bg-black">
      <div class="footer-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-lg-7 col-md-6">
              <div class="branding__logo">
                <a href="./">
                  <img src="images/collagen/logo.png" alt="Biotic" class="main-logo" />
                </a>
              </div>
              <div class="mb-4"></div>
              <p>Адрес: Республика Казахстан, город Алматы, улица Толе би 286/2, офис 401.</p>
              <div class="mb-2"></div>
            </div>
            <div class="col-sm-4 col-lg-7 col-md-6">
              <div class="phones">
                <a href="tel:+77759557171" target="_top" data-attr="phone"><i class="fa fa-phone"></i> 8 (775) 955 71 71</a>
                <a href="whatsapp://send?phone=+77759557171" target="_top" data-attr="whatsapp_call"><i class="fa fa-whatsapp"></i> 8 (775) 955 71 71</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- MAP -->
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6bc3a0def06bc151d0400c33880107fc3aa3eb68f19082c16b09583225a7ada1&amp;width=100%25&amp;height=400&amp;lang=ru_UA&amp;scroll=false"></script>

      <div class="copyright-2 bg-black">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="mb-0"> Сайт зарезервирован компанией Biotic</p>
            </div>
            <div class="col-sm-6">
              <div class="text-right text-center-sm">
                <ul class="social-networks">
                  <li class="item">
                    <a href="https://www.instagram.com/libido_organic/" class="link"><i class="fa fa-instagram link-icon"></i></a>
                  </li>
                  <li class="item">
                    <a href="#" class="link"><i class="fa fa-facebook link-icon"></i></a>
                  </li>
                  <li class="item">
                    <a href="#" class="link"><i class="fa fa-google-plus link-icon"></i></a>
                  </li>
                  <li class="item">
                    <a href="#" class="link"><i class="fa fa-linkedin link-icon"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <a id="backtotop" class="scrollup scrollup--fixed"><i class="fa fa-angle-up"></i></a>

  <!-- LOAD JQUERY LIBRARY -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/modernizr-2.7.1.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/jquery.isotope.init.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/headroom.min.js"></script>
  <script src="js/jQuery.headroom.js"></script>
  <script src="js/script.js"></script>

  <?php if (isset($_SESSION['status'])) : ?>
    <script> $('#message-status').modal('show'); </script>
    <?php unset($_SESSION['status']); unset($_SESSION['message']); ?>
  <?php endif; ?>

  <!-- <script src="/js/jquery.themepunch.tools.min.js"></script>
  <script src="/js/jquery.themepunch.revolution.min.js"></script>
  <script src="/js/extensions/revolution.extension.video.min.js"></script>
  <script src="/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="/js/extensions/revolution.extension.parallax.min.js"></script> -->
</body>
</html>
