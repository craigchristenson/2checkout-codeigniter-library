<h2>Payment Failed!</h2>

<p>
	<h3>The MD5 Hash did not match!</h3>
	<h4>If you are placing a demo sale, please make sure you are passing 'Y' for the demo argument when initializing the TwoCheckout class index method.</h4>
</p>

<?php if ($response): ?>
<p>Returned Parameters:</p>
<p><code>
<?php	
	foreach ($response as $key => $value)
		echo '<strong>'.$key.' </strong>=> '.$value.'<br/>';
?>
</code></p>
<?php endif; ?>