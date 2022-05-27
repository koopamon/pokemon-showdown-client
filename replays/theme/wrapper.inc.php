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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.20435088457741335" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.1355560608880788" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.03780676392151583" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.016414425884823336" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3933586371952662" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6589624621872847" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9677830020703133"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.0728308324838094" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8720022711755899">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9995006556885104">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.9463397053324198">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1289345233777468">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7403990546156971"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4843158607677731"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.18167601942860667"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04990212326815491"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6266421685863666"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.17027384379385602"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.4421626305217645"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4041835357752446"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.8980495872376317"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8254478358699961"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.01984837075505852"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3128365903724053"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8570975728367989"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6601137088178166"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5730196093915756"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.30560045897361765"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.1844288053624339"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.10392516646160344"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.33097831955554824"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
