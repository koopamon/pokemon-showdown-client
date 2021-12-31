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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.2791473305936134" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.18323950771673236" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5314302302813356" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.30631672243465524" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5233867483289436" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7903653391466514" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.006194508743874172"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.2545643499685213" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6687382364409165">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4184841519327085">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.37538380922874737">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9316389436262826">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9930146263517896"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.3455603459142056"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9748388974981734"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9961408818979316"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.44135301860044907"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7654511090573319"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6292985761864989"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7852085437306235"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.16639843700245494"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5626624168665937"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.08086296083729616"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.507121207853259"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.30556557855763655"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.863782772233211"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.49498855214652293"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.18942136499928375"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9922369349685662"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5792781534640024"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.2376078770526282"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
