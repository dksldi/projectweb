<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>WORDPRESS 컨테이너 생성</title>
        <link rel="stylesheet" type="text/css" href="./css/project.css">
        <script type="text/javascript" src="./js/k8s.js"></script>
</head>
<body>
<center>
        <div id="k8swp">
        <p>
        <h2>컨테이너 생성</h2>
        </p>
        <hr />
        <br /><br />
        <form name="k8s" method="post" action="deploywordpress.php">
                배포 이름 : <input type="text" name="dpname" placeholder="배포이름 입력"><br /><br /><br />
                namespace : <input type="text" name="dpns" placeholder="네임 스페이스 입력"><br /><br /><br />
                배포 개수 :
                <select name="dpcount">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select><br /><br /><br />
                스토리지:
                <select name="str">
                        <option value="20Gi">20Gi</option>
                        <option value="25Gi">25Gi</option>
                        <option value="30Gi">30Gi</option>
                        </select><br /><br /><br />
                호스트:
                        <input type="text" name="host1" style="width:30px;height:15px;"> .
                        <input type="text" name="host2" style="width:30px;height:15px;"> .
                        <input type="text" name="host3" style="width:30px;height:15px;"><br /><br /><br />






                <a href="#"><img src="./img/okctn.jpg" onclick="check_input()"></a>

        </div>
        </form>
</center>
</body>
</html>
