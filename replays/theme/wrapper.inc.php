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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6857294078244551" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8978550073901808" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.12214581160323745" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3063224204642687" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9799652900273803" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.14032072915950833" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9316495916354235"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.20756697296727267" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4410287939329227">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7901117277810474">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.41295371348048016">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8980681030444502">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4638164019787807"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9910307447118503"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7604040250317325"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7390241037016305"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3172884204552002"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09980594623977357"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6973274919166108"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.011938411754932154"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6190281137579647"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.35782191479799574"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5145732491981201"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6234701013799346"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.26304297124153586"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.08817765599785199"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.35418284658152155"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.13159220550975692"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9945232297806277"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.23258982814601614"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7059884600636837"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
