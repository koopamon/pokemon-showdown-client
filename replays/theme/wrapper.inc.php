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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3614536557566508" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.09747230960729003" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5566690913296124" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.512752900456017" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6086301310227946" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.010052335503468957" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6707229851329672"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6028777600443826" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3012140379268413">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9631136813051981">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5315276624181504">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7715292848267994">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.12765591463343062"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3214345832330163"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2732975739371193"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5043421493097062"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.20423685788951884"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7173486961696398"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5705257737450615"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.11615326632086909"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.10685486575552705"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9066098849024935"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6458049221514823"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.4904422987190997"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.11362120778530871"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5445547010680829"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6279070632579586"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.13663757272991295"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.750787527518638"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.3346275945139372"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7009569587682696"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
