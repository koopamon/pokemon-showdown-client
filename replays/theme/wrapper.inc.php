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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9517986253424686" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.17365572246436933" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1935287631765059" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8099105147010668" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5347989155956852" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7101987537196899" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2295541800032177"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7725257029814894" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.27335259084474006">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08735878317967227">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4156178504973551">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6128144119167203">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7403099886142162"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6396519554068105"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6193522814594388"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5817989901356513"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8433831769996867"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.89863856374403"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.19076132832467052"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.07584032681688502"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8546328514182706"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.18046521002885152"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6508717920591132"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8039911116928209"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6908427307333798"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8048345684088711"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5614354542498632"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3186343983429534"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6150194720134454"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.11320576821258976"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7423935232348498"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
