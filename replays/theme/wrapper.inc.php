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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9112037959997754" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.07493841940763168" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3162612517436296" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6474715350664539" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4104787838361337" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.10736296682778712" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.17434816006275677"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7567011073279353" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9644734989614665">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.411370798070656">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5870804832711891">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.21012911703663373">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2660069352000072"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.525131460157761"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3486257322545898"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6467605208799623"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9454356500172993"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7841513897947445"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7813838658602184"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5434150154103436"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3529487966134284"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.811976208631916"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7002996386762184"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6555567808860987"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3177036371804083"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6528973959569042"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.2465609057974849"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5142372975234868"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4451812269629176"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3393997720867632"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6765367435947549"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
