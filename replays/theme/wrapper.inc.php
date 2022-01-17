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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4825676044104259" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8200592111213196" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5898275657533465" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.3903604918143564" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.01341330562568488" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7664030365184165" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.20712696870730585"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8333622386635002" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9928460263075147">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1037560933978452">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7086067580455098">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6094764712878733">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9757858294413775"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5679274744620453"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5432541238773181"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7082943539786044"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7557402845565833"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5337902291443404"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4635695514481504"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3723291910038131"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7301203697383509"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.33525224794489317"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.16168722806854596"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.06789772856929499"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.34841208216039066"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8644308546122732"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.002028765619633832"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6169747413328128"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.11105507663283776"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.82248930031163"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8208719625918011"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
