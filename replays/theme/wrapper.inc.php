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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3491053890904525" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.44288828221187093" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7136591219124417" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3437569885635099" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5911479563931701" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.07569657089643989" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1503368179721325"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.05750289356404914" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9076887073945756">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6565285096675675">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6272618625518107">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7442187918411516">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.22168113608714002"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.42532490689941826"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7164327964601847"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7262529592879845"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.364777961690413"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47803445109756404"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.013898628088428788"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6890740140983103"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7404151029813455"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9737375921870688"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7125135598079047"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.35172630342105715"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8469704635182147"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8550008946197469"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.33867112756979156"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.21745690515938998"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.22272304823167066"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8404205858440374"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5241312273077265"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
