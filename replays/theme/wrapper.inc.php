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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7061006212289938" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3376262119097957" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5161509991442073" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.10504505441441636" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7435095461854109" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.013059217433841086" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4514088400440248"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.39669502774933485" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06387496290038985">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9812879035640081">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8999106944816795">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.15326431133412566">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4706680444670306"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.08067527967598775"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9676590689380669"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.821915291931592"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.17686295909423388"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3380367353784288"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5344684063995921"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.0683102380277214"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.43693756612858614"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.23149696266905329"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.1770547003454781"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7172476805528036"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8852608764696444"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.22284786970950976"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.23061226338529783"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1619135343767244"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.771003465681581"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.07115018281503338"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.36760205463701046"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
