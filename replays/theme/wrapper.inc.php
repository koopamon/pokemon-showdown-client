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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7519253896581739" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.931680584018348" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.1977408064476811" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.33950061116109453" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.8156004793666256" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.5893088658304142" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.02393725524439727"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9855951576965651" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.46948319784000825">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.008744063908501243">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.7278240622828245">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.7493577039460078">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3022216897682166"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.776897216407261"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.2414536133646299"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.581906251541854"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.5934118324979312"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4002057786237554"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8066363632205202"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5692724258257793"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9657271695280414"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8891310119581086"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5031512474697386"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5770523477859817"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8822241959538721"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.026867443928863644"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6652418735693575"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.031185945186914976"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5027878494009121"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.806990777076465"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.4881043670830645"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
