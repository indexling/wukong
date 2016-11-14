<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<!-- meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="23635710066417756375">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6">
<meta charset="UTF-8">

<meta content="互联网招聘,找工作,招聘网,人才网" name="keywords">

<meta content="拉勾网是最权威的互联网行业招聘网站,提供全国真实的互联网招聘信息,工资不面议当面谈,找工作,招聘网,寻人才就来拉勾网,互联网行业找工作首选拉勾网" name="description">

<title>拉勾网-最专业的互联网招聘平台_找工作_招聘_人才网_求职</title>

<link rel="Shortcut Icon" href="https://www.lgstatic.com/www/static/common/static/favicon_faed927.ico">



	<!-- global_domain FE_base... -->
	
<script src="%E6%8B%89%E9%92%A9%E9%A6%96%E9%A1%B5%E6%A8%A1%E6%9D%BF_files/v.htm" charset="utf-8"></script><script src="{{asset('/styles/home/js/analytics.js')}}" async=""></script><script src="{{asset('/styles/home/js/hm.js')}}"></script><script src="{{asset('/styles/home/js/a.js')}}" async=""></script><script type="text/javascript">

(function () {
    var protocol = window.location.protocol;
    var host = window.location.host;
    var baseUrl = protocol + '//' + host;
    
    window.GLOBAL_DOMAIN = window.GLOBAL_DOMAIN || {
        ctx: protocol + '//www.lagou.com',
        rctx: protocol + '//hr.lagou.com',
        crctx: protocol + '//hr.lagou.com/company',
        pctx: protocol + '//passport.lagou.com',
        actx: protocol + '//account.lagou.com',
        paictx: protocol + '//pai.lagou.com',
        sctx: protocol + '//suggest.lagou.com',
        zctx : protocol + '//yanzhi.lagou.com',
        proctx : 'https://pro.lagou.com',
        lgsctx: protocol + '//www.lgstatic.com',
        FE_frontLogin: baseUrl + '/frontLogin.do',
        FE_frontLogout: baseUrl + '/frontLogout.do',
        FE_frontRegister: baseUrl + '/frontRegister.do'
    };

    window.GLOBAL_CDN_DOMAIN = 'www.lgstatic.com';
}) ();
</script>



	
	<!-- SEO 需求-->
	<link rel="canonical" href="http://www.lagou.com/">

	<!-- 公共样式 -->
	<!-- header样式 -->	<!-- footer样式 -->
	<!-- 页面样式 -->    
    <!-- 动态token，防御伪造请求，重复提交 -->
    <script type="text/javascript">
    window.X_Anti_Forge_Token = '';
    window.X_Anti_Forge_Code = '';
</script>

	

    <link rel="stylesheet" type="text/css" href="{{asset('/styles/home/css/mCustomScrollbar_ac2fb8b.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/styles/home/css/layout_bb1bf2c.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/styles/home/css/main_002.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/styles/home/css/widgets_3990de9.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/styles/home/css/main.css')}}">
<script charset="utf-8" class="lazyload" src="{{asset('/styles/home/js/jquery.js')}}"></script><style charset="utf-8" class="lazyload">@import "//www.lgstatic.com/www/static/common/widgets/passport/css/loginpop_2d6c92d.css";</style><script charset="utf-8" class="lazyload" src="{{asset('/styles/home/js/lagou_5427c0e.js')}}"></script></head>
<body>
	
	<!-- 公共html -->
	<!-- 页面公用结构、velocity变量 --><input value="" name="userid" id="userid" type="hidden">

	<!-- 城市分站 -->


	<!-- header -->
		<!--C端头部通栏广告位-->
	

	<!--验证注册邮箱-->
	<!--
    @require "common/widgets/header_c/modules/emailvalid/main.less"
