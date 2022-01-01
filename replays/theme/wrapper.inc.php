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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6118819316699589" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.8696899207993558" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.061331904356672906" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7649457542058369" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9496091899818477" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.6498550877842402" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.12830131762349017"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9215623649933797" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7706768580113244">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.715314817495472">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.056309996288567365">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.2015300443812178">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5008480240551334"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.5407471925988994"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.5282979670000081"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.03891575553011184"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.35548112810718524"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2494817288398683"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.6791400653363162"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.3148328972069825"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.05268298844773689"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8728258025765823"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8910600198756364"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.665272899500108"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.7712026290801031"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.9733510716166955"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7886694621522834"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.008183026140421656"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7684670757813763"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2544794713757601"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.5600162794629273"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
