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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.33632486532868233" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.08521566934219593" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.22571915108943785" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6983629012828805" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.38653277325802327" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.14828693389869585" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6547024103917809"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2286203768638746" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.25137184433316073">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6456966249158429">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3051046929588064">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9188960792593783">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5884057523326305"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8937470434787096"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7286799889546229"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20402949046768604"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6576343956030424"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.588429217581496"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2323074366457336"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6839925063572492"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7550387779061845"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9329251649396801"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.037456530162217394"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.0015143040248029038"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8998204393707896"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.17832658235989118"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3117564340123997"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9183780594965516"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9211336742640612"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9057525280129259"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7239579806433059"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
