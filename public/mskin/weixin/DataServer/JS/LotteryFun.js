$(function(){var h=null;var e=$("#divLoading");var c=$("#divLottery");var d=$(".weixin-mask");var b=10;var g=0;var a={SortID:0,FIdx:1,EIdx:b,isCount:1};var f=function(){var r=function(){var s=function(){return"SortID="+a.SortID+"&FIdx="+a.FIdx+"&EIdx="+a.EIdx+"&isCount="+a.isCount};var t=function(){GetJPData("","getLotteryList",s(),function(x){if(x.code==0){if(a.isCount==1){g=x.count;a.isCount=0}var w=x.listItems;var y=w.length;for(var v=0;v<y;v++){var u='<ul id="'+w[v].codeID+'">';u+='<li class="revConL"><a href="/lottery/detail-'+w[v].codeID+'.do"><img src="'+Gobal.LoadPic+'" src2="http://mimg.1yyg.com/goodspic/pic-200-200/'+w[v].codeGoodsPic+'">';if(w[v].codeType==3){u+='<div class="pTitle pPurchase">限购</div>'}u+="</a><cite><em>第"+w[v].codePeriod+"云</em><i></i></cite></li>";u+='<li class="revConR">';u+="<dl>";u+='<dt><i>获得者：</i><span><a href="/userpage/'+w[v].userWeb+'" class="blue">'+w[v].userName+"</a></span></dt>";u+="<dd>商品价值：￥"+CastMoney(w[v].codePrice)+"</dd>";u+='<dd>本云参与：<em class="orange">'+w[v].codeRUserBuyCount+"</em>人次</dd>";u+='<dd class="jx_time">揭晓时间：'+w[v].codeRTime+"</dd>";u+="</dl>";u+="</li>";u+="</ul>";var z=$(u);$(z).click(function(){location.href="/lottery/detail-"+$(this).attr("id")+".do"});c.append(z)}if(a.EIdx<g){_IsLoading=false}else{_IsLoading=true;e.hide()}loadImgFun()}else{e.hide();if(a.FIdx==1){_IsLoading=true;c.html(Gobal.NoneHtml)}}})};this.getInitPage=function(){a.FIdx=1;a.EIdx=b;a.isCount=1;g=0;c.empty();t()};this.getFirstPage=function(){t()};this.getNextPage=function(){a.FIdx+=b;a.EIdx+=b;t()}};h=new r();h.getFirstPage();var j=$("#div_sort");var i=j.children("div.announced-sort");var m=j.children("span");d.bind("click",function(){$(this).hide();n=false;i.hide();m.find("cite").hide();_IsLoading=false;$("body").attr("style","");IsMasked=false});i.children("a").bind("click",function(s){stopBubble(s);if($(this).attr("type")=="-1"){return}$(this).addClass("orange").siblings().removeClass("orange");i.hide();m.children("cite").prev().html($(this).html());m.children("cite").hide();a.SortID=$(this).attr("type");if(parseInt(a.SortID)>0){if(p!=null){clearTimeout(p)}}else{l=0;k=",";o()}d.hide();_IsLoading=false;n=false;$("body").attr("style","");IsMasked=false;h.getInitPage()});var n=false;j.bind("click",function(s){stopBubble(s);if(n){n=false;i.hide();m.find("cite").hide();d.hide();_IsLoading=false;$("body").attr("style","");IsMasked=false}else{n=true;i.show();m.find("cite").show();d.height($(document).height()).show();_IsLoading=true;$("body").attr("style","overflow:hidden;");IsMasked=true}});var k=",";var q=false;var l=0;var p=null;var o=function(){GetJPData("http://api.1yyg.com","GetStartRaffleAllList","time="+l,function(t){if(t.errorCode==0){s(t,c)}p=setTimeout(o,5000)});var s=function(u,v){l=u.maxSeconds;var t=function(z,B){for(var x=z.length-1;x>-1;x--){var y=z[x];if(k.indexOf(","+y.codeID+",")<0){k+=y.codeID+",";var w='<ul class="rNow rFirst" id="'+y.codeID+'">';w+='<li class="revConL"><img alt="" src="http://goodsimg.1yyg.com/goodspic/pic-200-200/'+y.goodsPic+'"><cite><em>第'+y.period+"云</em><i></i></cite></li>";w+='<li class="revConR">';w+="<h4>"+y.goodsSName+"</h4>";w+="<h5>价值：￥"+CastMoney(y.price)+"</h5>";w+='<p name="pTime"><s></s>揭晓倒计时 <strong><em>00</em> : <em>00</em> : <em><i>0</i><i>0</i></em></strong></p>';w+="</li>";w+='<div class="rNowTitle">正在揭晓</div>';w+="</ul>";var A=$(w);A.click(function(){location.href="/product/"+$(this).attr("id")+".do"});B.prepend(A);A.next().removeClass("rFirst");A.StartTimeOut(y.codeID,parseInt(y.seconds))}}};if(q){t(u.listItems,v)}else{Base.getScript(Gobal.Skin+"/DataServer/JS/LotteryTimeFun.js?v=151104",function(){q=true;t(u.listItems,v)})}}};o();scrollForLoadData(h.getNextPage)};Base.getScript(Gobal.Skin+"/JS/pageDialog.js?v=151104",f)});