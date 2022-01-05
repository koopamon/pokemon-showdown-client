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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.23689053144489347" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9965414352589665" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.858338486414131" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6538112777079428" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5679453526260876" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7680650887105152" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7084466072990323"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6074209114249187" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16926074282597736">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.51177337167712">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3878305904212449">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3128881083436472">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5283233765832742"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8642710494348873"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1368403998334935"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.662842076256065"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.1938872016420301"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.019623352718261877"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.0888935487696354"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7051088396796801"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5067128110459169"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7408195177916825"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.2895941092638139"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6488106630795338"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.39215439947826813"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3540632244545181"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.28820496378474814"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.08783757923925206"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.770897937420074"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2025947426304906"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1593423924905153"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
