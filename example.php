<?php

require_once('BootstrapPagination.php');
$pager = new BootstrapPagination(10000, (isset($_GET['page']) ? $_GET['page'] : 1), 10);
//$pager->setParams(['term' => 'test']);
//$pager->setLocation('/example.php');
//$pager->setQuerySeparator('/');
//$pager->keyValueSeparator = '/';
$pager->pagesCutOff = 50;
//$pager->itemsTemplate = "Page {current} of {pages} <ul >\n{items}</ul>";
$pages = $pager->getPages();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="span11 offset1">
    			<div class="pagination pagination-small">
					<?php echo $pages; ?>
				</div>
    		</div>
    	</div>
    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

  </body>
</html>
