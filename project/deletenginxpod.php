<?php
        $name = $_POST["name"]

        $result = shell_exec("sudo kubectl delete -f /root/projectyaml/'".$name."'nginx.yaml; sudo echo $?");
        if ($result == 0)
        {
                echo("<script>alert('삭제 완료');</script>");
                echo("<script language='javascript'>location.replace('index.php');</script>");
        }
        else
        {
                echo("<script>alert('잘못된 정보 입니다');</script>");
                echo("<script language='javascript'>location.replace('index.php');</script>");
        }
?>

