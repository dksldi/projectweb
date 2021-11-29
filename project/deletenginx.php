<!DOCTYPE html>
<html>
<head>
        <meta charset='utf-8'>
        <title>Pod 삭제(nginx)</title>
        <link rel="stylesheet" type="text/css" href="./css/project.css">
        <script type="text/javascript" src="./js/delete.js"></script>
</head>
<body>
         <div id="big"><center><h1><a href="index.php" target="_self"></a></h1></center></div>
        <center>
        <div id="pod">
                <p><h2>Pod 삭제(nginx)</h2></p>
                <hr /><br /><br />
                <form name=deletename method='post' action='deletenginxpod.php'>
                        배포 이름 입력: <input type="text" name="name"><br /><br /><br />
                        <a href="#"><img src="./img/check.jpg" onclick="check_input()"></a>
                </form>
        </div>
        </center>
</body>
</html>

