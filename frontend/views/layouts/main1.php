<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<style type="text/css" media="print">
        @media print {
            .pmpro_a-print {
                display: none;
                position: absolute;
                left: -9999px
            }
        }
    </style>
<meta name="description" content="Intellectual club, web dasturash va boshqa dasturlash tillarini biz bilan birga o'rganing"/>
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Education &amp; Online Course Intellectual Club" />
	<meta property="og:description" content="Intellectual club, web dasturash va boshqa dasturlash tillarini biz bilan birga o'rganing" />
	<meta property="og:url" content="https://intellectual_club.com/" />
	<meta property="og:site_name" content="Education &amp; Online Course Intellectual Club – Intellectual Club" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="Intellectual club, web dasturash va boshqa dasturlash tillarini biz bilan birga o'rganing" />
	<meta name="twitter:title" content="Education &amp; Online Course Intellectual Club – Intellectual Club" />
	<meta name="twitter:creator" content="@com" /> 
	<link rel='dns-prefetch' href='http://js.stripe.com/' />
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='http://s.w.org/' />
	<link rel="alternate" type="application/rss+xml" title="Education &amp; Online Course Intellectual Club – Intellectual Club &raquo; Feed" href="feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="Education &amp; Online Course Intellectual Club – Intellectual Club &raquo; Comments Feed" href="comments/feed/index.html" /> 
	<link rel='stylesheet' id='redux-google-fonts-stm_option-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A200%2C500%2C600%2C400%2C700%7COpen+Sans%3A300%2C400%2C600%2C700%2C800%2C300italic%2C400italic%2C600italic%2C700italic%2C800italic&amp;subset=latin&amp;ver=1545911476' type='text/css' media='all' />
	<link rel='https://api.w.org/' href='wp-json/index.html' />
	<link rel='shortlink' href='index.html' />
	<link rel="shortcut icon" type="image/x-icon" href="img/icons/favicon.ico" />
	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/> 
	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
	<meta name="generator" content="Powered by Slider Revolution 6.0.5 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." /> 
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    <meta name="googlebot" content="index, follow" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="page-template-default page page-id-2 stm_lms_button pmpro-body-has-access skin_custom_color online-dark wpb-js-composer js-comp-ver-5.6 vc_responsive">

