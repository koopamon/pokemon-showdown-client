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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8361694135786022" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4193633913404806" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.05716141497790672" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5964093195929245" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.17527886984179575" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.02482315253975176" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6793057356902803"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9296251862679914" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.38038779864321226">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.34628413069850117">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.045385145744684996">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.8588689011061437">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.32664650859074396"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9406800831527762"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9002750242203694"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5856882945074919"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7731090441766855"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3561973623768202"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9199553082140062"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7433885405246097"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.805819345417156"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5532760609200755"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.7149968095535892"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.53095003835405"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3922608292441254"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6914172556856404"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7634850843317389"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5707028957164528"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.39377405757135664"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.1044119505335388"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.024326022857795726"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
