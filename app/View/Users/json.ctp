<?php if(isset($account)){
	echo json_encode($account);
}else{
	echo json_encode($error);
}
?>