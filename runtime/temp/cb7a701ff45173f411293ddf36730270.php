<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"C:\wamp64\www\appSystem\public/../application/index\view\wechat\activity_publish.html";i:1519923207;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
        <title>WeUI</title>
        <!-- 方式一： 引入官方 WeUI 链接 -->
        <!--
        <link rel="stylesheet" href="https://res.wx.qq.com/open/libs/weui/1.1.2/weui.min.css"/>
        -->

        <!-- 方式二： 引入本地 WeUI 文件链接 -->
        <link rel="stylesheet" href="/static/lib/css/weui/weui.min.css"/>

    </head>
    <body>
		<div class="weui-cell logo">
			<img src="/static/image/luo1.jpg" alt="" style="width: 330px;height: 210px;">
		</div>
		
		<div class="weui-cell">
			<div class="weui-cell__hd"><label for="" class="weui-label">开始时间</label></div>
			<div class="weui-cell__bd">
				<input class="weui-input" type="datetime-local" value="" placeholder="">
			</div>
		</div>
		<div class="weui-cell">
			<div class="weui-cell__hd"><label for="" class="weui-label">结束时间</label></div>
			<div class="weui-cell__bd">
				<input class="weui-input" type="datetime-local" value="" placeholder="">
			</div>
		</div>
		<div class="weui-cell">
			<div class="weui-cell__hd"><label for="" class="weui-label">报名截止时间</label></div>
			<div class="weui-cell__bd">
				<input class="weui-input" type="datetime-local" value="" placeholder="">
			</div>
		</div>
		<div class="weui-cell">
			<div class="weui-cell__hd"><label class="weui-label">活动地点</label></div>
			<div class="weui-cell__bd">
				<input class="weui-input" type="text" placeholder="请输入活动地点">
			</div>
		</div>
		<div class="weui-cells__title">活动详情</div>
		<div class="weui-cells weui-cells_form">
            <div class="weui-cell">
                <div class="weui-cell__bd">
                    <textarea class="weui-textarea" placeholder="请输入文本" rows="3"></textarea>
                    <div class="weui-textarea-counter"><span>0</span>/200</div>
                </div>
            </div>
        </div>
		<div class="weui-cell">
			<div class="weui-cell__hd"><label class="weui-label">活动人数</label></div>
			<div class="weui-cell__bd">
				<input class="weui-input" type="number" pattern="[0-9]*" placeholder="活动人数">
			</div>
		</div>
		<div class="weui-cell">
			<div class="weui-cell__hd"><label class="weui-label">活动费用</label></div>
			<div class="weui-cell__bd">
				<input class="weui-input" type="number" pattern="[0-9]*" placeholder="活动费用">
			</div>
		</div>
		<div class="weui-cell weui-cell_switch">
			<div class="weui-cell__bd">用户报名提醒</div>
			<div class="weui-cell__ft">
				<label for="switchCP" class="weui-switch-cp">
					<input id="switchCP" class="weui-switch-cp__input" type="checkbox" checked="checked">
					<div class="weui-switch-cp__box"></div>
				</label>
			</div>
		</div>
		<label for="weuiAgree" class="weui-agree">
            <input id="weuiAgree" type="checkbox" class="weui-agree__checkbox">
            <span class="weui-agree__text">
                阅读并同意<a href="javascript:void(0);">《相关条款》</a>
            </span>
        </label>
		<div class="weui-btn-area">
            <a class="weui-btn weui-btn_primary" href="javascript:" id="showTooltips">发布</a>
        </div>
    </body>
</html>