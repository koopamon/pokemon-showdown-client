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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5428092201194943" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6179771377410366" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8985971150910625" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3046794188095294" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.15383023609356505" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.812972751680471" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.34156627955787133"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.46104001319494925" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7250475403469863">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5585500306465696">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2520993314248783">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4657352833578172">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6220874381014954"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7271219875541177"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8170200531851499"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2626788803359734"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.49424730826354923"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9494806298337637"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9569337933463533"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.054039244651354235"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5162079916523263"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.0742815262490879"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.927025732795163"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.729517730222599"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2752641522815773"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.09072624685303188"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1549670057822945"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.12754941741368486"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9175203954480409"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9696781870320059"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9228473896545855"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
