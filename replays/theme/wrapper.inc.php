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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2141688252616576" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2904997508700651" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3752904071566536" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.16479671024207265" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5241590496379638" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.39714512680856817" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5978679035500472"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4523919296499914" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.655459797501692">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9619019190952109">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6451263375744669">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6613993618095007">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9053785706372384"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9527628112117565"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3696726907736836"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3273165219030192"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5613091601265892"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.04539452115637688"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3924513907859326"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9483141438937019"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.21431036313565843"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.022570581115260557"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.12023141135660653"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4538282673716516"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7025365648736421"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.400384978174287"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4724095674636244"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.31639245824660955"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3360881200515502"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8322731051468726"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.11069281367255579"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
