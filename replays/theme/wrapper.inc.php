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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7057124368181684" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.19457848912637243" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.784543073594069" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3650902083295777" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1114292783453692" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.667225112788056" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6218201114791355"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.18746997142224142" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9524900033277994">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07776723045487444">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.23815058022217328">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.008381387791345452">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07704915731169715"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.30180887732312867"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8977261461175841"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8171749681351719"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.10367598310695025"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5741862474339552"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.10652346312786998"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.10621518759659243"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.609051657664587"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8206290392242506"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8307221668444553"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.793549156559503"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.012718571724160244"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.32662267795672495"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.18733006676661668"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.012658536123119513"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6367712690447254"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7183073870188108"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6377089878685638"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
