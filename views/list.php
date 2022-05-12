<?
	$max_count = 1;
	function getPostListByMonth($year, $month){
		global $oo;
		$temp_urlArr = array('blog', $year, $month);
		$temp = $oo->urls_to_ids($temp_urlArr);
		$output = count($temp_urlArr) == count($temp) ? $oo->children(end($temp)) : array();
		return $output;
	}
	$temp_month = substr($now_month, 1, 1);
	$temp_urlArr = array('blog', $now_year, $temp_month);
	$temp = $oo->urls_to_ids($temp_urlArr);
	$temp = count($temp_urlArr) == count($temp) ? $temp : array();
	
	if(empty($temp))
	{
		$temp_year = $now_year;
		while(empty($temp))
		{
			if($temp_month == 1){
				$temp_month = 12;
				$temp_year--;
			} 
			else $temp_month--;
			$temp = $oo->urls_to_ids(array('blog', $temp_year, $temp_month));
		}
	}
	$current_month_id = end($temp);
	$children_temp = $oo->children($current_month_id);
	$children = array();
	foreach($children_temp as $child)
		if(substr($child['name1'], 0, 1) !== '.')
			$children[] = $child;
	while( count($children) < $max_count )
	{
		if($temp_month == 1){
			$temp_month = 12;
			$temp_year--;
		}
		$temp = $oo->urls_to_ids(array('blog', $temp_year, $temp_month));
		while(empty($temp))
		{
			if($temp_month == 1){
				$temp_month = 12;
				$temp_year--;
			} 
			else $temp_month--;
			$temp = $oo->urls_to_ids(array('blog', $temp_year, $temp_month));
		}
		$this_month_id = end($temp);
		$this_children = $oo->children($current_month_id);
		if(count($this_children) > 0)
		{
			foreach($this_children as $child)
			{
				if( count($children) < $max_count && substr($child['name1'], 0, 1) !== '.')
					$children[] = $child;
				else if( count($children) >= $max_count )
					break;
			}
		}
	}

?>
<main id="list-container" class="container">
	<? foreach($children as $child){
		?><div class="list-item">
			<p><?= $child['name1']; ?></p>
		</div><?
	} ?>
</main>
