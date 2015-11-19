<?php
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 http://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004,2008 SoftNews Media Group
=====================================================
 Данный код защищен авторскими правами
=====================================================
 Файл: tagscloud.php
-----------------------------------------------------
 Назначение: Формирование облака тегов
=====================================================
*/

if(!defined('DATALIFEENGINE')) { die("Fuck You! (c) FL@SH (icq 525302)"); }

$is_change = false;

if ($config['allow_cache'] != "yes") { 
	$config['allow_cache'] = "yes"; $is_change = true;
}

$tpl_tags_cloud2 = dle_cache("tagscloud2", $config['skin']);

$tpl_tags_all_view2 = dle_cache("tags_all_view2", $config['skin']);


if ($tpl_tags_cloud2 === false) {

	$counts = array();
	$tags = array();
	$list = array();
	$sizes = array( "8pt", "11.5pt", "15pt", "18.5pt", "22pt" );
	$min   = 1;
	$max   = 1;
	$range = 1;

	$db->query("SELECT SQL_CALC_FOUND_ROWS tag, COUNT(*) AS count FROM " . PREFIX . "_tags GROUP BY tag ORDER BY count DESC LIMIT 0,40");

	while($row = $db->get_row()){

		$tags[$row['tag']] = $row['count'];
		$counts[] = $row['count'];

	}
	$db->free();

	if (count($counts)) {
		$min   = min($counts);
		$max   = max($counts);
		$range = ($max-$min);
	}

	foreach ($tags as $tag => $value) {

		$list[$tag]['tag']   = $tag;
		$list[$tag]['size']  = $sizes[sprintf("%d", ($value-$min)/$range*4 )];

	}

	usort ($list, "compare_tags");
	$tags = array();	

	foreach ($list as $value) {

		

		if ($config['allow_alt_url'] == "yes")
        	$tags[] = "<a href='".$config['http_home_url']."tags/".urlencode($value['tag'])."' style='font-size:{$value['size']};'>".$value['tag']."</a>";
		else
			$tags[] = "<a href='".$config['http_home_url']."index.php?do=tags&tag=".urlencode($value['tag'])."' style='font-size:{$value['size']};'>".$value['tag']."</a>";

	}

	$tpl_tags_cloud2 = implode("", $tags);

	$row = $db->super_query("SELECT FOUND_ROWS() as count");

	if ($row['count'] > 40) {

		if ($config['allow_alt_url'] == "yes")
        	$tpl_tags_all_view2 .= "<a href=\"".$config['http_home_url']."tags/\">".$lang['all_tags']."</a>";
		else
			$tpl_tags_all_view2 .= "<a href=\"$PHP_SELF?do=tags\">".$lang['all_tags']."</a>";


	}

	create_cache ("tagscloud2", $tpl_tags_cloud2, $config['skin']);
	create_cache ("tags_all_view2", $tpl_tags_all_view2, $config['skin']);
}

if ($is_change) $config['allow_cache'] = false;

echo '
<div id="cumuluscontent">
        <p>Требуется для просмотра<noindex><a href="http://www.adobe.com/go/getflashplayer" target="_blank" rel="nofollow">Flash Player 9</a></noindex> или выше.</p>
    </div>
    <script type="text/javascript"> 
	var tagcloud_cl = new SWFObject("/engine/classes/tagcloud/tagcloud.swf", "tagcloud", "160", "160", "9", "#6fffff");
	var tagcloud_cl_temp = encodeURIComponent("<tags>'.$tpl_tags_cloud2.'</tags>")
	tagcloud_cl.addParam("wmode", "transparent");						   
	tagcloud_cl.addVariable("tcolor", "0x4b73d4");
	tagcloud_cl.addVariable("tspeed", "100");
	tagcloud_cl.addVariable("distr", "true");
	tagcloud_cl.addVariable("mode", "tags");
	tagcloud_cl.addVariable("tagcloud", tagcloud_cl_temp);
	tagcloud_cl.write("cumuluscontent");
    </script>
'.$tpl_tags_all_view2;
?>