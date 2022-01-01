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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6493226002503909" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6760088853706205" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9388054587787082" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.05187932407124274" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9311227888321552" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8267623413105789" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8874393547148798"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3142087910790634" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20505112746951504">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15980962522869868">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9606168165292246">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7638857506933177">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.28954702451872594"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5743714694899762"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6825876793222856"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04919388198314523"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8390375920036166"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.17333757412307071"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.32751949564566774"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.36372174444006444"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5744016905363576"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.21308064116459224"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.47148237992369757"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6483583356121769"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7868932579738639"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9010941433465731"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5548239507901063"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.08176559036707576"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5420289114777213"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.45848928925122023"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9890000832720469"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
