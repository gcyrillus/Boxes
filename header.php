<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
<?php
	$plxShow->meta('description');
	$plxShow->meta('keywords');
	$plxShow->meta('author');
?>
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/print.css?v=<?php echo time(); ?>" media="print"/>
	<link rel="stylesheet" href="<?php $plxShow->template(); ?>/css/theme.css?v=<?php echo time(); ?>" media="screen"/>
<?php
	$plxShow->templateCss();
	$plxShow->pluginsCss();
?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlPostsRssFeed($plxShow->plxMotor->mode) ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>

<body id="top" class="page mode-<?php $plxShow->mode(true) ?>">

 <header>
  <h1><?php $plxShow->mainTitle('link'); ?></h1>
  <h2><?php $plxShow->subTitle(); ?></p></h2>
  <p>
    &copy; 2018 - <?php echo date('Y'); ?> | <?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="<?= PLX_URL_REPO?>" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a> | <a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
  </p>
</header>
<input type=checkbox id="rep_men">
<nav id="headerCat">
  <label for=rep_men ></label>  <ul>
      	<?php $plxShow->staticList($plxShow->getLang(''),'<li class="#static_class #static_status" id="#static_id"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
		<!--<?php $plxShow->pageBlog('<li class="#page_class #page_status" id="#page_id"><a href="#page_url" title="#page_name">#page_name</a></li>'); ?>-->
  </ul>
</nav>
