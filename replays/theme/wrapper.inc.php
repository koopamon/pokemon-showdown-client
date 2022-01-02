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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3470404310708728" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.1691077343394949" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.0441824760395344" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7184667102561741" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.571740887591943" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5647968897363205" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.007653595527787882"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9123262730089376" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3304718420296917">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.430972078472299">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7824288543792921">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8598479600764473">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.38117342711326696"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9812233777397543"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.869787247880236"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.35986286099976916"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5547156393076957"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9752385819873948"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7487548329058469"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8706285473435418"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5610109487638504"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8864758850829095"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9710567695900003"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.27685837285939363"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5249371789778563"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7384369957875117"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.721737207691405"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.24186792603539153"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7236334366762347"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1229003201535992"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7562220579165497"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
