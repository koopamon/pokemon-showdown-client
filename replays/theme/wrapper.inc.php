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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9847598448768464" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.46673647278355723" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2862964580705101" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6318192032782346" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.33415278675809335" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.31844802465703737" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9812439676534968"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9861054824546007" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1129120717021761">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4753349540867182">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.045823864150274396">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.41679407314163663">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.512879715425226"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7668264124983568"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.005526694659640619"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5849587100587348"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.4031267109802279"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5972228545860274"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.030551787470507685"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.27313826739106895"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6299742327455713"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.0035493244676541025"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8082489293379922"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.9938636051597474"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.5224570879856405"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2798122449087026"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6444076778898218"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8045884588206278"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.06298476134830944"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.4271584380119948"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.3274347999094931"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
