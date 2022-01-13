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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4364103877366503" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.05829014508129582" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5472880514856546" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.44898056240192274" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7483835525292606" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5544603171711733" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.25210803138398274"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6735735391631297" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9222074751465532">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.042781149286485576">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8892329955757241">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.810819167074202">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5216482476093149"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.49235823194692574"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7195459919564255"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.26095015041000247"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6013179286784274"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.030815346518862086"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3863470540010745"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.29363157515651395"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.13712740449056504"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.10451787101944432"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3058646282122406"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9383191637335746"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.18665082086327445"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.1814646653545997"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.21423378185892594"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3613709528848641"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.40345049513136466"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5687384206440542"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.1337590017031094"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
