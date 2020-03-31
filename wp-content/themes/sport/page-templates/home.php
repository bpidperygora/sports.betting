<?php
/*
Template Name: Bonus
*/
get_header();
main_before();
wp_enqueue_style( 'home_page.min.css' );
wp_enqueue_script( 'home_page.js' );

?>

    <main id="main">

        <div class="page_title">
            <div class="container">
                <div class="row">
                    <h1>Бонусы и акции букмекерских контор</h1>
                    <h3>
                        На этой странице представлены лучшие букмекерские конторы в интернете. Это надежные операторы
                        индустрии ставок на спорт. Богатый выбор событий, высокие лимиты ставок, приветливая и
                        оперативная служба поддержки подарят вам безупречный опыт игры. Прежде чем включить эти компании
                        в список рекомендуемых букмекерских контор, мы заключили с каждой из них соглашение о том, что в
                        целях защиты прав игроков мы имеем право выступать в качестве посредника в спорах между ними и
                        игроками в случаях урегулирования конфликтов. О том как выбрать БК читайте ниже.
                    </h3>
                </div>
            </div>
        </div>
        <div class="bonus_filter">
            <div class="container">
                <div class="row">
                    <div class="bonus_filter_items">
                        <div class="filter">
                            <button># Live ставки</button>
                        </div>
                        <div class="filter">
                            <button class="not_available"># Лучшие букмекеры</button>
                        </div>
                        <div class="filter">
                            <button># Европейский букмекер</button>
                        </div>
                        <div class="filter">
                            <button>
                                <span class="img_before_name">
                                    <img style="top: 13px" src="./wp-content/uploads/2020/02/Rectangle-3.svg" alt="">
                                </span>на Webmoney
                            </button>
                        </div>
                        <div class="filter">
                            <button>
                                <span class="img_before_name">
                                    <img src="./wp-content/uploads/2020/02/Rectangle-2.svg" alt="">
                                </span>на Яндекс.Деньги
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_content">
            <div class="container">
                <div class="row">
                    <div class="main_content_block">
                        <div class="main_content_block_item">
                            <div class="main_content_block_item_img">
                                <div class="main_content_block_item_img_img">
                                    <img src="./wp-content/uploads/2020/02/Rectangle.jpg" alt="">
                                </div>
                                <div class="main_content_block_item_img_info">
                                    <p>Букмекер месяца</p>
                                    <p>Щедрые бонусы</p>
                                </div>
                            </div>
                            <div class="main_content_block_item_main">
                                <div class="main_content_block_item_main_top">
                                    <div class="main_content_block_item_main__top_title">
                                        <h4>Приветственный</h4>
                                    </div>
                                    <div class="main_content_block_item_main_top_description">
                                        <p>100% бонус за первый депозит до 15 000 RUB от 1xСтавка</p>
                                    </div>
                                </div>
                                <div class="main_content_block_item_main_middle">
                                    <div class="main_content_block_item_main_middle_max">
                                        <h5>Макс. сумма:</h5>
                                        <h4>100 000 RUB</h4>
                                    </div>
                                    <div class="main_content_block_item_main_middle_payouts">
                                        <h5>Быстрые выплаты:</h5>
                                        <h4>нет</h4>
                                    </div>
                                    <div class="main_content_block_item_main_middle_active_to">
                                        <h5>Действителен:</h5>
                                        <h4>до 31 ноября</h4>
                                    </div>
                                    <div class="main_content_block_item_main_middle_min">
                                        <h5>Мин. депозит:</h5>
                                        <h4>1 000 RUB</h4>
                                    </div>
                                    <div class="main_content_block_item_main_middle_cashback">
                                        <h5>Кэшбек:</h5>
                                        <h4>50%</h4>
                                    </div>
                                        <div class="main_content_block_item_main_middle_bonus">
                                        <h5>Бонус код:</h5>
                                        <h4>нет</h4>
                                    </div>
                                </div>
                                <div class="main_content_block_item_main_bottom">
                                    <div class="main_content_block_item_main_bottom_item">
                                        <button><a href="/#">1xСтавка</a></button>
                                    </div>
                                    <div class="main_content_block_item_main_bottom_item">
                                        <button><a href="/#">Все бонусы (999)</a></button>
                                    </div>
                                    <div class="main_content_block_item_main_bottom_item">
                                        <button><a href="/#">Получить</a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="main_content_block_item_footer">
                                <div class="main_content_block_item_footer_info">
                                    <p>Условия получения</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">
						<?php get_sidebar(); ?>
                    </div>

                </div>
            </div>
        </div>
    </main>

<?php
main_after();
get_footer();
?>