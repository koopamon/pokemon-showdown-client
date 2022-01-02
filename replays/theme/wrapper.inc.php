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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7128128564158578" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.7664842011262201" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.18159524921719528" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.1360645036040964" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5271771598437054" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6205061948733626" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.1208982499653597"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.14520283277315915" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.300050552496389">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5712016801233994">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8655881897957889">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.16010050816301802">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9678044331542028"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6184761828813798"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7438095621692309"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8428178988338071"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.046598480209357085"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7646277097842571"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.0704421821781076"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.13560807099843464"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.157206308333103"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9927420563431855"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.17564141513916165"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8609256812911452"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7542239658212107"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.843773814589351"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6538825921916793"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.34809984568070096"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.008684394998623723"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7819307535110127"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.33165211926641436"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