-->


	<div id="lg_header">

		<!--C端头部黑色导航-->
			<div id="lg_tbar">

		<div class="inner">

			<div class="lg_tbar_l">
				<a rel="nofollow" href="https://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
				<a rel="nofollow" href="https://hr.lagou.com/dashboard/" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
			</div>

			
			<ul class="lg_tbar_r">
                @if(Session::has('email'))
    				<li>
    					<a href="" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">{{ Session::get('email') }}</a>
    				</li>
    				<li>
    					<a href="" class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
    				</li>
                @else
                    <li>
                        <a href="{{url('lo')}}" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a>
                    </li>
                    <li>
                        <a href="{{url('reg')}}" class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a>
                    </li>
                @endif
			</ul>

			
		</div>

	</div><!--end #lg_tbar-->


		<!--C端头部白色导航-->
			<div id="lg_tnav">

		<div class="inner">
			<div class="lg_tnav_l">
				<a href="https://www.lagou.com/" class="lg_logo" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
					<h1>拉勾网</h1>
				</a>
								<div class="suggestCity"><strong>北京站</strong><em id="changeCity_btn">[切换城市]</em></div>
							</div>
			<ul class="lg_tnav_wrap">
				<li>
					<a href="https://www.lagou.com/" class="current" data-lg-tj-id="5i00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
				</li>
				<li>
					<a href="{{url('companyList')}}" data-lg-tj-id="5j00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司</a>
				</li>
				<li>
					<a rel="nofollow" href="https://pai.lagou.com/index.html" data-lg-tj-id="5k00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">一拍</a>
				</li>
				<li>
					<a rel="nofollow" href="https://yanzhi.lagou.com/" data-lg-tj-id="ic00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">言职</a>
				</li>
								<li>
					<a rel="nofollow" href="https://pro.lagou.com/" target="_blank" data-lg-tj-id="1NI0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">大鲲</a>
					<i class="new">new</i>				</li>
							</ul>

		</div>

	</div><!--end #lg_tnav-->


	</div><!--end #header-->

	<input id="serverTime" value="1478586419078" type="hidden">

	<!-- 页面主体START -->
	<div style="min-height: 898px;" class="container clearfix" id="container">

		<div id="sidebar" class="sidebar">
    <div class="mainNavs">
                <div class="menu_box current">
            <div class="menu_main job_hopping">
                <h2>
                    技术
                  <!-- 跳槽月 -->
                                        <span></span>
                </h2>
                <a href="https://www.lagou.com/zhaopin/Java/" data-lg-tj-id="4A00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">Java</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/PHP/" data-lg-tj-id="4A00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">PHP</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/C++/" data-lg-tj-id="4A00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">C++</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/Android/" data-lg-tj-id="4A00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">Android</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/iOS/" data-lg-tj-id="4A00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">iOS</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/shujuwajue/" data-lg-tj-id="4A00" data-lg-tj-no="0006" data-lg-tj-cid="idnull">数据挖掘</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/ceshi/" data-lg-tj-id="4A00" data-lg-tj-no="0007" data-lg-tj-cid="idnull">测试</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/qianduankaifa/" data-lg-tj-id="4A00" data-lg-tj-no="0008" data-lg-tj-cid="idnull">前端开发</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/html51/" data-lg-tj-id="4A00" data-lg-tj-no="0009" data-lg-tj-cid="idnull">html5</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/jishuzongjian/" data-lg-tj-id="4A00" data-lg-tj-no="0010" data-lg-tj-cid="idnull">技术总监</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/jiagoushi/" data-lg-tj-id="4A00" data-lg-tj-no="0011" data-lg-tj-cid="idnull">架构师</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/CTO/" data-lg-tj-id="4A00" data-lg-tj-no="0012" data-lg-tj-cid="idnull">CTO</a>
                                                                        
                                                                        
                                                                        </div>
            <div style="top: 0px;" class="menu_sub">
                                <dl>
                                        <dt>
                        <a href="https://www.lagou.com/zhaopin/houduankaifa/" data-lg-tj-id="4H00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">后端开发</a>
                    </dt>
                    <dd>
                        <a href="https://www.lagou.com/zhaopin/Java/" data-lg-tj-id="4O00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="curr">Java</a>
                    <a href="https://www.lagou.com/zhaopin/Python/" data-lg-tj-id="4O00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">Python</a>
                        
                        <a href="https://www.lagou.com/zhaopin/PHP/" data-lg-tj-id="4O00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="curr">PHP</a>
                    	<a href="https://www.lagou.com/zhaopin/.NET/" data-lg-tj-id="4O00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="">.NET</a>
                    	<a href="https://www.lagou.com/zhaopin/C%23/" data-lg-tj-id="4O00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="">C#</a>
                        <a href="https://www.lagou.com/zhaopin/C%2B%2B/" data-lg-tj-id="4O00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="curr">C++</a>
                    	<a href="https://www.lagou.com/zhaopin/C/" data-lg-tj-id="4O00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="">C</a>
                    <a href="https://www.lagou.com/zhaopin/VB/" data-lg-tj-id="4O00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">VB</a>
                    <a href="https://www.lagou.com/zhaopin/Delphi/" data-lg-tj-id="4O00" data-lg-tj-no="0109" data-lg-tj-cid="idnull" class="">Delphi</a>
                    <a href="https://www.lagou.com/zhaopin/Perl/" data-lg-tj-id="4O00" data-lg-tj-no="0110" data-lg-tj-cid="idnull" class="">Perl</a>
                    <a href="https://www.lagou.com/zhaopin/Ruby/" data-lg-tj-id="4O00" data-lg-tj-no="0111" data-lg-tj-cid="idnull" class="">Ruby</a>
                        
                    <a href="https://www.lagou.com/zhaopin/Hadoop/" data-lg-tj-id="4O00" data-lg-tj-no="0112" data-lg-tj-cid="idnull" class="">Hadoop</a>
                    <a href="https://www.lagou.com/zhaopin/Node.js/" data-lg-tj-id="4O00" data-lg-tj-no="0113" data-lg-tj-cid="idnull" class="">Node.js</a>
                    <a href="https://www.lagou.com/zhaopin/shujuwajue/" data-lg-tj-id="4O00" data-lg-tj-no="0114" data-lg-tj-cid="idnull" class="curr">数据挖掘</a>
                    <a href="https://www.lagou.com/zhaopin/ziranyuyanchuli/" data-lg-tj-id="4O00" data-lg-tj-no="0115" data-lg-tj-cid="idnull" class="">自然语言处理</a>
                    <a href="https://www.lagou.com/zhaopin/sousuosuanfa/" data-lg-tj-id="4O00" data-lg-tj-no="0116" data-lg-tj-cid="idnull" class="">搜索算法</a>
                    <a href="https://www.lagou.com/zhaopin/jingzhuntuijian/" data-lg-tj-id="4O00" data-lg-tj-no="0117" data-lg-tj-cid="idnull" class="">精准推荐</a>
                    <a href="https://www.lagou.com/zhaopin/quanzhangongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0118" data-lg-tj-cid="idnull" class="">全栈工程师</a>
                    <a href="https://www.lagou.com/zhaopin/go/" data-lg-tj-id="4O00" data-lg-tj-no="0119" data-lg-tj-cid="idnull" class="">Go</a>
                    <a href="https://www.lagou.com/zhaopin/asp/" data-lg-tj-id="4O00" data-lg-tj-no="0120" data-lg-tj-cid="idnull" class="">ASP</a>
                    <a href="https://www.lagou.com/zhaopin/shell/" data-lg-tj-id="4O00" data-lg-tj-no="0121" data-lg-tj-cid="idnull" class="">Shell</a>
                    <a href="https://www.lagou.com/zhaopin/houduankaifaqita/" data-lg-tj-id="4O00" data-lg-tj-no="0122" data-lg-tj-cid="idnull" class="">后端开发其它</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                        <a href="https://www.lagou.com/zhaopin/yidongkaifa/" data-lg-tj-id="4H00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">移动开发</a>
                    </dt>
                    <dd>
                    <a href="https://www.lagou.com/zhaopin/HTML5/" data-lg-tj-id="4O00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="">HTML5</a>
                                                        <a href="https://www.lagou.com/zhaopin/Android/" data-lg-tj-id="4O00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="curr">Android</a>
                                                        <a href="https://www.lagou.com/zhaopin/iOS/" data-lg-tj-id="4O00" data-lg-tj-no="0203" data-lg-tj-cid="idnull" class="curr">iOS</a>
                    <a href="https://www.lagou.com/zhaopin/WP/" data-lg-tj-id="4O00" data-lg-tj-no="0204" data-lg-tj-cid="idnull" class="">WP</a>
                    <a href="https://www.lagou.com/zhaopin/yidongkaifaqita/" data-lg-tj-id="4O00" data-lg-tj-no="0205" data-lg-tj-cid="idnull" class="">移动开发其它</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                        <a href="https://www.lagou.com/zhaopin/qianduankaifa/" data-lg-tj-id="4H00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">前端开发</a>
                    </dt>
                    <dd>
                  <a href="https://www.lagou.com/zhaopin/webqianduan/" data-lg-tj-id="4O00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">web前端</a>
                    <a href="https://www.lagou.com/zhaopin/Flash/" data-lg-tj-id="4O00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="">Flash</a>
                                                        <a href="https://www.lagou.com/zhaopin/html51/" data-lg-tj-id="4O00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="curr">html5</a>
                 <a href="https://www.lagou.com/zhaopin/JavaScript/" data-lg-tj-id="4O00" data-lg-tj-no="0304" data-lg-tj-cid="idnull" class="">JavaScript</a>
                  <a href="https://www.lagou.com/zhaopin/U3D/" data-lg-tj-id="4O00" data-lg-tj-no="0305" data-lg-tj-cid="idnull" class="">U3D</a>
                   <a href="https://www.lagou.com/zhaopin/COCOS2D-X/" data-lg-tj-id="4O00" data-lg-tj-no="0306" data-lg-tj-cid="idnull" class="">COCOS2D-X</a>
                 <a href="https://www.lagou.com/zhaopin/qianduankaifaqita/" data-lg-tj-id="4O00" data-lg-tj-no="0307" data-lg-tj-cid="idnull" class="">前端开发其它</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                        <a href="https://www.lagou.com/zhaopin/ceshi/" data-lg-tj-id="4H00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">测试</a>
                    </dt>
                    <dd>
                   <a href="https://www.lagou.com/zhaopin/ceshigongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0401" data-lg-tj-cid="idnull" class="">测试工程师</a>
                    <a href="https://www.lagou.com/zhaopin/zidonghuaceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0402" data-lg-tj-cid="idnull" class="">自动化测试</a>
                    <a href="https://www.lagou.com/zhaopin/gongnengceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0403" data-lg-tj-cid="idnull" class="">功能测试</a>
                    <a href="https://www.lagou.com/zhaopin/xingnengceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0404" data-lg-tj-cid="idnull" class="">性能测试</a>
                   <a href="https://www.lagou.com/zhaopin/ceshikaifa/" data-lg-tj-id="4O00" data-lg-tj-no="0405" data-lg-tj-cid="idnull" class="">测试开发</a>
                   <a href="https://www.lagou.com/zhaopin/youxiceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0406" data-lg-tj-cid="idnull" class="">游戏测试</a>
                  <a href="https://www.lagou.com/zhaopin/baiheceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0407" data-lg-tj-cid="idnull" class="">白盒测试</a>
                    <a href="https://www.lagou.com/zhaopin/huiheceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0408" data-lg-tj-cid="idnull" class="">灰盒测试</a>
                    <a href="https://www.lagou.com/zhaopin/heiheceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0409" data-lg-tj-cid="idnull" class="">黑盒测试</a>
                    <a href="https://www.lagou.com/zhaopin/shoujiceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0410" data-lg-tj-cid="idnull" class="">手机测试</a>
                    <a href="https://www.lagou.com/zhaopin/yingjianceshi/" data-lg-tj-id="4O00" data-lg-tj-no="0411" data-lg-tj-cid="idnull" class="">硬件测试</a>
                    <a href="https://www.lagou.com/zhaopin/ceshijingli2/" data-lg-tj-id="4O00" data-lg-tj-no="0412" data-lg-tj-cid="idnull" class="">测试经理</a>
                    <a href="https://www.lagou.com/zhaopin/ceshiqita/" data-lg-tj-id="4O00" data-lg-tj-no="0413" data-lg-tj-cid="idnull" class="">测试其它</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                        <a href="https://www.lagou.com/zhaopin/yunwei/" data-lg-tj-id="4H00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">运维</a>
                    </dt>
                    <dd>
                    <a href="https://www.lagou.com/zhaopin/yunweigongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0501" data-lg-tj-cid="idnull" class="">运维工程师</a>
                    <a href="https://www.lagou.com/zhaopin/yunweikaifagongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0502" data-lg-tj-cid="idnull" class="">运维开发工程师</a>
                   <a href="https://www.lagou.com/zhaopin/wangluogongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0503" data-lg-tj-cid="idnull" class="">网络工程师</a>
                   <a href="https://www.lagou.com/zhaopin/xitonggongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0504" data-lg-tj-cid="idnull" class="">系统工程师</a>
                    <a href="https://www.lagou.com/zhaopin/ITzhichi/" data-lg-tj-id="4O00" data-lg-tj-no="0505" data-lg-tj-cid="idnull" class="">IT支持</a>
                    <a href="https://www.lagou.com/zhaopin/idc/" data-lg-tj-id="4O00" data-lg-tj-no="0506" data-lg-tj-cid="idnull" class="">IDC</a>
                    <a href="https://www.lagou.com/zhaopin/cdn/" data-lg-tj-id="4O00" data-lg-tj-no="0507" data-lg-tj-cid="idnull" class="">CDN</a>
                    <a href="https://www.lagou.com/zhaopin/f5/" data-lg-tj-id="4O00" data-lg-tj-no="0508" data-lg-tj-cid="idnull" class="">F5</a>
                    <a href="https://www.lagou.com/zhaopin/xitongguanliyuan/" data-lg-tj-id="4O00" data-lg-tj-no="0509" data-lg-tj-cid="idnull" class="">系统管理员</a>
                    <a href="https://www.lagou.com/zhaopin/bingdufenxi/" data-lg-tj-id="4O00" data-lg-tj-no="0510" data-lg-tj-cid="idnull" class="">病毒分析</a>
                    <a href="https://www.lagou.com/zhaopin/webanquan/" data-lg-tj-id="4O00" data-lg-tj-no="0511" data-lg-tj-cid="idnull" class="">WEB安全</a>
                    <a href="https://www.lagou.com/zhaopin/wangluoanquan/" data-lg-tj-id="4O00" data-lg-tj-no="0512" data-lg-tj-cid="idnull" class="">网络安全</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/xitonganquan/" data-lg-tj-id="4O00" data-lg-tj-no="0513" data-lg-tj-cid="idnull" class="">系统安全</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/yunweijingli/" data-lg-tj-id="4O00" data-lg-tj-no="0514" data-lg-tj-cid="idnull" class="">运维经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/yunweiqita/" data-lg-tj-id="4O00" data-lg-tj-no="0515" data-lg-tj-cid="idnull" class="">运维其它</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/DBA/" data-lg-tj-id="4H00" data-lg-tj-no="0006" data-lg-tj-cid="idnull">DBA</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/MySQL/" data-lg-tj-id="4O00" data-lg-tj-no="0601" data-lg-tj-cid="idnull" class="">MySQL</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/SQLServer/" data-lg-tj-id="4O00" data-lg-tj-no="0602" data-lg-tj-cid="idnull" class="">SQLServer</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/Oracle/" data-lg-tj-id="4O00" data-lg-tj-no="0603" data-lg-tj-cid="idnull" class="">Oracle</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/DB2/" data-lg-tj-id="4O00" data-lg-tj-no="0604" data-lg-tj-cid="idnull" class="">DB2</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/MongoDB/" data-lg-tj-id="4O00" data-lg-tj-no="0605" data-lg-tj-cid="idnull" class="">MongoDB</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/etl/" data-lg-tj-id="4O00" data-lg-tj-no="0606" data-lg-tj-cid="idnull" class="">ETL</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/hive/" data-lg-tj-id="4O00" data-lg-tj-no="0607" data-lg-tj-cid="idnull" class="">Hive</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/shujucangku/" data-lg-tj-id="4O00" data-lg-tj-no="0608" data-lg-tj-cid="idnull" class="">数据仓库</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/dbaqita/" data-lg-tj-id="4O00" data-lg-tj-no="0609" data-lg-tj-cid="idnull" class="">DBA其它</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                        
                        <a href="https://www.lagou.com/zhaopin/gaoduanjishuzhiwei/" data-lg-tj-id="4H00" data-lg-tj-no="0007" data-lg-tj-cid="idnull">高端职位</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/jishujingli/" data-lg-tj-id="4O00" data-lg-tj-no="0701" data-lg-tj-cid="idnull" class="">技术经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                        <a href="https://www.lagou.com/zhaopin/jishuzongjian/" data-lg-tj-id="4O00" data-lg-tj-no="0702" data-lg-tj-cid="idnull" class="curr">技术总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                        <a href="https://www.lagou.com/zhaopin/jiagoushi/" data-lg-tj-id="4O00" data-lg-tj-no="0703" data-lg-tj-cid="idnull" class="curr">架构师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                        <a href="https://www.lagou.com/zhaopin/CTO/" data-lg-tj-id="4O00" data-lg-tj-no="0704" data-lg-tj-cid="idnull" class="curr">CTO</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/yunweizongjian/" data-lg-tj-id="4O00" data-lg-tj-no="0705" data-lg-tj-cid="idnull" class="">运维总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/jishuhehuoren/" data-lg-tj-id="4O00" data-lg-tj-no="0706" data-lg-tj-cid="idnull" class="">技术合伙人</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/xiangmuzongjian/" data-lg-tj-id="4O00" data-lg-tj-no="0707" data-lg-tj-cid="idnull" class="">项目总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/ceshizongjian/" data-lg-tj-id="4O00" data-lg-tj-no="0708" data-lg-tj-cid="idnull" class="">测试总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/anquanzhuanjia/" data-lg-tj-id="4O00" data-lg-tj-no="0709" data-lg-tj-cid="idnull" class="">安全专家</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/gaoduanjishuzhiweiqita/" data-lg-tj-id="4O00" data-lg-tj-no="0710" data-lg-tj-cid="idnull" class="">高端技术职位其它</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/xiangmuguanli/" data-lg-tj-id="4H00" data-lg-tj-no="0008" data-lg-tj-cid="idnull">项目管理</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/xiangmujingli/" data-lg-tj-id="4O00" data-lg-tj-no="0801" data-lg-tj-cid="idnull" class="">项目经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/xiangmuzhuli/" data-lg-tj-id="4O00" data-lg-tj-no="0802" data-lg-tj-cid="idnull" class="">项目助理</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/yingjiankaifa2/" data-lg-tj-id="4H00" data-lg-tj-no="0009" data-lg-tj-cid="idnull">硬件开发</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/yingjian/" data-lg-tj-id="4O00" data-lg-tj-no="0901" data-lg-tj-cid="idnull" class="">硬件</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/qianrushi/" data-lg-tj-id="4O00" data-lg-tj-no="0902" data-lg-tj-cid="idnull" class="">嵌入式</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/zidonghua/" data-lg-tj-id="4O00" data-lg-tj-no="0903" data-lg-tj-cid="idnull" class="">自动化</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/danpianji/" data-lg-tj-id="4O00" data-lg-tj-no="0904" data-lg-tj-cid="idnull" class="">单片机</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/dianlusheji/" data-lg-tj-id="4O00" data-lg-tj-no="0905" data-lg-tj-cid="idnull" class="">电路设计</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/qudongkaifa/" data-lg-tj-id="4O00" data-lg-tj-no="0906" data-lg-tj-cid="idnull" class="">驱动开发</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/xitongjicheng/" data-lg-tj-id="4O00" data-lg-tj-no="0907" data-lg-tj-cid="idnull" class="">系统集成</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/fpgakaifa/" data-lg-tj-id="4O00" data-lg-tj-no="0908" data-lg-tj-cid="idnull" class="">FPGA开发</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/dspkaifa/" data-lg-tj-id="4O00" data-lg-tj-no="0909" data-lg-tj-cid="idnull" class="">DSP开发</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/armkaifa/" data-lg-tj-id="4O00" data-lg-tj-no="0910" data-lg-tj-cid="idnull" class="">ARM开发</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/pcbgongyi/" data-lg-tj-id="4O00" data-lg-tj-no="0911" data-lg-tj-cid="idnull" class="">PCB工艺</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/mujusheji/" data-lg-tj-id="4O00" data-lg-tj-no="0912" data-lg-tj-cid="idnull" class="">模具设计</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/rechuandao/" data-lg-tj-id="4O00" data-lg-tj-no="0913" data-lg-tj-cid="idnull" class="">热传导</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/cailiaogongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0914" data-lg-tj-cid="idnull" class="">材料工程师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/jingyigongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0915" data-lg-tj-cid="idnull" class="">精益工程师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/shepingongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="0916" data-lg-tj-cid="idnull" class="">射频工程师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/yingjiankaifaqita/" data-lg-tj-id="4O00" data-lg-tj-no="0917" data-lg-tj-cid="idnull" class="">硬件开发其它</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/qiyeruanjian/" data-lg-tj-id="4H00" data-lg-tj-no="0010" data-lg-tj-cid="idnull">企业软件</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/shishigongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="1001" data-lg-tj-cid="idnull" class="">实施工程师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/shouqiangongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="1002" data-lg-tj-cid="idnull" class="">售前工程师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/shouhougongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="1003" data-lg-tj-cid="idnull" class="">售后工程师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/bigongchengshi/" data-lg-tj-id="4O00" data-lg-tj-no="1004" data-lg-tj-cid="idnull" class="">BI工程师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                    <a href="https://www.lagou.com/zhaopin/qiyeruanjianqita/" data-lg-tj-id="4O00" data-lg-tj-no="1005" data-lg-tj-cid="idnull" class="">企业软件其它</a>
                                            </dd>
                </dl>
                            </div>
        </div>
                <div class="menu_box">
            <div class="menu_main job_hopping">
                <h2>
                    产品
                                                            <!-- 跳槽月 -->
                                        <span></span>
                </h2>

                                                                        
                                                                        
                                                                        
                                                            
                                                        
                <a href="https://www.lagou.com/zhaopin/chanpinzongjian/" data-lg-tj-id="4B00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">产品总监</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/chanpinjingli1/" data-lg-tj-id="4B00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">产品经理</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/shujuchanpinjingli/" data-lg-tj-id="4B00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">数据产品经理</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/youxicehua/" data-lg-tj-id="4B00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">游戏策划</a>
                                                                        
                                                                        </div>
            <div class="menu_sub dn">
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/chanpinjingli/" data-lg-tj-id="4I00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">产品经理</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                <a href="https://www.lagou.com/zhaopin/chanpinjingli1/" data-lg-tj-id="4P00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="curr">产品经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/wangyechanpinjingli/" data-lg-tj-id="4P00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">网页产品经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/yidongchanpinjingli/" data-lg-tj-id="4P00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="">移动产品经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/chanpinzhuli/" data-lg-tj-id="4P00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="">产品助理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                <a href="https://www.lagou.com/zhaopin/shujuchanpinjingli/" data-lg-tj-id="4P00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="curr">数据产品经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/dianshangchanpinjingli/" data-lg-tj-id="4P00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="">电商产品经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                <a href="https://www.lagou.com/zhaopin/youxicehua/" data-lg-tj-id="4P00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="curr">游戏策划</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/chanpinshixisheng/" data-lg-tj-id="4P00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">产品实习生</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/chanpinshejishi/" data-lg-tj-id="4I00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">产品设计师</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/wangyechanpinshejishi/" data-lg-tj-id="4P00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="">网页产品设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/wuxianchanpinshejishi/" data-lg-tj-id="4P00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="">无线产品设计师</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                        
                        <a href="https://www.lagou.com/zhaopin/gaoduanchanpinzhiwei/" data-lg-tj-id="4I00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">高端职位</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/chanpinbujingli/" data-lg-tj-id="4P00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">产品部经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                <a href="https://www.lagou.com/zhaopin/chanpinzongjian/" data-lg-tj-id="4P00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="curr">产品总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/youxizhizuoren/" data-lg-tj-id="4P00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="">游戏制作人</a>
                                            </dd>
                </dl>
                            </div>
        </div>
                <div class="menu_box">
            <div class="menu_main job_hopping">
                <h2>
                    设计
                                                            <!-- <i class="design">拉勾形象征集</i> -->
                                        <!-- 跳槽月 -->
                                        <span></span>
                </h2>

                                                                        
                                                                        
                        
                                                        
                <a href="https://www.lagou.com/zhaopin/UIshejishi/" data-lg-tj-id="4C00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">UI设计师</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/jiaohusheji/" data-lg-tj-id="4C00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">交互设计</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/wangyeshejishi/" data-lg-tj-id="4C00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">网页设计师</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/pingmianshejishi/" data-lg-tj-id="4C00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">平面设计师</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/shijueshejishi/" data-lg-tj-id="4C00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">视觉设计师</a>
                                                                        
                                                                        
                                                                        
                                    </div>
            <div class="menu_sub dn">
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/shijuesheji/" data-lg-tj-id="4J00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">视觉设计</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <a href="https://www.lagou.com/zhaopin/wangyeshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="curr">网页设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/Flashshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">Flash设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/APPshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="">APP设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <a href="https://www.lagou.com/zhaopin/UIshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="curr">UI设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <a href="https://www.lagou.com/zhaopin/pingmianshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="curr">平面设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/meishushejishi%EF%BC%882D3D%EF%BC%89/" data-lg-tj-id="4Q00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="">美术设计师（2D/3D）</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/guanggaoshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="">广告设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/duomeitishejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">多媒体设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/yuanhuashi/" data-lg-tj-id="4Q00" data-lg-tj-no="0109" data-lg-tj-cid="idnull" class="">原画师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/youxitexiao/" data-lg-tj-id="4Q00" data-lg-tj-no="0110" data-lg-tj-cid="idnull" class="">游戏特效</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/youxijiemianshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0111" data-lg-tj-cid="idnull" class="">游戏界面设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <a href="https://www.lagou.com/zhaopin/shijueshejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0112" data-lg-tj-cid="idnull" class="curr">视觉设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/youxichangjing/" data-lg-tj-id="4Q00" data-lg-tj-no="0113" data-lg-tj-cid="idnull" class="">游戏场景</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/youxijiaose/" data-lg-tj-id="4Q00" data-lg-tj-no="0114" data-lg-tj-cid="idnull" class="">游戏角色</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/youxidongzuo/" data-lg-tj-id="4Q00" data-lg-tj-no="0115" data-lg-tj-cid="idnull" class="">游戏动作</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/yonghuyanjiu/" data-lg-tj-id="4J00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">用户研究</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shujufenxishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="">数据分析师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/yonghuyanjiuyuan/" data-lg-tj-id="4Q00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="">用户研究员</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/youxishuzhicehua/" data-lg-tj-id="4Q00" data-lg-tj-no="0203" data-lg-tj-cid="idnull" class="">游戏数值策划</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                        
                        <a href="https://www.lagou.com/zhaopin/gaoduanshejizhiwei/" data-lg-tj-id="4J00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">高端职位</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shejijinglizhuguan/" data-lg-tj-id="4Q00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">设计经理/主管</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shejizongjian/" data-lg-tj-id="4Q00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="">设计总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shijueshejijinglizhuguan/" data-lg-tj-id="4Q00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="">视觉设计经理/主管</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shijueshejizongjian/" data-lg-tj-id="4Q00" data-lg-tj-no="0304" data-lg-tj-cid="idnull" class="">视觉设计总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/jiaohushejijinglizhuguan/" data-lg-tj-id="4Q00" data-lg-tj-no="0305" data-lg-tj-cid="idnull" class="">交互设计经理/主管</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/jiaohushejizongjian/" data-lg-tj-id="4Q00" data-lg-tj-no="0306" data-lg-tj-cid="idnull" class="">交互设计总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/yonghuyanjiujinglizhuguan/" data-lg-tj-id="4Q00" data-lg-tj-no="0307" data-lg-tj-cid="idnull" class="">用户研究经理/主管</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/yonghuyanjiuzongjian/" data-lg-tj-id="4Q00" data-lg-tj-no="0308" data-lg-tj-cid="idnull" class="">用户研究总监</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/jiaohusheji/" data-lg-tj-id="4J00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">交互设计</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/wangyejiaohushejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0401" data-lg-tj-cid="idnull" class="">网页交互设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/jiaohushejishi1/" data-lg-tj-id="4Q00" data-lg-tj-no="0402" data-lg-tj-cid="idnull" class="">交互设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/wuxianjiaohushejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0403" data-lg-tj-cid="idnull" class="">无线交互设计师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/yingjianjiaohushejishi/" data-lg-tj-id="4Q00" data-lg-tj-no="0404" data-lg-tj-cid="idnull" class="">硬件交互设计师</a>
                                            </dd>
                </dl>
                            </div>
        </div>
                <div class="menu_box">
            <div class="menu_main job_hopping">
                <h2>
                    运营
                                                            <!-- 跳槽月 -->
                                        <span></span>
                </h2>

                                                                        
                                                            
                                                        
                <a href="https://www.lagou.com/zhaopin/xinmeitiyunying/" data-lg-tj-id="4D00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">新媒体运营</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/bianji/" data-lg-tj-id="4D00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">编辑</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/shujuyunying/" data-lg-tj-id="4D00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">数据运营</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/yunyingzongjian/" data-lg-tj-id="4D00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">运营总监</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/COO/" data-lg-tj-id="4D00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">COO</a>
                                                                        
                                                                        
                                                                        
                                                                        </div>
            <div class="menu_sub dn">
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/yunying1/" data-lg-tj-id="4K00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">运营</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/neirongyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="">内容运营</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/chanpinyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">产品运营</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <a href="https://www.lagou.com/zhaopin/shujuyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="curr">数据运营</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/yonghuyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="">用户运营</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/huodongyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="">活动运营</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shangjiayunying/" data-lg-tj-id="4R00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="">商家运营</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/pinleiyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="">品类运营</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/youxiyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">游戏运营</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/wangluotuiguang/" data-lg-tj-id="4R00" data-lg-tj-no="0109" data-lg-tj-cid="idnull" class="">网络推广</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/yunyingzhuanyuan/" data-lg-tj-id="4R00" data-lg-tj-no="0110" data-lg-tj-cid="idnull" class="">运营专员</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/wangdianyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0111" data-lg-tj-cid="idnull" class="">网店运营</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <a href="https://www.lagou.com/zhaopin/xinmeitiyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0112" data-lg-tj-cid="idnull" class="curr">新媒体运营</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/haiwaiyunying/" data-lg-tj-id="4R00" data-lg-tj-no="0113" data-lg-tj-cid="idnull" class="">海外运营</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/yunyingjingli/" data-lg-tj-id="4R00" data-lg-tj-no="0114" data-lg-tj-cid="idnull" class="">运营经理</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/bianji/" data-lg-tj-id="4K00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">编辑</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/fuzhubian/" data-lg-tj-id="4R00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="">副主编</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/neirongbianji/" data-lg-tj-id="4R00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="">内容编辑</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/wenancehua/" data-lg-tj-id="4R00" data-lg-tj-no="0203" data-lg-tj-cid="idnull" class="">文案策划</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/jizhe/" data-lg-tj-id="4R00" data-lg-tj-no="0204" data-lg-tj-cid="idnull" class="">记者</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/kefu/" data-lg-tj-id="4K00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">客服</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shouqianzixun/" data-lg-tj-id="4R00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">售前咨询</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shouhoukefu/" data-lg-tj-id="4R00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="">售后客服</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/taobaokefu/" data-lg-tj-id="4R00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="">淘宝客服</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/kefujingli/" data-lg-tj-id="4R00" data-lg-tj-no="0304" data-lg-tj-cid="idnull" class="">客服经理</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                        
                        <a href="https://www.lagou.com/zhaopin/gaoduanyunyingzhiwei/" data-lg-tj-id="4K00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">高端职位</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/zhubian/" data-lg-tj-id="4R00" data-lg-tj-no="0401" data-lg-tj-cid="idnull" class="">主编</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <a href="https://www.lagou.com/zhaopin/yunyingzongjian/" data-lg-tj-id="4R00" data-lg-tj-no="0402" data-lg-tj-cid="idnull" class="curr">运营总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <a href="https://www.lagou.com/zhaopin/COO/" data-lg-tj-id="4R00" data-lg-tj-no="0403" data-lg-tj-cid="idnull" class="curr">COO</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/kefuzongjian/" data-lg-tj-id="4R00" data-lg-tj-no="0404" data-lg-tj-cid="idnull" class="">客服总监</a>
                                            </dd>
                </dl>
                            </div>
        </div>
                <div class="menu_box">
            <div class="menu_main job_hopping">
                <h2>
                    市场与销售
                                                            <!-- 跳槽月 -->
                                        <span></span>
                </h2>

                                                                        
                                                                        
                                                                        
                                                                        
                        
                                                        
                <a href="https://www.lagou.com/zhaopin/shichangtuiguang/" data-lg-tj-id="4E00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">市场推广</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/shichangzongjian/" data-lg-tj-id="4E00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">市场总监</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/shichangcehua/" data-lg-tj-id="4E00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">市场策划</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/BD/" data-lg-tj-id="4E00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">BD</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/xiaoshouzongjian/" data-lg-tj-id="4E00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">销售总监</a>
                                                                                                            </div>
            <div class="menu_sub dn">
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/shichangyingxiao/" data-lg-tj-id="4L00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">市场/营销</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <a href="https://www.lagou.com/zhaopin/shichangcehua/" data-lg-tj-id="4S00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="curr">市场策划</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shichangguwen/" data-lg-tj-id="4S00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">市场顾问</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shichangyingxiao1/" data-lg-tj-id="4S00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="">市场营销</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <a href="https://www.lagou.com/zhaopin/shichangtuiguang/" data-lg-tj-id="4S00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="curr">市场推广</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/SEO/" data-lg-tj-id="4S00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="">SEO</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/SEM/" data-lg-tj-id="4S00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="">SEM</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shangwuqudao/" data-lg-tj-id="4S00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="">商务渠道</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shangyeshujufenxi/" data-lg-tj-id="4S00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">商业数据分析</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/huodongcehua/" data-lg-tj-id="4S00" data-lg-tj-no="0109" data-lg-tj-cid="idnull" class="">活动策划</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/wangluoyingxiao/" data-lg-tj-id="4S00" data-lg-tj-no="0110" data-lg-tj-cid="idnull" class="">网络营销</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/haiwaishichang/" data-lg-tj-id="4S00" data-lg-tj-no="0111" data-lg-tj-cid="idnull" class="">海外市场</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/zhengfuguanxi/" data-lg-tj-id="4S00" data-lg-tj-no="0112" data-lg-tj-cid="idnull" class="">政府关系</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/gongguan/" data-lg-tj-id="4L00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">公关</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/meijiejingli/" data-lg-tj-id="4S00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="">媒介经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/guanggaoxiediao/" data-lg-tj-id="4S00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="">广告协调</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/pinpaigongguan/" data-lg-tj-id="4S00" data-lg-tj-no="0203" data-lg-tj-cid="idnull" class="">品牌公关</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                            
                        <a href="https://www.lagou.com/zhaopin/xiaoshou/" data-lg-tj-id="4L00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">销售</a>
                    </dt>
                    <dd>
                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/xiaoshouzhuanyuan/" data-lg-tj-id="4S00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">销售专员</a>
                                                <a href="https://www.lagou.com/zhaopin/xiaoshoujingli/" data-lg-tj-id="4S00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="">销售经理</a>
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/kehudaibiao/" data-lg-tj-id="4S00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="">客户代表</a>
                        
                                                <a href="https://www.lagou.com/zhaopin/dakehudaibiao/" data-lg-tj-id="4S00" data-lg-tj-no="0304" data-lg-tj-cid="idnull" class="">大客户代表</a>
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/BDjingli/" data-lg-tj-id="4S00" data-lg-tj-no="0305" data-lg-tj-cid="idnull" class="">BD经理</a>
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shangwuqudao1/" data-lg-tj-id="4S00" data-lg-tj-no="0306" data-lg-tj-cid="idnull" class="">商务渠道</a>
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/qudaoxiaoshou/" data-lg-tj-id="4S00" data-lg-tj-no="0307" data-lg-tj-cid="idnull" class="">渠道销售</a>
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/dailishangxiaoshou/" data-lg-tj-id="4S00" data-lg-tj-no="0308" data-lg-tj-cid="idnull" class="">代理商销售</a>
                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/xiaoshouzhuli/" data-lg-tj-id="4S00" data-lg-tj-no="0309" data-lg-tj-cid="idnull" class="">销售助理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/dianhuaxiaoshou/" data-lg-tj-id="4S00" data-lg-tj-no="0310" data-lg-tj-cid="idnull" class="">电话销售</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/xiaoshouguwen/" data-lg-tj-id="4S00" data-lg-tj-no="0311" data-lg-tj-cid="idnull" class="">销售顾问</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shangpinzhuli/" data-lg-tj-id="4S00" data-lg-tj-no="0312" data-lg-tj-cid="idnull" class="">商品经理</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                        
                        <a href="https://www.lagou.com/zhaopin/gaoduanshichangzhiwei/" data-lg-tj-id="4L00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">高端职位</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <a href="https://www.lagou.com/zhaopin/shichangzongjian/" data-lg-tj-id="4S00" data-lg-tj-no="0401" data-lg-tj-cid="idnull" class="curr">市场总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
            <a href="https://www.lagou.com/zhaopin/xiaoshouzongjian/" data-lg-tj-id="4S00" data-lg-tj-no="0402" data-lg-tj-cid="idnull" class="curr">销售总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shangwuzongjian/" data-lg-tj-id="4S00" data-lg-tj-no="0403" data-lg-tj-cid="idnull" class="">商务总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/CMO/" data-lg-tj-id="4S00" data-lg-tj-no="0404" data-lg-tj-cid="idnull" class="">CMO</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/gongguanzongjian/" data-lg-tj-id="4S00" data-lg-tj-no="0405" data-lg-tj-cid="idnull" class="">公关总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/caigouzongjian/" data-lg-tj-id="4S00" data-lg-tj-no="0406" data-lg-tj-cid="idnull" class="">采购总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/touzizongjian/" data-lg-tj-id="4S00" data-lg-tj-no="0407" data-lg-tj-cid="idnull" class="">投资总监</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/gongyinglian/" data-lg-tj-id="4L00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">供应链</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/wuliu/" data-lg-tj-id="4S00" data-lg-tj-no="0501" data-lg-tj-cid="idnull" class="">物流</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/cangchu/" data-lg-tj-id="4S00" data-lg-tj-no="0502" data-lg-tj-cid="idnull" class="">仓储</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/caigou/" data-lg-tj-id="4L00" data-lg-tj-no="0006" data-lg-tj-cid="idnull">采购</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/caigouzhuanyuan/" data-lg-tj-id="4S00" data-lg-tj-no="0601" data-lg-tj-cid="idnull" class="">采购专员</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/caigoujingli/" data-lg-tj-id="4S00" data-lg-tj-no="0602" data-lg-tj-cid="idnull" class="">采购经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/shangpinjingli/" data-lg-tj-id="4S00" data-lg-tj-no="0603" data-lg-tj-cid="idnull" class="">商品经理</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/touzi/" data-lg-tj-id="4L00" data-lg-tj-no="0007" data-lg-tj-cid="idnull">投资</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/fenxishi/" data-lg-tj-id="4S00" data-lg-tj-no="0701" data-lg-tj-cid="idnull" class="">分析师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/touziguwen/" data-lg-tj-id="4S00" data-lg-tj-no="0702" data-lg-tj-cid="idnull" class="">投资顾问</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                <a href="https://www.lagou.com/zhaopin/touzijingli/" data-lg-tj-id="4S00" data-lg-tj-no="0703" data-lg-tj-cid="idnull" class="">投资经理</a>
                                            </dd>
                </dl>
                            </div>
        </div>
                <div class="menu_box">
            <div class="menu_main job_hopping">
                <h2>
                    职能
                                                            <!-- 跳槽月 -->
                                        <span></span>
                </h2>

                                                                        
                                                                        
                                                                        
                        
                                                        
                <a href="https://www.lagou.com/zhaopin/HR/" data-lg-tj-id="4F00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">HR</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/xingzheng1/" data-lg-tj-id="4F00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">行政</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/caiwu1/" data-lg-tj-id="4F00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">财务</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/jinrongshenji/" data-lg-tj-id="4F00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">审计</a>
                                                                        
                                                                        
                                    </div>
            <div class="menu_sub dn">
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/renliziyuan/" data-lg-tj-id="4M00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">人力资源</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/renshiHR/" data-lg-tj-id="4T00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="">人事/HR</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/peixunjingli/" data-lg-tj-id="4T00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">培训经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/xinzifulijingli/" data-lg-tj-id="4T00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="">薪资福利经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/jixiaokaohejingli/" data-lg-tj-id="4T00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="">绩效考核经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/renliziyuan1/" data-lg-tj-id="4T00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="">人力资源</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/zhaopin/" data-lg-tj-id="4T00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="">招聘</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/HRBP/" data-lg-tj-id="4T00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="">HRBP</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/yuangongguanxi/" data-lg-tj-id="4T00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">员工关系</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/xingzheng/" data-lg-tj-id="4M00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">行政</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/zhuli/" data-lg-tj-id="4T00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="">助理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/qiantai/" data-lg-tj-id="4T00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="">前台</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                <a href="https://www.lagou.com/zhaopin/xingzheng1/" data-lg-tj-id="4T00" data-lg-tj-no="0203" data-lg-tj-cid="idnull" class="curr">行政</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/zongzhu/" data-lg-tj-id="4T00" data-lg-tj-no="0204" data-lg-tj-cid="idnull" class="">总助</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/wenmi/" data-lg-tj-id="4T00" data-lg-tj-no="0205" data-lg-tj-cid="idnull" class="">文秘</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/caiwu/" data-lg-tj-id="4M00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">财务</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/kuaiji/" data-lg-tj-id="4T00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">会计</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/chuna/" data-lg-tj-id="4T00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="">出纳</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                <a href="https://www.lagou.com/zhaopin/caiwu1/" data-lg-tj-id="4T00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="curr">财务</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/jiesuan/" data-lg-tj-id="4T00" data-lg-tj-no="0304" data-lg-tj-cid="idnull" class="">结算</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/shuiwu/" data-lg-tj-id="4T00" data-lg-tj-no="0305" data-lg-tj-cid="idnull" class="">税务</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                <a href="https://www.lagou.com/zhaopin/shenji/" data-lg-tj-id="4T00" data-lg-tj-no="0306" data-lg-tj-cid="idnull" class="curr">审计</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/fengkong/" data-lg-tj-id="4T00" data-lg-tj-no="0307" data-lg-tj-cid="idnull" class="">风控</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                        
                        <a href="https://www.lagou.com/zhaopin/gaoduanzhinengzhiwei/" data-lg-tj-id="4M00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">高端职位</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/xingzhengzongjianjingli/" data-lg-tj-id="4T00" data-lg-tj-no="0401" data-lg-tj-cid="idnull" class="">行政总监/经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/caiwuzongjianjingli/" data-lg-tj-id="4T00" data-lg-tj-no="0402" data-lg-tj-cid="idnull" class="">财务总监/经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/HRDHRM/" data-lg-tj-id="4T00" data-lg-tj-no="0403" data-lg-tj-cid="idnull" class="">HRD/HRM</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/CFO/" data-lg-tj-id="4T00" data-lg-tj-no="0404" data-lg-tj-cid="idnull" class="">CFO</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/ceo/" data-lg-tj-id="4T00" data-lg-tj-no="0405" data-lg-tj-cid="idnull" class="">CEO</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/fawu/" data-lg-tj-id="4M00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">法务</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/fawu2/" data-lg-tj-id="4T00" data-lg-tj-no="0501" data-lg-tj-cid="idnull" class="">法务</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/lvshi/" data-lg-tj-id="4T00" data-lg-tj-no="0502" data-lg-tj-cid="idnull" class="">律师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/zhuanli/" data-lg-tj-id="4T00" data-lg-tj-no="0503" data-lg-tj-cid="idnull" class="">专利</a>
                                            </dd>
                </dl>
                            </div>
        </div>
                <div class="menu_box">
            <div class="menu_main job_hopping">
                <h2>
                    金融
                                        <i class="fina"></i>
                                                            <!-- 跳槽月 -->
                                        <span></span>
                </h2>

                                                                        
                                                                        
                                                                        
                                                                        
                                                            
                                                        
                <a href="https://www.lagou.com/zhaopin/touzi/" data-lg-tj-id="4G00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">投资</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/rongzi/" data-lg-tj-id="4G00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">融资</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/binggou/" data-lg-tj-id="4G00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">并购</a>
                                                                                
                                                        
                <a href="https://www.lagou.com/zhaopin/jinrong3fengkong/" data-lg-tj-id="4G00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">风控</a>
                                                                        </div>
            <div class="menu_sub dn">
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/tourongzi/" data-lg-tj-id="4N00" data-lg-tj-no="0001" data-lg-tj-cid="idnull">投融资</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/jinrongtouzijingli/" data-lg-tj-id="4U00" data-lg-tj-no="0101" data-lg-tj-cid="idnull" class="">投资经理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/jinrongfenxishi/" data-lg-tj-id="4U00" data-lg-tj-no="0102" data-lg-tj-cid="idnull" class="">分析师</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/touzizhuli/" data-lg-tj-id="4U00" data-lg-tj-no="0103" data-lg-tj-cid="idnull" class="">投资助理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                <a href="https://www.lagou.com/zhaopin/rongzi/" data-lg-tj-id="4U00" data-lg-tj-no="0104" data-lg-tj-cid="idnull" class="curr">融资</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                <a href="https://www.lagou.com/zhaopin/binggou/" data-lg-tj-id="4U00" data-lg-tj-no="0105" data-lg-tj-cid="idnull" class="curr">并购</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/hangyeyanjiu/" data-lg-tj-id="4U00" data-lg-tj-no="0106" data-lg-tj-cid="idnull" class="">行业研究</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/touzizheguanxi/" data-lg-tj-id="4U00" data-lg-tj-no="0107" data-lg-tj-cid="idnull" class="">投资者关系</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/zichanguanli/" data-lg-tj-id="4U00" data-lg-tj-no="0108" data-lg-tj-cid="idnull" class="">资产管理</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/licaiguwen/" data-lg-tj-id="4U00" data-lg-tj-no="0109" data-lg-tj-cid="idnull" class="">理财顾问</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/jiaoyiyuan/" data-lg-tj-id="4U00" data-lg-tj-no="0110" data-lg-tj-cid="idnull" class="">交易员</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/jinrongfengkong/" data-lg-tj-id="4N00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">风控</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                <a href="https://www.lagou.com/zhaopin/jinrong3fengkong/" data-lg-tj-id="4U00" data-lg-tj-no="0201" data-lg-tj-cid="idnull" class="curr">风控</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/zixinpinggu/" data-lg-tj-id="4U00" data-lg-tj-no="0202" data-lg-tj-cid="idnull" class="">资信评估</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/heguijicha/" data-lg-tj-id="4U00" data-lg-tj-no="0203" data-lg-tj-cid="idnull" class="">合规稽查</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/jinronglvshi/" data-lg-tj-id="4U00" data-lg-tj-no="0204" data-lg-tj-cid="idnull" class="">律师</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                            
                        <a href="https://www.lagou.com/zhaopin/shuiwushenji/" data-lg-tj-id="4N00" data-lg-tj-no="0003" data-lg-tj-cid="idnull">审计税务</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/jinrongshenji/" data-lg-tj-id="4U00" data-lg-tj-no="0301" data-lg-tj-cid="idnull" class="">审计</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/jinrongfawu/" data-lg-tj-id="4U00" data-lg-tj-no="0302" data-lg-tj-cid="idnull" class="">法务</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/jinrongkuaiji/" data-lg-tj-id="4U00" data-lg-tj-no="0303" data-lg-tj-cid="idnull" class="">会计</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/jinrongqingsuan/" data-lg-tj-id="4U00" data-lg-tj-no="0304" data-lg-tj-cid="idnull" class="">清算</a>
                                            </dd>
                </dl>
                                <dl>
                                        <dt>
                                                
                                                
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                        
                        <a href="https://www.lagou.com/zhaopin/gaoduanjinrongzhiwei/" data-lg-tj-id="4N00" data-lg-tj-no="0004" data-lg-tj-cid="idnull">高端职位</a>
                    </dt>
                    <dd>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/jinrongtouzizongjian/" data-lg-tj-id="4U00" data-lg-tj-no="0401" data-lg-tj-cid="idnull" class="">投资总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/rongzizongjian/" data-lg-tj-id="4U00" data-lg-tj-no="0402" data-lg-tj-cid="idnull" class="">融资总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/binggouzongjian/" data-lg-tj-id="4U00" data-lg-tj-no="0403" data-lg-tj-cid="idnull" class="">并购总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/fengxiankongzhizongjian/" data-lg-tj-id="4U00" data-lg-tj-no="0404" data-lg-tj-cid="idnull" class="">风控总监</a>
                        
                                                        
                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                    <a href="https://www.lagou.com/zhaopin/zongcaifuzongcai/" data-lg-tj-id="4U00" data-lg-tj-no="0405" data-lg-tj-cid="idnull" class="">副总裁</a>
                                            </dd>
                </dl>
                            </div>
        </div>
            </div>
    <!-- <a class="subscribe" href="//www.lagou.com/s/subscribe.html" target="_blank">订阅职位</a> -->
    <div class="subscribe">
        <a href="https://www.lagou.com/s/subscribe.html" target="_blank" rel="nofollow" data-lg-tj-id="4g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
            <span>订阅职位</span>
            <i id="n_rss" href="//www.lagou.com/s/subscribe.html" target="_blank" rel="nofollow">&nbsp;</i>
        </a>
    </div>
    <!-- <div class="suggestCity"><strong>北京站</strong><span id="changeCity_btn">[切换城市]</span></div> -->
