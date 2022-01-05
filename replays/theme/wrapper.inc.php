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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4624495473571453" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9346196929547879" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.27380953692777554" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7252580006343927" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.11326001738058022" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5518955179091811" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.854723250247744"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5997637277688785" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7134035778663401">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.020737071704513665">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.668829214218295">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.12741202810348118">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1302879652880593"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.15026082457166656"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7254124575289465"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7583052357146745"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5766579993270249"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.923865406420709"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5810905601243574"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7491675352382936"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.39572182962225644"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6093191213354656"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7739798094001249"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7074109207734691"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.0938680671332488"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.953916710417454"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.4868127781299689"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.23420962102190912"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3115799467368412"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7896728208604031"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9231448665799566"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