<?php $this->beginBody() ?>
<div id="wrapper">
        <div id="header" class="transparent_header_off" data-color="">
            <div class="header_default header_2">
                <div class="header_top_bar header_2_top_bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header_2_top_bar__inner">
                                    <div class="stm_lms_wpml_switcher">
                                        <div class="pull-left language-switcher-unit">
                                        </div>
                                    </div>
                                    <div class="top_bar_right_part">
                                        <div class="stm_menu_toggler" data-text="Menu"></div>
                                        <div class="header_main_menu_wrapper clearfix" style="margin-top:5px;">
                                            <div class="pull-right hidden-xs right_buttons">
                                                <div class="stm_lms_wishlist_button"> <a href="#" data-text="Favorites"><i class="far fa-bookmark mtc_h"></i></a></div>
                                                <div class="search-toggler-unit">
                                                    <div class="search-toggler" data-toggle="modal"><i class="fa fa-search"></i></div>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="header_top_bar_socs">
                                                        <ul class="clearfix">
                                                            <li><a href='https://www.twitter.com/'><i class='fab fa-twitter'></i></a></li>
                                                            <li><a href='https://www.instagram.com/'><i class='fab fa-instagram'></i></a></li>
                                                            <li><a href='#'><i class='fab fa-behance'></i></a></li>
                                                            <li><a href='#'><i class='fab fa-dribbble'></i></a></li>
                                                            <li><a href='#'><i class='fab fa-flickr'></i></a></li>
                                                            <li><a href='#'><i class='fab fa-git'></i></a></li>
                                                            <li><a href='#'><i class='fab fa-linkedin'></i></a></li>
                                                            <li><a href='#'><i class='fab fa-pinterest'></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="collapse navbar-collapse pull-right">
                                                <ul class="header-menu clearfix">
                                                    <li id="menu-item-5" class="stm_lms_badge_menu menu-item menu-item-type-post_type menu-item-object-page menu-item-5">
														<a title="Azi" href="#">Asosiy</a>
													</li>
													<li id="menu-item-1144" class="stm_lms_badge_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-1144">
														<a  href="#">O'qituvchilar</a>
													</li>
													<li id="menu-item-407" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-407">
														<a href="#">Kurslar</a>
													</li>
													<li id="menu-item-408" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-408">
														<a title="New" href="#">Yangiliklar</a>
													</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <div class="header_top_bar_socs">
                                                <ul class="clearfix">
                                                    <li><a href='https://www.twitter.com/'><i class='fab fa-twitter'></i></a></li>
                                                    <li><a href='https://www.instagram.com/'><i class='fab fa-instagram'></i></a></li>
                                                    <li><a href='#'><i class='fab fa-behance'></i></a></li>
                                                    <li><a href='#'><i class='fab fa-dribbble'></i></a></li>
                                                    <li><a href='#'><i class='fab fa-flickr'></i></a></li>
                                                    <li><a href='#'><i class='fab fa-git'></i></a></li>
                                                    <li><a href='#'><i class='fab fa-linkedin'></i></a></li>
                                                    <li><a href='#'><i class='fab fa-pinterest'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header_top">
                                <div class="logo-unit"> 
                                    <a href="#"> 
                                        <img class="img-responsive logo_transparent_static visible" src="https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2018/08/MasterStudy_logo.svg" style="width: 253px;"/>
                                    </a>
                                </div>
                                <div class="center-unit">
                                    <div class="stm_courses_search">
                                        <div class="stm_lms_categories"> 
                                            <i class="stmlms-hamburger"></i> 
                                            <span class="heading_font">Category</span>
                                            <div class="stm_lms_categories_dropdown">
                                                <div class="stm_lms_categories_dropdown__parents">
                                                    <div class="stm_lms_categories_dropdown__parent"> 
                                                        <a href="#" class="sbc_h"> Art </a>
                                                        <div class="stm_lms_categories_dropdown__childs">
                                                            <div class="stm_lms_categories_dropdown__child"> 
                                                                <a href="#"> Artism </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stm_lms_categories_dropdown__parent"> 
                                                        <a href="#" class="sbc_h"> Exercise </a>
                                                        <div class="stm_lms_categories_dropdown__childs">
                                                            <div class="stm_lms_categories_dropdown__child"> 
                                                                <a href="#"> Bicycling </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stm_lms_categories_dropdown__parent"> 
                                                        <a href="#"  class="sbc_h"> Material Design </a>
                                                        <div class="stm_lms_categories_dropdown__childs">
                                                            <div class="stm_lms_categories_dropdown__child"> 
                                                                <a href="#"> 3D Printing Concept </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stm_lms_categories_dropdown__parent"> 
                                                        <a href="#" class="sbc_h"> Music </a>
                                                        <div class="stm_lms_categories_dropdown__childs">
                                                            <div class="stm_lms_categories_dropdown__child"> 
                                                                <a href="#"> Blues </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stm_lms_categories_dropdown__parent"> 
                                                        <a href="#" class="sbc_h"> Photography </a>
                                                        <div class="stm_lms_categories_dropdown__childs">
                                                            <div class="stm_lms_categories_dropdown__child"> 
                                                                <a href="#"> 360 photos </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stm_lms_categories_dropdown__parent"> 
                                                        <a href="#" class="sbc_h"> Software Development </a>
                                                        <div class="stm_lms_categories_dropdown__childs">
                                                            <div class="stm_lms_categories_dropdown__child"> 
                                                                <a href="#"> Apache </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="stm_lms_courses_search vue_is_disabled" id="stm_lms_courses_search"
                                            v-bind:class="{'is_vue_loaded' : vue_loaded}"> {{ search }} <a
                                                v-bind:href="'https://masterstudy.stylemixthemes.com/dark-lms/courses?search=' + url"
                                                class="stm_lms_courses_search__button sbc"> <i
                                                    class="lnr lnr-magnifier"></i> </a>
                                            <input name="search" placeholder="Search courses"
                                                param="search" anchor="value"
                                                label="label" :on-select="searchCourse" :on-input="searching"
                                                :on-ajax-loaded="loaded" :debounce="1000" model="search">
                                            </input>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-unit"> 
                                    <a href="#" class="stm_lms_log_in" data-text="Login" data-target=".stm-lms-modal-login" data-lms-modal="login"> 
                                        <i class="fa fa-user"></i> <span>Log in</span> 
                                    </a> 
                                    <a href="../lms-login.html" class="btn btn-default" data-text="Sign in"> <span>Sign Up</span> </a>
                                </div>
                                <div class="stm_header_top_search sbc"> <i class="lnr lnr-magnifier"></i></div>
                                <div class="stm_header_top_toggler mbc"> <i class="lnr lnr-user"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="stm_lms_account_popup">
                    <div class="stm_lms_account_popup__close"> <i class="lnr lnr-cross"></i></div>
                    <div class="inner"> <a href="../lms-login.html" class="stm_lms_account_popup__login"> <i
                                class="lnr lnr-user sbc"></i>
                            <h3>Login/Sign Up</h3>
                        </a>
                        <div class="stm_lms_account_popup__list heading_font"> 
                            <a class="stm_lms_account_popup__list_single" href="index.html"> My Courses </a> 
                            <a class="stm_lms_account_popup__list_single" href="../lms-checkout.html"> Checkout </a> 
                            <a class="stm_lms_account_popup__list_single has_number" href="../lms-chats.html"> Messages </a> 
                            <a class="stm_lms_account_popup__list_single has_number" href="../lms-wishlist.html"> Favorites <span>0</span> </a> 
                            <a class="stm_lms_account_popup__list_single" href="#"> Settings </a> 
                        </div>
                    </div>
                </div>
                <div class="stm_lms_search_popup">
                    <div class="stm_lms_search_popup__close"> <i class="lnr lnr-cross"></i></div>
                    <div class="inner">
                        <h2>Search</h2>
                        <div class="header_top">
                            <div class="stm_courses_search">
                                <div class="stm_lms_categories"> 
                                    <i class="stmlms-hamburger"></i> 
                                    <span class="heading_font">Category</span>
                                    <div class="stm_lms_categories_dropdown">
                                        <div class="stm_lms_categories_dropdown__parents">
                                            <div class="stm_lms_categories_dropdown__parent"> 
                                                <a href="#" class="sbc_h"> Art </a>
                                                <div class="stm_lms_categories_dropdown__childs">
                                                    <div class="stm_lms_categories_dropdown__child"> 
                                                        <a href="#"> Artism </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="stm_lms_categories_dropdown__parent"> 
                                                <a href="#" class="sbc_h"> Exercise </a>
                                                <div class="stm_lms_categories_dropdown__childs">
                                                    <div class="stm_lms_categories_dropdown__child"> 
                                                        <a href="#"> Bicycling </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="stm_lms_categories_dropdown__parent"> 
                                                <a href="#"  class="sbc_h"> Material Design </a>
                                                <div class="stm_lms_categories_dropdown__childs">
                                                    <div class="stm_lms_categories_dropdown__child"> 
                                                        <a href="#"> 3D Printing Concept </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="stm_lms_categories_dropdown__parent"> 
                                                <a href="#" class="sbc_h"> Music </a>
                                                <div class="stm_lms_categories_dropdown__childs">
                                                    <div class="stm_lms_categories_dropdown__child"> 
                                                        <a href="#"> Blues </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="stm_lms_categories_dropdown__parent"> 
                                                <a href="#" class="sbc_h"> Photography </a>
                                                <div class="stm_lms_categories_dropdown__childs">
                                                    <div class="stm_lms_categories_dropdown__child"> 
                                                        <a href="#"> 360 photos </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="stm_lms_categories_dropdown__parent"> 
                                                <a href="#" class="sbc_h"> Software Development </a>
                                                <div class="stm_lms_categories_dropdown__childs">
                                                    <div class="stm_lms_categories_dropdown__child"> 
                                                        <a href="#"> Apache </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="stm_lms_courses_search vue_is_disabled" id="stm_lms_courses_search"
                                    v-bind:class="{'is_vue_loaded' : vue_loaded}"> {{ search }} <a
                                        v-bind:href="'https://masterstudy.stylemixthemes.com/dark-lms/courses?search=' + url"
                                        class="stm_lms_courses_search__button sbc"> <i class="lnr lnr-magnifier"></i>
                                    </a>
                                    <autocomplete name="search" placeholder="Search courses"
                                        url="../wp-json/stm-lms/v1/courses.json" param="search" anchor="value"
                                        label="label" :on-select="searchCourse" :on-input="searching"
                                        :on-ajax-loaded="loaded" :debounce="1000" model="search"> </autocomplete>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="stm_lms_menu_popup">
                    <div class="stm_lms_menu_popup__close"> <i class="lnr lnr-cross"></i></div>
                    <div class="inner">
                        <h2>Menu</h2>
                        <div class="stm_menu_toggler" data-text="Menu"></div>
                        <div class="header_main_menu_wrapper clearfix" style="margin-top:5px;">
                            <div class="pull-right hidden-xs right_buttons">
                                <div class="stm_lms_wishlist_button"> <a href="../lms-wishlist.html"
                                        data-text="Favorites"> <i class="far fa-bookmark mtc_h"></i> </a></div>
                                <div class="search-toggler-unit">
                                    <div class="search-toggler" data-toggle="modal"><i
                                            class="fa fa-search"></i></div>
                                </div>
                                <div class="pull-right">
                                    <div class="header_top_bar_socs">
                                        <ul class="clearfix">
                                            <li><a href='https://www.twitter.com/'><i class='fab fa-twitter'></i></a>
                                            </li>
                                            <li><a href='https://www.instagram.com/'><i
                                                        class='fab fa-instagram'></i></a></li>
                                            <li><a href='#'><i class='fab fa-behance'></i></a></li>
                                            <li><a href='#'><i class='fab fa-dribbble'></i></a></li>
                                            <li><a href='#'><i class='fab fa-flickr'></i></a></li>
                                            <li><a href='#'><i class='fab fa-git'></i></a></li>
                                            <li><a href='#'><i class='fab fa-linkedin'></i></a></li>
                                            <li><a href='#'><i class='fab fa-pinterest'></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse navbar-collapse pull-right">
                                <ul class="header-menu clearfix">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5">
                                        <a href="#">Kurslar</a>
                                    </li>
                                    <li class="stm_lms_badge_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-1144">
                                        <a title="New" href="#">Kurs qo'shish</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-407">
                                        <a href="#">Tariflar</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-408">
                                        <a href="#">Biz haqimizda</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-418">
                                        <a href="#">Aloqaga chiqing</a>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-1124">
                                        <a href="https://masterstudy.stylemixthemes.com/#demos">Batafsil</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1176">
                                                <a href="#">Yangiliklar</a>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1126">
                                                <a href="#">Yangi kurslar</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $content ?>
