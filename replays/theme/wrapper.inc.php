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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.14051025128942563" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9922107097723976" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6043637130897392" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.619920847015254" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5884363142094207" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8593497071100369" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9860608210797854"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.3085864081217258" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7363566225694238">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6828983261590293">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.126394771986865">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6786054536648138">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6237202968006474"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7587083504469707"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.27974904796266054"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24640509239397357"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.46851146941781296"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10990921630422901"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5356621606957688"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4553400136415322"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.20168194829805475"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6605703747686964"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4946358073983743"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7447388661604393"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.1772262963233182"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7608449837415658"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7167344507244038"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6274686852059921"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5224811519064614"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6554676902818748"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6602234295744303"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
