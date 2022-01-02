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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.22789303211696588" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.47042342705115026" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7892126479190436" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7373554774811841" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7368029106103635" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.3423021249424574" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1993109994664266"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4671305507417527" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20758777191724054">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2155242513929314">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.11309255612152369">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4691663178462562">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7773118773860808"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.2526434652022782"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9638654519502934"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6492655352426484"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4184737483312151"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5381659589802743"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.26142556966919206"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5684282009843924"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4016135585116489"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8220646554364643"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3443365006328676"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6058209022811136"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.07436034838677497"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6458803626128273"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.09118492949087709"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5381242315294543"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8248582248284091"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8803485313942676"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.888452388824428"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
