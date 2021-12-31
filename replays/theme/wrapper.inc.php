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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9364259739617318" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.4330883382659607" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.5253967083542286" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7094238241011093" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.9748465766082894" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.027920757985509193" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.6588479680947825"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.12649435546730659" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.28850075652148877">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6755853617976146">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.07407235720543315">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.3205573466059002">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.134366081335632"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.07903032205416505"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.6686567801289705"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4373754043513851"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6816769141455568"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.36157090867752717"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.7432908174919133"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.7536147991980944"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.46354544537915143"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.4751032366876511"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.9268041710779031"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.6358304275906226"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.36527443771096824"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.6091754905464426"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.16915058216065515"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.39119146233651425"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.9601685677877232"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.6385566231633564"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.40140118471748565"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
