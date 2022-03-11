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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8136981464259998" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7898305522723079" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.9262467582636635" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1271395718813404" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3305885313087349" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7584421290161054" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.30547760088618214"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5004503782970946" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.17617856115280506">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5095846873955383">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.12875265609833564">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4997339087696395">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5946056578020256"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6051308499867574"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.13140990001167885"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5590131526531612"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.007121525438435805"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19484195074009247"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.5440637746146795"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.12704761052832425"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.6309514093585429"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.18628998784841722"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.05207592406467643"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.7319949388047327"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.6731546048019594"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9987813125043443"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.039725464668028065"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.2783733247057454"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.211039123792073"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.27226104818520946"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.35935141532174697"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
