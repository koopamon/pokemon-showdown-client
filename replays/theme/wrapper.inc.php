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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7642163881643109" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9714182313772108" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7461302895372528" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.649716720915068" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.2543077880035083" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.18098351783755584" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7857667982580931"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4344344773772253" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3321946799223714">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.281831913677842">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8787395944119287">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.26333700666402104">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5113535083207785"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4089253736549958"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.25214620437253266"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.19030452919135277"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.04297703282618315"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.030223755187573254"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7637508880454738"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6388452535951288"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9230579790960745"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4759924663746373"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.18237373007175117"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.48053874654228657"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5683698375725639"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8443221089568369"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.28425514762243886"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.9545163385244761"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7624495624047984"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4572304796781681"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6703217167969717"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
