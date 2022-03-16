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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5682679945645306" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.2653418866761097" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.11833868029572159" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.0299226464979927" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6153973957567644" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.877539214921004" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4968523989032385"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7478242073684056" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.21342432074432072">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8589309836701482">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6256137254682788">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.15009657929176456">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8854272835589949"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.39966018618660404"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.1721797775986056"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4149083050225746"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.44070115264456744"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8285625944736583"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5370398972705173"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6530157301094208"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9794193305648733"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.30124271685986437"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5775907209492743"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2507129455554211"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5029549986129795"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2481064793766321"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4572679746444477"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4039721702701613"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3882288267045908"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.16161002839915972"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.011205230322596682"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