</div>
<footer id="footer">
        <div class="footer_wrapper">
            <div id="footer_bottom">
                <div class="footer_widgets_wrapper kek text-normal">
                    <div class="container">
                        <div class="widgets cols_4 clearfix">
                            <aside id="stm_text-2" class="widget stm_wp_widget_text">
                                <div class="widget_title">
                                    <h3>Biz haqimizda</h3>
                                </div>
                                <div class="textwidget">
                                    <p>
                                        <a href="http://iclub.uz/">Intellectual Club</a> o'quv va ta'limga yo'naltirilgan onlayn 
                                        interaktiv veb sayt.</a>.
                                    </p>
                                </div>
                                <div class="socials_widget_wrapper socials_widget_wrapper__text"> 
                                    <a href='https://www.facebook.com/' target='_blank'><i class='fab fa-facebook'></i></a> 
                                    <a href='https://www.twitter.com/' target='_blank'><i class='fab fa-twitter'></i></a> 
                                    <a href='https://www.instagram.com/' target='_blank'><i class='fab fa-instagram'></i></a>
                                </div>
                            </aside>
                            <aside id="contacts-2" class="widget widget_contacts">
                                <div class="widget_title">
                                    <h3>Kontaktlar</h3>
                                </div>
                                <ul class="widget_contacts_style_2">
                                    <li class="widget_contacts_address">
                                        <div class="icon"><i class="fa-icon-stm_icon_pin"></i></div>
                                        <div class="text">Toshkent, Yunusobod, Bog'ishamol ko'chasi, 1 uy</div>
                                    </li>
                                    <li class="widget_contacts_phone">
                                        <div class="icon"><i class="fa-icon-stm_icon_phone"></i></div>
                                        <div class="text">Tel.: +998 91 357 39 79</div>
                                    </li>
                                    <li class="widget_contacts_fax">
                                        <div class="icon"><i class="fa-icon-stm_icon_fax"></i></div>
                                        <div class="text">Fax: +998 95 357 33 33</div>
                                    </li>
                                    <li class="widget_contacts_email">
                                        <div class="icon"><i class="fa fa-envelope"></i></div>
                                        <div class="text"><a href="mailto:.com">info@iclub.com</a></div>
                                    </li>
                                </ul>
                            </aside>
                            <aside id="stm_pages-2" class="widget widget_pages">
                                <div class="widget_title">
                                    <h3>Sayt navigatsiyasi</h3>
                                </div>
                                <ul class="style_2">
                                    <li class="page_item page-item-664"><a href="#"><span class="h6">O'qituvchilar</span></a></li>
                                    <li class="page_item page-item-2"><a href="#"><span class="h6">Kurslar</span></a></li>
                                    <li class="page_item page-item-7 current_page_item"><a href="#" aria-current="page"><span class="h6">Asosiy</span></a></li>
                                    <li class="page_item page-item-183"><a href="#"><span class="h6">Yangiliklar</span></a></li>
                                </ul>
                            </aside>
                            <aside id="stm_recent_posts-2" class="widget widget_stm_recent_posts">
                                <div class="widget_title">
                                    <h3>Blog</h3>
                                </div>
                                <div class="widget_media clearfix widget_media_style_2">
                                    <a href="our-main-target-is-to-developing-yourself-as-a-leader/index.html">
                                        <img width="75" height="75"
                                            src="../../masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2018/08/photo-1517520287167-4bbf64a00d66-75x75.jpg"
                                            class="img-responsive wp-post-image" alt=""
                                            srcset="https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2018/08/photo-1517520287167-4bbf64a00d66-75x75.jpeg 75w, https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2018/08/photo-1517520287167-4bbf64a00d66-150x150.jpeg 150w, https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2018/08/photo-1517520287167-4bbf64a00d66-129x129.jpeg 129w, https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2018/08/photo-1517520287167-4bbf64a00d66-122x120.jpeg 122w, https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2018/08/photo-1517520287167-4bbf64a00d66-69x69.jpeg 69w, https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2018/08/photo-1517520287167-4bbf64a00d66-50x50.jpeg 50w"
                                            sizes="(max-width: 75px) 100vw, 75px" />
                                        <span class="h6">Our main target is to &#8220;Developing Yourself as a
                                            Leader&#8221;</span>
                                    </a>
                                    <div class="cats_w"> Dekabr 20, 2019</div>
                                </div>
                                <div class="widget_media clearfix widget_media_style_2">
                                    <a href="those-other-college-expenses/index.html">
                                        <img width="75" height="75"
                                            src="../../masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2015/06/photo-1490376840453-5f616fbebe5b-75x75.jpg"
                                            class="img-responsive wp-post-image" alt=""
                                            srcset="https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2015/06/photo-1490376840453-5f616fbebe5b-75x75.jpeg 75w, https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2015/06/photo-1490376840453-5f616fbebe5b-150x150.jpeg 150w, https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2015/06/photo-1490376840453-5f616fbebe5b-129x129.jpeg 129w, https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2015/06/photo-1490376840453-5f616fbebe5b-122x120.jpeg 122w, https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2015/06/photo-1490376840453-5f616fbebe5b-69x69.jpeg 69w, https://masterstudy.scdn4.secure.raxcdn.com/dark-lms/wp-content/uploads/sites/6/2015/06/photo-1490376840453-5f616fbebe5b-50x50.jpeg 50w"
                                            sizes="(max-width: 75px) 100vw, 75px" />
                                        <span class="h6">Those Other College Expenses You Aren`t Thinking About</span>
                                    </a>
                                    <div class="cats_w"> Yanvar 3, 2020</div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
