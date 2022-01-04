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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7233867121528836" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.24055284769084828" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.018818557455299922" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2570933665071369" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7464091750245854" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.0807194609334203" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9808820861616094"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8277322334891217" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.911920995245787">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5966518680431092">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.24306515602113588">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9630515948182832">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.016623234816561805"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.23092398505522582"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9322737240979395"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7073296758595409"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6396958792934511"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.03266383639895509"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7441978552890742"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8116731015452219"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6290783659814132"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.2926957775719239"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9187848571751973"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8372693618520688"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9918281736506309"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2722455775634409"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9113462348835935"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9825289656788283"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6893878740689279"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7221397101579743"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1425341576551098"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
