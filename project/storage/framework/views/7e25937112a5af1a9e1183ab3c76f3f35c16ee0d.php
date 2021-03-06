<?php $__env->startSection('content'); ?>

<link rel="stylesheet"  type="text/css" href="/Home/AmazeUI-2.4.2/assets/css/amazeui.css"/>
<link href="/Home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
<link href="/Home/basic/css/demo.css" rel="stylesheet" type="text/css" />

<link href="/Home/css/sustyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Home/basic/js/jquery-1.7.min.js"></script>
</div>
<div class="clear"></div>



<div class="take-delivery">
 <div class="status">
   <h2>您已成功付款</h2>
   <div class="successInfo">
     <ul>
       <li>付款金额<em>¥<?php echo e($p); ?></em></li>
       <div class="user-info">
         <p>收货人：<?php echo e($name); ?></p>
         <?php $__currentLoopData = $list_address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <p>联系电话：<?php echo e($v->phone); ?></p>
         <p>收货地址：<?php echo e($v->address); ?></p>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
             请认真核对您的收货信息，如有错误请联系客服
                               
     </ul>
     <div class="option">
       <span class="info">您可以</span>
        <a href="/home/per_order" class="J_MakePoint">查看<span>已买到的宝贝</span></a>
        <a href="/Home/per_loorder/" class="J_MakePoint">查看<span>交易详情</span></a>
     </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Home.base.parent', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>