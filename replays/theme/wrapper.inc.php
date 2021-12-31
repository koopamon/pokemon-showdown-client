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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7359269360729082" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7802002012886464" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6388499552068654" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6171146602347564" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.0799673991426959" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6631724984734939" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.08234580264583036"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.10583670799941691" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.35982707984140716">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4747410111835819">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.25898151465218255">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.19909394215928922">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.272149229918603"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5392560946362737"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.34650654675349757"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0214536002706196"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8868477040687217"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6680122974633014"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.19181853210018018"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3177300446247029"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9470540966137153"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8658516996306949"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8035030227185853"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5409117463915591"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8146769512784864"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8791963736961472"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7154031427218799"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.21306483481916083"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.4850059736179084"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8198023566447379"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1319781002799736"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
