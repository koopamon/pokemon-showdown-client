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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.15351376696089747" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.12319919677323332" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5351270065791536" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6493729582487835" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6703111554285162" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7817227569070162" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7599252020249607"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8849738724987786" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.17266154857552385">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6501652490395904">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6088731370945188">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2501068700389124">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.25489516304649884"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5109872238676905"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.70337539515601"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9362994252900099"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8533319839387139"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9667218638235928"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.68658560644854"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9373070855152832"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9150242405165663"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5163474687779503"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8797028731284824"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6873117438098519"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9365704809400661"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.23786324114921364"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7670261969254997"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.8727084583786175"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3387995127297594"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.27929339496361427"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.45731358455462057"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
