<?php
use \app\common\services\UrlService;
\app\assets\MAsset::register($this);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
	<title>微店铺首页</title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?=$content;?>
<div class="footer_fixed clearfix">
	<span><a href="<?=UrlService::buildMUrl("/default/index");?>" class="aon"><i class="home_icon"></i><b>首页</b></a></span>
	<span><a href="<?=UrlService::buildMUrl("/product/index");?>"><i class="store_icon"></i><b>图书</b></a></span>
	<span><a href="<?=UrlService::buildMUrl("/user/index");?>"><i class="member_icon"></i><b>我的</b></a></span>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>