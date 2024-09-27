
<?= $this->include('Default/elements/header') ?>

<?= $this->include('Default/elements/menu') ?>

<div class="fables-header  bg-rules5">
    <div class="container"> 
         <h1 class="fables-page-title1 fables-second-border-color1 wow fadeInLeft" data-wow-duration="1.5s"><?= $page->title ?></h1>
                  
<nav>
  <ol class="breadcrumb mb-0 px-0 py-2" style="background-color: transparent;">
    <li class="breadcrumb-item"><a class="text-dark" href="/">Home</a></li>
    <li class="breadcrumb-item"><a class="text-dark" href="#"><?= $page->title ?></a></li>
  </ol>
</nav>
    </div>
</div>  

<div class="container pt-5 pb-5">
    <p class="fables-second-text-color semi-font mb-4 font-17">(2) Items in my cart</p>
      <table class="table  table-striped table-condensed">
        <thead>
          <tr>
            <th >Product Image</th>
            <th >Product Name</th>
            <th >Rate</th>
            <th >Quantity</th>
            <th >Amount</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td>Product Image </td>
          <td>Product name </td>
          <td>Rate</td>
          <td>Quantity</td>
          <td>Amount</td>
          <td><i class="fa fa-trash"></i></td>
        </tr>
      <tr>
        <td></td>
        <td> </td>
        <td></td>
        <td>Total amt</td>
        <td>00.00</td>
        <td></td>
      </tr>
      </tbody>
    </table>
    
  
    <hr>
    <form  class=" fables-contact-form">
        <div class="row">           
          <div class="form-group col-6"> 
            <input name="first_name" placeholder="First Name" value="" class="form-control rounded-0 p-3">   
          </div>
          <div class="form-group col-6"> 
            <input name="last_name" placeholder="Last Name" value="" class="form-control rounded-0 p-3">
          </div>
          <div class="form-group col-6"> 
            <input name="email" placeholder="Email" value="" class="form-control rounded-0 p-3">
          </div>
          <div class="form-group col-6"> 
            <input name="mobile" placeholder="Mobile No." value="" class="form-control rounded-0 p-3">
          </div>
          <div class="form-group col-6"> 
            <input name="apartment" placeholder="Apartment" value="" class="form-control rounded-0 p-3">
          </div>
          <div class="form-group col-6"> 
            <input name="street" placeholder="street" value="" class="form-control rounded-0 p-3">
          </div>
          <div class="form-row col-12"> 
              <div class="form-group col-md-12">
                    <textarea class="form-control p-3 rounded-0" placeholder="Address" rows="4"></textarea>
              </div> 
          </div>
          <div class="form-group col-4"> 
            <input name="city" placeholder="city" value="" class="form-control rounded-0 p-3">
          </div>
          <div class="form-group  col-4"> 
            <input name="state" placeholder="State" value="" class="form-control rounded-0 p-3">
          </div>
          <div class="form-group  col-4"> 
            <input name="pincode" placeholder="Pincode" value="" class="form-control rounded-0 p-3">
          </div>      
          <input type="submit" class="btn fables-second-background-color rounded-0 text-white btn-block p-3" value="Submit">
        </div>
      </form>
</div>
    <?= $this->include('Default/elements/footer') ?>

