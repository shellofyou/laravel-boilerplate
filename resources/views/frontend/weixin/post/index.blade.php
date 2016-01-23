<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>晒单分享</title>
    <meta content="app-id=518966501" name="apple-itunes-app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="http://mskin.1yyg.com/weixin/CSS/comm.css?v=130715" rel="stylesheet" type="text/css" /><link href="http://mskin.1yyg.com/weixin/Post/CSS/single.css?v=151222" rel="stylesheet" type="text/css" /><script src="http://mskin.1yyg.com/weixin/JS/jquery190.js" language="javascript" type="text/javascript"></script><script id="pageJS" data="http://mskin.1yyg.com/weixin/Post/js/postlist.js" language="javascript" type="text/javascript"></script>
</head>
<body fnav="1" class="g-acc-bg">
<input name="hidAppID" type="hidden" id="hidAppID" value="wxb305761c75b19f0c" />
<input name="hidTimeSpan" type="hidden" id="hidTimeSpan" value="1453299745" />
<input name="hidNonceStr" type="hidden" id="hidNonceStr" value="gypWJwIJnQui0h0z" />
<input name="hidSignature" type="hidden" id="hidSignature" value="562401a9376d7336f0d091efb33863e01373ba55" />

<!--导航-->
<div class="column-wrapper">
    <div class="column-inner">
        <nav id="Topnav" class="nav-wrapper">
            <ul class="wx-port-nav">
                <li class="current" order="10"><a href="javascript:;">最新</a></li>
                <li order="40"><a href="javascript:;">精华</a></li>
                <li order="30"><a href="javascript:;">推荐</a></li>
                <li order="20"><a href="javascript:;">人气</a></li>
            </ul>
            <div class="wx-nav-menu"><a href="javascript:;" class="column">全部分类<span></span></a></div>
        </nav>
    </div>
</div>
<!--列表内容-->
<div id="loadingPicBlock" class="wx-show-wrapper">
    <div class="wx-show-inner marginB">
        <div id="divPostList"></div>
        <div id="postLoading" class="loading clearfix"><b></b>正在加载</div>
    </div>
</div>
<!--全部分类弹窗-->
<div id="divSortMenu" class="wx-show-tail" style="display: none;">
    <div class="tail-wrapper">
        <ul class="tail-inner clearfix">
            <li class="current" sortid="0"><a href="javascript:;">全部分类</a></li>
            <li sortid="100"><a href="javascript:;">手机数码</a></li>
            <li sortid="106"><a href="javascript:;">电脑办公</a></li>
            <li sortid="104"><a href="javascript:;">家用电器</a></li>
            <li sortid="2"><a href="javascript:;">化妆个护</a></li>
            <li sortid="397"><a href="javascript:;">食品饮料</a></li>
            <li sortid="213"><a href="javascript:;">家居家纺</a></li>
            <li sortid="222"><a href="javascript:;">钟表首饰</a></li>
            <li sortid="251"><a href="javascript:;">礼品箱包</a></li>
            <li sortid="276"><a href="javascript:;">运动户外</a></li>
            <li sortid="312"><a href="javascript:;">其他商品</a></li>
            <li><a href="javascript:;"></a></li>
        </ul>
    </div>
</div>

<div class="weixin-mask" style="display: none;"></div>


<input id="hidPageType" type="hidden" value="2" />
<div class="footer clearfix">
    <ul>
        <li class="f_home"><a href="/index.do" ><i></i>云购</a></li>
        <li class="f_announced"><a href="/lottery/" ><i></i>最新揭晓</a></li>
        <li class="f_single"><a href="/post/index.do" class="hover"><i></i>晒单</a></li>
        <li class="f_car"><a id="btnCart" href="/mycart/index.do" ><i></i>购物车</a></li>
        <li class="f_personal"><a href="/member/index.do" ><i></i>我的云购</a></li>
    </ul>
</div>
<script type="text/javascript">
    var Base = {
        head: document.getElementsByTagName("head")[0] || document.documentElement,
        Myload: function (B, A) {
            this.done = false;
            B.onload = B.onreadystatechange = function () {
                if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) {
                    this.done = true;
                    A();
                    B.onload = B.onreadystatechange = null;
                    if (this.head && B.parentNode) {
                        this.head.removeChild(B)
                    }
                }
            }
        },
        getScript: function (A, C) {
            var B = function () { };
            if (C != undefined) {
                B = C;
            }
            var D = document.createElement("script");
            D.setAttribute("language", "javascript");
            D.setAttribute("type", "text/javascript");
            D.setAttribute("src", A);
            this.head.appendChild(D);
            this.Myload(D, B);
        },
        getStyle: function (A, B) {
            var B = function () { };
            if (callBack != undefined) {
                B = callBack;
            }
            var C = document.createElement("link");
            C.setAttribute("type", "text/css");
            C.setAttribute("rel", "stylesheet");
            C.setAttribute("href", A);
            this.head.appendChild(C);
            this.Myload(C, B);
        }
    }
    function GetVerNum() {
        var D = new Date();
        return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1));
    }
    $(document).ready(function () {
        Base.getScript('http://mskin.1yyg.com/weixin/JS/Bottom.js?v=' + GetVerNum(), function () {
            var _pagetype = $("#hidPageType").val();
            var _footer = $("div.footer");
            var _cartpay = $("#mycartpay");
            var _cartlist = 0;//$("li", "#cartBody");
            var _saysome = $("div.saysome");
            var _curpage = window.location.href.toLowerCase();

            var _ishide = false;
            if (_cartpay.length > 0 && _cartlist.length > 0) {
                _footer = _cartpay;
                _pagetype = "1";
                _ishide = true;
            }
            else if (_saysome.length > 0)
            {
                _footer = _saysome;
                _pagetype = "1";
            }
            //弹出输入法是否隐藏底部导航
            if (_curpage.indexOf('/member/recharge.do')>0 || _curpage.indexOf('/member/goodsbuydetail-')>0)
            {
                _ishide = true;
            }

            var _hh = parseInt($(window).height());
            var _ww=$(window).width();
            if (_pagetype != "-1" && _footer.length>0) {
                var SetFooterPos = function () {
                    var j = 0;
                    var _setObj;
                    _setObj = setInterval(function (){
                        var _hh1 = parseInt($(window).height());
                        var _hh2 = _hh - _hh1;

                        if (_hh1 > 200) {
                            if (_hh2 > 0) {
                                if (parseInt($(window).width()) != parseInt(_ww)) {
                                    _footer.css("bottom", 0).show();
                                }
                            }
                            else {
                                _footer.css("bottom", 0).show();
                            }
                            j++;
                            //$("#mycarttest").html(_hh1 + "||" + _hh2 + "||" + $(window).width());
                            if (j == 3) {
                                clearInterval(_setObj);
                            }
                        }
                    }, 100);
                }

                SetFooterPos();

                window.onresize = function () {
                    if (_ishide) {
                        _footer.hide();
                    }
                    SetFooterPos();
                };
            }
        });
    });
</script>


</body>
</html>
