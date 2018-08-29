<?php

if(!empty($_GET['chapter_code'])) :
	$chapter_code = $_GET['chapter_code'];
elseif(get_field('caf_donor_drive_chapter_code')) :
	$chapter_code = get_field('caf_donor_drive_chapter_code');
elseif(get_field('e_chapter')) :
	$terms = get_field('e_chapter'); 
	$chapter_code = array();
  foreach($terms as $key=>$term) :
	  $chapter_code[] = $term->slug;          
  endforeach;
endif;
if($chapter_code === 'MA') :
	echo '<script async src="https://i.simpli.fi/dpx.js?cid=36339&conversion=40&campaign_id=0&m=1&tid=viewthrough&sifi_tuid=35570"></script>';
elseif($chapter_code === 'IL') :
	echo '<script async
src="https://i.simpli.fi/dpx.js?cid=90691&action=100&segment=americanfoundati
on&m=1&sifi_tuid=52385"></script>';
	echo '<script async
src="https://i.simpli.fi/dpx.js?cid=90691&conversion=40&campaign_id=0&m=1&ti
d=viewthrough&sifi_tuid=52386"></script>';
endif;

?>