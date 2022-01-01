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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3821168355626945" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9045876772581074" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5172401676700205" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7340845875843534" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5237898498637972" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.40495566759058943" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.3904395710261639"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5897243705710098" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.00735306223655674">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9086970685636666">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.14994952787468252">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2587248743382493">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3775788568635554"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8480778911789009"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5834175557395531"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1414366254838162"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.26529800264168424"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07163220156859129"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.06722179080264334"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5304040334513105"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.13200220056628864"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.23030741371499852"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.013505827771239876"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.8615714186155259"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.23779629315453077"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8980953719112834"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8202126067785356"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.0818789158492903"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.2202246177179259"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5074628207360421"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6168983152108896"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
