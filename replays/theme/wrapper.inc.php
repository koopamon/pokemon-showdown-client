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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.998452242913719" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6970643685280495" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.092473429751748" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.09198864657510519" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5724383083499367" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3992594346389007" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.13494000873034673"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.15891580845373365" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08608890891662435">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7098198584599702">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.20229179433609068">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.25521597599835766">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4881804056457064"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.11203064071495628"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8081023313726885"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9696715075075151"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.17455197605298478"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5522318304509679"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.48775003718969767"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6271042009095811"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.20728134050435743"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5359579458259243"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.1660624251956544"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7761494391714907"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1703653073342526"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.891841296753155"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9427812390654409"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4128324374228365"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3733582232986621"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4321381266263755"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3262372476468547"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
