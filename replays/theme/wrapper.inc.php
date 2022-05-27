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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2658712689462668" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7435485912988364" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1654821411146108" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.31310364796808754" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7281046808341962" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4791620452464693" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.21587454879159784"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9856584899788126" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.630599190701161">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9805252133982256">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9112403035003918">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.64418085975507">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8201279176242038"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.15358594911910672"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2970671330956782"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3260019087048682"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.899963494907335"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8914733310941725"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8509694168073589"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4387712840652347"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6710851203062727"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6617578803415511"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7366655758575495"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.875275726395448"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6338690513532517"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.40522386409393607"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.12893305950341438"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.29909873482505667"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8421820076354609"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2689242213109211"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6223768052101759"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
