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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6785550243075318" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.10773626866647179" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.24253076697543863" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.15639770661682473" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8483888875632144" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8564394908140363" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5200807485591663"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7953221302041793" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10777072103658636">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7338828350533597">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8731219171565423">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.43849361878977855">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7385126439813308"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.1242623117322319"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3608502143187102"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3300798047261515"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5461557522365346"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5567819261230795"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7082783803492012"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9761444042605767"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.378542682325423"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.008533073188576434"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.11583572597064729"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6809080474916087"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8690193209636206"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.08405392137370415"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3566863018553248"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.33937967948978565"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7587512506067802"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4888381855419519"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4504493234144338"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
