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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.09947008720940786" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9304668344962299" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.6088587551414366" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7908950744114973" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.12103740095760318" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7154208885657409" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5611905038602374"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5308165249525101" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6471988772526516">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15088820686975968">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.1148041032388667">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6233946850216483">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7252702989464364"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5756140599969042"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.0872977062409761"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.27956768990344516"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.0059966222621430365"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.29494584239898947"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.8066280504979533"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.08889360132030055"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9579078171073558"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.49614281811875216"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.10847813729055567"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.33936228703224525"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.18963462006383636"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7138666886973084"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9787053450568135"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6303177985523591"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3594843185708847"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2404898110751852"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2969533417245107"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
