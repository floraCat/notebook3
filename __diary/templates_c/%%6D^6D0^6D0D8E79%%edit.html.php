<?php /* Smarty version 2.6.22, created on 2016-11-22 17:50:49
         compiled from edit.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="style/base.css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
</head>

<body>

<style>
@media screen and (min-width:960px){
	.Main{ width:960px;}
	.score li{ width:129px;}
}

@media screen and (min-width:600px) and (max-width:960px){
	.Main{ width:600px;}
	.score li{ width:170px!important;}
}

@media screen and (max-width:600px){
	.Main{ width:400px;}
	.Main .score li{ width:170px;}
}

@media screen and (min-width:200px) and (max-width:400px){
	.Main{ width:100%;}
	.Main .score li{ width:45%; padding:1%; margin:1%;}
}


.Main{ margin:0 auto;}
	.Main .unit{ margin-bottom:3px; overflow:visible;}
	.switchBtn{ width:100%; height:50px; font:bold 16px/50px 微软雅黑; text-align:center; border:#e5e5e5 1px solid; background-color:#f8f8f8;}
	.logion li,.everyday li{ font-size:14px; line-height:30px; padding:8px 5px; border-bottom:#ddd 1px dashed;}
	
	.diary textarea{ width:99%; height:500px; margin:0.5%; border:#eee 1px solid; background-color:#fefefe;}
</style>
<div class="Main v" style="padding-top:40px;">
	
	<div class="unit everyday">
		<div class="switchBtn">everyday</div>
		<ul class="switchDiv" style="display:none;">
			<li>logion每天过一遍</li>
			<li>记录每天所做，所学，所感悟的事物</li>
			<li>反省哪些做得好哪些做不好的地方</li>
			<li>写作练习</li>
			<li>复习最近几天所记录的知识点</li>
			<li>生活井然有序</li>
			<li>深呼吸放松练习半小时</li>
			<li>整洁，健康，美丽加分</li>
			<li>与人沟通</li>
			<li>默念人生宣言</li>
			<li>重复心像</li>
		</ul>
	</div><!--logion end-->
	<div class="unit everyday">
		<div class="switchBtn">2016</div>
		<ul class="switchDiv">
			<li>* 健康，保养</li>
			<li>* 言行习惯 ____（每天两次评分）</li>
			<li>* 前端高手 ____（项目经验 & 专业表述）</li>
			<li>* 生活技能 ____（知识体系，每天整理当天所记）</li>
			<li>* 思维培养</li>
			<li>* 日记 + 写作</li>
			<li>* 看书 ____（技术 / 逻辑思维 / 分析 / 理财 / 管理 / 表达 / 历史 等）</li>
			<li>* 个人品牌 ____（网络社区）</li>
			<li>* 记忆练习</li>
		</ul>
	</div><!--logion end-->

	<div class="unit logion">
		<div class="switchBtn">logion</div>
		<ul class="switchDiv" style="display:none;">
			<li>强烈的企图心</li>
			<li>疯狂的努力，超人般地努力</li>
			<li>向不可能挑战，设立高的标准</li>
			<li>永远保持感恩谦虚的态度</li>
			<li>事情多了总效益就高，因为很多资源共用了，单一等同于浪费</li>
			<li>不要播种不收获，每一点努力都是能收成的</li>
			<li>思想不要受任何的限制，任何东西都没有标准</li>
			<li>标准没有极限，给自己设定很高的标准</li>
			<li>不要让一些无聊的人进入到你的思想和生活</li>
			<li>厉害的人只是很会修饰自己的不足而已</li>
			<li>进步是由无数的一瞬间的感悟积累出来的</li>
			<li>平常心待人</li>
			<li>尽可能去尝试，积累成功的经验</li>
			<li>外界都是虚无的，以目标为行为导向，现在尽可能地努力，未来不至于后悔</li>
			<li>你要创造的是一次奇迹，只能向前，不能后退</li>
			<li>选择年轻就成功，年轻人成功是因为他掌握好了时间</li>
			<li>一定要在最短的时间，学习全世界最棒的方法，去结交最好的朋友，去做最对的事情，得到最好的结果</li>
			<li>成功是一种习惯，什么习惯打造什么人生</li>
			<li>只要冒险才是对人生最大的保险</li>
			<li>寻找并选择你的教练</li>
			<li>把学习当吃饭</li>
			<li>永远比别人努力一点点，永远拿练习当比赛</li>
			<li>当你把成功等同生命时，人生永远都没有借口了</li>
			<li>没有不成功的生意，只有不成功的人</li>
			<li>没有得到想要的，一定得到更好的</li>
			<li>随时把自己归零，放到任何挑战的境地</li>
			<li>用心去帮助对方，重视别人的问题，帮他想办法解决，帮别人思考</li>
			<li>反应要快，记住对方说话的重点</li>
			<li>当你确定方向是对的，不要再去衡量，just do it!</li>
			<li>设计精神家园很重要，只有建造好了将让你受用终生</li>
			<li>如你真有实力，总有一天会发亮的，何必在那骄傲呢？坚持！忍耐！</li>
			<li>让你每说的一句话都很有力量</li>
			<li>表达是技术加艺术，是一生的课题</li>
			<li>任何东西都尽可能地让它落到实处</li>
			<li>思想先于言行</li>
			<li>把握好成功的节奏，幸福的节奏</li>
			<li>一定要节约，充分利用金钱，时间，资源</li>
			<li>每天看自己的努力，再对照自己的目标</li>
			<li>相信自己无所不能，同时懂得自己还很无知</li>
			<li>只要是好的先选择，再去想办法解决阻碍</li>
			<li>尽可能把许多事情规范化和系统化，你会受用终生</li>
			<li>结果都一样的，不要因为过程的好与坏，易与难而改变</li>
			<li>要年轻就成功，把经验放到一边，把自己看成是一个成功的人</li>
			<li>改变固有的思维和心态</li>
			
			<li>赚钱意识--有“野心”</li>
			<li>时刻保持激情</li>
			<li>坚持好习惯，形成好性格</li>
			<li>有国际化的眼光</li>
			<li>重复心像</li>
			<li>好的暗示</li>
			<li>生活细节井井有条</li>
			<li>精打细算，对数字绝不可含糊</li>
			<li>善于挖掘事物的本质</li>
			<li>循序渐进，心放小点，不放过任何机会</li>
			<li>节俭</li>
			<li>勇于冒险，学会投资</li>
			<li>有预见性，未雨绸缪</li>
			<li>尝试新思路，处处创新</li>
			<li>站在巨人肩上，贯彻“借”的哲学</li>
			<li>厚利少销</li>
			<li>注重效率，充分利用时间</li>
			<li>强化练习，复习</li>
			
			<li>光懂还不行，要真正地付诸行动，把所学知识运用于实践</li>
			<li>聚集精神能量的理想状态：最佳的精神状态；深邃的思想；清晰的思路；敏锐的洞察力；睿智的谈吐；处理问题的高效</li>
			<li>一切知识都是集中意念的结果</li>
			<li>重复精神图像，反复地强化练习</li>
			<li>勇于担当引导者</li>
			<li>剔除脑海中所有没有意义或破坏性的思想</li>
			<li>用好习惯取代坏习惯，用积极思想取代消极思想</li>
			<li>未雨绸缪，模拟过关后，在实践中尽可能一步到位</li>
			<li>凡有果必有因，因果一定遵循某种固定的法则或原理</li>
			<li>需求产生供应；越渴望，实现得越快</li>
			<li>内在先于外在，先在思想上富足起来，才能在客观世界实现富足</li>
			<li>专注一件事，心无旁贷，排除其他一切杂念的干扰</li>
			<li>深入理解“引力法则”</li>
			<li>只有在绝对寂静的状态下，才能领悟到永恒不变的法则并拥有力量</li>
			<li>锤炼语言，三思后言</li>
			<li>珍惜时间，做事讲求效率</li>
			<li>恐惧是过分的自我关注，把注意力转移到别人身上，就消除恐惧了</li>
			<li>让头脑中的创造力将生命推至无限活力与能力的巅峰</li>
			<li>把每一天的每一个知识点种植在脑海里，重视生活知识的力量</li>
			<li>多实践，把身边的人和事当成试验品，积极制造锻炼的机会，并极力从中学习尽可能多的东西</li>
			<li>当你每时每刻都不会出现烦扰时，你的精神修炼就成功了</li>
			<li>多尝试以前没做过或少做的事情，做之前多思考</li>
			<li>充分利用自己头脑财富的另一部分巨大的潜能：大脑可以被训练和培养的潜能是难以置信的；善于拨动大脑内闲置的“琴弦”</li>
			<li>想要养成一种行为习惯，先表现出相对应的行为，哪怕仅仅是走走过场，装装样子</li>
			<li>用一生专注于获得与保持思想和言行的自由，人生不会重来，珍惜每时每刻争取尽可能大的进步</li>
			<li>如果在短促的一分钟内你能不带停歇地跑好每一秒，那么这个世界所有的一切都将是你的囊中之物</li>
			<li>只有从思想上克服困难才能真正达到宁静平和的心境</li>
			<li>让自己喜欢上与人沟通</li>
			<li>努力一阵子，享受一辈子；一个智慧的选择，胜过千万个打拼</li>
			<li>现在的时间就是最大的可利用资源</li>
		</ul>
	</div><!--logion end-->
	
	<style>
	.tabs{ position:fixed; top:0; width:100%; min-width:320px; max-width:960px; overflow:hidden; border-bottom:#ddd 1px solid; background:#fff;}
	.tabs a{ float:left; width:20%; text-align:center; height:40px; line-height:40px; outline:#ddd 1px solid; cursor:pointer;}
	</style>
	<div class="tabs">
		<a href="#communication">与人沟通</a>
		<a href="#work">工作</a>
		<a href="#life">生活</a>
		<a href="#appearance">仪态</a>
		<a href="#mind">思维</a>
	</div>
	
	<form action="index.php" method="post">
	
	<style>
	.score li{ float:left; width:129px; padding:5px; margin:9px; border:#e5e5e5 1px solid;}
	.score li h3{ height:72px; padding:5px 3px 5px 7px; font:bold 14px/24px 微软雅黑; background-color:#f8f8f8;}
	.score li .g{ overflow:hidden; border:#ddd 1px solid;}
	.score li .g a{ float:left; width:33%; text-align:center; height:40px; line-height:40px; font-size:30px;}
	.score li .grade{ float:left; height:30px; padding:5px 0; font:bold 24px/30px 微软雅黑; width:31%; margin:0 1%; outline:#e5e5e5 1px solid; text-align:center; color:#CC0000;}
	.score li .des{ height:96px; width:100%; border:none; outline:#e5e5e5 1px dashed;}
	</style>
	<div class="unit score">
		<div class="switchBtn">score</div>
		<ul class="switchDiv">
		
			
			<a name="communication">---与人沟通---</a>
			<ol id="communication">
				<li>
					<h3>少说话多思考</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>厚积薄发</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>点到为止，说重点，简练</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>听明白想清楚再去说和做</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>不说他人坏话</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>多考虑他人感受</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>用心记住别人名字、工作、出生等信息</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>幽默，不嬉皮笑脸</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>低调，谦虚，不炫耀</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>表述有条不紊，不急不躁，循序渐进</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>没有把握，一知半解的事情不拿出来说</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>尊重每一个人</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>以静制动</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>忍耐</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
			</ol>
			
			
			<a name="work">---工作---</a>
			<ol id="work">
				<li>
					<h3>做完的事要检查，确保无误</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s101_score" value="<?php if ($this->_tpl_vars['rsedit']['s101_score']): ?><?php echo $this->_tpl_vars['rsedit']['s101_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s101_des"><?php echo $this->_tpl_vars['rsedit']['s101_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>做事不留遗憾，全面到位</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s102_score" value="<?php if ($this->_tpl_vars['rsedit']['s102_score']): ?><?php echo $this->_tpl_vars['rsedit']['s102_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s102_des"><?php echo $this->_tpl_vars['rsedit']['s102_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>重要关头排除其他任何干扰，专注于眼前要做的事</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>事前多做准备</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>尽可能第一次就做到最好</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>做事讲求效率，思考最佳的实现方法</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>不放过任何小成功，没有什么比成功更能帮助成功了</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>在解决问题之前，先清空你的机制</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>不懂和不了解的事就多问多百度</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>多做笔记，每天整理复习</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
			</ol>


			<a name="life">---生活---</a>
			<ol id="life">
				<li>
					<h3>做一个真实的人</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>对数字绝不含糊</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>对身边的事物清晰明了</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>节俭，精打细算</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>吃水果，喝牛奶</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>睡前刷牙</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>做运动</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
			</ol>
			
			
			<a name="appearance">---仪态---</a>
			<ol id="appearance">
				<li>
					<h3>保持个人卫生，清新，舒畅</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>女人味(保养+瘦身+美腿+美甲+裙子+高跟鞋)</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>举止端庄</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>保持微笑和善意</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>仪容仪表大方得体</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
			</ol>
			
			
			<a name="mind">---思维---</a>
			<ol id="mind">
				<li>
					<h3>不想当然，凡事多想一步</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>不轻易妄下结论</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>记住琐碎的资讯和技能，新资讯多收集相关信息</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>不想无用、消极的事</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>不让无聊、没意义的人或事进入你的生活</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>自律，自制力要强</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>敢于担当</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>应变能力强</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>马上行动</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>多去尝试</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>善于挖掘事物的本质</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>有未雨绸缪的意识</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>创新</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>洞察力</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>朴实</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>自信</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>不要自我批评</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>写日记，每天回顾当天所遇到的事</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>表达时多用侧面寓意，说话不要太赤裸</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
				<li>
					<h3>有目的性，完美演绎整个过程</h3>
					<div class="g">
						<a class="sub">-</a>
						<input class="grade" type="text" name="s100_score" value="<?php if ($this->_tpl_vars['rsedit']['s100_score']): ?><?php echo $this->_tpl_vars['rsedit']['s100_score']; ?>
<?php else: ?>0<?php endif; ?>" />
						<a class="add">+</a>
					</div>
					<textarea class="des" name="s100_des"><?php echo $this->_tpl_vars['rsedit']['s100_des']; ?>
</textarea>
				</li>	
			</ol>	
			
			
		</ul>
	</div><!--score end-->
	
	<div class="unit diary">
		<div class="switchBtn">diary</div>
		<div class="switchDiv" style="display:none;">
			<textarea name="diary"><?php echo $this->_tpl_vars['rsedit']['diary']; ?>
</textarea>
		</div>
	</div><!--diary end-->
	
	<div class="btn">
	<?php if (! $this->_tpl_vars['rsedit']): ?>
		<input type="hidden" name="act" value="save" />
	<?php else: ?>
		<input type="hidden" name="act" value="modify" />
	<?php endif; ?>
		<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>
" />
		<input style=" display:block; width:120px; margin:10px auto; text-align:center; height:40px; line-height:40px; border:#ddd 1px solid;" type="submit" value="提交" />
	</div>
	
	</form>
	
</div><!--Main end-->

<script>
$(document).ready(function(){
	$(".switchBtn").click(function(){
		$(this).siblings(".switchDiv").toggle();
	});
	
	$(".score li .g .sub").click(function(){
		var cur=$(this).siblings("input").val();
		$(this).siblings("input").val(parseInt(cur)-1);
	});
	$(".score li .g .add").click(function(){
		var cur=$(this).siblings("input").val();
		$(this).siblings("input").val(parseInt(cur)+1);
	});
});
</script>

</body>
</html>