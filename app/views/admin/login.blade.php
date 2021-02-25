<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/bayer.css">
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/my.js"></script>
</head>
<body>
<div class="f_dl">
    <div class="f_top">
        <p> </p>
        <div class="f_title"><span>问卷调查</span><br><span style="margin-left: 200px;">网站后台管理系统</span></div>
    </div>
    <div class="page_center">
        <div class="dl_box">
            <div class="input_dl">
                <form name="myform" method="post" >
                    <div class="dl_one"><label>用户名：</label><input type="text" name="username" id="username" value=""></div>
                    <div class="dl_two"><label>密  码：</label><input type="password" name="password" id="password" value=""></div>
                    <div class="dl_btn">
                        <input type="hidden" value="{{csrf_token()}}" id="_token" />
                        <input name="dosubmit" type="button" value="登录" class="btn_p" onclick="login()">
                        <input type="reset" name="reset" class="btn_p" value="重置">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="page_footer">
        <div class="page_footer_bd"></div>
    </div>
</div>

</body></html>
