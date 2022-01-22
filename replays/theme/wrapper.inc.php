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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7225484831572859" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3026709001370942" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.657109184996532" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5268432365789542" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9351398653856837" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.48678911716777074" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.226156433168051"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.42035701074919674" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7262140417313387">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.979195733018676">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6797866734048466">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4328960452558128">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5822831791681113"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2906754844208057"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8796139053724239"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3202224945373007"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.588355916687531"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.597095891715544"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8886256130531944"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8653180180753548"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.12737966998685035"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6849996234574527"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.37295470421376065"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8960594037808474"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.902771516240179"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.49758940800196716"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2920640496212581"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.13048959744889777"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.607150309161566"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6957176961352969"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.19244683915277472"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
