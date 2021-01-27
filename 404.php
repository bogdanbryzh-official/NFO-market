<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define("HIDE_SIDEBAR", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");?>

    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-5"><h1 class="error_404">404</h1>
                <p class="error_description">Ошибка 404: страница не найдена. Выберете нужную
                    в меню или воспользуйтесь разделом <a href="#">Помощь</a></p>
                <a href="/" class="catalog main_a">На главную &nbsp; <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="shop" d="M1 1L6 6.07081L1 11" stroke="#202945"></path>
                    </svg>
                </a>
            </div>

            <img src="<?=SITE_TEMPLATE_PATH?>/img/fish.png" alt="Рыба" class="img_fish">

        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>