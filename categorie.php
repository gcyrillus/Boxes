<?php include __DIR__.'/header.php'; ?>


	<ul class="repertory menu breadcrumb">
		<li><a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a></li>
		<li><?php $plxShow->catName(); ?></li>
	</ul>
<main>
	
	<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
	
	<article tabindex="0" id="post-<?php echo $plxShow->artId(); ?>">
		<header>
		  <p class="date"><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"> <?php $plxShow->artDate('#num_day #short_month'); ?></time></p>
		  <h2><a href="#"><?php $plxShow->artTitle('link'); ?></a></h2>
		  <p class="author"><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?></p>
		  <p class="rub key"><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?>.<br> <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>.</p>
		  <?php $plxShow->artThumbnail(); ?>
		</header>
		<section>
		  <?php $plxShow->artChapo(); ?>
		</section>
	</article>
  

	<?php endwhile; ?>	
	<article></article>
</main>
	<nav class="pagination text-center"><?php $plxShow->pagination(); ?></nav>

	<!--<?php $plxShow->artFeed('rss',$plxShow->catId(), '<span><a href="#feedUrl" title="#feedTitle">#feedName</a></span>'); ?>-->

<?php include __DIR__.'/sidebar.php'; ?>
<?php include __DIR__.'/footer.php'; ?>
