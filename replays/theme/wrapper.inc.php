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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.10155023036493671" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.6845795159522883" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.39614889949360044" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.11872265688435424" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.009777244905133875" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5531962595306512" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8969938060029297"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.817146029817029" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11755659176779099">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5832269612700429">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7640072446153281">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6943368795828255">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13605562621028588"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8283979031351576"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.24661025865642405"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21420214972338547"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.26884177939608556"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7494554286155737"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5590121094529099"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5467453874602786"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6757754870113117"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.338918142856268"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.23224052846610177"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7938633740666103"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1741268471184254"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.876910332511124"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1209218288322258"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5899174704920982"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.49111973694049205"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7633851961355884"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5828751529918654"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
