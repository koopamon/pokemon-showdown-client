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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6104301832711294" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.21782859800364496" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3099770419581238" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.19096282519597052" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.11778132692872334" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.808985338483843" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3674365948817857"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.44964169062226866" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5166955782585423">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5348582862381894">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.28453305572747434">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1572023518480823">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8562748114884635"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.19225546821943285"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7973067937988225"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8075055124122275"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2679378121164415"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5339695227399084"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.08364997492727633"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7558734846980846"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.1826026413284063"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6135608489526179"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5321908274502829"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.022325881103526513"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6774667654622051"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3175189465144954"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6374704088514209"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7495289210218115"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6052208571921753"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6613480505782843"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.11233129323316637"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
