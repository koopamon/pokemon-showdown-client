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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9355067315957013" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7013153510172976" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6026148529215367" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.24887515161353413" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.43950829908397515" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8207662837381748" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.02625675692742835"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.10705909868771157" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22080816577015439">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4750084106143262">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6365281212772917">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7733388089404998">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6790656796020318"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.29015387706935636"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9380335918143752"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8346339984849587"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9461580327462233"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6447260987791701"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.27800966057136534"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.02823852240854241"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5473191496207368"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.32636890964036747"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.024144512484385316"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.18751840556002786"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.07894791760659903"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5785927400764872"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.04678553893093351"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.47301744248284394"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.40841878689311883"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7309797605139214"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6577997784091167"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
