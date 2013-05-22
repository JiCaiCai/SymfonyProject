 <?php echo $pager->getNbResults(); ?>
 Displaying results <?php echo $pager->getFirstIndice() ?> to  <?php echo $pager->getLastIndice() ?>. <br />
 
<?php foreach ($pager->getResults() as $teacher): ?>
  <?php echo link_to($teacher->getId(), 'article/read?id='.$teacher->getId()) ?>
  <?php echo $teacher->getName().'<br />' ?>
<?php endforeach ?>

<?php if ($pager->haveToPaginate()): ?>
  <?php echo link_to('&laquo;', 'homeGuest/saveData?page='.$pager->getFirstPage()) ?>
  <?php echo link_to('&lt;', 'homeGuest/saveData?page='.$pager->getPreviousPage()) ?>
  <?php $links = $pager->getLinks(); foreach ($links as $page): ?>
    <?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'homeGuest/saveData?page='.$page) ?>
    <?php if ($page != $pager->getCurrentMaxLink()): ?> - <?php endif ?>
  <?php endforeach ?>
  <?php echo link_to('&gt;', 'homeGuest/saveData?page='.$pager->getNextPage()) ?>
  <?php echo link_to('&raquo;', 'homeGuest/saveData?page='.$pager->getLastPage()) ?>
<?php endif ?>
 