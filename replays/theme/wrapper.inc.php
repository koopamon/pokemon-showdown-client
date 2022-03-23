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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.7632610624390166" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8490164438956185" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8837380371998986" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7594257560779722" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7549403761928193" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.21007230455360548" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7989554666213192"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.14250348378200206" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5052358403992614">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6363123691575496">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6402385832420816">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2341572320770653">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.48361931920432744"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8643252390821241"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.16859085002673568"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5231327356320035"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.775408554949027"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5358339297843182"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7072120880015635"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.841226329789077"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.9896412636304746"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8556953598990034"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.39537266054105125"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.3427910702167032"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.31717650767746597"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.009554507446327687"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7809020973096086"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.5002186622390306"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5184206679995493"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.5859837023206631"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.8390309533542841"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
