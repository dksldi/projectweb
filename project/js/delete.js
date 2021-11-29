function check_input(){
        if (!document.deletename.name.value)
        {
                alert("배포 이름을 입력해주세요");
                return;
        }
        document.deletename.submit();
}