</div>

	<!-- 搜索 -->
		<div class="content">
			<div id="search_box" class="search_box">
				<form id="searchForm" class="searchForm" name="searchForm" action="" method="get">
					<span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span>
                    <input style="color: rgb(153, 153, 153);" id="search_input" class="search_input ui-autocomplete-input" tabindex="1" maxlength="64" autocomplete="off" value="运营总监" placeholder="搜索职位、公司或地点" type="text" name="keywork">
					<input name="labelWords" id="labelWords" value="" type="hidden">
					<input name="fromSearch" id="fromSearch" value="true" type="hidden">
					<input name="suginput" id="suginput" type="hidden">

					<input id="search_button" class="search_button" value="搜索" data-lg-tj-id="4V00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" type="button">
				</form>
			<input id="search_py" value="" type="hidden">
			<input id="isIndex" value="true" type="hidden">
			<ul style="display: none;" tabindex="0" id="ui-id-1" class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all"></ul>
		</div>
		<div class="guess_wrapper dn">
			<span>猜你要搜</span>
			<ul></ul>
		</div>
	<dl class="hotSearch"><dt>热门搜索：</dt><dd><a href="http://www.lagou.com/zhaopin/BD/?labelWords=label" class="highlight" target="_self">BD</a></dd><dd><a href="http://www.lagou.com/zhaopin/youxicehua/?labelWords=label" class="highlight" target="_self">游戏策划</a></dd><dd><a href="http://www.lagou.com/zhaopin/C%2B%2B/?labelWords=label" class="highlight" target="_self">C++</a></dd><dd><a href="http://www.lagou.com/zhaopin/qianduankaifa/?labelWords=label" class="highlight" target="_self">前端开发</a></dd><dd><a href="http://www.lagou.com/zhaopin/UIshejishi/?labelWords=label" class="highlight" target="_self">UI设计师</a></dd><dd><a href="http://www.lagou.com/zhaopin/iOS/?labelWords=label" class="highlight" target="_self">iOS</a></dd><dd><a href="http://www.lagou.com/zhaopin/ceshi/?labelWords=label" class="highlight" target="_self">测试</a></dd><dd><a href="http://www.lagou.com/zhaopin/html51/?labelWords=label" class="highlight" target="_self">html5</a></dd><dd><a href="http://www.lagou.com/app/download.html?source=search_app" class="highlight">拉勾APP</a></dd></dl>


			<div id="home_banner" class="home_banner">
    <ul style="height: 480px; margin-top: 0px;" class="banner_bg">
                <li class="banner_bg_1 current">

                        
                        
            <a class="" rel="nofollow" href="http://activity.lagou.com/topic/mljr.html" target="_blank" data-lg-tj-id="es00" data-lg-tj-no="0001" data-lg-tj-cid="2807">
                                <img src="{{asset('/styles/home/images/Cgp3O1gcAZKAPwnfAAGwL3a0etc173.JPG')}}" alt="美利金融11.7" height="160" width="612">
            </a>
        </li>
                <li class="banner_bg_2">

                        
                        
            <a class="" rel="nofollow" href="http://activity.lagou.com/topic/douyu.html" target="_blank" data-lg-tj-id="es00" data-lg-tj-no="0002" data-lg-tj-cid="2754">
                                <img src="{{asset('/styles/home/images/Cgp3O1gO-FeAUtmZAAGuWk2RbcU589.JPG')}}" alt="斗鱼直播" height="160" width="612">
            </a>
        </li>
                <li class="banner_bg_3">

                        
                        
            <a class="" rel="nofollow" href="http://activity.lagou.com/topic/raisesbeijng2.html" target="_blank" data-lg-tj-id="es00" data-lg-tj-no="0003" data-lg-tj-cid="2809">
                                <img src="{{asset('/styles/home/images/Cgp3O1gfGNCAOYjCAAGrcnkZoEI818.PNG')}}" alt="双11" height="160" width="612">
            </a>
        </li>
            </ul>
    <div class="banner_control">
        <em style="top: 0px;"></em>
        <ul class="thumbs">
                        <li class="thumbs_1 current">
                <i></i>                
                                <img src="{{asset('/styles/home/images/CgqKkVgcAZSAbhymAAAcQ8sBWfw375.JPG')}}" height="42" width="113">
            </li>
                        <li class="thumbs_2">
                <i></i>                
                                <img src="{{asset('/styles/home/images/Cgp3O1gO-FqAadIyAAAUL-XLw90454.JPG')}}" height="42" width="113">
            </li>
                        <li class="thumbs_3">
                <i></i>                
                                <img src="{{asset('/styles/home/images/Cgp3O1gfGNSAYyTmAAAGwOp498I354.PNG')}}" height="42" width="113">
            </li>
                    </ul>
    </div>
