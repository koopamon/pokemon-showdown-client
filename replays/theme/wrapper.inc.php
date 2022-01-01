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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5273548782192943" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8019340375085504" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.45573702402223604" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6066764754647824" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4578402763317715" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.783054488733044" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.29408692849823126"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2871732463744061" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08068240732782161">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5510480181308177">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8578117201962097">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8633227998114226">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5376796197350155"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8709824729584839"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9437696518273444"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6502830428556958"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3063709854840204"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7072607712359051"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.36908252775369266"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.970353373839959"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8075835000067608"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8804503491591333"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4044747689390833"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.07687063015158535"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.0474795661899019"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.47617297173589757"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.09133951488884406"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.008337190676993789"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.21911980833160438"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5783668375617792"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7215238905673189"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
