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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.46009433366615826" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.41457838523835133" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.17046036771026674" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2541009190288699" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5597227690273092" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6798812599334527" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9587480817969845"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4452247817650681" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5722942454947424">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.502825306617475">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8508306499148279">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8065763223326383">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5200372424640312"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7297768525466095"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9104348229626618"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4423113032164552"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7513084823669751"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5473965691870009"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2480356036840745"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6419371473762898"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.867020759207463"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5674903285250505"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4400433581696557"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.40020531768469625"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6577508145549407"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3597728694075246"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.20780548513459918"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6114879798313084"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.23063416159544436"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.46770498912427616"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.584717493972629"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
