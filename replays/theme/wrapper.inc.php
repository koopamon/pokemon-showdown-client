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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6741610879714484" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6160152635793354" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2038007998101936" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.877606425998035" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6378038487199265" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6221757962685224" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.16524137104836245"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9295684513413367" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7220287916205983">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9698015066861789">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2853871628704763">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5840236119856974">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9829030218867731"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4125484263093655"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6252091164036757"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7334877784975078"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9640763909662167"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.28956628179240007"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7344241146635659"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7780145635073361"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.252660421433871"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.28996739431501584"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9415911415582006"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.49675092292474865"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7647499208722899"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.085824568329258"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.667323051449743"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6957980455822084"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.24303247359978908"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.33937655146580403"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9008596606009334"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
