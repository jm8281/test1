function login()
{
    var username=$("#username").val().trim();
    var password=$("#password").val().trim();
    var token = $("#_token").val();
    $.post("/login",{"username":username,'password':password,'_token':token},function(data){
        alert(data.msg);
       if(data.success)
           location.href="/adm";
    },'json');
}

function addUser()
{
    var username=$("#username").val().trim();
    if(username.length<3)
    {
        alert("用户名不能少于3字符");
        return;
    }

    var email=$("#email").val().trim();
    var rule=/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
    if(!(rule.test(email)))
    {
        alert("邮箱格式不正确");
        return;
    }
    var password=$("#password").val();
    var password_confirm = $("#password_confirm").val();
    if(password!=password_confirm)
    {
        alert("两次密码输入不相等");
        return;
    }

    var token = $("#_token").val();
    $.post("/adm/user",{'username':username,'email':email,'password':password,'_token':token},function(data){
        alert(data.msg);
        if(data.success)
        {
            location.href="/adm";
        }
    },'json')

}