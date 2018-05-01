<?php
global $order;
?>
<td colspan="5">
<div class="order-detailed">
    <div class="order-detailed-summery">
        <div class="order-detailed-info">
            <div class="detailed-info-row">
                <div class="detailed-info-label">
                    Целевое использование:
                </div>
                <div class="detailed-info-value">
                    <?=$order->title;?>
                </div>
            </div>
            <div class="detailed-info-row">
                <div class="detailed-info-label">
                    Краткое описание:
                </div>
                <div class="detailed-info-value">
                    <?=$order->description;?>
                </div>
            </div>
            <div class="detailed-info-row">
                <div class="detailed-info-label">
                    Площадь:
                </div>
                <div class="detailed-info-value">
                   <?= $order->area ?>
                </div>
            </div>
            <div class="detailed-info-row">
                <div class="detailed-info-label">
                    Стоимость работы:
                </div>
                <div class="detailed-info-value">
                    <?= $order->price ?> грн.
                </div>
            </div>
            <div class="detailed-info-row">
                <div class="detailed-info-label">
                    Оплата работ:
                </div>
                <div class="detailed-info-value">
                    10.10.2017
                </div>
            </div>
            <div class="detailed-info-row">
                <div class="detailed-info-label">
                    Стадии работ:
                </div>
                <div class="detailed-info-value">
                    <?= $order->status ?>
                </div>
            </div>
        </div>
        <div class="order-detailed-map">
            <div id="map-<?= $order->id ?>" data-lat="<?= $order->lat ?>" data-lng="<?= $order->lng ?>" data-rang="<?= $order->rang ?>" class="location-map"></div>
        </div>
        <button class="executer-answers-show">Ответов (2)<span class="arrow"></span></button>
    </div>
    <div class="order-detailed-answer">
        <div class="order-answer-table">
            <table>
                <tr>
                    <th>Код исполнителя</th>
                    <th>Цена</th>
                    <th>Условия исполнения</th>
                    <th>Выбрать</th>
                </tr>
                <tr class="order-executer">
                    <td>12345</td>
                    <td>2500</td>
                    <td>В крайтчайшие сроки при условии хорошей погоды , сделаем за 5 дней</td>
                    <td><button class="button button-invert"><span>Выбрать</span></button></td>
                </tr>
                <tr class="order-executer-extend">
                    <td colspan="4">
                        <div class="order-executer-info">
                            <div class="order-executer-message">
                                <div class="order-executer-avatar">
                                    <img src="img/executer-avatar.jpg" alt="">
                                </div>
                                <form>
                                    <div class="order-executer-form">
                                        <input type="text" placeholder="Написать сообщение">
                                        <button type="submit" class="button button-invert"><span>Отправить</span></button>
                                    </div>
                                </form>
                            </div>
                            <div class="order-executer-statistic">
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Рейтинг
                                    </div>
                                    <div class="executer-statistic-value">
                                        10/100
                                    </div>
                                </div>
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Количество сделок, в том числе безопасных
                                    </div>
                                    <div class="executer-statistic-value">
                                        12/2
                                    </div>
                                </div>
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Коэффициент доверия
                                    </div>
                                    <div class="executer-statistic-value">
                                        30/10
                                    </div>
                                </div>
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Отзывы других заказчиков
                                    </div>
                                    <div class="executer-statistic-value">
                                        +10/-1
                                    </div>
                                </div>
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Количество лет на рынке
                                    </div>
                                    <div class="executer-statistic-value">
                                        5
                                    </div>
                                </div>
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Количество завершенных проектов
                                    </div>
                                    <div class="executer-statistic-value">
                                        3
                                    </div>
                                </div>
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Количество выигранных тендеров
                                    </div>
                                    <div class="executer-statistic-value">
                                        11
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="order-executer">
                    <td>12345</td>
                    <td>2500</td>
                    <td>В крайтчайшие сроки при условии хорошей погоды , сделаем за 5 дней</td>
                    <td><button class="button button-invert"><span>Выбрать</span></button></td>
                </tr>
                <tr class="order-executer-extend">
                    <td colspan="4">
                        <div class="order-executer-info">
                            <div class="order-executer-message">
                                <div class="order-executer-avatar">
                                    <img src="img/executer-avatar.jpg" alt="">
                                </div>
                                <form>
                                    <div class="order-executer-form">
                                        <input type="text" placeholder="Написать сообщение">
                                        <button type="submit" class="button button-invert"><span>Отправить</span></button>
                                    </div>
                                </form>
                            </div>
                            <div class="order-executer-statistic">
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Рейтинг
                                    </div>
                                    <div class="executer-statistic-value">
                                        10/100
                                    </div>
                                </div>
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Количество сделок, в том числе безопасных
                                    </div>
                                    <div class="executer-statistic-value">
                                        12/2
                                    </div>
                                </div>
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Коэффициент доверия
                                    </div>
                                    <div class="executer-statistic-value">
                                        30/10
                                    </div>
                                </div>
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Отзывы других заказчиков
                                    </div>
                                    <div class="executer-statistic-value">
                                        +10/-1
                                    </div>
                                </div>
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Количество лет на рынке
                                    </div>
                                    <div class="executer-statistic-value">
                                        5
                                    </div>
                                </div>
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Количество завершенных проектов
                                    </div>
                                    <div class="executer-statistic-value">
                                        3
                                    </div>
                                </div>
                                <div class="executer-statistic-row">
                                    <div class="executer-statistic-label">
                                        Количество выигранных тендеров
                                    </div>
                                    <div class="executer-statistic-value">
                                        11
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <button class="order-detailed-close"></button>
</div>
</td>