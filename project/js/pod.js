function check_input(){
        if (!document.podlist.ns.value)
        {
                alert("네임스페이스를 입력해주세요");
                return;
        }
        document.podlist.submit();	
}
