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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9797223431114701" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.0014176035280553112" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2910822257832848" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9898764750397788" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.16839857256973523" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.42938837203961144" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.264375808354651"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.226972947058516" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12227444675517218">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.038032791073533634">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.3996284533057166">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5577561712046062">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3696417464665569"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.07393345354086756"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.025310193288577976"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8561146034584137"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8142128051854878"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1426077111898838"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5442557929301499"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7927567237782513"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6351110801056241"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3708796755335404"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3954284905301557"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.1997454207915772"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.4503439838624417"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7107697676949243"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.09687898980669307"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9521295272399644"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.586678086436567"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.09601467712868117"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.013452476744037378"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
