        <?php $filename = get_template_directory() . '/imports/test.xml';
        
        libxml_use_internal_errors(true);
        $xml = simplexml_load_file($filename);
        
        // if(!$xml) {
        //     echo "Failed loading XML\n";
        //     foreach(libxml_get_errors() as $error) {
        //         echo "\t", $error->message;
        //     }
        // }
        
        $json = json_encode($xml);
        $array = json_decode($json, true);
        
        $empty = true;
        foreach($array['result']['row'] as $data) {
          $date = strtotime($data['startdatetime']);
          if($data['ispublished'] == 1 && $data['ishidden'] == 0 && (!$earliest_date || $earliest_date > $date) && ($data['customfieldcode1'] === 'FL TB' && time() <= $date)) : 
              $earliest_date = $date;
              $name = $data['name'];
              $city = $data['city'];
              $state = $data['state'];
              $recordid = $data['recordid'];
              $empty = false;
          endif; 
        } ?>
        
        
	<div class="chapter__events">
		<h2>Chapter Events</h2>
        
        <?php if($empty === false) : ?>

		<img src="http://placehold.it/700x350" />
      <a href="http://afsp.donordrive.com/index.cfm?fuseaction=donorDrive.event&eventID=<?php echo $recordid ?>">
        <h3><?php echo $name; ?></h3>
        <p><?php echo date('F jS', $earliest_date); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $city . ', ' . $state; ?></p>
      </a>
		<a class="features__button" href="#">See all events</a>
		<hr>
	</div>
        
        <?php else : ?>
        
      <p>There are no events scheduled at this time.</p>
        
        <?php endif; ?>

<?php // date('Y', time()) <= date('Y', $date)); ?>