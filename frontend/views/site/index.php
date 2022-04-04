<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'Trang chủ';
function create_slug($string)
{
    $search = array(
        '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
        '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
        '#(ì|í|ị|ỉ|ĩ)#',
        '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
        '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
        '#(ỳ|ý|ỵ|ỷ|ỹ)#',
        '#(đ)#',
        '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
        '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
        '#(Ì|Í|Ị|Ỉ|Ĩ)#',
        '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
        '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
        '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
        '#(Đ)#',
        "/[^a-zA-Z0-9\-\_]/",
    );
    $replace = array(
        'a',
        'e',
        'i',
        'o',
        'u',
        'y',
        'd',
        'A',
        'E',
        'I',
        'O',
        'U',
        'Y',
        'D',
        '-',
    );
    $string = preg_replace($search, $replace, $string);
    $string = preg_replace('/(-)+/', '-', $string);
    $string = strtolower($string);
    return $string;
    }
?> 
 <section class="section section_topstory">
        <div class="container border-bottom">
            <div class="row">
                <div class="col-xl-8 col-12">
                    <a href="#" class="topstory-link">
                        <div class="topstory_main">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="topstory_img">
                                        <img src="
                                        <?php echo $model[count($model)-5]['img']?>">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="topstory-content">  
                                        <h3 class="topstory_title hover">
                                        <?php 
                                        echo $model[count($model)-5]['title']
                                        ?>
                                        </h3>
                                        <p class="topstory_desc">
                                        <?php 
                                        echo $model[count($model)-5]['desc'];
                                        ?>
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                   
                    <div class="topstory_content mt-4">
                        <div class="row">
                            <div class="col-sm-4 d-none d-sm-block">
                                <a href="<?php echo $model[count($model)-3]['link']?>" class="new_tops-link">
                                    <div class="new_tops">
                                        <h4 class="new_tops-title hover">
                                            <?php echo $model[count($model)-3]['title']?>
                                        </h4>
                                        <p class="new_tops-desc">
                                            <?php echo \yii\helpers\StringHelper::truncateWords($model[count($model)-3]['desc'], 30)?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 d-none d-sm-block">
                                <a href="<?php echo $model[count($model)-3]['link']?>" class="new_tops-link">
                                    <div class="new_tops">
                                        <h4 class="new_tops-title hover">
                                             <?php echo $model[count($model)-4]['title']?>
                                        </h4>
                                        <p class="new_tops-desc">
                                        <?php echo \yii\helpers\StringHelper::truncateWords($model[count($model)-4]['desc'], 30)?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 d-none d-sm-block">
                                    <h5 class="new_top-title">
                                        <a href="#" class="new_tops-link hover">Góc nhìn: Trường công không rẻ</a>
                                    </h5>
                                    <p class="new_tops-desc">
                                        <a class="new_tops-link">Chi phí để thi đỗ  vào trường công</a>
                                    </p>
                                    <div class="author_gocnhin">
                                        <div class="author_info">
                                            <a href="#" class="author_name">Vũ Hoàng Long</a>
                                            <div><a class="author_message"> <i class='bx bxs-message'></i> 34</a></div>
                                        </div>
                                        <div class="author_img">
                                            <img src="https://i1-vnexpress.vnecdn.net/2022/02/17/longremovebgpreviewjpng-1645112620.png?w=100&h=100&q=100&dpr=1&fit=crop&s=_b4uwlO7Bob66ORsz8Srew" alt="">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="col-xl-4">
                    <div class="img-quangcao d-none d-sm-none d-lg-block">
                        <img src="./img/Ảnh chụp màn hình 2022-03-07 094148.png" alt="">
                    </div>
                </div>

            </div>
        </div>
</section>
<section class="section section_home">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-sm-6 col-12 border-end">
                    <?php foreach($model as $item):?>
                        <a class="section_home-link" href="<?php echo Url::to(['site/detail','id'=>(string)$item['_id'],'slug'=>create_slug($item['title'])])?>">
                            <div class="home_main border-bottom">
                                <h4 class="home_title hover">
                                  <?php echo $item['title']?>
                                </h4>
                                <div class="home_content">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="home_img">
                                                <img src="<?php echo $item['img']?>"/>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <p class="home_desc">
                                            <?php echo $item['desc']?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </a>
                    <?php endforeach;?>
                </div>
                <div class="col-xl-8 col-sm-6">
                    <?php foreach($news as $key => $new):?>
                    <div class="home_business">
                        <div class="home_nav">
                            <ul class="home_nav-list justify-content-sm-start justify-content-start">
                                <li class="home_nav-item active pe-3">
                                    <a href="<?php echo Url::to(['site/category','slug'=>create_slug($key)])?>" class="home_nav-link especially hover"><?php echo $key?></a>
                                </li>
                            </ul>
                        </div>
                       <div class="home_child border-bottom ms-0">
                           <div class="row">
                               <div class="col-xl-8 col-12">
                                   <a href="<?php echo Url::to(['site/detail', 'id'=>(string)$new['_id'],'slug'=>create_slug($new['title'])]) ?>" class="home_child-link">
                                       <div class="row">
                                           <div class="col-xl-6">
                                                <div class="home_child-main-image">
                                                    <img src="<?php echo $new['img']?>" alt="">
                                                </div>
                                           </div>
                                           <div class="col-xl-6">
                                                <div class="home_child-content">
                                                    <h5 class="home_child-title hover">
                                                         <?php echo $new['title']?>
                                                     </h5>
                                                <div class="home_chid-desc">
                                                     <?php echo $new['desc']?>
                                                </div>
                                               </div>
                                          </div>
                                        </div>
                                   </a> 
                                </div>
                               <div class="col-xl-4 d-none d-sm-block">
                                    <a href="#" class="home_child-link">
                                        <h5 class="home_child-title">
                                            Nhà cao cấp phủ sóng 70% thị trường
                                        </h5>
                                        <div class="home_child-desc">
                                            <span>TP HCM-</span>Với 14.443 căn hộ được chào bán năm qua, thành phố ghi nhận 10.404 căn thuộc phân khúc từ cao cấp đến siêu sang, chiếm ...
                                        </div>
                                    </a>
                               </div>
                           </div>
                       </div>
                    </div>
                       <ul class="home_title-news d-none d-sm-block d-xl-flex">
                           <li class="title_news-item">
                                <h6>Cần chuẩn bị gì cho việc nghỉ hưu?</h6>
                           </li>
                           <li class="title_news-item">
                                <h6>Đồng rupee mất giá kỷ lục vì khủng hoảng giá dầu</h6>
                            </li>
                            <li class="title_news-item">
                                 <h6>Nhà cao cấp phủ sóng 70% thị trường</h6>
                            </li>
                       </ul>
                    <?php endforeach;?>
                </div>
            </div>  
            </div>
        </div>
</section>
