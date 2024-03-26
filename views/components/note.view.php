<article>
	<p>
		<?= $note['content'] ?>
	</p>
	<div class="meta-data">
		<dl class="meta-author">
			<dt>Author</dt>
			<dd>
				<?= "{$user['name']} ({$user['email']})" ?>
			</dd>
		</dl>
		<dl class="meta-datetime">
			<dt>Date and time</dt>
			<dd>
				<?= "{$note['date']} ({$note['time']})" ?>
			</dd>
		</dl>
	</div>
</article>