</div>

<ul id="da-thumbs" class="da-thumbs">
        <li>

                
                
        <a class="" href="http://www.lagou.com/gongsi/25439.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0001" data-lg-tj-cid="6103">
                        <img src="{{asset('/styles/home/images/Cgp3O1dzZCuAUcW4AAA8ceAZVDQ330.png')}}" alt="Udesk－企业级智能客服平台" height="113" width="113">
            <div class="hot_info">
                <h2 title="Udesk－企业级智能客服平台">Udesk－企业级智能客服平台</h2>
                <em></em>
                <p title="智能客服云平台">
                    智能客服云平台
                </p>
            </div>
        </a>
    </li>
        <li>

                
                
        <a class="" href="http://www.lagou.com/gongsi/1686.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0002" data-lg-tj-cid="6107">
                        <img src="{{asset('/styles/home/images/Cgo8PFTUWAaAbD7PAACAXTzCmiw113.jpg')}}" alt="爱奇艺" height="113" width="113">
            <div class="hot_info">
                <h2 title="爱奇艺">爱奇艺</h2>
                <em></em>
                <p title="来爱奇艺，我们一起改变“视”界！">
                    来爱奇艺，我们一起改变“视”界！
                </p>
            </div>
        </a>
    </li>
        <li>

                
                
        <a class="" href="http://www.lagou.com/gongsi/61044.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0003" data-lg-tj-cid="6070">
                        <img src="{{asset('/styles/home/images/Cgo8PFW3R2eAPE07AAA2BD1-V58261.jpg')}}" alt="一度用车" height="113" width="113">
            <div class="hot_info">
                <h2 title="一度用车">一度用车</h2>
                <em></em>
                <p title="让出行更简单">
                    让出行更简单
                </p>
            </div>
        </a>
    </li>
        <li>

                
                
        <a class="" href="http://www.lagou.com/gongsi/37446.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0004" data-lg-tj-cid="6144">
                        <img src="{{asset('/styles/home/images/Cgp3O1bNqgmAYsxmAAAbczUqngM394.png')}}" alt="APUS Group" height="113" width="113">
            <div class="hot_info">
                <h2 title="APUS Group">APUS Group</h2>
                <em></em>
                <p title="为全球手机用户提供最好的移动互联网体验和服务。">
                    为全球手机用户提供最好的移动互联网体验和服务。
                </p>
            </div>
        </a>
    </li>
        <li>

                
                
        <a class="" href="http://www.lagou.com/gongsi/53308.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0005" data-lg-tj-cid="6145">
                        <img src="{{asset('/styles/home/images/CgpzWlX_dZ2AHj98AAAOOdv7ebw794.jpg')}}" alt="妙健康" height="113" width="113">
            <div class="hot_info">
                <h2 title="妙健康">妙健康</h2>
                <em></em>
                <p title="健康多一点，生活妙无限">
                    健康多一点，生活妙无限
                </p>
            </div>
        </a>
    </li>
        <li class="last">

                
                
        <a class="" href="http://www.lagou.com/gongsi/51158.html" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0006" data-lg-tj-cid="5369">
                        <img src="{{asset('/styles/home/images/CgqKkVZf9wSAdgoaAABrydFqegA445.png')}}" alt="中金支付有限公司" height="113" width="113">
            <div class="hot_info">
                <h2 title="中金支付有限公司">中金支付有限公司</h2>
                <em></em>
                <p title="中金支付是在中国人民银行指导下建成">
                    中金支付是在中国人民银行指导下建成
                </p>
            </div>
        </a>
    </li>
    </ul>


	<ul class="job_tab" id="jobTab">
        <li class="current hotTab" data-lg-tj-id="wk00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">热门职位</li>
        <li class="newTab" data-lg-tj-id="wl00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">最新职位</li>
	</ul>

	<div class="job_list clearfix" id="jobList">
        <div class="hot_posHotPosition position_list init_joblist">
            <ul class="clearfix">
                <div class="hot_pos reset" style="display: block;">
                    @foreach($messageNew as $data)
                        	<div class="pli_top">
        	                    <div class="fl pli_top_l">
        	                        <div class="position_name">
        	                            <h2 class="fl">
        	                            	<a href="https://www.lagou.com/jobs/2519632.html" target="_blank" class="position_link fl wordCut" data-index="0" data-lg-tj-id="rG00" data-lg-tj-no="0001" data-lg-tj-cid="2519632">{{$data->position}}<span>{{$data->address}}</span></a>
        	                            </h2>
        	                            <span class="fl">{{$data->publish_time}}</span>
        	                        </div>
        	                        <div>
        	                            <span class="salary fl">{{$data->job_money}}</span>
        	                            <span>{{$data->job_experience}}</span> / <span>{{$data->edut_experience}}</span>
        	                        </div>
        	                    </div>
        	                    <div class="fr pli_top_r">
        	                        <div class="company_name wordCut">
        	                            <a href="https://www.lagou.com/gongsi/150001.html" target="_blank" data-lg-tj-id="w700" data-lg-tj-no="0001" data-lg-tj-cid="150001">{{$data->company}}</a>
        	                        </div>
        	                        <div class="industry wordCut">
        	                            <span> 企业服务,金融</span> / <span>成熟型(C轮)</span>
        	                        </div>
                            	</div>
                        	</div>
        				
                            <div class="pli_btm">
                                <div class="pli_btm_l fl wordCut">
                                    “老大nice，良好的技术氛围”
                                </div>
                                <div class="pli_btm_r fl">
                                    <span>{{$data->company_weal}}</span>
                            </div>
                        </div>
                        </li>
                    @endforeach
                </div>
                <div class="hot_pos hot_posHotPosition reset" style="display: block;">
                    @foreach($messageNew as $data)
                        <li class="position_list_item" data-jobid="2519632" data-positionid="2519632" data-salary="{{$data->job_money}}" data-company="{{$data->company}}" data-positionname="{{$data->position}}" data-companyid="150001">

                            <div class="pli_top">
                                <div class="fl pli_top_l">
                                    <div class="position_name">
                                        <h2 class="fl">
                                            <a href="https://www.lagou.com/jobs/2519632.html" target="_blank" class="position_link fl wordCut" data-index="0" data-lg-tj-id="rG00" data-lg-tj-no="0001" data-lg-tj-cid="2519632">{{$data->position}}<span>{{$data->address}}</span></a>
                                        </h2>
                                        <span class="fl">{{$data->publish_time}}</span>
                                    </div>
                                    <div>
                                        <span class="salary fl">{{$data->job_money}}</span>
                                        <span>{{$data->job_experience}}</span> / <span>{{$data->edut_experience}}</span>
                                    </div>
                                </div>
                                <div class="fr pli_top_r">
                                    <div class="company_name wordCut">
                                        <a href="https://www.lagou.com/gongsi/150001.html" target="_blank" data-lg-tj-id="w700" data-lg-tj-no="0001" data-lg-tj-cid="150001">{{$data->company}}</a>
                                    </div>
                                    <div class="industry wordCut">
                                        <span> 企业服务,金融</span> / <span>成熟型(C轮)</span>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="pli_btm">
                                <div class="pli_btm_l fl wordCut">
                                    “老大nice，良好的技术氛围”
                                </div>
                                <div class="pli_btm_r fl">
                                    <span>{{$data->company_weal}}</span>
                            </div>
                        </div>
                        </li>
                    @endforeach
                </div>
            </ul>
        </div>
           
                <a href="https://www.lagou.com/zhaopin/" class="list_more fr" target="_blank" data-lg-tj-id="4p00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多</a>
            
    </div>

	<div id="linkbox" class="linkbox show-linkbox">
	    <dl>
	        <dt>友情链接</dt>
	        <dd>
                <a href="http://www.lagou.com/" target="_blank">拉勾网</a> <span>|</span>                                <a href="http://yun.lagou.com/portal.htm" target="_blank">拉勾云</a> <span>|</span>                                <a href="http://pro.lagou.com/" target="_blank">大鲲</a> <span>|</span>                                <a href="http://pro.lagou.com/" target="_blank">拉勾大鲲</a>                                                             <a href="http://www.liqucn.com/" target="_blank">手机软件</a> <span>|</span>                                <a href="http://www.wangxiao.cn/" target="_blank">中大网校</a> <span>|</span>                                <a href="http://www.woshipm.com/" target="_blank">人人都是产品经理</a> <span>|</span>                                <a href="http://www.job910.com/" target="_blank">教师招聘</a> <span>|</span>                                <a href="http://www.xjhr.com/" target="_blank">新疆人才网</a> <span>|</span>                                <a href="http://www.chinairn.com/" target="_blank">研究报告</a> <span>|</span>                                <a href="http://www.yixieshi.com/" target="_blank">互联网的一些事</a> <span>|</span>                                <a href="http://www.cnrencai.com/" target="_blank">人才招聘网</a> <span>|</span>                                <a href="http://www.lagou.com/" target="_blank">找工作</a> <span>|</span>                                <a href="http://tool.liuxue86.com/" target="_blank">字典</a> <span>|</span>                                <a href="http://kaoshi.yjbys.com/" target="_blank">中国考试网</a> <span>|</span>                                <a href="http://baike.1688.com/" target="_blank">生意经商业百科</a> <span>|</span>                                <a href="http://dzh.mop.com/" target="_blank">猫扑大杂烩</a> <span>|</span>                                <a href="http://tuku.jia.com/" target="_blank">装修效果图</a> <span>|</span>                                <a href="http://www.lagou.com/" target="_blank">招聘网</a> <span>|</span>                                <a href="http://www.examw.com/" target="_blank">中华考试网</a> <span>|</span>                                <a href="http://www.58pic.com/tupian/zhaopinsucai.html" target="_blank">招聘素材</a> <span>|</span>                                <a href="http://www.kuaiji.com/" target="_blank">会计网</a> <span>|</span>                                <a href="http://www.lagou.com/hangzhou-zhaopin/" target="_blank">杭州招聘</a> <span>|</span>                                <a href="http://www.lagou.com/shanghai-zhaopin/" target="_blank">上海招聘</a> <span>|</span>                                <a href="http://china.findlaw.cn/" target="_blank">法律咨询</a>                                                             <a href="http://www.24en.com/" target="_blank">爱思英语网</a> <span>|</span>                                <a href="http://www.xuzhoujob.com/" target="_blank">徐州英才网</a> <span>|</span>                                <a href="http://www.thinkphp.cn/" target="_blank">thinkphp</a> <span>|</span>                                <a href="http://www.kuakao.com/" target="_blank">考研网</a> <span>|</span>                                <a href="http://www.yinhangzhaopin.com/" target="_blank">银行招聘网</a> <span>|</span>                                <a href="http://www.yuwenmi.com/" target="_blank">语文学习网</a> <span>|</span>                                <a href="http://jobs.zhaopin.com/" target="_blank">智联招聘</a> <span>|</span>                                <a href="http://www.job592.com/" target="_blank">职业圈</a> <span>|</span>                                <a href="http://finance.gucheng.com/" target="_blank">股城财经</a>                                                             <a href="http://www.64365.com/" target="_blank">法律咨询网</a> <span>|</span>                                <a href="http://www.jianzhi8.com/" target="_blank">兼职吧</a> <span>|</span>                                <a href="http://www.pincai.com/" target="_blank">招聘网</a> <span>|</span>                                <a href="http://ishare.iask.sina.com.cn/" target="_blank">爱问共享资料</a> <span>|</span>                                <a href="http://www.xbaixing.com/" target="_blank">百姓网</a> <span>|</span>                                <a href="http://www.liepin.com/" target="_blank">招聘</a>                                                             <a href="http://www.cfw.cn/" target="_blank">服装人才网</a>                                                             <a href="http://www.zbj.com/" target="_blank">创意服务外包</a> <span>|</span>                                <a href="http://www.xilu.com/" target="_blank">西陆军事</a> <span>|</span>                                <a href="http://www.eoffcn.com/" target="_blank">中公公务员网校</a> <span>|</span>                                <a href="http://www.laoren.com/" target="_blank">老人网</a> <span>|</span>                                <a href="http://www.cjol.com/" target="_blank">找工作</a> <span>|</span>                                <a href="http://www.job5156.com/" target="_blank">招聘网</a> <span>|</span>                                <a href="http://www.qianzhan.com/" target="_blank">前瞻网</a>                                                             <a href="http://www.goodjobs.cn/" target="_blank">安徽招聘网</a> <span>|</span>                                <a href="http://www.tzrl.com/" target="_blank">台州人才网</a> <span>|</span>                                <a href="http://www.job256.com/" target="_blank">苏州人才网&nbsp;</a> <span>|</span>                                <a href="http://www.zgjsks.com/" target="_blank">教师网</a> <span>|</span>                                <a href="http://www.huibo.com/" target="_blank">重庆人才网</a> <span>|</span>                                <a href="http://www.canet.com.cn/" target="_blank">中国会计网</a> <span>|</span>                                <a href="http://www.qlrc.com/" target="_blank">齐鲁人才网</a> <span>|</span>                                <a href="http://www.youbian.com/" target="_blank">邮编生活网</a> <span>|</span>                                <a href="http://www.wlmqrc.cn/" target="_blank">乌鲁木齐人才网</a> <span>|</span>                                <a href="http://www.91job.com/" target="_blank">义乌人才网</a> <span>|</span>                                <a href="http://www.php100.com/" target="_blank">PHP100中文网</a>                                                             <a href="http://www.pxto.com.cn/" target="_blank">培训网</a>                                             <a href="https://www.lagou.com/af/flink.html" target="_blank" class="more" rel="nofollow">更多</a>
	        </dd>
	    </dl>
    	<a rel="nofollow" href="javascript:;" class="expansion">展开<i></i></a>
