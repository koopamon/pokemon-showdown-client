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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6314402978898264" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5840140873096697" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.759050484031575" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6441751659009587" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5560490977377459" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.1777859959745829" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3193445140978486"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8574118200859044" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8220560964216008">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6714564128370031">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8866482504773225">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6497273367337122">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.16373317561680012"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7810658553158039"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.345767583053729"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.022560430081493443"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7560259833853262"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.47751161383757346"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.1577132437003046"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4204333097449866"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7102360679642128"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6621543727544461"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.10235572158676853"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9745253672793528"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6561442933468806"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2824318515162598"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9298011072449086"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.05937405371780624"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7487508499071072"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.030605997556583553"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7605804776809684"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
