<?php $__env->startSection('content'); ?>


		<link href="/Home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/Home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />

		<link href="/Home/basic/css/demo.css" rel="stylesheet" type="text/css" />

		<link href="/Home/css/hmstyle.css" rel="stylesheet" type="text/css" />
		<script src="/Home/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/Home/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>				
			</div>
			<div class="banner">
              <!--轮播 -->
				<div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
					
					<ul class="am-slides"><?php $__currentLoopData = $ob4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($k>3): ?> $k-4 <?php endif; ?>
						<li class="banner<?php echo e($k+1); ?>" 'background:#55be59;'><a href="/home/goods/<?php echo e($v->url); ?>"><img src="/Admin/upload/<?php echo e($v->img); ?>" /></a></li>
<!-- 						<li class="banner2" style='background:#f44661;'><a><img src="/Home/images/" /></a></li>
						<li class="banner3" style='background:#0f1024;'><a><img src="/Home/images/" /></a></li>
						<li class="banner4" style='background:#ff9801;'><a><img src="/Home/images/" /></a></li> -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
					
				</div>
				<div class="clear"></div>	
			</div>
		     	<div class="shopNav">		
					<div class="slideall">
					   <div class="long-title"><a href="/home/search/path/0"><span class="all-goods">全部分类</span></a></div>
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="#">首页</a></li>
                                <li class="qc"><a href="#">闪购</a></li>
                                <li class="qc"><a href="#">限时抢</a></li>
                                <li class="qc"><a href="#">团购</a></li>
                                <li class="qc last"><a href="#">大包装</a></li>
							</ul>
						    <div class="nav-extra"><a href="/home/per_index"><a href="/home/per_index">
						    	<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
						    	<i class="am-icon-angle-right" style="padding-left: 10px;"></i></a>
						    </div>
						</div>	   				
						<!--侧边导航 -->
						<div id="nav" class="navfull">
							<div class="area clearfix">
								<div class="category-content" id="guide_2">
									
									<div class="category">
										<ul class="category-list" id="js_climit_li">


											<?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($val->upid == 0): ?>
											<li class="appliance js_toggle relative first">
												<div class="category-info">
													<h3 class="category-name b-category-name"><i><img src="/Home/images/cake.png"></i><a class="ml-22" href='/home/search/path/<?php echo e($val->path); ?>,<?php echo e($val->cid); ?>'><?php echo e($val->name); ?></a></h3>
													<em>&gt;</em>
												</div>
												<div class="menu-item menu-in top">
													<div class="area-in">
														<div class="area-bg">
															<div class="menu-srot">
																<div class="sort-side">
																	<?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	<?php if($valu->upid==$val->cid): ?>
																		<dl class="dl-sort">
																			<dt><a href="/home/search/path/<?php echo e($valu->path); ?>,<?php echo e($valu->cid); ?>"><span><?php echo e($valu->name); ?></span>
																				<?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																				<?php if($value->upid==$valu->cid): ?>		
																					<dd><a href="/home/search/path/<?php echo e($value->path); ?>,<?php echo e($value->cid); ?>"><span><?php echo e($value->name); ?></span></a></dd>
																				<?php endif; ?>
																				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																			</dt>
																		</dl>
																		<?php endif; ?>
																		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																		
