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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9458502156484918" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5452678370335631" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6616773385722059" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5019739430650811" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7376640537794052" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.9675370212177083" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7562571219118022"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.983712649900754" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.44769719653927353">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07068927367830113">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.496042146566366">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4226864580145344">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3685939668604721"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.04181781078939495"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9800222730448933"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7270917047080279"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5643706101593873"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22612644160699413"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2610354327090971"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.32053412927575775"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.002997286664764287"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.1346320438860853"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.11823525883650565"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.05948128692694521"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.04995621634480041"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9778265923397549"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8182374424709518"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8995183470762349"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5766238740822247"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5428087707531679"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4239049506961179"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
