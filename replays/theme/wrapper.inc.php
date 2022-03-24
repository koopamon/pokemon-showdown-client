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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.1968903846477703" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5028871009280047" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7330094620056566" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.2961541939501502" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6460872092643544" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6390354992519862" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.14387633006705247"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9536799729810181" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9563516546665245">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5416024375324324">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.2442690436679893">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9885998113216281">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5049245668894242"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.0743103545689987"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.27762411038323487"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9284695059256485"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6983335131805823"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5011095848117961"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.2844455811941635"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7007389645916637"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.16241989384963285"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5381355375083388"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.19816775011047594"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.14969535040004822"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.06671262066344075"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.09362436863310686"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.32617084198180324"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.009514007207216846"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2121263031689038"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.27771740557009195"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8811172921074024"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
