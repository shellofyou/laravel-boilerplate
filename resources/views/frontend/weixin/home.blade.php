@extends('frontend.weixin.layouts.weichat')
@section('title', app_name())
@section('meta')
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
@endsection
@section('css')
    <link href="{{ asset('mskin/weixin/CSS/index.css') }}?v=160105" rel="stylesheet" type="text/css" />
@endsection
@section('js')
    <script id="pageJS" data="{{ asset('mskin/weixin/JS/Index.js') }}" language="javascript" type="text/javascript"></script>
@endsection
@section('content')
    <!-- 焦点图 -->
    <div class="hotimg-wrapper">
        <div class="hotimg-top"></div>
        <section id="sliderBox" class="hotimg">
            <div class="loading clearfix"><b></b>正在加载</div>
        </section>
    </div>

    <!--导航-->
    <div style="border-top: none;">
        <nav id="goodsNav" class="nav-wrapper">
            <div class="nav-inner">
                <ul id="ulOrder" class="nav-list clearfix">
                    <li order="10" class="current"><a href="javascript:;"><span>即将揭晓</span></a></li>
                    <li order="20"><a href="javascript:;"><span>人气</span></a></li>
                    <li order="50"><a href="javascript:;"><span>最新</span></a></li>
                    <li order="31"><a href="javascript:;"><span>价值</span></a></li>
                </ul>
            </div>
            <!--点击添加或移除current-->
            <div id="divSort" class="select-btn">
                    <span class="select-icon">
                        <i></i><i></i><i></i><i></i>
                    </span>
                分类
            </div>
            <!--分类-->
            <div class="select-total" style="display: none">
                <ul class="sort_list">
                    <li sortid="0" class="all"><a href="javascript:;">全部分类</a></li>
                    <li sortid="100" class="phone"><a href="javascript:;">手机数码</a></li>
                    <li sortid="106" class="computer"><a href="javascript:;">电脑办公</a></li>
                    <li sortid="104" class="device"><a href="javascript:;">家用电器</a></li>
                    <li sortid="2" class="makeup"><a href="javascript:;">化妆个护</a></li>
                    <li sortid="222" class="watches"><a href="javascript:;">钟表首饰</a></li>
                    <li sortid="397"><a href="javascript:;">食品饮料</a></li>
                    <li sortid="312" class="other"><a href="javascript:;">其他商品</a></li>
                    <li sortid="400" class="purchase"><a href="javascript:;">限购专区</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!--商品列表-->
    <div class="goods-wrap marginB">
        <ul id="ulGoodsList" class="goods-list clearfix"></ul>
        <div class="loading clearfix"><b></b>正在加载</div>
    </div>
    <!--底部-->

    <input id="hidPageType" type="hidden" value="0" />

@endsection
