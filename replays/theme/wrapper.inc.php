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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.08019251972660912" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5301406755804832" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.33491120047397915" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4631486705537873" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5379865963863615" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.028059478861993226" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7742623428963744"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7683315303473379" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7022440066815288">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.27116265246504123">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.28566750863196844">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7661165932283518">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8665833849692672"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.032976277888237204"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7946047926126909"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39849646626981117"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5948143252998341"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9326938467627599"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2679790491724483"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6653611660186234"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5375894789183056"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7189372311226963"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8361207133260309"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2602131574479327"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.31778785856218583"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9498404119793511"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9961488682056081"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.28981116698235954"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.31831883094765656"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5742136881233497"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3927311482995779"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
