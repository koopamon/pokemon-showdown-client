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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7832952572531997" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.36875401071221114" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6655004307373749" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5824212288159829" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9272597814693355" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.4961811338961113" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.45964657133745335"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.42189853204638617" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2595254610544193">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.38209072483264905">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7467615141270219">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6225521870156459">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10020759414228886"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5465830625403041"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.19655878846616415"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.45872948170725225"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.22583872030069774"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7349827217843683"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.914824657038388"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.48232903212169953"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4950934573828496"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3294186971967423"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.1356278696660953"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9717853731319566"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8587483175377602"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7624640316367204"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.04591978488192883"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5222211243846928"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.15611310746759655"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.13043528941338334"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7656588268310327"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
