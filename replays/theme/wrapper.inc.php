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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8098396678545647" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.01941972277094428" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8655002220623236" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2157361425120965" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.841054110737224" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6904889721021947" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.13452866952317577"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5114823655518517" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.897047194252595">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.43642950473721354">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6284582815130466">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.12996195914129838">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.47241341757738997"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4126513228230986"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9627636555309558"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.45345949183966394"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7377556854617728"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5857589679004416"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.009556194468246737"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.21450229056039238"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7890765660470767"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3752116695483618"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.28777800670411646"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.22200454094002064"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8782081090259655"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.759916079490303"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.23138154734647443"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.17436752704301361"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9464411613616304"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3093858444356672"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.11046905873435975"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
