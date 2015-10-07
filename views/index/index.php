
<div class="text-center h3">Сегодня в кино</div>
<div class="col-xs-offset-0 col-xs-12 col-lg-offset-2 col-lg-8">
    <div id="bike-carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
        <div class="carousel-inner">
            <div class="item active">
                <img class="center-block"  src="<?php print URL?>public/images/slide1.jpg" alt=""/>
                <div class="carousel-caption">
                    <h3>Миссия невыполнима: Племя изгоев</h3>
                    <p>Когда ОМН распускают, и Итан Хант остается не у дел, его команда неожиданно сталкивается с...</p>
                </div>
            </div>
            <div class="item">
                <img class="center-block" src="<?php print URL?>public/images/slide2.jpg" alt=""/>
                <div class="carousel-caption">
                    <h3>Пиксели</h3>
                    <p>Пришельцы из космоса по ошибке трактуют тематику космических компьютерных игр как объявление им войны и атакуют Землю...</p>
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                    <h3>Разлом Сан-Андреас</h3>
                    <p>Рэй — пилот спасательного вертолета, который всю свою жизнь помогал другим людям...</p>
                </div>
                <img class="center-block" src="<?php print URL?>public/images/slide3.jpg" alt=""/>
            </div>
        </div>

        <a class="left carousel-control" role="button" data-slide="prev" href="#bike-carousel">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" role="button" data-slide="next" href="#bike-carousel">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

        <ol class="carousel-indicators">
            <li data-target="#bike-carousel" class="active" data-slide-to="0"></li>
            <li data-target="#bike-carousel" data-slide-to="1"></li>
            <li data-target="#bike-carousel" data-slide-to="2"></li>
        </ol>
    </div>
</div>
</div>
<div>
<table class="table">
    <tr>
        <td>№</td>
        <td>Фото</td>
        <td>Название кино</td>
        <td>Время показа<br>Зал</td>
        <td>Стоимость</td>
    </tr>
</table>
</div>
<?php
