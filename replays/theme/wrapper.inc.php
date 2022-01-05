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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7136482301734957" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.015586448257377317" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.29040861086959713" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9974560397607588" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5110334417881592" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5072692615613767" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.44545774954706596"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.18999001545074212" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7882786446246766">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4651526876183214">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5628928163814573">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.08593081820161075">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.03358573350010596"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4218901923858074"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8548340491538"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9366938290730249"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.050872590437698983"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5351096886194386"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9399253676669912"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7986758593837731"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8622455449457647"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.41456800462619037"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6444070424963133"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5555352274697403"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.30165689064805545"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3439087397508367"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9375964278394713"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2104862471716158"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4287567921699018"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.14402252295969187"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.47706820966534225"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
