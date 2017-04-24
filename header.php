<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package visaeasy7
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php echo wp_get_document_title(); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="yandex-verification" content="f3c8a9afea7e4085" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/bootstrap.css">
<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/normalize.css">
<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/owlcarousel/owl.theme.default.min.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header clearfix">
    <div class="container">
      <div class="row">
      <div class="header-block__logo pull-left visible-lg visible-md">
          <img alt="VisaEasy logo" src="http://www.visaeasy.com.ua/wp-content/uploads/2016/12/logo.png" width="400" height="100" style="margin-left: 15px;  margin-bottom: 5px;">
      </div>
      <div class="header-block__info pull-right visible-lg visible-md">
          <div class="header-info__social-search pull-right">
              <div class="header-info__social-row">
                  <a href="http://vk.com/visaeasy_club">
                      <i class="fa fa-vk header-info__social vk-footer" aria-hidden="true"></i>
                  </a>
                  <a href="https://www.facebook.com/groups/1156467517772511/">
                      <i class="fa fa-facebook header-info__social fb-footer" aria-hidden="true"></i>
                  </a>
                  <a href="https://www.skype.com/visaeasy.ua">
                      <i class="fa fa-skype header-info__social skype-footer" aria-hidden="true"></i>
                  </a>
                  <a href="https://www.instagram.com/visa_easy/">
                      <i class="fa fa-instagram header-info__social skype-footer" aria-hidden="true"></i>
                  </a>
              </div>
              <div>
                <form role="search" class="search-form"   action="http://www.visaeasy.com.ua/" method="get" id="search-form">
                    <input type="text" value="" placeholder="Введите страну" name="s"  class="s" id="s">
                    <input type="submit" value="Поиск" class="search-form__button" id="search-form__button">
                  </form>

              </div>
          </div>
          <div class="header-info__contacts pull-right">
              <div class="header-info__phone">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <div class="header-info__number-head pull-left">+38 (098) 487-15-15</div>
                  <div class="header-info__number-head pull-left">+38 (093) 262-15-15</div>
                  <div class="header-info__number-head pull-left">+38 (099) 379-77-78</div>
              </div>
              <i class="fa fa-envelope pull-left head-envelope" aria-hidden="true"></i>
              <div class="header-info__mail pull-left"> info@visaeasy.com.ua</div>
          </div>
        </div>
      </div>
    </div>
      <nav class="header-navbar__section">
        <div class="container">
          <div class="row">
                  <ul class="header-navbar__list">
                      <li><a href="http://www.visaeasy.com.ua/">Главная</a></li>
                      <li><a href="#">Визы</a><span class="dropBottom"></span>
                          <ul>
                              <li><a href="#">Европа и шенген</a>
                                  <ul>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%82%d1%83%d1%80%d0%b8%d1%81%d1%82%d0%b8%d1%87%d0%b5%d1%81%d0%ba%d0%b0%d1%8f-%d0%b2%d0%b8%d0%b7%d0%b0/">Туристическая виза</a>

                                      </li>
                                      <li><a href="#">Бизнес виза</a>
                                          <ul>
                                              <li><a href="http://www.visaeasy.com.ua/%d0%b1%d0%b8%d0%b7%d0%bd%d0%b5%d1%81-%d0%b2%d0%b8%d0%b7%d0%b0-%d0%b2-%d0%bf%d0%be%d0%bb%d1%8c%d1%88%d1%83/">Польша</a></li>
                                              <li><a href="http://www.visaeasy.com.ua/%d0%b1%d0%b8%d0%b7%d0%bd%d0%b5%d1%81-%d0%b2%d0%b8%d0%b7%d0%b0-%d0%b2-%d0%bb%d0%b8%d1%82%d0%b2%d1%83/">Литва</a></li>
                                          </ul>
                                      </li>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%80%d0%b0%d0%b1%d0%be%d1%87%d0%b0%d1%8f-%d0%b2%d0%b8%d0%b7%d0%b0/">Рабочая виза</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%b2%d0%b8%d0%b7%d1%8b-%d0%b4%d0%bb%d1%8f-%d0%bd%d0%b5%d1%80%d0%b5%d0%b7%d0%b8%d0%b4%d0%b5%d0%bd%d1%82%d0%be%d0%b2/">Визы для нерезидентов</a></li>
                                  </ul>
                              </li>
                              <li><a href="#">АЗИЯ</a>
                                  <ul>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%b8%d0%bd%d0%b4%d0%b8%d1%8f/">Индия</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%b2%d1%8c%d0%b5%d1%82%d0%bd%d0%b0%d0%bc/">Вьетнам</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%ba%d0%b8%d1%82%d0%b0%d0%b9/">Китай</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%b8%d0%bd%d0%b4%d0%be%d0%bd%d0%b5%d0%b7%d0%b8%d1%8f/">Индонезия</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%ba%d0%be%d1%80%d0%b5%d1%8f/">Южная Корея</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%be%d0%b0%d1%8d/">ОАЭ</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%81%d0%b8%d0%bd%d0%b3%d0%b0%d0%bf%d1%83%d1%80/">Сингапур</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%82%d0%b0%d0%b9%d0%b2%d0%b0%d0%bd%d1%8c/">Тайвань</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%82%d0%b0%d0%b9%d0%bb%d0%b0%d0%bd%d0%b4/">Тайланд</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%84%d0%b8%d0%bb%d0%b8%d0%bf%d0%bf%d0%b8%d0%bd%d1%8b/">Филлипины</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%8f%d0%bf%d0%be%d0%bd%d0%b8%d1%8f/">Япония</a></li>
                                  </ul>
                              </li>
                              <li><a href="http://www.visaeasy.com.ua/%d1%81%d1%88%d0%b0/">США</a></li>
                          </ul>
                      </li>
                      <li><a href="http://www.visaeasy.com.ua/%d0%b7%d0%b0%d0%b3%d1%80%d0%b0%d0%bd%d0%bf%d0%b0%d1%81%d0%bf%d0%be%d1%80%d1%82%d0%b0/">Загранпаспорта</a></li>
                      <li><a href="#">Услуги</a><span class="dropBottom"></span>
                          <ul>
                              <li><a href="#">Авиаперелеты</a></li>
                              <li><a href="http://www.visaeasy.com.ua/%d1%81%d1%82%d1%80%d0%b0%d1%85%d0%be%d0%b2%d0%ba%d0%b0/">Страховка</a></li>
                              <li><a href="http://www.visaeasy.com.ua/%d1%81%d0%bf%d1%80%d0%b0%d0%b2%d0%ba%d0%b0-%d0%be-%d0%bd%d0%b5%d1%81%d1%83%d0%b4%d0%b8%d0%bc%d0%be%d1%81%d1%82%d0%b8/">Справка о несудимости</a></li>
                          </ul>
                      </li>
                      <li><a href="http://www.visaeasy.com.ua/%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b/">Контакты</a></li>
                  </ul>
                </div>
              </div>
      </nav>
      <div id="fixed-menu" class="header-navbar__section">
        <div class="container">
          <div class="row">
                  <ul class="header-navbar__list">
                      <li><a href="http://www.visaeasy.com.ua/">Главная</a></li>
                      <li><a href="#">Визы</a><span class="dropBottom"></span>
                          <ul>
                              <li><a href="#">Европа и шенген</a>
                                  <ul>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%82%d1%83%d1%80%d0%b8%d1%81%d1%82%d0%b8%d1%87%d0%b5%d1%81%d0%ba%d0%b0%d1%8f-%d0%b2%d0%b8%d0%b7%d0%b0/">Туристическая виза</a>

                                      </li>
                                      <li><a href="#">Бизнес виза</a>
                                          <ul>
                                              <li><a href="http://www.visaeasy.com.ua/%d0%b1%d0%b8%d0%b7%d0%bd%d0%b5%d1%81-%d0%b2%d0%b8%d0%b7%d0%b0-%d0%b2-%d0%bf%d0%be%d0%bb%d1%8c%d1%88%d1%83/">Польша</a></li>
                                              <li><a href="http://www.visaeasy.com.ua/%d0%b1%d0%b8%d0%b7%d0%bd%d0%b5%d1%81-%d0%b2%d0%b8%d0%b7%d0%b0-%d0%b2-%d0%bb%d0%b8%d1%82%d0%b2%d1%83/">Литва</a></li>
                                          </ul>
                                      </li>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%80%d0%b0%d0%b1%d0%be%d1%87%d0%b0%d1%8f-%d0%b2%d0%b8%d0%b7%d0%b0/">Рабочая виза</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%b2%d0%b8%d0%b7%d1%8b-%d0%b4%d0%bb%d1%8f-%d0%bd%d0%b5%d1%80%d0%b5%d0%b7%d0%b8%d0%b4%d0%b5%d0%bd%d1%82%d0%be%d0%b2/">Визы для нерезидентов</a></li>
                                  </ul>
                              </li>
                              <li><a href="#">АЗИЯ</a>
                                  <ul>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%b8%d0%bd%d0%b4%d0%b8%d1%8f/">Индия</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%b2%d1%8c%d0%b5%d1%82%d0%bd%d0%b0%d0%bc/">Вьетнам</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%ba%d0%b8%d1%82%d0%b0%d0%b9/">Китай</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%b8%d0%bd%d0%b4%d0%be%d0%bd%d0%b5%d0%b7%d0%b8%d1%8f/">Индонезия</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%ba%d0%be%d1%80%d0%b5%d1%8f/">Южная Корея</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d0%be%d0%b0%d1%8d/">ОАЭ</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%81%d0%b8%d0%bd%d0%b3%d0%b0%d0%bf%d1%83%d1%80/">Сингапур</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%82%d0%b0%d0%b9%d0%b2%d0%b0%d0%bd%d1%8c/">Тайвань</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%82%d0%b0%d0%b9%d0%bb%d0%b0%d0%bd%d0%b4/">Тайланд</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%84%d0%b8%d0%bb%d0%b8%d0%bf%d0%bf%d0%b8%d0%bd%d1%8b/">Филлипины</a></li>
                                      <li><a href="http://www.visaeasy.com.ua/%d1%8f%d0%bf%d0%be%d0%bd%d0%b8%d1%8f/">Япония</a></li>
                                  </ul>
                              </li>
                              <li><a href="http://www.visaeasy.com.ua/%d1%81%d1%88%d0%b0/">США</a></li>
                          </ul>
                      </li>
                      <li><a href="http://www.visaeasy.com.ua/%d0%b7%d0%b0%d0%b3%d1%80%d0%b0%d0%bd%d0%bf%d0%b0%d1%81%d0%bf%d0%be%d1%80%d1%82%d0%b0/">Загранпаспорта</a></li>
                      <li><a href="#">Услуги</a><span class="dropBottom"></span>
                          <ul>
                              <li><a href="#">Авиаперелеты</a></li>
                              <li><a href="http://www.visaeasy.com.ua/%d1%81%d1%82%d1%80%d0%b0%d1%85%d0%be%d0%b2%d0%ba%d0%b0/">Страховка</a></li>
                              <li><a href="http://www.visaeasy.com.ua/%d1%81%d0%bf%d1%80%d0%b0%d0%b2%d0%ba%d0%b0-%d0%be-%d0%bd%d0%b5%d1%81%d1%83%d0%b4%d0%b8%d0%bc%d0%be%d1%81%d1%82%d0%b8/">Справка о несудимости</a></li>
                          </ul>
                      </li>
                      <li><a href="http://www.visaeasy.com.ua/%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b/">Контакты</a></li>
                  </ul>
                </div>
              </div>
      </div>
  </header>

<div id="page" class="site">
