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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.08633017141141663" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.28541711731671193" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.41070571084229845" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.7489349392985356" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.18636941591783618" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.7333615029675156" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.27114663337468525"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.885997904473617" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.17831582302340654">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3671985349902209">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.1930637670634172">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.6702843629681152">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7354520739713313"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.8346383285161743"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.7785738328182412"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2891518292009687"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.6464594789638269"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.004511824977020185"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.3197935770810878"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.05898384744781193"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.74828015328066"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.08332534402562652"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.28750179859778857"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.37215352222872133"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.38463299938944084"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.29106825203296083"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.5371940887737676"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.3239001715219356"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.5861096742550511"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.06886015332000461"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.35558579707220406"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
