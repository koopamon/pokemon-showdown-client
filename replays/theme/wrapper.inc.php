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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.648393784041587" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.06643546098337905" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8900691676662995" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.387595721468591" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.17214234776326065" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.47625377344069997" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5303892876217762"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7729608098978711" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2682000429189697">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05123061515987937">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5497063123841048">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8438604295434033">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4950477080527165"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.40380391566518004"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5034248349342934"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6404455026123355"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.04030122294614302"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7927492127434645"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9154466590742105"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5265224754713791"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5767254825712664"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7948168358261511"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7566188096183393"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.698919143594144"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5955415867079528"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6136507650391438"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.1647118550169071"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.15624804087063282"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2626479039494356"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.16785291500014887"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5787676563170767"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
