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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.40416767535167475" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8609744938165873" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.16802532231068268" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9851502232956157" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4002388349165211" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.673985625993482" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.42300267830044236"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7591322672481862" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7174745917793945">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9927190001344282">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6803384905873746">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.677081464494002">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18011095253380893"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.430751076453872"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.240246950587798"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8557609956886825"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.21395740673767127"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8349046969868263"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.49820442355777583"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6393125102034272"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.44438620557873976"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3768548602589661"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.43615871578154497"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3129089324708958"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.500640481527078"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5366393743651037"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1845268190189202"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.48933528135481485"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5018571401045155"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9421267565701377"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9024592145890722"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
