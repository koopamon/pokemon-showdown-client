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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.26169783060756435" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7712137003210497" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.05163687963922725" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.020781374085064197" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4534723146338724" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.15247492041009592" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.979406555016002"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6030845976517125" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9967314749671392">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5547566317522905">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5003484418769071">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7789778455503618">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6756839656818425"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8974396652413839"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6718788022537836"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4018739682500614"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5233934294018381"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4069464854874132"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.28925581642468634"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.40569725911127685"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9238235660173522"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.27169702116566063"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.13848299277304843"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9473041987453485"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.47597583018248923"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.41870056113971565"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.305632872877178"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.25707118439726995"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.48808186641047846"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4050046627307331"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.882713076960457"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
