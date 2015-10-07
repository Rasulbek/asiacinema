
<div class="text-center h3">��������</div>
<div class="col-xs-offset-0 col-xs-12 col-lg-offset-2 col-lg-8">
    <div id="bike-carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
        <div class="carousel-inner">
            <div class="item active">
                <img class="center-block"  src="<?php print URL?>public/images/slide1.jpg" alt=""/>
                <div class="carousel-caption">
                    <h3>������ �����������: ����� ������</h3>
                    <p class="visible-lg">����� ��� ����������, � ���� ���� �������� �� � ���, ��� ������� ���������� ������������ �...</p>
                </div>
            </div>
            <div class="item">
                <img class="center-block" src="<?php print URL?>public/images/slide2.jpg" alt=""/>
                <div class="carousel-caption">
                    <h3>�������</h3>
                    <p class="visible-lg">��������� �� ������� �� ������ �������� �������� ����������� ������������ ��� ��� ���������� �� ����� � ������� �����...</p>
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                    <h3>������ ���-�������</h3>
                    <p class="visible-lg">��� � ����� ������������� ���������, ������� ��� ���� ����� ������� ������ �����...</p>
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
    <div style="padding-bottom: 30px;"></div>
</div>
<div class="col-xs-12 text-center h3 text-danger">������� ������� �� �������</div>

<table  style=" border-color: #606060; border-radius: 10px; padding: 3px" class="col-xs-12 table text-center  visible-md visible-sm visible-lg">
    <tr style="background-color: #ac2925" class="text-center">
        <td width="20px">�</td>
        <td width="320px">����</td>
        <td width="400px">�������� ����</td>
        <td>����� ������<br>���</td>
        <td>��������� ������</td>
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
                    echo "<span style='color: #f5e79e'> (��������)<br></span>";
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
            <td style="vertical-align: middle;"><?php echo $value['price'];?> ���</td>
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
                    echo "<span style='color: #f5e79e'> (��������)<br></span>";
                }?></div>
            <div class="panel-body text-center">
                <img class="col-xs-12" src="<?php print URL."public/images/".$value['photo_sm']?>">
            <span class="h5"><?php echo $value['more'];
                echo "<br> �����: ".date("D d.m.Y",strtotime($value['date']))." ".date("H:i",strtotime($value['time']))." ";
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
                echo $value['price']." ���";
                ?></span>
                <!--            <div class="label label-primary center-block">���������</div>-->
            </div>
        </div>
    </div>

<?php }?>
<div class="col-xs-12"><br><a href="<?php print URL ?>timetable" class="btn btn-block btn-info">�������� ��� �������</a><br></div>
</div>
<div class="col-xs-12"><br></div>
<?php
