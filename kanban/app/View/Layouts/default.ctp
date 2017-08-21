<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" type="text/css" media="screen" charset="utf-8"/>
    <script type="text/javascript" charset="utf-8" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<header>
			<nav class="navbar navbar-static-top">
				<div class="navbar-inner">

					<?php echo $this->Html->link('SZ', '/', array('class' => 'brand')); ?>
				</div><!-- /.navbar-inner -->
			</nav><!-- /.navbar -->
		</header>


		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div><!-- /#content -->

		<div id="footer" class="footer">
			<?php echo $this->Html->link('(c) Scrum Zamurai', '/'); ?>
		</div><!-- /#footer -->
	</div><!-- /.container -->
</body>
</html>
