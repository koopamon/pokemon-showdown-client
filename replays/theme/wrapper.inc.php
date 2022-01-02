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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.8590371654518889" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.37588052505071934" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8486886483508291" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.09618587880302543" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5343205077030146" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.8586532229208166" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.10954920159346049"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.8369983516717934" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9644568248917111">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7447697660136969">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.582052929935919">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.15779376207030849">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6178629562643696"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.038309067268842645"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9318619339829881"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.16264376737565223"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.30624789432412935"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07337468352826848"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2147981423545493"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.32746976235774206"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.4824066303394723"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.3128024901848818"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.20124913422085444"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6244363767582184"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.31520771837536343"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.3113762740326864"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.3311508054638066"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.0017579919716299575"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.8321465857786732"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2957610631168315"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.9787873495969401"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
