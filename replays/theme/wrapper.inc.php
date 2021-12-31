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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3740751351265088" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8483580218106268" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7746696773649355" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.8280858753721341" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.3571085104610132" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.47640871321293843" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6701602381964678"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9458190353383289" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7788155818397264">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5415374934153658">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.035363944625686594">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.4161534202992949">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7789611392314966"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.16642731776361552"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.8054313826209163"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3749807753282848"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7904522845440272"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8962915469141972"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.22311903080489381"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.2867644527068751"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.2734970107938981"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.0738666195000579"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5699226581733943"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.2862920510900828"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.27575738644459147"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.29199579594272396"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.25918499287536934"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.16267742274237684"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5986233888026844"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.7398290699337893"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.826305266387394"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
