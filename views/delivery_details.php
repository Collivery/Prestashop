<div class="row">
	<div class="tab-content panel">

		<div>
			<img src="../modules/mds/icons/Collivery-Icon.png" style="padding:0 1% 1% 0">

			<h1 style="display:inline">MDS Delivery Status || Waybill <?= $waybill ?></h1>
		</div>

		<div class="tab-pane  in active" id="addressShipping" style="display:inline-block; width:100%">
			<ul style="padding-top:2%;list-style: none">
				<li>Current status: <?= $status['status_text'] ?></li>
				<li>Delivery requested: <?= $status['updated_date'] ?> <?= $status['updated_time'] ?> </li>
				<li>Deliver by: <?= $status['delivery_date'] ?> <?= $status['delivery_time'] ?> </li>
				<?php if ($status['eta_text']) {?>
				<li>Delivery ETA: <?= $status['eta_text'] ?> </li>
				<?php } ?>
				<li>Delivery type: <?= $serviceName ?></li>
				<li>Delivery fee: R<?= $status['total_price'] ?> ex_vat</li>
				<li><a href="https://quote.collivery.co.za/waybillpdf.php?wb=<?= $waybillEnc ?>&output=I"
						   target="_blank"
						   class="btn btn-default">Get Waybill</a></li>
				<?php if ($pod): ?>
					<li>
						<a href="?controller=AdminOrders&amp;token=<?= $token ?>&amp;vieworder&amp;id_order=<?= $orderId ?>&amp;func_name=downloadPod&amp;waybill=<?= $waybill ?>"
						   target="_blank"
						   class="btn btn-default">Get POD</a></li>
				<?php endif ?>
			</ul>
			<div style="display:inline-block; width:49%">
				<h2>Collection Address</h2>

				<div class="well">
					<div class="row">
						<div class="col-sm-6">
							<?php foreach ($collectionAddresses as $collectionAddress): ?>
								<?php if ($collectionAddress['id_address'] == $collectionAddressId): ?>

									<?= $collectionAddress['alias'] ?> <br>
									<?= $collectionAddress['address1'] ?> <br>
									<?= $collectionAddress['city'] ?> <br>
									<?= $collectionAddress['name'] ?> <br>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
			<div style="float:right;width:49%">
				<h2>Delivery Address</h2>

				<div class="well">
					<div class="row">
						<div class="col-sm-6">
							<?php foreach ($deliveryAddresses as $deliveryAddress):
								if ($deliveryAddress['id_address'] == $deliveryAddressId) {
									?>
									<?php
									echo
										$deliveryAddress['alias'] . "<br>" .
										$deliveryAddress['address1'] . "<br>" .
										$deliveryAddress['city'] . "<br>" .
										$deliveryAddress['name'];
								}
								?>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>






