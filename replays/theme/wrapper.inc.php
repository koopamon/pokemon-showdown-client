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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.3036631013085438" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.3882702964977556" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.7331228952181557" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.5651588777081096" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.7258003441632555" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.2279400915032357" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.5884287456124249"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.5900873225012626" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.582077691651147">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.926263324486027">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.23235991755666596">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.5996523275514176">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18028969171796194"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.35047721029902945"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.42528022604660376"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.17419053331866108"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.24906820037384714"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.659601894932252"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.523419865828757"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.46470050319471534"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.414547157051844"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.09898495941574392"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9879084302510783"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.32620641132726713"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.3653519092517157"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.18281008339786697"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5412234038934967"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.6893589590777054"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.7160912219652968"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.03222120510998083"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.036815966484921914"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
