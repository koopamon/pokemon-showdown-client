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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.22933520844315636" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.07011918719591015" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.34928255629418214" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2822165492229658" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.831274482239023" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.07325858538458507" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.21413909684411037"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.06646254149996311" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7408482555661728">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9025723094330806">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7761601936445284">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.26089076858847804">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9270806802355267"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6320551700530215"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8859952307753214"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.586347440730999"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.39203203496848404"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.010815374790306809"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.884874882234552"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.409419361756874"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5830062774316438"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3076470732664274"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.568009053632438"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.27451879993587047"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5434850883001061"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6581796878474209"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9264862306618113"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.963413799156446"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.48270528024094794"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6818320917592571"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.15743791932560103"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
