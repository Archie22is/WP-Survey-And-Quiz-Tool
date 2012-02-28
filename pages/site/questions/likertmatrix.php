<table class="wpsqt_likertmatrix_question">
<thead>
	<tr>
		<td width="20%"></td>
		<?php if ($question['likertmatrixscale'] == '1-5') { ?>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
		<?php } else { ?>
			<td width="20%">Strongly Disagree</td>
			<td width="20%">Disagree</td>
			<td width="20%">No Opinion</td>
			<td width="20%">Agree</td>
			<td width="20%">Strongly Agree</td>
		<?php } ?>
	</tr>
</thead>
<?php foreach ($question['answers'] as $key => $answer) { ?>
	<tr>
		<td><?php echo $answer['text']; ?></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>][<?php echo $key; ?>]" value="<?php echo $answer['text']; ?>_1" id="answer_<?php echo $key; ?>" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>][<?php echo $key; ?>]" value="<?php echo $answer['text']; ?>_2" id="answer_<?php echo $key; ?>" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>][<?php echo $key; ?>]" value="<?php echo $answer['text']; ?>_3" id="answer_<?php echo $key; ?>" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>][<?php echo $key; ?>]" value="<?php echo $answer['text']; ?>_4" id="answer_<?php echo $key; ?>" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>][<?php echo $key; ?>]" value="<?php echo $answer['text']; ?>_5" id="answer_<?php echo $key; ?>" /></td>
	</tr>
<?php } ?>

<?php if ($question['likertmatrixcustom'] == 'yes') { ?>
	<tr>
		<td>Other: <input type="text" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>]['custom']" value="1" id="answer_<?php echo $questionKey; ?>_custom" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>]['custom']" value="2" id="answer_<?php echo $questionKey; ?>_custom" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>]['custom']" value="3" id="answer_<?php echo $questionKey; ?>_custom" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>]['custom']" value="4" id="answer_<?php echo $questionKey; ?>_custom" /></td>
		<td><input type="radio" name="answers[<?php echo $questionKey; ?>]['custom']" value="5" id="answer_<?php echo $questionKey; ?>_custom" /></td>
	</tr>
<?php } ?>

</table>