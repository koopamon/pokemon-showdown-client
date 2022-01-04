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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.16052696938388156" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.23251264409857209" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6363175737060753" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.10807186495107235" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.4478801246281514" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.48876977904532826" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.34937707659356065"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.07888092863387075" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7792603421202207">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6697898470940804">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.766197044488824">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9025551715745419">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0710405339614335"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8334283979957577"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6904656252411261"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.45369292131499894"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8258867373411969"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.55583037855625"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.33904612619541896"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.8963773539177027"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.46087727244425025"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.62535550472232"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.41546496734510385"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8511163087932943"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6969875105800489"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.28438259812990574"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8037389774710946"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4627586544875262"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.826325107476525"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.600096134648819"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8951136689645611"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
