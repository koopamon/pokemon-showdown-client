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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.09676560789642874" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.10450812378794505" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1615405284648228" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.022501851593948352" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5369395790273701" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8624172585284098" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.017100372270118847"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8997237975489736" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6735028393416327">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2953674800882298">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6019403328812951">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2808891043201185">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.36833745414998176"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5497164228459024"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2240152264276718"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6656713632584272"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6684541963912107"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7230049038198108"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.09852302595719364"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.790545751485209"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.41555210632222495"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.806836656549673"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.20227212791552596"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5470774701279433"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.881425663072354"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.22515515426432908"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9649541596909916"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8525312042836766"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7843383429320956"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.020487200373668912"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.018470023436453653"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
