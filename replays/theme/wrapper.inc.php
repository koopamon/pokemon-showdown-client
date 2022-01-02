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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6303780854055643" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5968580851958554" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.34724716903093955" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.4175360998147295" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.5426745083718456" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.03799127494614973" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.8945210462741908"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.6533567058005123" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.34223664744380855">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13708768215819145">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5766116264714187">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9998557937545383">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.024899532184886164"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.7732800526365429"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.12802206139180705"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.42631954330242805"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6071252629806421"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5088344160709206"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3491277994144997"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.759659778959686"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.550139557477217"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.6603171712018723"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.4247914894372804"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.13305758295931236"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.06314127078267062"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.44691863671200527"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.9440957996761634"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.1161337636361941"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.3787743509703816"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8652605567115461"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.27074133987843485"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
