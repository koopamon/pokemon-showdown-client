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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.15038724363442113" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8325622996744166" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.44866341423568423" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3461531397851485" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3847769837708295" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.15968907763587725" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9833340280933875"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.18669152100084685" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4756596897286438">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7874372748674467">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.24813432238496613">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7616353281377235">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7345445460893065"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9352685891142911"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.663089630497409"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6876232580503814"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.501771044794082"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5832379633558242"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.17468073663791506"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.020912615877354934"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.07890871067899852"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9545148486263775"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5210855477742302"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.1741489608174831"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9900873100974803"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4452998191629376"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.007598108366001499"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.29781070174739543"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.11585954595010994"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9720242811655968"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3720355901235024"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