<!-- 																	<dl class="dl-sort">
																		<dt><span title="蛋糕">点心</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl> -->
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
											<?php endif; ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!--轮播 -->
						<script type="text/javascript">
							(function() {
								$('.am-slider').flexslider();
							});
							$(document).ready(function() {
								$("li").hover(function() {
									$(".category-content .category-list li.first .menu-in").css("display", "none");
									$(".category-content .category-list li.first").removeClass("hover");
									$(this).addClass("hover");
									$(this).children("div.menu-in").css("display", "block")
								}, function() {
									$(this).removeClass("hover")
									$(this).children("div.menu-in").css("display", "none")
								});
							})
						</script>


					<!--小导航 -->
					<div class="am-g am-g-fixed smallnav">
						<div class="am-u-sm-3">
							<a href="sort.html"><img src="/Home/images/navsmall.jpg" />
								<div class="title">商品分类</div>
							</a>
						</div>
						<div class="am-u-sm-3">
							<a href="#"><img src="/Home/images/huismall.jpg" />
								<div class="title">大聚惠</div>
							</a>
						</div>
						<div class="am-u-sm-3">
							<a href="#"><img src="/Home/images/mansmall.jpg" />
								<div class="title">个人中心</div>
							</a>
						</div>
						<div class="am-u-sm-3">
							<a href="#"><img src="/Home/images/moneysmall.jpg" />
								<div class="title">投资理财</div>
							</a>
						</div>
					</div>

					<!--走马灯 -->

					<div class="marqueen">
						<span class="marqueen-title">商城头条</span>
						<div class="demo">

							<ul>

								<?php $__currentLoopData = $announcement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($v->order==1): ?>
								<li class="title-first"><a target="_blank" href="#">
									<img src="/Home/images/TJ2.jpg"></img>
									<span><?php echo e($v->content); ?></span>								
								</a></li>
								<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    
						<div class="mod-vip">
							<div class="m-baseinfo">
								<a href="../person/index.html">
									<img src="/Home/images/getAvatar.do.jpg">
								</a>
								<em>
									Hi,<span class="s-name">小叮当</span>
									<a href="#"><p>点击更多优惠活动</p></a>									
								</em>
							</div>
							<?php if(empty(session('users'))): ?>
							<div class="member-logout">
								<a class="am-btn-warning btn" href="/home/login">登录</a>
								<a class="am-btn-warning btn" href="/home/register">注册</a>
							</div>
							<?php else: ?>
							<div class="member-logout">
								<span style='color:black'>亲爱的<?php echo e(session('users')->name); ?>欢迎回来</span>
							
							</div>
							<?php endif; ?>
							<div class="member-login">
								<a href="#"><strong>0</strong>待收货</a>
								<a href="#"><strong>0</strong>待发货</a>
								<a href="#"><strong>0</strong>待付款</a>
								<a href="#"><strong>0</strong>待评价</a>
							</div>
							<div class="clear"></div>	
						</div>																	    
							    <?php $__currentLoopData = $announcement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($v->order==0): ?>
								<li><a target="_blank" href="#"><span><?php echo e($v->content); ?></span></a></li>

								<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>							
							</ul>
                        <div class="advTip"><a href="/home/search/path/0"><img src="/Home/images/advTip.jpg"/></a></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<script type="text/javascript">
					if ($(window).width() < 640) {
						function autoScroll(obj) {
							$(obj).find("ul").animate({
								marginTop: "-39px"
							}, 500, function() {
								$(this).css({
									marginTop: "0px"
								}).find("li:first").appendTo(this);
							})
						}
						$(function() {
							setInterval('autoScroll(".demo")', 3000);
						})
					}
				</script>
			</div>
			<div class="shopMainbg">
				<div class="shopMain" id="shopmain">

					<!--今日推荐 -->

					<div class="am-g am-g-fixed recommendation">
						<div class="clock am-u-sm-3" >
							<img src="/Home/images/2016.png "></img>
							<p>今日<br>推荐</p>
						</div>
						<div class="am-u-sm-4 am-u-lg-3 ">
								<a href="/home/search/path/0"><div class="info ">
									<h3>真的有鱼</h3>
									<h4>开年福利篇</h4>
								
							</div>
							<div class="recommendationMain ">
								<img src="/Home/images/tj.png "></img>
							</div></a>
						</div>						
						<div class="am-u-sm-4 am-u-lg-3 ">
							<div class="info ">
								<a href="/home/search/path/0">
									<h3>囤货过冬</h3>
									<h4>让爱早回家</h4>

							</div>
							<div class="recommendationMain ">
								<img src="/Home/images/tj1.png "></img>
							</a>
							</div>
						</div>
						<div class="am-u-sm-4 am-u-lg-3 ">
							<a href="/home/search/path/0">
							<div class="info ">
								<h3>浪漫情人节</h3>
								<h4>甜甜蜜蜜</h4>
							</div>
							<div class="recommendationMain ">
								<img src="/Home/images/tj2.png "></img>
							</div>
							</a>
						</div>

					</div>
					<div class="clear "></div>
					<!--热门活动 -->

					<div class="am-container activity ">
						<div class="shopTitle ">
							<h4>活动</h4>
							<h3>每期活动 优惠享不停 </h3>
							<span class="more ">
                              <a class="more-link " href="# ">全部活动</a>
                            </span>
						</div>
						
					  <div class="am-g am-g-fixed ">
					  	<?php $__currentLoopData = $ob6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="am-u-sm-3 ">
							<div class="icon-sale one "></div>	
								<h4><?php echo e($v->t_words); ?></h4><a href="/home/search/path/0">							
							<div class="activityMain ">
								<img src="/Admin/upload/<?php echo e($v->image); ?> "></img>
							</div></a>
							<div class="info ">
								<h3><?php echo e($v->f_words); ?></h3>
							</div>														
						</div>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
<!-- 						<div class="am-u-sm-3 ">
						  <div class="icon-sale two "></div>	
							<h4>特惠</h4>
							<div class="activityMain ">
								<img src="/Home/images/activity2.jpg "></img>
							</div>
							<div class="info ">
								<h3>春节送礼优选</h3>								
							</div>							
						</div>						
						
						<div class="am-u-sm-3 ">
							<div class="icon-sale three "></div>
							<h4>团购</h4>
							<div class="activityMain ">
								<img src="/Home/images/activity3.jpg "></img>
							</div>
							<div class="info ">
								<h3>春节送礼优选</h3>
							</div>							
						</div>						

						<div class="am-u-sm-3 last ">
							<div class="icon-sale "></div>
							<h4>超值</h4>
							<div class="activityMain ">
								<img src="/Home/images/activity.jpg "></img>
							</div>
							<div class="info ">
								<h3>春节送礼优选</h3>
							</div>													
						</div> -->

					  </div>
                   </div>
					<div class="clear "></div>


                 	<?php $__currentLoopData = $ob; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="am-container ">
						<div class="shopTitle ">
							<a href="/home/search/path/<?php echo e($v->path); ?>,<?php echo e($v->cid); ?>"><h4><?php echo e($v->name); ?></h4></a>
							<div class="today-brands ">
								<?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($values->upid == $v->cid): ?>
								<a href="/home/search/path/<?php echo e($values->path); ?>,<?php echo e($values->cid); ?>"><?php echo e($values->name); ?></a>
								<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<span class="more ">
                    <a class="more-link " href="/home/search/path/<?php echo e($v->path); ?>,<?php echo e($v->cid); ?>">更多分类</a>
                        </span>
						</div>
					</div>
					<div class="am-g am-g-fixed flood method3 ">
						<ul class="am-thumbnails ">
							<?php $__currentLoopData = $goods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $va): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($va->path==$v->cid): ?>
							<li>
								<div class="list ">
									<a href="/home/goods/<?php echo e($va->gid); ?> ">
										<img src="/Admin/upload/<?php echo e($va->showpic); ?>" height='150' width='200' />
										<div class="pro-title "><?php echo e($va->gname); ?></div>
										<span class="e-price ">￥<?php echo e($va->price); ?></span>
									</a>
								</div>
							</li>
							<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php $__env->stopSection(); ?>
					
<?php echo $__env->make('Home.base.parent', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>