<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>NGINX 컨테이너 생성</title>
        <link rel="stylesheet" type="text/css" href="./css/project.css">
        <script type="text/javascript" src="./js/k8s.js"></script>
</head>
<body>
<center>
        <div id="k8s">
        <p>
        <h2>컨테이너 생성</h2>
        </p>
        <hr />
        <br /><br />
        <form name="k8s" method="post" action="deploynginx.php">
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
                메모리:
                <select name="mem">
                        <option value='"128Mi"'>128Mi</option>
                        <option value='"256Mi"'>256Mi</option>
                        <option value='"512Mi"'>512Mi</option>
                        <option value='"1024Mi"'>1024Mi</option>
                        </select><br /><br /><br />
                cpu:
                <select name="cpu">
                        <option value='"100m"'>100m</option>
                        <option value='"300m"'>300m</option>
                        <option value='"500m"'>500m</option>
                        <option value='"1000m"'>1000m</option>
                        </select><br /><br /><br />
                최소 메모리:
                <select name="reqmem">
                        <option value='"64Mi"'>64Mi</option>
                        <option value='"128Mi"'>128Mi</option>
                        <option value='"256Mi"'>256Mi</option>
                        <option value='"512Mi"'>512Mi</option>
                        </select><br /><br /><br />
                최소 cpu:
                 <select name="reqcpu">
                        <option value='"50m"'>50m</option>
                        <option value='"150m"'>150m</option>
                        <option value='"250m"'>250m</option>
                        <option value='"500m"'>500m</option>
                        </select><br /><br /><br />
                스토리지:
                <select name="str">
                        <option value="1Gi">1</option>
                        <option value="2Gi">2</option>
                        <option value="3Gi">3</option>
                        <option value="4Gi">4</option>
                        <option value="5Gi">5</option>
                        <option value="6Gi">6</option>
                        <option value="7Gi">7</option>
                        <option value="8Gi">8</option>
                        <option value="9Gi">9</option>
                        <option value="10Gi">10</option>
                        </select><br /><br /><br />
                호스트:
                        <input type="text" name="host1" style="width:30px;height:15px;"> .
                        <input type="text" name="host2" style="width:30px;height:15px;"> .
                        <input type="text" name="host3" style="width:30px;height:15px;"><br /><br /><br />
                
		autoscale<br /><br />
                최소:
                <select name="atsl">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value-"3">3</option>
                        </select><br /><br />
                최대:
                <select name="atsm">
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value-"5">5</option>
                        </select><br /><br />





                <a href="#"><img src="./img/okctn.jpg" onclick="check_input()"></a>

        </div>
        </form>
</center>
</body>
</html>
