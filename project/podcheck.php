<?php
	$ns = $_POST["ns"];		

        $con = mysqli_connect("10.0.110.100","root","","project");
        $checkns = "select * from member where namespace='$ns'";
        $nscheck = mysqli_query($con,$checkns);
        $count = mysqli_num_rows($nscheck);

	$podlist = shell_exec("sudo kubectl get pod -n $ns");
        if ($count != 0)
	{
		echo "<center>POD 리스트<br /><br /><br /><pre>$podlist</pre></center>";
	}
	else
	{
 		echo "<script>alert('잘못된 네임스페이스 이거나 없는 정보입니다');</script>";
                echo ("<script language='javascript'>location.replace('index.php');</script>");

	}
?>
