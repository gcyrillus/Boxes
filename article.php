<?php include __DIR__.'/header.php'; ?>
<main>
	<article tabindex="0" id="post-<?php echo $plxShow->artId(); ?>">
		<header>
		  <p class="date"><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"> <?php $plxShow->artDate('#num_day #short_month'); ?></time></p>
		  <h2><a href="#"><?php $plxShow->artTitle('link'); ?></a></h2>
		  <p class="author"><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?></p>
		  <p class="rub key"><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?>.<br> <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>.</p>
		  <?php $plxShow->artThumbnail(); ?>
		</header>
		<section>
			<?php $plxShow->artContent(); ?>
		</section>
		<section>		
			<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
			<div id="siteCom"><?php include __DIR__.'/commentaires.php'; ?></div>
		</section>
	</article>
</main>
<?php include __DIR__.'/sidebar.php'; ?>
<?php include __DIR__.'/footer.php'; ?>