<?
	echo Controller::byName('browse')->renderView('pagination_info', array(
		'collection' => $activities,
		'word' => 'activity'
	));
?>

<?= Controller::byName('main')->renderView('draw_activities', array(
	'activities' => $activities->getAll(),
	'user' => $user
)); ?>

<?
	echo Controller::byName('browse')->renderView('pagination', array(
		'collection' => $activities,
		'base_url' => '/activity'
	));
?>
