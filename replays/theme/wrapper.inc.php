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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5300010801102475" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6944676447893681" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.3062750660148399" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.23905822754431294" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6394897480190695" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3954908827906729" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.836267002215217"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.03364679017648342" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9542762240227365">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3727194833274168">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8162361960084352">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3174933040739627">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.628738180398356"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4413922435136046"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9587174828139031"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2977756008818926"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7541304195100023"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5724361090667567"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.006750979576932048"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.720031877697759"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5712762083005065"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7372712599297999"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4903395562506936"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3909788900864033"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.36104765813121054"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6399731168930092"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.11550425093635064"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7778441279160484"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.956980846032323"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5659780070410407"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.22502390924686844"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
