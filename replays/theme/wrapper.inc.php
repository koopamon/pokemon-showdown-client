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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7725145144165741" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4084287142225882" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9995292810130678" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.38161348871436473" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.05783493100585235" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.24761227523525386" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.582277613106243"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8570964863053523" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7966265108354496">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.37412659044606045">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9721075803776478">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3361170222366927">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6800552610357347"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6748472847128781"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.023080352319609254"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.015029867621659143"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9738557336368083"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.05963110450444864"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.02321993745254458"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6178687310874016"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9510651122042604"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8083169030583701"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.24200010318507315"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2894197371960252"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5048130708155971"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8683768610382216"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.06516317270911154"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3368277069408445"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3809542837894122"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.943238470129296"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7104207450179401"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
