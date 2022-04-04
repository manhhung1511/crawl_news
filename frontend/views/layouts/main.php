<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\helpers\Url;
use MongoDB\BSON\ObjectId;
use common\models\Navbar;

AppAsset::register($this);

$collection = Yii::$app->mongodb->getCollection('navbar');
$navbar = $collection->find()->toArray();
?>
<?php $this->beginPage() ?> 
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="p-2 border-bottom d-flex align-items-center d-lg-block">
        <div class="container-xxl">
          <div class="d-flex align-items-center justify-content-between">
            <div class="header-left">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none header-logo">
                    <img src="https://s1.vnecdn.net/vnexpress/restruct/i/v547/v2_2019/pc/graphics/logo.svg" alt="">
                  </a>
                  <span class="time d-none d-lg-block">Thứ hai, 7/3/2022</span>
            </div>
    
            <div class="header-right">
                <div class="header-info">
                    <a href="#" class="header-link"><i class='bx bxs-time header-link-icon'></i>Mới nhất</a>
                    <a href="#" class="header-link">International</a>
                </div>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-md-none">
                    <input type="search" class="form-control header-search" placeholder="Search..." aria-label="Search">
                </form>
                <?php if(Yii::$app->user->isGuest) {?>
                    <button type="button" class="btn"> <i class='bx bxs-user header_btn-icon'></i><a class="header-link" href="<?php echo Url::to(['site/login']);?>">Đăng Nhập</a></button>
                    <?php } else { ?>
                        <div class="dropdown mr-1">
                            <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-expanded="false" data-offset="10,20">
                                   <?php echo Yii::$app->user->identity->getDisplayName()?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <a class="dropdown-item" href="#">Profile</a>
                            <?= Html::a('Logout', Url::to(['site/logout']), ['data-method' => 'POST', 'class'=>'dropdown-item']) ?>
                        </div>
                        </div>
                    <?php }?>
                    </div>
              </div>
        </div>
       <nav class="nav-header">
            <div class="container-xxl">
                <div class="header-main">
                    <i class='bx bx-menu menu-toggle'></i>
                    <i class='bx bx-x menu-close'></i>
                    <div class="menu-bg"></div>
                    <ul class="menu">
                        <li class="menu-item">
                            <a class="menu-link hover" href="<?php echo Url::to(['site/index'])?>">Trang chủ</a></li>
                        <?php foreach($navbar as $item): ?>
                            <li class="menu-item">
                            <a class="menu-link hover" href="<?php echo Url::to(['site/category','slug'=>$item['slug']])?>"><?php echo $item['title']?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
       </nav>
      </header>

<main role="main" class="flex-shrink-0">
    <div class="container-xxl">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer">
        <div class="container-xxl border-bottom-big">
            <div class="inner-footer border-bottom">
                <div class="row">
                    <div class="col-xl-2 col-6">
                        <ul class="list_menu-footer">
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link active">Trang chủ</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link active">Trang chủ</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link active">Video</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link active">Podcasts</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link active">Ảnh</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link active">Infographics</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-6">
                        <ul class="list_menu-footer">
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Trang chủ</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Trang chủ</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Video</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Podcasts</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Ảnh</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Infographics</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-6">
                        <ul class="list_menu-footer">
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Trang chủ</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Trang chủ</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Video</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Podcasts</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Ảnh</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Infographics</a>
                            </li>
                        </ul>
                    </div>
                     <div class="col-xl-2 border-end col-6">
                        <ul class="list_menu-footer">
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Trang chủ</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Trang chủ</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Video</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Podcasts</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Ảnh</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Infographics</a>
                            </li>
                        </ul>
                    </div> 
                    <div class="col-xl-2 border-end col-6">
                        <ul class="list_menu-footer">
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Trang chủ</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Trang chủ</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Video</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Podcasts</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Ảnh</a>
                            </li>
                            <li class="list_menu-item">
                                <a href="#" class="list_menu-link">Infographics</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-6">
                        <div class="footer-contact">
                            <div class="dowload-app">
                                <p>Tải ứng dụng</p>
                                <div class="app">
                                    <a href="#">VNExpress</a>
                                    <a href="#">International</a>
                                </div>
                            </div>
                            <div class="contact">
                                <p>Liên hệ</p>
                                <div class="contact_item">
                                    <a><i class='bx bx-mail-send contact-icon'></i>Tòa soạn</a>
                                    <a>Quảng cáo</a>
                                </div>
                                <a class="contact-link">Hợp tác bản quyền</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="footer_logo">
                <img class="footer-logo-img" src="https://s1.vnecdn.net/vnexpress/restruct/i/v548/v2_2019/pc/graphics/logo.svg" alt="">
                <div class="footer_logo-right">
                    <a href="#" class="d-none d-sm-block">RSS</a>
                    <span class="d-none d-sm-block">Theo dõi VnExpress trên</span>
                    <ul class="footer_logo-social d-none d-lg-flex">
                        <li><i class='bx bxl-facebook-circle' ></i></li>
                        <li><i class='bx bxl-twitter'></i></li>
                        <li><i class='bx bxl-youtube' ></i></li>
                    </ul>
                </div>
            </div>
        </div>
     

    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
