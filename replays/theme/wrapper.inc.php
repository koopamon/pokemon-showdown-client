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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7983185509489537" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.21103141563452255" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8429007742390133" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.34180160905498447" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.08868450996726662" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7112703282066888" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3241726096555435"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.14934203160012705" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22635725755577996">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7261144696593058">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.8379235670768661">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.20414738130737087">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3084277716484831"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.4460917750933553"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.08905472328906239"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8421138168408742"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.2075564807646817"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.24088762659096385"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3190752682972591"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.4227420092734142"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.7008962104951697"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.18030559341027774"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4132461494580164"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.20762484649500124"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.14385717746226234"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.7778035210996939"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5614069013206398"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.206341801423221"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.6434360890760589"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.08220583451080055"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.35704421011209475"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
