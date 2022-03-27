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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.20027315566157067" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.50243705449709" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.30253791746856384" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.24434983142687372" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.18311385676156045" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9753817216836516" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.370184247189399"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.38002488308101245" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8207507047655056">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2123205089283342">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4566581922734645">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7121475883509625">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2807891989531066"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.565454886031822"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1439300719513994"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0664706999038771"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5036378750570745"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4510216576095387"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8028984358879185"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.36992393448586247"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.18875701884779117"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9944401459990988"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7394944967493717"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.22542506196162249"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.44876205459995"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2592731756321507"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8629755882252852"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.16680403986477033"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.609071425024448"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5535574243005588"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.39080911238478167"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
