<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8171843141348245" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5531485178546853" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4674130878440066" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8353629335349746" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3789763168733522" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.060015884933185104" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2733054364485634"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8343096520968583" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9378073664673086">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8433891471527124">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5841678019795291">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5176285239416536">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8245526263974752"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.577180357803744"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7021745383215405"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7797493821091559"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8562035185387871"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.36735037092718725"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2717345658069008"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4938688752971818"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2647207343160598"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.42951933311707324"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.35972636293325655"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7294513636128932"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7310990530593826"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6329685019411786"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.567899767430577"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1747809796756028"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8169951946353327"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.756739048347657"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.41610830747438965"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
