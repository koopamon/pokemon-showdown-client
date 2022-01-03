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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8666227576178589" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.18669437241934728" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8344885295677904" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.28127368652310647" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6812929156185386" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.1724567163307109" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8812783229297743"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.16212879318533502" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19244646717287828">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.29175976778360946">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7260168502851856">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5149136114594082">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7966873580570821"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.22674720836026374"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.30969914734237514"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2833380986931595"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5249121792732008"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4519693541157701"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.24498567515545555"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.03282669437670127"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4913475863156327"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8533322437949773"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.881001505160474"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.46261910236446036"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.10670620794956331"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.14164796913258848"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.34095816703305704"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9300801293347896"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5139237915871961"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.0843139254076799"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.739139100182753"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