</div>

		</div>

	</div>
	<!-- 页面主体END -->

	<!-- footer <-->
	<a id="backtop" title="回到顶部" rel="nofollow"></a>
<!-- feedback -->
<!--
    @require "common/widgets/footer_c/modules/feedback/feedback.less"
-->

<div id="product-fk">
	<div id="feedback-icon">
		<div class="fb-icon"></div>
		<span>我要反馈</span>
	</div>
</div>

<div id="footer">
    <div class="wrapper">
        <i class="footer_lagou_icon"></i>
        <div class="inner_wrapper">
            <a class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">拉勾APP<span>new</span><img src="%E6%8B%89%E9%92%A9%E9%A6%96%E9%A1%B5%E6%A8%A1%E6%9D%BF_files/CgqLKVaLdtWAKVC3AAEEpK9-Koc598.JPG" data-delay-src="http://www.lagou.com/image2/M00/24/1D/CgqLKVaLdtWAKVC3AAEEpK9-Koc598.JPG" height="256" width="256"></a>
            <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
            <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<img src="%E6%8B%89%E9%92%A9%E9%A6%96%E9%A1%B5%E6%A8%A1%E6%9D%BF_files/CgpzWlZNl0qAZitPAABXEpAOJx0071.JPG" data-delay-src="http://www.lagou.com/image2/M00/18/45/CgpzWlZNl0qAZitPAABXEpAOJx0071.JPG" height="242" width="242"></a>
            <a href="http://activity.lagou.com/topic/whatisnew.html" target="_blank" rel="nofollow">版本更新</a>
            <a href="https://www.lagou.com/qa.html?t=1" target="_blank" rel="nofollow">帮助中心</a>
            <a href="https://www.lagou.com/about.html" target="_blank" rel="nofollow">联系我们</a>
            <a id="onlineService" href="javascript:void(0);" rel="nofollow">在线交流</a>
            <span class="tel">服务热线：<em>4006-2828-35 (9:00 -18:00)</em></span>
        </div>
        <div class="copyright  has_logo">
            <a rel="nofollow" href="http://v.pinpaibao.com.cn/authenticate/cert/?site=www.lagou.com&amp;at=official"><img class="secu-img" src="%E6%8B%89%E9%92%A9%E9%A6%96%E9%A1%B5%E6%A8%A1%E6%9D%BF_files/security_association_ee5e274.png" alt="安全联盟"></a>&nbsp; <span><em>©</em>2016 Lagou </span>
            <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow">京ICP备14023790号-2</a>
            <span>京公网安备11010802017116号</span>
        </div>
    </div>
