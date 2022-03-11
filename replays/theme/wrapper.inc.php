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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2745149227994421" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5324884647196906" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5892901834093482" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8447566958118928" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8825114590402101" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5809919448043059" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4959241206006382"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6306043021035981" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2987284156892134">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.42341059513803825">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.15329003666511354">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3158494362160169">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11785857836053304"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5026246078129901"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5560783226329848"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7343283542646868"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.9357832494000604"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6610202776705103"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3500378277018754"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4809988194725645"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.08268633092727384"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8431434304518108"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.6233166891090527"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9913248669158934"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9066492963115977"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1727710039848407"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9915402205468029"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.02924058892503023"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.03328918766787159"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.10197044438126279"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.22256006784781457"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
