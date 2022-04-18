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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.504093091897625" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4031766974739668" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5742991516592595" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8572722893542988" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.641429891940656" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9984369877986625" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.930201734206437"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4277637583323215" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4670679514272087">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.47021107483285185">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.4248346551611495">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9340863208026038">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07327360712952102"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.19333622446775478"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.23512662926287442"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.031593206035275045"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4076961709540725"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.015614675226702568"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.05359427915024195"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8343534301368478"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6838312704049492"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7604841851727235"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.011536650047912822"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.009711355973351488"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5507983628367441"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6871892365571401"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.20969272743377698"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3032239488776931"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.17024544794447527"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8623479283265241"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.42243416395512745"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
