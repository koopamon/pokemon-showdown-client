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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.33765523826763677" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.0008155672089260602" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.26200486223214003" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6014547175136393" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.16642545929171004" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7602220112449134" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9282480504606185"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5478646324419147" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.25836362120276024">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6561999812695016">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.941514144127314">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5477114742631104">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20410493456033185"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.25934052191330803"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.35406007456104915"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.45745246757743274"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7524923007503517"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9302468726459476"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.38517287937675726"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2963403199731536"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.944222908930485"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5340926884063273"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2745861109754133"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.49940940046535376"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6326378101486865"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.28495175711430143"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9361646206491265"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5881648295531847"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.28510477476283347"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9295346977174521"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.676556352634653"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
