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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6008606301456625" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.61588261497788" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.22033503471102267" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5825462569119491" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.08931693230090265" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6197077172579584" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8581806811447303"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3672820455731203" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7553972326395297">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5566567265900992">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7696738889967947">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.42998756729474885">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1240501053891423"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4743676225807991"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.03633420913791152"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8957273463952473"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.05943010896936607"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3891542600017939"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6673716038671462"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.19258927928356595"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.022790148040289893"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.7938230036233269"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3107472068789896"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.339558341700148"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.09092248145103166"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2967654514705733"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.28465045447333925"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.36449639425276104"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8224513265838151"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8257980778076781"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9495421587464112"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
