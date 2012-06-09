<h2>Payment Success!</h2>

<p>Your payment was successful.</p>

<?php if ($response): ?>
<p>Returned Parameters:</p>
<p><code>
<?php	
	foreach ($response as $key => $value)
		echo '<strong>'.$key.' </strong>=> '.$value.'<br/>';
?>
</code></p>
<?php endif; ?>