<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$isIndexPage = $APPLICATION->getCurPage(false) == SITE_DIR;
?>
<!DOCTYPE html>

<html lang="ru">
    <head>
        <? $APPLICATION->ShowHead();?>
        <!--css-->
        <link rel="preconnect" href="//fonts.gstatic.com">
        <?$APPLICATION->SetAdditionalCSS('//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');?>
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css');?>
        <?$APPLICATION->SetAdditionalCSS('//unpkg.com/swiper/swiper-bundle.min.css');?>
        <?$APPLICATION->SetAdditionalCSS('//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');?>

        <title><? $APPLICATION->ShowTitle()?></title>
    </head>

    <body>
        <div id="panel">
            <? $APPLICATION->ShowPanel(); ?>
        </div>
        <header class="header_main">
            <nav class="upper__header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <p class="upper_header_phone">
                                Горячая линия:
                                <a href="tel:+78007078897"
                                    >+7 (800) 707 88 97</a
                                >
                            </p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5 right">
                            <div class="rowspan">
                                <img
                                    src="<?=SITE_TEMPLATE_PATH?>/img/delivery_upper_header.svg"
                                    alt="Доставка"
                                    class="header_delivery"
                                />
                                <p class="upper_header_phone">
                                    Бесплатная доставка при оплате онлайн
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button class="glowbox">купить NFO GLOW BOX</button>
                        </div>
                    </div>
                </div>
            </nav>

            <nav class="desctop_menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2">
                            <?if($isIndexPage):?>
                            <span>
                            <?else:?>
                            <a href="/">
                            <?endif;?>
                                <img
                                    src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg"
                                    alt="Логотип"
                                    class="header__logo"
                            />
                            
                            <?if($isIndexPage):?>
                            </span>
                            <?else:?>
                            </a>
                            <?endif;?>
                        </div>
                        <div class="col-lg-8">
                            <ul class="header__menu">
                                <li class="menu__item">
                                    <a href="/catalog">Каталог</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#">Акции</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#">О компании</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#">польза продуктов nfo</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#">дайджест</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#">специалистам</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 znackki">
                            <a href="#" class="header__znacki">
                                <svg
                                    width="20"
                                    height="17"
                                    viewBox="0 0 20 17"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        class="like"
                                        d="M10.0105 16.1176L8.76424 15.0471C4.35523 11.1751 1.43335 8.66388 1.43335 5.53229C1.43335 2.981 3.486 1 6.14606 1C7.64366 1 9.05747 1.66033 10 2.73088C10.9426 1.66033 12.3564 1 13.854 1C16.514 1 18.5667 2.981 18.5667 5.53229C18.5667 8.66388 15.6553 11.1751 11.2358 15.0471L10.0105 16.1176Z"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                </svg>
                            </a>

                            <a href="/auth" class="header__znacki">
                                <svg
                                    width="15"
                                    height="19"
                                    viewBox="0 0 15 19"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        class="shop"
                                        d="M14 17.7143V15.0034C14 12.8093 12.0701 11.0345 9.68434 11.0345H5.31566C2.92985 11.0345 1 12.8093 1 15.0034V17.7143H14Z"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                    <path
                                        class="shop"
                                        d="M7.43645 8.92802C5.54901 8.92802 4.02209 7.52379 4.02209 5.78802V4.14C4.02209 2.40422 5.54901 1 7.43645 1C9.32389 1 10.8508 2.40422 10.8508 4.14V5.77826C10.8508 7.52379 9.32389 8.92802 7.43645 8.92802Z"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                </svg>
                            </a>
                            <a href="#" class="header__znacki"
                                ><svg
                                    width="19"
                                    height="19"
                                    viewBox="0 0 19 19"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        class="shop"
                                        d="M16 5.17871H3L1.5 17.7144H17.5L16 5.17871Z"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                    <path
                                        class="shop"
                                        d="M6 8V4.48175C6 2.55505 7.5632 1 9.5 1C11.4368 1 13 2.55505 13 4.48175V8"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="mobile_menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-3">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/mobile_logo.svg" alt="Логотип" />
                        </div>
                        <div class="col-md-4 col-sm-4 col-3"></div>
                        <div class="col-md-6 znackki col-sm-6 col-6">
                            <a href="#" class="header__znacki">
                                <svg
                                    class="maxi"
                                    width="35"
                                    height="35"
                                    viewBox="0 0 35 35"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M17.5 31.5L15.4622 29.6471C8.26 22.9301 3.5 18.5603 3.5 13.125C3.5 8.69338 6.86 5.25 11.2 5.25C13.6422 5.25 15.96 6.39265 17.5 8.26103C19.04 6.40809 21.3422 5.25 23.8 5.25C28.14 5.25 31.5 8.67794 31.5 13.125C31.5 18.5603 26.74 22.9301 19.5378 29.6471L17.5 31.5Z"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                </svg>

                                <svg
                                    class="mini"
                                    width="18"
                                    height="17"
                                    viewBox="0 0 18 17"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M9 16L7.83556 14.9412C3.72 11.1029 1 8.60588 1 5.5C1 2.96765 2.92 1 5.4 1C6.79556 1 8.12 1.65294 9 2.72059C9.88 1.66176 11.1956 1 12.6 1C15.08 1 17 2.95882 17 5.5C17 8.60588 14.28 11.1029 10.1644 14.9412L9 16Z"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                </svg>
                            </a>

                            <a href="#" class="header__znacki">
                                <svg
                                    class="maxi"
                                    width="35"
                                    height="36"
                                    viewBox="0 0 35 36"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M29.7325 33.2822V28.1162C29.7325 23.9402 26.0925 20.5742 21.6125 20.5742H13.3525C8.87248 20.5742 5.23248 23.9582 5.23248 28.1162V33.2822H29.7325Z"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                    <path
                                        d="M17.7975 17.7661H17.15C13.7725 17.7661 11.025 14.9401 11.025 11.4661V8.96406C11.025 5.49006 13.7725 2.66406 17.15 2.66406H17.7975C21.175 2.66406 23.9225 5.49006 23.9225 8.96406V11.4661C23.9225 14.9581 21.1925 17.7661 17.7975 17.7661Z"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                </svg>
                                <svg
                                    class="mini"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 20 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M16.99 18.49V15.62C16.99 13.3 14.91 11.43 12.35 11.43H7.62999C5.06999 11.43 2.98999 13.31 2.98999 15.62V18.49H16.99Z"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                    <path
                                        d="M10.17 9.87001H9.80005C7.87005 9.87001 6.30005 8.30001 6.30005 6.37001V4.98001C6.30005 3.05001 7.87005 1.48001 9.80005 1.48001H10.17C12.1 1.48001 13.67 3.05001 13.67 4.98001V6.37001C13.67 8.31001 12.11 9.87001 10.17 9.87001Z"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                </svg>
                            </a>
                            <a href="#" class="header__znacki"
                                ><svg
                                    class="maxi"
                                    width="35"
                                    height="36"
                                    viewBox="0 0 35 36"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M29.0325 9.47266H5.9675L3.3075 32.4227H31.71L29.0325 9.47266Z"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                    <path
                                        d="M11.2875 14.6383V8.19427C11.2875 4.66627 14.07 1.82227 17.5 1.82227C20.93 1.82227 23.7125 4.66627 23.7125 8.19427V14.6383"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                </svg>
                                <svg
                                    class="mini"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 20 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M16.59 5.75H3.41001L1.89001 18.5H18.12L16.59 5.75Z"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                    <path
                                        d="M6.45007 8.62V5.04C6.45007 3.08 8.04007 1.5 10.0001 1.5C11.9601 1.5 13.5501 3.08 13.5501 5.04V8.62"
                                        stroke="#202945"
                                        stroke-miterlimit="10"
                                    />
                                </svg>
                            </a>
                            <a href="#" class="header__znacki hamb"
                                ><svg
                                    class="maxi"
                                    width="35"
                                    height="35"
                                    viewBox="0 0 35 35"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M-0.0174561 27.4404H34.9825"
                                            stroke="#202945"
                                            stroke-miterlimit="10"
                                        />
                                        <path
                                            d="M-0.0174561 17.4824H34.9825"
                                            stroke="#202945"
                                            stroke-miterlimit="10"
                                        />
                                        <path
                                            d="M-0.0174561 7.52539H34.9825"
                                            stroke="#202945"
                                            stroke-miterlimit="10"
                                        />
                                    </g>
                                    <defs>
                                        <clippath id="clip0">
                                            <rect
                                                width="35"
                                                height="35"
                                                fill="white"
                                            />
                                        </clippath>
                                    </defs>
                                </svg>
                                <svg
                                    class="mini"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 20 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <g clip-path="url(#clip1)">
                                        <path
                                            d="M-0.0100098 15.68H19.99"
                                            stroke="#202945"
                                            stroke-miterlimit="10"
                                        />
                                        <path
                                            d="M-0.0100098 9.98999H19.99"
                                            stroke="#202945"
                                            stroke-miterlimit="10"
                                        />
                                        <path
                                            d="M-0.0100098 4.29999H19.99"
                                            stroke="#202945"
                                            stroke-miterlimit="10"
                                        />
                                    </g>
                                    <defs>
                                        <clippath id="clip1">
                                            <rect
                                                width="20"
                                                height="20"
                                                fill="white"
                                            />
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="#" class="header__znacki krest hidden"
                                ><svg
                                    class="maxi"
                                    width="22"
                                    height="21"
                                    viewBox="0 0 22 21"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <line
                                        y1="-0.5"
                                        x2="27.8276"
                                        y2="-0.5"
                                        transform="matrix(-0.701164 0.713 -0.701164 -0.713 20.5117 0.158203)"
                                        stroke="#202945"
                                    />
                                    <line
                                        y1="-0.5"
                                        x2="27.8276"
                                        y2="-0.5"
                                        transform="matrix(-0.701164 -0.713 0.701164 -0.713 21 19.8408)"
                                        stroke="#202945"
                                    />
                                </svg>
                                <svg
                                    class="mini"
                                    width="14"
                                    height="14"
                                    viewBox="0 0 14 14"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M13 13L7 7L1 13"
                                        stroke="#202945"
                                    />
                                    <path d="M1 1L7 7L13 1" stroke="#202945" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mob_menu hidden">
                    <ul class="main_menu">
                        <li class="mob_catalog">
                            <a href="#">Каталог</a>
                            <svg
                                width="7"
                                height="12"
                                viewBox="0 0 7 12"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    class="shop"
                                    d="M1 1L6 6.07081L1 11"
                                    stroke="#202945"
                                ></path>
                            </svg>
                        </li>
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">О компании</a></li>
                        <li><a href="#">польза продуктов nfo</a></li>
                        <li><a href="#">дайджест</a></li>
                        <li><a href="#">специалистам</a></li>
                    </ul>
                    <ul class="catalog_menu hidden">
                        <li class="mob_catalog home">
                            <svg
                                class="back"
                                width="7"
                                height="12"
                                viewBox="0 0 7 12"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    class="shop"
                                    d="M1 1L6 6.07081L1 11"
                                    stroke="#202945"
                                ></path>
                            </svg>
                            Меню
                        </li>
                        <li><a href="#">Все категории</a></li>
                        <li><a href="#">Омега-3</a></li>
                        <li><a href="#">Витамины</a></li>
                        <li><a href="#">Наборы</a></li>
                        <li><a href="#">Подборка BEAUTY</a></li>
                        <li><a href="#">Подборка FITNESS</a></li>
                        <li><a href="#">Подборка WELNESS</a></li>
                        <li><a href="#">Подборка KIDS</a></li>
                    </ul>
                    <div class="menu_contacts">
                        <a class="footer__contacts" href="tel:+78007078897">
                            +7 (800) 707 88 97
                        </a>
                        <br />

                        <a
                            class="footer__contacts"
                            href="mailto:info@norwegianfishoil.ru"
                        >
                            info@norwegianfishoil.ru

                            <br />
                        </a>
                        <a
                            class="footer__contacts"
                            href="https://wa.me/79998160455"
                        >
                            WhatsApp +7 999 816-04-55
                        </a>
                        <div class="rowspan">
                            <a href="#" class="socseti"
                                ><svg
                                    class="maxi"
                                    width="12"
                                    height="33"
                                    viewBox="0 0 12 33"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M6.85992 33H1.76312L1.70903 16.5065H0V10.3081H1.70903V7.4027C1.70903 2.75975 4.16009 0 8.42618 0H11.9805V6.18799H8.57328C6.91617 6.18799 6.85992 6.77063 6.85992 8.25325V10.3081H12L11.576 16.5065H6.85992V33Z"
                                        fill="#202945"
                                    />
                                </svg>
                                <svg
                                    class="mini"
                                    width="8"
                                    height="20"
                                    viewBox="0 0 8 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M4.57328 20H1.17541L1.13935 10.0039H0V6.24734H1.13935V4.48648C1.13935 1.67258 2.77339 0 5.61745 0H7.98702V3.7503H5.71552C4.61078 3.7503 4.57328 4.10341 4.57328 5.00197V6.24734H8L7.71732 10.0039H4.57328V20Z"
                                        fill="#202945"
                                    />
                                </svg>
                            </a>
                            <a href="#" class="socseti"
                                ><svg
                                    class="maxi"
                                    width="30"
                                    height="30"
                                    viewBox="0 0 30 30"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M21.5833 0.305664H7.62553C3.41957 0.305664 0 3.7225 0 7.92298V21.8917C0 26.1032 3.41683 29.509 7.62553 29.509H21.5833C25.7893 29.509 29.2088 26.1032 29.2088 21.8917V7.92572C29.2061 3.72524 25.7893 0.305664 21.5833 0.305664ZM21.5833 25.8511H7.62553C5.44172 25.8511 3.66891 24.0728 3.66891 21.8944V7.92572C3.66891 5.74739 5.44172 3.9828 7.62553 3.9828H21.5833C23.7671 3.9828 25.5399 5.75013 25.5399 7.92572V21.8944C25.5372 24.0728 23.7644 25.8511 21.5833 25.8511Z"
                                        fill="#202945"
                                    />
                                    <path
                                        d="M14.6045 6.6709C10.0643 6.6709 6.36523 10.37 6.36523 14.9157C6.36523 19.4477 10.0643 23.1495 14.6045 23.1495C19.1503 23.1495 22.8438 19.4505 22.8438 14.9157C22.8438 10.37 19.1503 6.6709 14.6045 6.6709ZM14.6045 19.4751C12.081 19.4751 10.0396 17.4393 10.0396 14.9157C10.0396 12.3921 12.081 10.3453 14.6045 10.3453C17.1199 10.3453 19.1749 12.3948 19.1749 14.9157C19.1749 17.4393 17.1199 19.4751 14.6045 19.4751Z"
                                        fill="#202945"
                                    />
                                    <path
                                        d="M20.8566 5.7959C19.7688 5.7959 18.8838 6.69189 18.8838 7.76873C18.8838 8.85652 19.7688 9.75252 20.8566 9.75252C21.9389 9.75252 22.8294 8.85652 22.8294 7.76873C22.8267 6.69189 21.9389 5.7959 20.8566 5.7959Z"
                                        fill="#202945"
                                    />
                                </svg>
                                <svg
                                    class="mini"
                                    width="19"
                                    height="20"
                                    viewBox="0 0 19 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M13.6629 0.987488H4.94576C2.31899 0.987488 0.18335 3.12142 0.18335 5.74477V14.4687C0.18335 17.0989 2.31728 19.226 4.94576 19.226H13.6629C16.2897 19.226 18.4253 17.0989 18.4253 14.4687V5.74648C18.4236 3.12313 16.2897 0.987488 13.6629 0.987488ZM13.6629 16.9415H4.94576C3.5819 16.9415 2.47472 15.8309 2.47472 14.4704V5.74648C2.47472 4.38604 3.5819 3.28399 4.94576 3.28399H13.6629C15.0268 3.28399 16.1339 4.38775 16.1339 5.74648V14.4704C16.1322 15.8309 15.025 16.9415 13.6629 16.9415Z"
                                        fill="#202945"
                                    />
                                    <path
                                        d="M9.30418 4.96283C6.46864 4.96283 4.15845 7.27302 4.15845 10.112C4.15845 12.9424 6.46864 15.2543 9.30418 15.2543C12.1431 15.2543 14.4499 12.9441 14.4499 10.112C14.4499 7.27302 12.1431 4.96283 9.30418 4.96283ZM9.30418 12.9595C7.72812 12.9595 6.45323 11.6881 6.45323 10.112C6.45323 8.53592 7.72812 7.25762 9.30418 7.25762C10.8751 7.25762 12.1586 8.53764 12.1586 10.112C12.1586 11.6881 10.8751 12.9595 9.30418 12.9595Z"
                                        fill="#202945"
                                    />
                                    <path
                                        d="M13.2089 4.41608C12.5295 4.41608 11.9768 4.97566 11.9768 5.64818C11.9768 6.32755 12.5295 6.88713 13.2089 6.88713C13.8849 6.88713 14.441 6.32755 14.441 5.64818C14.4393 4.97566 13.8849 4.41608 13.2089 4.41608Z"
                                        fill="#202945"
                                    />
                                </svg>
                            </a>
                            <a href="#" class="socseti"
                                ><svg
                                    class="maxi"
                                    width="35"
                                    height="23"
                                    viewBox="0 0 35 23"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M33.8573 4.96623C33.8573 4.96623 33.5057 2.71974 32.509 1.7253C31.2189 0.419344 29.754 0.419344 29.109 0.365428C24.3606 0.0519187 17.209 0 17.209 0C17.209 0 10.0573 0.0519187 5.30898 0.365428C4.66392 0.417347 3.1991 0.469265 1.90898 1.7253C0.854043 2.71775 0.560626 4.96623 0.560626 4.96623C0.560626 4.96623 0.208984 7.63205 0.208984 10.2979V12.754C0.208984 15.4199 0.560626 18.0338 0.560626 18.0338C0.560626 18.0338 0.912277 20.2803 1.90898 21.2747C3.1991 22.5807 4.8991 22.5287 5.66063 22.6865C8.35734 22.9481 17.209 23 17.209 23C17.209 23 24.3606 23 29.109 22.6346C29.754 22.5827 31.2189 22.5307 32.509 21.2747C33.5057 20.2823 33.8573 18.0338 33.8573 18.0338C33.8573 18.0338 34.209 15.3679 34.209 12.754V10.2979C34.209 7.63205 33.8573 4.96623 33.8573 4.96623ZM13.1057 17.5625V6.22026L24.2442 12.0212L13.1057 17.5625Z"
                                        fill="#202945"
                                    />
                                </svg>
                                <svg
                                    class="mini"
                                    width="21"
                                    height="15"
                                    viewBox="0 0 21 15"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M20.7828 3.23884C20.7828 3.23884 20.5656 1.77375 19.95 1.1252C19.1532 0.273485 18.2484 0.273485 17.85 0.238323C14.9172 0.03386 10.5 0 10.5 0C10.5 0 6.08281 0.03386 3.15 0.238323C2.75158 0.272183 1.84684 0.306043 1.05 1.1252C0.398419 1.77244 0.21719 3.23884 0.21719 3.23884C0.21719 3.23884 0 4.97743 0 6.71601V8.31785C0 10.0564 0.21719 11.7612 0.21719 11.7612C0.21719 11.7612 0.434387 13.2263 1.05 13.8748C1.84684 14.7265 2.89684 14.6927 3.36719 14.7955C5.03281 14.9661 10.5 15 10.5 15C10.5 15 14.9172 15 17.85 14.7617C18.2484 14.7278 19.1532 14.694 19.95 13.8748C20.5656 13.2276 20.7828 11.7612 20.7828 11.7612C20.7828 11.7612 21 10.0226 21 8.31785V6.71601C21 4.97743 20.7828 3.23884 20.7828 3.23884ZM7.96561 11.4538V4.05669L14.8453 7.8399L7.96561 11.4538Z"
                                        fill="#202945"
                                    />
                                </svg>
                            </a>
                            <a href="#" class="socseti"
                                ><svg
                                    class="maxi"
                                    width="36"
                                    height="33"
                                    viewBox="0 0 36 33"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M34.1517 0.0586764L0.700539 13.9835C0.0635682 14.2494 0.0398562 15.1942 0.663275 15.4924L8.05959 19.0527C8.25949 19.1497 8.41196 19.3329 8.47633 19.5556L11.651 30.2616C11.8103 30.8004 12.4269 31.0124 12.8538 30.6711L18.3765 26.2594C18.6408 26.0475 18.9999 26.0403 19.2743 26.2343L28.5375 32.859C28.9983 33.1895 29.6285 32.9093 29.7301 32.3273L35.1952 0.967601C35.307 0.338898 34.7175 -0.178434 34.1517 0.0586764ZM13.8804 20.5723L12.8809 26.5863L10.3059 17.9713L27.9683 6.3457L13.8804 20.5723Z"
                                        fill="#202945"
                                    />
                                </svg>
                                <svg
                                    class="mini"
                                    width="22"
                                    height="20"
                                    viewBox="0 0 22 20"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M21.3354 0.0355615L0.308977 8.47488C-0.0914044 8.636 -0.106309 9.20863 0.285554 9.38935L4.93466 11.5471C5.06032 11.6059 5.15615 11.7169 5.19662 11.8519L7.19214 18.3403C7.29223 18.6669 7.67983 18.7954 7.94817 18.5886L11.4196 15.9148C11.5857 15.7863 11.8114 15.782 11.9839 15.8996L17.8065 19.9145C18.0962 20.1149 18.4923 19.945 18.5562 19.5923L21.9913 0.586425C22.0616 0.205393 21.6911 -0.108142 21.3354 0.0355615ZM8.59347 12.4681L7.96522 16.1129L6.34665 10.8917L17.4487 3.84588L8.59347 12.4681Z"
                                        fill="#202945"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <noscript>
                <h2 class="disabled_js">
                    Javascript отключен в вашем веб-браузере. Некоторые функции
                    сайта недоступны.
                </h2>
            </noscript>
        </header>
        <main class="main">