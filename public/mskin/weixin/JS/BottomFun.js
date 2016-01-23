var Gobal = new Object();
function GetJPData(d, c, a, b) {
    $.getJSON(d + "/JPData?action=" + c + "&" + a + "&fun=?", b)
}
function GetDominData(d, c, b, a) {
    $.getJSON(d + "/JPData?action=" + c + "&fun=?", {parms: b}, a)
}
function loadImgFun(c) {
    var b = $("#loadingPicBlock");
    if (b.length > 0) {
        var i = "src2";
        Gobal.LoadImg = b.find("img[" + i + "]");
        var a = function () {
            return $(window).scrollTop()
        };
        var e = function () {
            return $(window).height() + a() + 50
        };
        var h = function () {
            Gobal.LoadImg.each(function (j) {
                if ($(this).offset().top <= e()) {
                    var k = $(this).attr(i);
                    if (k) {
                        $(this).attr("src", k).removeAttr(i).show()
                    }
                }
            })
        };
        var d = 0;
        var f = -100;
        var g = function () {
            d = a();
            if (d - f > 50) {
                f = d;
                h()
            }
        };
        if (c == 0) {
            $(window).bind("scroll", g)
        }
        g()
    }
}
var IsMasked = false;
var addNumToCartFun = null;
var _IsLoading = false;
var _IsIOS = false;
function scrollForLoadData(a) {
    $(window).scroll(function () {
        var c = $(document).height();
        var b = $(window).height();
        var d = $(document).scrollTop() + b;
        if (c - d <= b * 4) {
            if (!_IsLoading && a) {
                _IsLoading = true;
                a()
            }
        }
    })
}
(function () {
    Gobal.Skin = "http://192.168.1.101:8080/mskin/weixin";
    Gobal.LoadImg = null;
    Gobal.LoadHtml = '<div class="loadImg">正在加载</div>';
    Gobal.LoadPic = "http://192.168.1.101:8080/mskin/weixin/Images/loading.gif?v=130820";
    Gobal.NoneHtml = '<div class="noRecords colorbbb clearfix"><s></s>暂无记录</div>';
    Gobal.NoneHtmlEx = function (b) {
        return '<div class="noRecords colorbbb clearfix"><s></s>' + b + '<div class="z-use">请使用电脑访问www.1yyg.com查看更多</div></div>'
    };
    Gobal.LookForPC = '<div class="g-suggest clearfix">请使用电脑访问www.tm1yyg.com查看更多</div>';
    Gobal.ErrorHtml = function (b) {
        return '<div class="g-suggest clearfix">抱歉，加载失败，请重试[' + b + "]</div>"
    };
    Gobal.unlink = "javascript:void(0);";
    loadImgFun(0);
    var a = function () {
        _IsIOS = browser.versions.ios || browser.versions.iPhone || browser.versions.iPad;
        var k = $("#btnCart");
        if (k.length > 0) {
            GetJPData("http://weixin.1yyg.com", "cartnum", "", function (n) {
                if (n.code == 0 && n.num > 0) {
                    k.find("i").html(n.num > 99 ? '<b class="tomore" num="' + n.num + '">...</b>' : "<b>" + n.num + "</b>")
                }
            })
        }
        addNumToCartFun = function (n) {
            k.find("i").html(n > 99 ? '<b class="tomore" num="' + n + '">...</b>' : "<b>" + n + "</b>")
        };
        var j = function (o) {
            var n = new Date();
            o.attr("src", o.attr("data") + "?v=" + GetVerNum()).removeAttr("id").removeAttr("data")
        };
        var g = $("#pageJS", "head");
        if (g.length > 0) {
            j(g)
        } else {
            g = $("#pageJS", "body");
            if (g.length > 0) {
                j(g)
            }
        }
        document.body.addEventListener("touchmove", function (n) {
            if (IsMasked) {
                n.preventDefault()
            }
        }, false);
        var f = $("body").attr("fnav");
        if (f == "1" || f == "2" || f == "3") {
            var l = true;
            var h = '<div id="div_fastnav"  class="fast-nav-wrapper">';
            h += '<ul class="fast-nav">';
            if (f != "3") {
                h += '<li id="li_menu"><a href="javascript:;"><i class="nav-menu"></i></a></li>'
            }
            if (f != "2") {
                h += '<li id="li_top" style="display:none;"><a href="javascript:;"><i class="nav-top"></i></a></li>'
            }
            h += "</ul>";
            if (f != "3") {
                if (!_IsIOS) {
                    h += '<div class="sub-nav no-ios" style="display:none;">'
                } else {
                    h += '<div class="sub-nav ios" style="display:none;">'
                }
                h += '<a href="/"><i class="home"></i>云购</a>';
                h += '<a href="/lottery/"><i class="announced"></i>最新揭晓</a>';
                h += '<a href="/post/"><i class="single"></i>晒单</a>';
                h += '<a href="/member/"><i class="personal"></i>我的云购</a>';
                if (!_IsIOS) {
                    h += "<a href=\"javascript:location.replace('" + location.href + '\');"><i class="refresh"></i>刷新</a>'
                }
                h += "</div>"
            }
            h += "</div>";
            var m = $("#div_fastnav");
            if (m.length == 0) {
                m = $(h)
            }
            if (f != "3") {
                var c = $(".sub-nav", m);
                var b = $("#li_menu", m);
                var e = null;
                b.bind("click", function () {
                    if (l == false) {
                        return
                    }
                    if (e != null) {
                        clearTimeout(e)
                    }
                    if ($(this).attr("isshow") == "1") {
                        c.fadeOut("fast");
                        $(this).attr("isshow", "0")
                    } else {
                        c.fadeIn("fast", function () {
                            e = setTimeout(function () {
                                c.fadeOut("fast");
                                b.attr("isshow", "0")
                            }, 5000)
                        });
                        $(this).attr("isshow", "1")
                    }
                });
                m.bind("click", function (n) {
                    stopBubble(n)
                });
                $("html").bind("click", function () {
                    c.fadeOut("fast");
                    b.attr("isshow", "0")
                })
            }
            if (f != "2") {
                var i = $("#li_top", m);
                i.bind("click", function () {
                    $(this).hide();
                    $("body,html").animate({scrollTop: 0}, 500)
                });
                $(window).scroll(function () {
                    if ($(window).scrollTop() > 100) {
                        i.show()
                    } else {
                        i.hide()
                    }
                })
            }
            m.appendTo("body")
        }
        var d = $(".footer").find("a");
        d.on("touchstart", function () {
            if (!$(this).hasClass("hover")) {
                d.removeClass("active").eq(d.index(this)).addClass("active");
                setTimeout(function () {
                    d.removeClass("active")
                }, 1000)
            }
        })
    };
    Base.getScript(Gobal.Skin + "/JS/Comm.js?v=151202", a)
})();