</div>

	<!-- 底部登陆条 -->
	<!--
    @require "common/widgets/login_toolbar/main.less"
-->

<div id="loginToolBar" class="loginToolBar">
    <div>
        <em></em>
        <img src="{{asset('/styles/home/images/footbar_logo_e2fde1b.png')}}" height="45" width="138">
        <span class="companycount">146462</span>
        <span class="positioncount">2501471</span>
        <a class="bar_login passport_login_pop" href="javascript:;"><i></i></a>
        <div class="right">
            <a rel="nofollow" href="https://www.lagou.com/frontRegister.do?from=index_footerbar" onclick="_hmt.push(['_trackEvent', 'button', 'click', 'register'])" class="bar_register" id="bar_register" target="_blank" data-lg-tj-id="4t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"><i></i></a>
        </div>
        <input id="cc" value="146462" type="hidden">
        <input id="cp" value="2501471" type="hidden">
    </div>
</div>


	<!-- jquery lib -->
	<!-- analytics js file -->	<!-- plat analytics js file -->	<!-- plat ipinyou tj -->
	<!-- <script src="../../static/ipinyou.js"></script> -->

	<!-- <noscript><img src="//stats.ipinyou.com/adv.gif?a=ga..n3f5DPSWZXFMcbQa2-GxjX&e=" style="display:none;" /></noscript> -->


