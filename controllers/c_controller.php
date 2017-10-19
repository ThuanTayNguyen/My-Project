<?php
	require_once('model/m_connect.php');
		$conn=new DB();
		$result=$conn->m_getAllPost();
		require_once('views/v_view.php');
		$postView=new classView();
		$resultPostView=$postView->getAllPost($result);
	
?>