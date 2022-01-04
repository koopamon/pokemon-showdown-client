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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.5238126039392166" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9872519276029474" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.318556686471857" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6386753389088544" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.21287486164211278" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7896434514997697" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.9204042068577607"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.4601842558317688" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.830474053874263">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3678156135104682">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6836753067141672">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.38478560171874787">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07009444965981992"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8596572500586921"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.056332798457330746"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13153874307545266"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.036186951454153515"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.060979265463711574"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.010372998411351197"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5832489246755863"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.3592309710198225"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.8605589954909032"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.5972409394446203"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.11770347996323127"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.9419653973927709"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.2441360733840856"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.7619582472048232"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.28545328433944195"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.06698222235945184"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.2277482014529859"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.6856930874665412"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
