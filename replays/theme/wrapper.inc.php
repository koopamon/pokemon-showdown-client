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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.43137219425131" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2640046658652375" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9357194613858038" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.14385265521799728" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.969322109358155" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7286447763888331" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8338452092644457"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7537440876694705" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4287992083818355">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.52509977452463">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6390844919702072">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3905903427118076">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13629911956866136"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.27039551927238215"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.414655572724244"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2299518686491926"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8911052592587734"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4868429463250219"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9227753228142923"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9128056136966418"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8856154564438379"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3934559149849002"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7156795492495747"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9302180100602098"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9881898937422724"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.04643000346931325"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8365667020872443"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.18853770827903893"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.20465383773534285"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3147367633403404"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.10156661223812757"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
