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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.27223553420909274" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.06409955286398628" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.43506160132885996" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.44922304713794836" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.09182799415883602" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.33612134426673035" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8861053750623276"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8955521963534054" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.34119264073752253">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6510189868058176">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7664715302058354">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2512315673790473">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.98085421300275"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9354833756560732"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.42535024532366106"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09012491467406836"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.11548523902070618"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.02811647098994796"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.31366637858202084"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6401280111778276"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.21754202439422743"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.43675792013652637"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5723690739712579"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5944715018389115"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8658852386346148"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.04210642690794253"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5302526135111671"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.137497387030862"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5221322929273948"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5974339537357027"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.977723825299204"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
