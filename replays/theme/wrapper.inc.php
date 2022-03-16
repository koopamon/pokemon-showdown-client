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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1357946167059616" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3110884773229583" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6040872297113697" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7738298266773993" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9832949224034657" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8150762231239976" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6323275021018178"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.42951620963160386" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6530282996687611">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2730880450424613">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9651348692543746">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4872845179724685">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06007284149577741"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3050128509260688"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.84791917744706"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.30565200430845096"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3681156379508832"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10919523796444341"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7793249498520138"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.041961054682280174"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.34305746617400956"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.041690271237602605"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5971853461226619"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.1313385608704838"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.41954038389832227"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5548720084874088"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2938611127044757"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.16893183348488705"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8156913150241103"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9524439611652398"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.39728704407559867"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
