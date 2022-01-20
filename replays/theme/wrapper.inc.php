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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6872384973500008" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9577809249483478" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.957689367214597" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.09024346945842998" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5956342789761393" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.19358214686428843" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1689063919634639"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9561473049506541" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19340883869188552">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5515826085789557">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.530391720793256">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6516720858066583">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.12596380764990678"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.04086334100173317"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5625707778628544"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20424922473334672"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6589692891564745"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15053149799301746"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.09555382575033855"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.46952525098070663"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.593587394661188"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.695891304818361"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.24900318422811285"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.10578567840230857"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9624628810152906"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.5052559879535523"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3080669911119194"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7080103730645784"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7831144574576925"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5402481516204589"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.25184166538941133"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
