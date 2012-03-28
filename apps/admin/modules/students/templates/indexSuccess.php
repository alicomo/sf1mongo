Students:
<ul>
<?php foreach( $students as $student): ?>
 <li><?php echo esc_entities($student);?></li>
<?php endforeach; ?>
</ul>