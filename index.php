<?php 

	 include 'system.php';
	 $link = DBconnec();
	 $exam_users = DBread($link, 'exam_users');

	 for ($i=0; $i < count($exam_users); $i++) { 
	 	$exam_answers = DBread($link, 'exam_answers', "WHERE exam_id = '".$exam_users[$i]['exam_id']."' AND user_id = '".$exam_users[$i]['user_id']."' ");
	 	var_dump($exam_users[$i]);
	 	var_dump($exam_answers);
	 	$up['exam_user_id'] = $exam_users[$i]['id'];
	 	DBUpDate($link, 'exam_answers', $up, "exam_id = '".$exam_users[$i]['exam_id']."' AND user_id = '".$exam_users[$i]['user_id']."'" );
	 }
	 DBclose($link);
?>