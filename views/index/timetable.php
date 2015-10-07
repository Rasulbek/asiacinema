<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 06.10.2015
 * Time: 19:56
 */
?>
<table  style=" border-color: #606060; border-radius: 10px; padding: 3px" class="col-xs-12 table text-center  visible-md visible-sm visible-lg">
    <tr style="background-color: #ac2925" class="text-center">
        <td width="20px">№</td>
        <td width="320px">Фото</td>
        <td width="400px">Название кино</td>
        <td>Время показа<br>Зал</td>
        <td>Стоимость билета</td>
    </tr>
    <?php
    $i=0;
    foreach ($this->kinolist as $key=>$value){
    $i++;
        ?>
    <tr style=" background-color: <?php if($i%2==0) echo "#333333"; else echo "#000";?>">
        <td><?php echo $i?></td>
        <td><img width="300px" src="<?php print URL."public/images/".$value['photo_sm']?>"></td>
        <td style="vertical-align: middle;"><?php
            echo "<div class='col-xs-2'><br>";
            if($value['type']=="3D"){
                echo "<img src='".URL."public/img/3d.png'>";
            }else{
                echo "<img src='".URL."public/img/2d.png'>";
            }
            echo "</div><div class='col-xs-10'>";
            echo $value['name'];

            if($value['is_premiere']==1){
                echo "<span style='color: #f5e79e'> (Премьера)<br></span>";
            }
            echo $value['more']; ?></div></td>
        <td style="vertical-align: middle;"><?php echo date("D d.m.Y",strtotime($value['date']))."<br>".date("H:i",strtotime($value['time']))."<br>";
            echo "<span class='";
            switch ($value['hall']){
                case 1:
                    echo "text-danger";
                    break;
                case 2:
                    echo "text-primary";
                    break;
                case 3:
                    echo "text-warning";
                    break;
                case 4:
                    echo "text-info";
                    break;
                case 5:
                    echo "";
                    break;
            }
            echo "'>".$value['hall_name'];
            ?></td>
        <td style="vertical-align: middle;"><?php echo $value['price'];?> сум</td>
    </tr>
    <?php } ?>
</table>
<?php
foreach ($this->kinolist as $key=>$value){
?>
<div class="col-xs-12 visible-xs">
    <div class=" panel"style="background-color: #333333">
        <div class="panel-heading text-center"  style="background-color: #ac2925"><?php
            if($value['type']=="3D"){
                echo "<img height='20px' src='".URL."public/img/3d.png'>";
            }else{
                echo "<img height='20px' src='".URL."public/img/2d.png'>";
            }
            echo "&nbsp;".$value['name'];
            if($value['is_premiere']==1){
                echo "<span style='color: #f5e79e'> (Премьера)<br></span>";
            }?></div>
        <div class="panel-body text-center">
            <img class="col-xs-12" src="<?php print URL."public/images/".$value['photo_sm']?>">
            <span class="h5"><?php echo $value['more'];
                echo "<br> Сеанс: ".date("D d.m.Y",strtotime($value['date']))." ".date("H:i",strtotime($value['time']))." ";
                echo "<br><span class='";
                switch ($value['hall']){
                    case 1:
                        echo "text-danger";
                        break;
                    case 2:
                        echo "text-primary";
                        break;
                    case 3:
                        echo "text-warning";
                        break;
                    case 4:
                        echo "text-info";
                        break;
                    case 5:
                        echo "text-info";
                        break;
                }
                echo "'>".$value['hall_name']."</span> <br>";
                echo $value['price']." сум";
                ?></span>
<!--            <div class="label label-primary center-block">Подробнее</div>-->
        </div>
    </div>
</div>

<?php }?>
<div class="col-xs-12"><br></div>
