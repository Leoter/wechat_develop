<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"C:\wamp64\www\appSystem\public/../application/index\view\wechat\activity_publish.html";i:1519931474;}*/ ?>
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
		<style type="text/css">
			@font-face {font-family: "iconfont";
			  src: url('/static/image/icon/iconfont.eot'); /* IE9*/
			  src: url('/static/image/icon/iconfont.eot#iefix') format('embedded-opentype'), /* IE6-IE8 */
			  url('/static/image/icon/iconfont.woff') format('woff'), /* chrome, firefox */
			  url('/static/image/icon/iconfont.ttf') format('truetype'), /* chrome, firefox, opera, Safari, Android, iOS 4.2+*/
			  url('/static/image/icon/iconfont.svg#iconfont') format('svg'); /* iOS 4.1- */
			}

			.iconfont {
			  font-family:"iconfont" !important;
			  font-size:16px;
			  font-style:normal;
			  -webkit-font-smoothing: antialiased;
			  -webkit-text-stroke-width: 0.2px;
			  -moz-osx-font-smoothing: grayscale;
			}

		</style>
    </head>
    <body>
		<img src="/static/image/luo1.jpg" alt="" style="width: 100%;height: 210px;">
		<div class="weui-cell">
			<div class="weui-cell__hd"><label class="weui-label"><i class="icon iconfont">&#xe76a;</i> 活动主题</label></div>
			<div class="weui-cell__bd">
				<input class="weui-input" type="text" placeholder="请输入活动主题">
			</div>
		</div>
		<div class="weui-cell">
			<div class="weui-cell__hd"><label for="" class="weui-label"><i class="icon iconfont">&#xe62c;</i> 开始时间</label></div>
			<div class="weui-cell__bd">
				<input class="weui-input" type="datetime-local" value="" placeholder="">
			</div>
		</div>
		<div class="weui-cell">
			<div class="weui-cell__hd"><label for="" class="weui-label"><i class="icon iconfont">&#xe62c;</i> 结束时间</label></div>
			<div class="weui-cell__bd">
				<input class="weui-input" type="datetime-local" value="" placeholder="">
			</div>
		</div>
		<div class="weui-cell">
			<div class="weui-cell__hd"><label for="" class="weui-label"><i class="icon iconfont">&#xe62c;</i> 截止时间</label></div>
			<div class="weui-cell__bd">
				<input class="weui-input" type="datetime-local" value="" placeholder="">
			</div>
		</div>
		<div class="weui-cell">
			<div class="weui-cell__hd"><label class="weui-label"><i class="icon iconfont">&#xe624;</i> 活动地点</label></div>
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
		<div class="weui-cells__title">报名填写项</div>
		<div class="weui-cells weui-cells_checkbox">
            <label class="weui-cell weui-check__label" for="s11">
                <div class="weui-cell__hd">
                    <input type="checkbox" class="weui-check" name="checkbox1" id="s11" checked="checked">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>姓名</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s12">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s12">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>手机</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s13">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s13">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>性别</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s14">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s14">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>单位</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s15">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s15">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>部门</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s16">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s16">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>职务</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s17">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s17">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>身份证</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s18">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s18">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>行业</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s19">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s19">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>邮箱</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s110">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s110">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>地址</p>
                </div>
            </label>
            <label class="weui-cell weui-check__label" for="s111">
                <div class="weui-cell__hd">
                    <input type="checkbox" name="checkbox1" class="weui-check" id="s111">
                    <i class="weui-icon-checked"></i>
                </div>
                <div class="weui-cell__bd">
                    <p>备注</p>
                </div>
            </label>
            <a href="javascript:void(0);" class="weui-cell weui-cell_link">
                <div class="weui-cell__bd">添加更多报名项</div>
            </a>
        </div>
		<div class="weui-cells weui-cells_form" id="uploaderCustom"> <div class="weui-cell"> <div class="weui-cell__bd"> <div class="weui-uploader"> <div class="weui-uploader__hd"> <p class="weui-uploader__title">图片上传</p> </div> <div class="weui-uploader__bd"> <ul class="weui-uploader__files" id="uploaderCustomFiles"></ul> <div class="weui-uploader__input-box"> <input id="uploaderCustomInput" class="weui-uploader__input" type="file" accept="image/*" multiple=""> </div> </div> </div> </div> </div> </div>
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
		<script>
		$(document).ready(function(){
			/* 图片手动上传 */
			var uploadCustomFileList = [];

			// 这里是简单的调用，其余api请参考文?
			_weui2.default.uploader('#uploaderCustom', {
				url: 'http://localhost:8002/upload',
				auto: false,
				onQueued: function onQueued() {
					uploadCustomFileList.push(this);
				}
			});

			// 手动上传按钮
			document.getElementById("uploaderCustomBtn").addEventListener('click', function () {
				uploadCustomFileList.forEach(function (file) {
					file.upload();
				});
			});

			// 缩略图预?
			document.querySelector('#uploaderCustomFiles').addEventListener('click', function (e) {
				var target = e.target;

				while (!target.classList.contains('weui-uploader__file') && target) {
					target = target.parentNode;
				}
				if (!target) return;

				var url = target.getAttribute('style') || '';
				var id = target.getAttribute('data-id');

				if (url) {
					url = url.match(/url\((.*?)\)/)[1].replace(/"/g, '');
				}
				var gallery = _weui2.default.gallery(url, {
					onDelete: function onDelete() {
						_weui2.default.confirm('确定删除该图片？', function () {
							var index;
							for (var i = 0, len = uploadCustomFileList.length; i < len; ++i) {
								var file = uploadCustomFileList[i];
								if (file.id == id) {
									index = i;
									break;
								}
							}
							if (index) uploadCustomFileList.splice(index, 1);

							target.remove();
							gallery.hide();
						});
					}
				});
			});
		})


		</script>
    </body>
</html>