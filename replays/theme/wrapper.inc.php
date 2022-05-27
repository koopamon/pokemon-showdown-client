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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4971688437262065" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9056356716286753" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.36674437180671515" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9269209315528244" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.08004839943544084" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.13448594293989502" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8711327207587385"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7374903269291222" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5041079385039307">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8727621895601789">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7896090244241674">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.06094564256760493">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4645398498205724"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.0893267913053617"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.19681552905372968"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.03934051780143788"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.014394549594674455"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.26488462576908756"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5935170462193853"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3351494679008056"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9065426784503638"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.14221484666469086"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.644674231040252"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2638039304466202"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7544813340723115"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.02204853624004688"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.21033298287019075"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.07550610749034514"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.28163211726705284"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7821948022766636"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7032794003293907"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
