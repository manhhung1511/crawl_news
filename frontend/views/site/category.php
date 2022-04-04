<?php
     use yii\helpers\Url;
     $this->title = $title;
?>
<div class="container">
        <!-- title -->
        <div class="title-main mt-3">
            <h2> <?php echo $title?></h2>
            <div class="title-filter">
                <i class='bx bxs-calendar icon-date'></i>
                Xem theo ngày
            </div>
        </div>
        <!-- nav-content -->
        <!-- <nav class="business_nav">
            <ul class="business_nav-list">
                <li class="business_nav-item">
                    <a href="#" class="business_nav-link">
                        Quốc tế
                    </a>
                </li>
                <li class="business_nav-item">
                    <a href="#" class="business_nav-link">
                        Doanh nghiệp
                    </a>
                </li>
                <li class="business_nav-item">
                    <a href="#" class="business_nav-link">
                        Chứng khoán
                    </a>
                </li>
                <li class="business_nav-item">
                    <a href="#" class="business_nav-link">
                        Bất động sản
                    </a>
                </li>
                <li class="business_nav-item">
                    <a href="#" class="business_nav-link">
                        Ebank
                    </a>
                </li>
                <li class="business_nav-item d-md-none d-xl-block">
                    <a href="#" class="business_nav-link">
                        Vĩ mô
                    </a>
                </li>
                <li class="business_nav-item d-md-none d-xl-block">
                    <a href="#" class="business_nav-link">
                        Tiền của tôi
                    </a>
                </li>
                <li class="business_nav-item d-md-none d-xl-block">
                    <a href="#" class="business_nav-link">
                        Bảo hiểm
                    </a>
                </li>
                <li class="business_nav-item d-md-none d-xl-block">
                    <a href="#" class="business_nav-link">
                        Hàng hóa
                    </a>
                </li>
                <li class="business_nav-item">
                    <a href="#" class="business_nav-link">
                        E-Commerce 4.0
                    </a>
                </li>
            </ul>
        </nav> -->
        <!-- content top -->
        <?php $slug = create_slug2($new[count($new)-1]['title']) ?>
        <section class="section section_top">
            <div class="row">
                <div class="col-xl-8 col-12">
                    <a href="<?php echo yii\helpers\Url::to(['site/detail','slug'=> $slug,'id'=>(string)$new[count($new)-1]['_id']])?>" class="section_top-link">
                        <div class="top_left">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="top_left-img">
                                        <img src="<?php echo $new[count($new)-1]['img']?>"/>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="top_left-content">
                                        <h5 class="top_left-title hover">
                                             <?php echo $new[count($new)-1]['title']?>
                                        </h5>
                                        <p class="top_left-desc">
                                           <?php echo $new[count($new)-1]['desc']?>
                                        </p>
                                        <span>20' trước</span>
                                        <span>Hàng hóa</span>
                                   </div>
                                </div>
                            </div>
                          
                        </div>
                    </a>
                    <div class="row">
                        <?php foreach($newDate as $item): ?>
                            <div class="col-sm-4 col-12 mt-4">
                                <a class="section_desc-link" href="<?php echo Url::to(['site/detail','id'=>$item['_id'],'slug'=>create_slug2($item['title'])])?>">
                                    <div class="sub-news-top">
                                        <h6 class="news-top-title hover"><?php echo $item['title']?></h6>
                                        <p class="news-top-desc"><?php echo \yii\helpers\StringHelper::truncateWords($item['desc'], 30)?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="menu_top">
                        <ul class="menu_top-list">
                            <li class="menu_top-item disabled">
                                Chủ đề
                            </li>  
                            <li class="menu_top-item">
                                <a href="" class="menu_top-link">
                                    Giá xăng lập đỉnh
                                </a>
                            </li>
                            <li class="menu_top-item">
                                <a href="" class="menu_top-link">
                                    Giá xăng lập đỉnh
                                </a>
                            </li>
                            <li class="menu_top-item">
                                <a href="" class="menu_top-link">
                                    Ùn ứ ở cửa khẩu
                                </a>
                            </li>
                            <li class="menu_top-item">
                                <a href="" class="menu_top-link">
                                    Giá 
                                </a>
                            </li>
                            <span class="menu_top-icon"><i class='bx bx-chevron-left'></i></span>
                            <span class="menu_top-icon"><i class='bx bx-chevron-right'></i></span>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 d-none d-md-none d-xl-block col-12">
                    <div class="top_right-img">
                         <img src="./img/Ảnh chụp màn hình 2022-03-08 110705.png" alt="">
                    </div>
                </div>
                <div class="business_home">
                  <div class="row">
                        <div class="col-sm-4 border-end">
                            <div class="home_left">
                                <div class="home_left-content border-bottom">
                                    <h6>Cách tiết kiệm và đầu tư khi toàn cầu bất ổn</h6>
                                    <div class="home-content">
                                        <div class="row">
                                            <div class="col-xl-5 col-sm-12">
                                                <div class="home-content_img">
                                                     <img src="https://i1-kinhdoanh.vnecdn.net/2022/03/07/dollar-5403-1646652267.jpg?w=220&h=132&q=100&dpr=1&fit=crop&s=yTahbuYoG9iSD1akZ0qshg"/>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-sm-12">
                                                <p class="home-desc">
                                                    Đừng giao dịch theo các tin tức giật gân, chuẩn bị đủ tiền mặt trong ngắn hạn và liên tục đánh giá lại ngưỡng chịu đựng rủi ro của bạn.
                                                </p>
                                            </div>
                                        </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="business_home-right border-bottom">
                                <?php   
use yii\widgets\LinkPager;

                            function create_slug2($string)
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
                                foreach($new as $item):?>
                                <?php 
                                $slug = create_slug2($item->title);
                                ?>
                                <div class="row">
                                    <div class="col-xl-8 col-md-12">
                                        <div class="home-right">
                                            <div class="home-right_title">
                                                <h5 class="home-right_title-active"><?php echo $title?></h5>
                                                <!-- <span>Phân tích</span> -->
                                            </div>
                                            <a class="home-right-link" href="<?php echo Url::to(['site/detail','slug'=> $slug,'id'=>(string)$item->_id])?>">
                                                <div class="home_right-content">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="home_right-img">
                                                                <img src="<?php echo $item->img?>"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="home_right-main">
                                                                <h6 class="home_right-title mt-2 hover">
                                                                  <?php echo $item->title?>
                                                                </h6>
                                                                <p class="home_right-desc">
                                                                   <?php echo $item->desc?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-12">
                                        <div class="home_news">
                                            <h6 class="home_news-title">
                                                Công ty mẹ Uniqlo cam kết ở lại Nga
                                            </h6>
                                            <h6 class="home_news-title">
                                                Đồng rupee mất giá kỷ lục vì khủng hoảng giá dầu
                                            </h6>
                                        </div>
                                    </div>
                               </div>
                               <?php endforeach;?>
                           </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </section>
        <!-- pagination -->
        <div class="d-flex justify-content-around mt-4">
            <?php
                echo LinkPager::widget([
                    'pagination'=>$pagination,
                    'linkOptions'=>['class'=>'page-link'],
                    'pageCssClass'=>['class'=>'page-item']
                ]);
            ?>
        </div>
      
    </div>