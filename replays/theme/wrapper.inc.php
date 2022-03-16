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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.6497534969072436" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3729054360463462" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.11918686686111712" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.22060244975178578" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.6421552312644627" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.08822042240533357" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.7329121871474589"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.9911853450098183" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8948314949193357">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9571591530212964">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6808519057659326">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.20388560717012139">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.48075996406043453"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.48356583197905656"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.622724130610016"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.754972833160916"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.7336917994474106"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3560123600568845"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.30127807604804047"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.6604892905287971"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.5870667037073569"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.9352198616640925"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.8400072670376253"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5497830756333966"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.8862626223528076"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.4618302697312744"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.6223354393327094"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.0241451185534729"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.05454058411337104"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9496144022594486"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.7730531967410874"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
