function check_input(){
	if (!document.k8s.dpname.value)
	{
		alert("배포 이름이 입력되지 않았습니다");
		return;
	}

	if (!document.k8s.dpns.value)
        {
                alert("네임 스페이스가 입력되지 않았습니다");
                return;
        }
	
	if (!document.k8s.host1.value)
        {
                alert("호스트를 입력 해주세요");
                return;
        }

	if (!document.k8s.host2.value)
        {
                alert("호스트를 입력 해주세요");
                return;
        }

	if (!document.k8s.host3.value)
        {
                alert("호스트를 입력 해주세요");
                return;
        }

	document.k8s.submit();
}

