<?php if (!defined('PLX_ROOT')) exit; ?>
	<footer>
		<div>
			<p><?php $plxShow->httpEncoding() ?> | thème <a href="https://github.com/gcyrillus/Boxes">Boxes</a> - <a href="https://re7net.com">by G.C.</a> | </p>
		</div>
		<div>
			<ul class="menu">
				<?php  if($plxShow->plxMotor->aConf['enable_rss']) { ?>
				<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>
				<?php } ?>
                <?php if($plxShow->plxMotor->aConf['enable_rss_comment']) { ?>
                    <li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>
                <?php  } ?>
			</ul>
		</div>
	</footer>
	<a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a>
</body>
</html>
