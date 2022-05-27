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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3301539368203974" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.5104085352822008" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.8423951871400908" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7339020887961802" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.15017906306482054" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.28692767997468227" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.4345122576818359"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7766017767269866" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.02347239104244858">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5772796063791812">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.5542616956782">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5408788418199502">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.32365862526120526"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.9211297274505883"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.41399166776572716"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5387312229112866"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.612820802694297"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.32663253256330016"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.03060755537149107"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.845063155571439"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.44197150256978635"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4991526411525291"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.12931027261767092"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.5567312018680268"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.2767023934469943"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6242471149286422"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.8240538891077573"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.7756888324660665"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.036811126881326706"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.8798533895779495"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.962829603897392"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