<script type="text/javascript" src="{{asset('/styles/home/js/vendor_a673406.js')}}"></script>
<script type="text/javascript">/*resourcemap*/
require.config({paths:{
  "common/components/template-helper/main": "//www.lgstatic.com/www/static/common/components/template-helper/main_e08c2f2",
  "common/widgets/common/msgPopup": "//www.lgstatic.com/www/static/common/widgets/common/msgPopup_ec89803"
}});</script>
<script type="text/javascript" src="{{asset('/styles/home/js/main_002.js')}}"></script>
<script type="text/javascript" src="{{asset('/styles/home/js/widgets_dbf0c10.js')}}"></script>
<script type="text/javascript" src="{{asset('/styles/home/js/userinfo_7f282e9.js')}}"></script>
<script type="text/javascript" src="{{asset('/styles/home/js/layout_89bb557.js')}}"></script>
<script type="text/javascript" src="{{asset('/styles/home/js/main.js')}}"></script>
<script type="text/javascript">
    window.global = window.global || {};
    global.userCtx = '';


    window.global = window.global || {};
    global.isLogin = false;
    global.isFirst = false;
    global.subSite = '北京';
    global.subSites = '全国,上海,杭州,广州,深圳,成都'.split(',');


    require(['common/widgets/header_c/modules/emailvalid/main']);


    require(['common/widgets/passport/passport'], function() {

    
        /* 设置自动登录监听器 */
        PASSPORT.on('autologin:succ', function() {
            PASSPORT.util.tinfo('autologin:succ');
            window.location.reload();
        });
        PASSPORT.on('autologin:fail', function() {
            PASSPORT.util.tinfo('autologin:fail');
        });
        // 触发自动登录
        PASSPORT.auto();

        /* 设置弹窗登录监听器 */
        PASSPORT.on('popuplogin:succ', function() {
            PASSPORT.util.tinfo('popuplogin:succ');
            window.location.reload();
        });
        PASSPORT.on('popuplogin:fail', function() {
            PASSPORT.util.tinfo('popuplogin:fail');
        });
        // 触发弹窗登录
        //PASSPORT.popup();
        jQuery('.passport_login_pop').each(function() {
            jQuery(this).click(function() {
                PASSPORT.popup();
            });
        });

    
    });


	    require(['common/widgets/header_c/layout/main']);
	

	require(['common/widgets/footer_c/modules/feedback/feedback']);


    require(['common/widgets/footer_c/layout/main']);
    
    $(document).ready(function () {
        var selector = '#webchat7moor';
        if ($(selector).length) { 
            return;
        }

        var jqIframe = $('<iframe>', {
            id: selector.slice(1),
            src: '//www.lgstatic.com/third-parties/webchat7moor/main_ef920bb.html',
            style: 'margin:0;'
                 + 'padding:0;'
                 + 'width:320px;'
                 + 'height:500px;'
                 + 'border-width:0;'
                 + 'border-radius: 3px;'
                 + 'transition: height 0.5s ease-out;'
                 + 'z-index:-99999;'
                 + 'display: none;'
                 + 'bottom:0;'
                 + 'right:0;'
                 + 'position:fixed;'
        });
        $(document.body).append(jqIframe);

        var child = jqIframe[0].contentWindow;
        var target = window.location.protocol + '//' + (window.GLOBAL_CDN_DOMAIN || 'www.lgstatic.com');

        $('#onlineService, #feedback-icon').on('click', function (e) {
            jqIframe.css('z-index', 99999).show();
            child.postMessage('{"code":1,"message":"open webchat plugin"}', target);
        });

        $(window).on('message', function (e) {
            var origin = e.origin || e.originalEvent.origin;
            if (origin.indexOf(target) !== 0) { 
                return;
            }

            var data = e.data || e.originalEvent.data;
            if (data.code === 2 && typeof data.css !== 'undefined') { 
                jqIframe.css(data.css);
            } else { 
                jqIframe.css('z-index', -99999).hide();
            }
        });
    });


    require(['common/widgets/login_toolbar/main'])


	    //业务主模块入口
	    require(['index/page/index/main']);
	</script>


