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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.809415865929825" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8644012064752871" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9108380057443946" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3281554432545375" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7430735840882767" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.008706439288375556" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.09414179814021817"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6320931594599342" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1366209514394381">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21818324409075762">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.0027278762163469583">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8655961654143534">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.683464938692081"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7303005203520685"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.07105422308792209"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5981601709012778"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2893958990535328"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6898102032206499"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.957823879873446"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8323691565066373"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.35285037497239036"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9322454193127685"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.679686557989827"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.35473395585662537"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7776688561518619"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5648481907614706"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.44716991761603575"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7776918588042423"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.41832445490671843"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.12703103410026229"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.19984286684956176"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
