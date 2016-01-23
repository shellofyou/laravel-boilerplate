@extends('frontend.weixin.layouts.weichat')
@section('title', '最新揭晓')
@section('css')
    <link href="{{ asset('mskin/weixin/DataServer/CSS/lottery.css') }}?v=151106" rel="stylesheet" type="text/css" />
@endsection
@section('js')
    <script id="pageJS" data="{{ asset('mskin/weixin/DataServer/JS/Lottery.js') }}" language="javascript" type="text/javascript"></script>
@endsection
@section('bodyClass', 'g-acc-bg')
@section('content')
<div class="column-wrapper">
    <div class="column-inner">
        <div id="div_sort" class="g-announced-title gray9">
                <span>
                    <a href="javascript:;" class="z-set fr"></a>
                    <span>全部分类</span>
                    <cite style="display: none;"><em></em></cite>
                </span>
            <!--分类-->
            <div class="announced-sort" style="display: none;">
                <a href="javascript:;" class="orange" type="0">全部分类</a>
                <a href="javascript:;" type="100">手机数码</a>
                <a href="javascript:;" type="106">电脑办公</a>
                <a href="javascript:;" type="104">家用电器</a>
                <a href="javascript:;" type="2">化妆个护</a>
                <a href="javascript:;" type="397">食品饮料</a>
                <a href="javascript:;" type="213">家居家纺</a>
                <a href="javascript:;" type="222">钟表首饰</a>
                <a href="javascript:;" type="251">礼品箱包</a>
                <a href="javascript:;" type="276">运动户外</a>
                <a href="javascript:;" type="312">其他商品</a>
                <a href="javascript:;" type="-1">&nbsp;</a>
            </div>
        </div>
    </div>
</div>
<!--分类筛选遮罩-->
<div class="weixin-mask" style="display: none;"></div>
<div class="marginB">
    <div class="revCon" id="divLottery">
    </div>
    <div id="divLoading" class="loading clearfix g-acc-bg"><b></b>正在加载</div>
</div>
<input id="hidPageType" type="hidden" value="1" />
@endsection