<div style="display: none;" id="cboxOverlay"></div><div style="display: none;" tabindex="-1" role="dialog" class="" id="colorbox"><div id="cboxWrapper"><div><div style="float: left;" id="cboxTopLeft"></div><div style="float: left;" id="cboxTopCenter"></div><div style="float: left;" id="cboxTopRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxMiddleLeft"></div><div style="float: left;" id="cboxContent"><div style="float: left;" id="cboxTitle"></div><div style="float: left;" id="cboxCurrent"></div><button id="cboxPrevious" type="button"></button><button id="cboxNext" type="button"></button><button id="cboxSlideshow"></button><div style="float: left;" id="cboxLoadingOverlay"></div><div style="float: left;" id="cboxLoadingGraphic"></div></div><div style="float: left;" id="cboxMiddleRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxBottomLeft"></div><div style="float: left;" id="cboxBottomCenter"></div><div style="float: left;" id="cboxBottomRight"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div><iframe style="margin:0;padding:0;width:320px;height:500px;border-width:0;border-radius: 3px;transition: height 0.5s ease-out;z-index:-99999;display: none;bottom:0;right:0;position:fixed;" src="{{asset('/styles/home/main_ef920bb.htm')}}" id="webchat7moor"></iframe></body></html>
<script src="{{asset('/styles/js/self/tabChange.js')}}"></script>