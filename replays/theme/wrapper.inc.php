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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2735299603258443" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2353115844294711" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9461483396836774" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7943779254994423" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4944249726688885" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.17776591717247414" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9740604955233991"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.01947972929863484" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8498116900111967">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3841556008732574">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.21409947290183484">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.48652913053634306">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8909121371414213"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8290738224197858"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6130240768029773"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.601111747883537"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3658572848171453"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2219856961724591"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3492714446423939"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9732390160713071"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9626393719230746"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7649142502793154"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.05706050766000925"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.019905302822812443"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.36867407983378464"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9398526753719647"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.08477005142851923"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4729713929073649"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.32967129012600394"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.781231512576015"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.07251817036623254"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
