<?php $__env->startSection('content'); ?>
<main>

	<!-- 店舗詳細 -->
	<div class="shop-list">
		<?php $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		<div class="shop-card">
			<img src="<?php echo e($shop->image_url); ?>" alt="<?php echo e($shop->shop_name); ?>">
			<h2><?php echo e($shop->shop_name); ?></h2>
			<div class="contents">
				<p>#<?php echo e($shop->region); ?></p>
				<p>#<?php echo e($shop->genre); ?></p>
			</div>
			<!-- 予約詳細へ -->
			<a href="/detail/<?php echo e($shop->id); ?>">詳しくみる</a>

			<!-- お気に入り処理 -->
			<div class="favorite-section">
				<form action="<?php echo e(route('shop.toggleFavorite', $shop->id)); ?>" method="POST" class="favorite-form">
					<?php echo csrf_field(); ?>

					<button type="submit" class="favorite">♡</button>

				</form>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/index.blade.php ENDPATH**/ ?>