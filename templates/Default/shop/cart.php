<?= $this->include('Default/elements/header') ?>

<?= $this->include('Default/elements/menu') ?>

<div class="fables-header fables-after-overlay bg-rules5">
    <div class="container">
        <h2 class="fables-page-title1 fables-second-border-color1 wow fadeInLeft" data-wow-duration="1.5s"><?= $title ?>
        </h2>
    </div>
</div>


<?php if(!empty($cart)) { ?>
  <div class="container pt-5 pb-5">
      <p class="fables-second-text-color semi-font mb-4 font-17">
          (<span class="cart_count"><?= session()->get('cart_count') ?? 0 ?></span>) Products in your cart
      </p>
      <?php
          $states = [
            'Arunachal Pradesh' => 'Arunachal Pradesh',
            'Assam' => 'Assam',
            'Bihar' => 'Bihar',
            'Chhattisgarh' => 'Chhattisgarh',
            'Goa' => 'Goa',
            'Gujarat' => 'Gujarat',
            'Gujarat' => 'Gujarat',
            'Himachal Pradesh' => 'Himachal Pradesh',
            'Jammu and Kashmir' => 'Jammu and Kashmir',
            'Jharkhand' => 'Jharkhand',
            'Karnataka' => 'Karnataka',
            'Kerala' => 'Kerala',
            'Madhya Pradesh' => 'Madhya Pradesh',
            'Maharashtra' => 'Maharashtra',
            'Manipur' => 'Manipur',
            'Meghalaya' => 'Meghalaya',
            'Mizoram' => 'Mizoram',
            'Nagaland' => 'Nagaland',
            'Odisha' => 'Odisha',
            'Punjab' => 'Punjab',
            'Rajasthan' => 'Rajasthan',
            'Sikkim' => 'Sikkim',
            'Tamil Nadu' => 'Tamil Nadu',
            'Telangana' => 'Telangana',
            'Tripura' => 'Tripura',
            'Uttar Pradesh' => 'Uttar Pradesh',
            'Uttarakhand' => 'Uttarakhand',
            'West Bengal' => 'West Bengal',
            'Andaman and Nicobar Islands' => 'Andaman and Nicobar Islands',
            'Chandigarh' => 'Chandigarh',
            'Dadra and Nagar Haveli' => 'Dadra and Nagar Haveli',
            'Daman and Diu' => 'Daman and Diu',
            'Lakshadweep' => 'Lakshadweep',
            'National Capital Territory of Delhi' => 'National Capital Territory of Delhi',
            'Puducherry' => 'Puducherry'
        ];      
      ?>
      <table class="table  table-striped table-condensed table-bordered">
          <thead>
              <tr>
                  <th>Product Image</th>
                  <th>Product Name</th>
                  <th>Rate</th>
                  <th>Quantity</th>
                  <th>Amount</th>
                  <th>&nbsp;</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach($cart as $product) { ?>
              <tr id="tr_<?= $product['product_id'] ?>">
                  <td><?= img(['src' => $product['featured_image'], 'class' => 'w-25 shadow img-fluid', 'alt'=> $product['product']]) ?></td>
                  <td><?= $product['product'] ?></td>
                  <td align="right"><?= $product['rate'] ?></td>
                  <td><?= $product['qty'] ?></td>
                  <td align="right"><strong>₹ <?= $product['amount'] ?><strong></td>
                  <td><a href="#" class="delete_from_cart font-19" rel="<?= $product['product_id'] ?>"><i class="fa fa-trash"></i></a></td>
              </tr>
              <?php } ?>
              <tfoot>
                <tr>
                    <th colspan="4" align="right">Total Amount</td>
                    <th>₹ <span class="total_amount"><?= session()->get('total_amount') ?></span></th>
                    <th>&nbsp;</th>
                </tr>
              </tfoot>
          </tbody>
      </table>


      <hr>
      <h5><strong>Delivery Address</strong></h5>
      <br />
      <form action="/orders/add" method="post" enctype="multipart/form-data">

          <div class="row">
              <div class="form-group col-6">
                  <input name="first_name" placeholder="First Name"  class="form-control rounded-0 p-3" value="<?= old('first_name') ?>" />
                  <span class="help-block"><?= validation_show_error('first_name') ?></span>
              </div>
              <div class="form-group col-6">
                  <input name="last_name" placeholder="Last Name"  class="form-control rounded-0 p-3" value="<?= old('last_name') ?>" />
                  <span class="help-block"><?= validation_show_error('last_name') ?></span>
              </div>
              <div class="form-group col-6">
                  <input name="email" placeholder="Email"  class="form-control rounded-0 p-3" value="<?= old('email') ?>" />
                  <span class="help-block"><?= validation_show_error('email') ?></span>
              </div>
              <div class="form-group col-6">
                  <input name="mobile" placeholder="Mobile No."  class="form-control rounded-0 p-3" value="<?= old('mobile') ?>" />
                  <span class="help-block"><?= validation_show_error('mobile') ?></span>
              </div>
              <div class="form-group col-6">
                  <input name="address_line_1" placeholder="Address Line 1"  class="form-control rounded-0 p-3" value="<?= old('address_line_1') ?>" />
                  <span class="help-block"><?= validation_show_error('address_line_1') ?></span>
              </div>
              <div class="form-group col-6">
                  <input name="address_line_2" placeholder="Address Line 2"  class="form-control rounded-0 p-3" value="<?= old('address_line_2') ?>" />
                  <span class="help-block"><?= validation_show_error('address_line_2') ?></span>
              </div>
              <div class="form-group col-4">
                  <input name="city" placeholder="City"  class="form-control rounded-0 p-3" value="<?= old('city') ?>" />
                  <span class="help-block"><?= validation_show_error('city') ?></span>
              </div>
              <div class="form-group  col-4">
                  <?= form_dropdown('state', $states, old('state') ?? 'Chhattisgarh', ['class'=>'form-control rounded-0 p-3']); ?>
                  <span class="help-block"><?= validation_show_error('state') ?></span>
              </div>
              <div class="form-group  col-4">
                  <input name="pincode" placeholder="Pincode" class="form-control rounded-0 p-3"  value="<?= old('pincode') ?>" />
                  <span class="help-block"><?= validation_show_error('pincode') ?></span>
              </div>
          </div>
          <input type="submit" class="btn fables-second-background-color rounded-0 text-white btn-block p-3"
                  value="Proceed to Payment">        
      </form>
  </div>
<?php } ?>
<?= $this->include('Default/elements/footer') ?>