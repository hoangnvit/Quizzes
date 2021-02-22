<ul>
 <li <?= (isset($home_page)&&$home_page)?"class='active'":''?> ><a href="<?= base_url(); ?>index.php?/Home">Home</a></li>
 <li <?= (isset($edit_page)&&$edit_page)?"class='active'":''?>><a href="<?= base_url(); ?>index.php?/Edit">Edit</a></li>
 <li <?= (isset($quiz_page)&&$quiz_page)?"class='active'":''?>><a href="<?= base_url(); ?>index.php?/Test">Quiz</a></li>
 <li <?= (isset($about_page)&&$about_page)?"class='active'":''?>><a href="<?= base_url(); ?>index.php?/About">About</a></li>
</ul>