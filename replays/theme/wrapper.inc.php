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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.24002087821535256" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5329710966524686" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.14305073842918614" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8496093105379323" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.37171872089956737" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.644323603550538" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.007067796813978955"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.17221612165187294" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.13455904259724671">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5814742570497984">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.566394108504753">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5815057237519341">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.252544315772012"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5572956031277783"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8545130588125516"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06949284935001332"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.13371335397911066"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6595111615695373"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.37092540604136603"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6729268256564975"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2955016759617528"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5534830588448112"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5557194092965296"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4170492185240653"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5200537897804967"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.22974584493461525"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5605077969659005"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6602049007461019"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8534268122248156"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.23238042370289835"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.027905928967372207"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
