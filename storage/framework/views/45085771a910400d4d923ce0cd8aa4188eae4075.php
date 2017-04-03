<h1>Đã vào trong folder</h1>
<?php echo $tenlop."<br>"; ?>

<?php echo e($ngayhoc."<br>"); ?>


<?php for($i=1;$i<5;$i++): ?>
	<?php echo "<h1>$i</h1>"; ?>

<?php endfor; ?>
<?php 
	$a=1;$b=2;
 ?>
<?php if($a > $b): ?>
<?php echo "<h1>$a > $b </h1>"; ?>

<?php else: ?>
<?php echo "<h1>$b > $a </h1>"; ?>

<?php endif; ?>