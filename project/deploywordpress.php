<?php

        $dpname = $_POST["dpname"];
        $dpns = $_POST["dpns"];
        $dpcount = $_POST["dpcount"];
        $str = $_POST["str"];
        $host1 = $_POST["host1"];
        $host2 = $_POST["host2"];
        $host3 = $_POST["host3"];


        $con = mysqli_connect("10.0.110.100","root","","project");
        $checkdpns = "select * from member where namespace='$dpns'";
        $dpnscheck = mysqli_query($con,$checkdpns);
        $count = mysqli_num_rows($dpnscheck);

        if ($count != 0)
        {
                shell_exec("/var/www/html/project/deploywordpress.sh $dpname $dpns $dpcount $str $host1 $host2 $host3");
                echo ("<script>alert('컨테이너 생성 시작');</script>");
                echo ("<script language='javascript'>location.replace('index.php');</script>");

        }
        else
        {
                echo "<script>alert('컨테이너 생성 실패(잘못된 네임스페이스 혹은 잘못된 정보 입니다)');</script>";
                echo ("<script language='javascript'>location.replace('index.php');</script>");
        }


?>

