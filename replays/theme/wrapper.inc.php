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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5427152745916712" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.38062760514621474" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5607336033497599" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.00013767879410231387" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.30307862259349827" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.07459907165184787" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2676619412581138"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9701414926794885" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2777597884511549">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3285766743896714">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7465426531193267">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9965771530390344">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13082234631195555"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1871726445548929"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.4267650115496524"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8752475542622389"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.05897957193029457"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8303371945403177"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.638234314004055"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9255617386698871"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.23521929404112152"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7339796326718286"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.13917859105314334"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2637352774677879"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6013549537588505"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5308872897259524"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.47646122047999495"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.39867324760128264"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9520864394977462"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3773430535463538"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9957485710243317"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
