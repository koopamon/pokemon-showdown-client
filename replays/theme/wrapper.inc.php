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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.36815067031654025" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6174186748291726" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5362727984201392" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5352911494243693" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8370004696850089" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.10204127678697383" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1609785433089197"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.15702701876664737" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7619050452689957">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.030424228387898822">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5257217000762802">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6375060241835766">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.37461536855143707"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2486724571750989"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6455181562608403"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06288749489154277"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.3277760626237123"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5759089964533399"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2503517272717277"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8267313245979369"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9620668170863107"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5482424095810594"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.02957862499502739"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7686691652273709"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.642427611695362"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6116565447957203"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.739699425989403"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.930685616811485"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5959827655749641"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5701783779735801"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8701420834491058"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
