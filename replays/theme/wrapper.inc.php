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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.09762649502237508" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.01565282388602318" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.4571934239746771" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2668087730542006" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.1785346404419541" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9196313035593535" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.15196381520943913"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4603529834752995" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9107511910123964">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8719526844930154">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.871843565807574">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7051288730185237">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5967794598342142"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7575956497821985"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7270542248576626"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43452335378448437"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7166333656822965"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5241669856005042"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7839839430120392"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.17828898281842198"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8894391090821736"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.038037512296145604"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5871844870841192"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8580823262571766"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7782084395921463"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.22033025555081776"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.24485454053784017"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5259987713916532"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9491129270470409"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6566532683875452"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.391567378709752"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
