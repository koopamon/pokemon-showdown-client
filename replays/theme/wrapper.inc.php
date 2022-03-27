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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.4815757392816906" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9543933242967517" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.2089485798031916" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.9697962074611255" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.22305023117314904" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6064813556722408" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.2963714494929057"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7567064842065683" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.28733250680603417">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9787908134373373">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.004231297428331171">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.1375440176073961">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24568690209366606"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.07896125777463303"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.9901634266877075"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.554395126472101"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.8120279011613465"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.43654563175468897"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9543949758864407"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.9385600592204058"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5360731543811945"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5145288681405491"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.05330944393343984"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6869032540220892"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7771033516860055"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9189855467599071"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.11224951644346448"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.4766534035940104"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.22404019529328778"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.31426859794838524"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.573109505520079"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
