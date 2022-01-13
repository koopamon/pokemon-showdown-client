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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3137493392132795" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4861188326560806" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9894619963285962" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8680239166309964" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.555282196665486" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6646355363583056" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9978086778192305"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.46748663623464326" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8230572167939498">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0009295517273599785">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.016663532142822124">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8122416490659197">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5618126711225337"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7979418693433773"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.3784861729714504"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4381279780225402"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.26545659602857885"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7500446978358823"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.33622942394409794"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.06922394393983455"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.46114673542272344"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5680048423199597"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9691950229319852"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.14526644920615994"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.92496099411679"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.32192010971481744"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5654362656120233"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8990042379817873"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3098663360398686"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4279552423257591"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.037461897027390334"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
