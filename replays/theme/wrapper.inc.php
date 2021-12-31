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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8324384747901492" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5213763747401763" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9959618666128971" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.044325285051714625" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5664979688186067" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6838040600184832" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6915041874412862"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7870317508664324" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.577811708484272">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3625805407130478">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6149785902056872">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9352324227041608">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7130876502643011"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.24632041478159117"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3760336533919879"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.007540150842815008"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9731810803347012"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5408844289983761"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.38298929546485616"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.48601121646015444"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8702640238502513"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4884409753876926"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7575679282531453"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.14503688820140348"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6475806539118671"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.012126507230298289"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8050487529446728"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6900522101972342"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9973602899768845"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.05249658344120234"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8818075748226213"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
