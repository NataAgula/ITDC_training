<?php

include 'data.php';

?>

<ul>

<?php foreach ($nav as $v): ?>
	<li><a href="main.php?page=<?=$v['id']?>"><?=$v['name']?></a></li>
<?php endforeach; ?>
</ul>

<?php

if (isset($_GET['page']) && isset($content[$_GET['page']])) :

?>

<h1><?=$content[$_GET['page']]['title']?></h1>
<?php if ($content[$_GET['page']]['type'] == 'text') : ?>

	<p><?=$content[$_GET['page']]['title']?></p>
	<?php elseif($content[$_GET['page']]['type'] == 'list') : ?>
		<ul>

	<?php foreach($content[$_GET['page']]['list'] as $item) : ?>
		
		<li><?=$item['title']?></li>

		

	<?php endforeach; ?>
</ul>
<?php endif; ?>

<?php else: ?>

	<h2>404</h2>

<?php endif; ?>