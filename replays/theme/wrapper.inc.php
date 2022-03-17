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
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/font-awesome.css?0.9905682716708513" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/panels.css?0.9077091044475794" />
	<link rel="stylesheet" href="//dragonheavenserver.herokuapp.com/theme/main.css?0.35434357052911136" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/battle.css?0.6897511493772035" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/replay.css?0.09190165886572532" />
	<link rel="stylesheet" href="//dragonheaven.herokuapp.com/style/utilichart.css?0.32756328061470863" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/?0.33328176338571347"><img src="//dragonheavenserver.herokuapp.com/images/pokemonshowdownbeta.png?0.7156990401905856" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.936026460474567">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.96037038298819">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//dragonheavenserver.herokuapp.com/ladder/?0.6994518829941472">Ladder</a></li>
				<li><a class="button nav-last" href="//dragonheavenserver.herokuapp.com/forums/?0.9745617805334645">Forum</a></li>
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
	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11357812181989502"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/lodash.core.js?0.6260084231288474"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/backbone.js?0.19809443499148727"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7353267887564152"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//dragonheaven.herokuapp.com/js/lib/jquery-cookie.js?0.18969270495248702"></script>
	<script src="//dragonheaven.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3571370653166983"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-sound.js?0.9232016241660561"></script>
	<script src="//dragonheaven.herokuapp.com/config/config.js?0.5761147906446047"></script>
	<script src="//dragonheaven.herokuapp.com/js/battledata.js?0.334898372445271"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini.js?0.5192560265608244"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex-mini-bw.js?0.3613745634601404"></script>
	<script src="//dragonheaven.herokuapp.com/data/graphics.js?0.07464013037142192"></script>
	<script src="//dragonheaven.herokuapp.com/data/pokedex.js?0.23092537583827988"></script>
	<script src="//dragonheaven.herokuapp.com/data/items.js?0.8745740614293751"></script>
	<script src="//dragonheaven.herokuapp.com/data/moves.js?0.22707317715865072"></script>
	<script src="//dragonheaven.herokuapp.com/data/abilities.js?0.22385583657078456"></script>
	<script src="//dragonheaven.herokuapp.com/data/teambuilder-tables.js?0.36714403264850404"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle-tooltips.js?0.9713668358034968"></script>
	<script src="//dragonheaven.herokuapp.com/js/battle.js?0.37845394280941913"></script>
	<script src="/js/replay.js?6887ea68"></script>

</body></html>
<?php
}
