<?
$temp = $oo->urls_to_ids(array('animations'));
$animations_id = end($temp);
$animations_children = $oo->children($animations_id);
if( count($animations_children) !== 0 )
{

}
else echo 'no animation items';
?>