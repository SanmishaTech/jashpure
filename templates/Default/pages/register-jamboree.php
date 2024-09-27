<?= $this->include('Default/elements/header-jamboree') ?>
    <?= $this->include('Default/elements/menu-jamboree') ?>
      <div class="fables-header bg-danger">
        <div class="container"> 
         <h1 class="text-white text-center">Register For Jashpur Jamboree</h1>  
    </div>
</div>  
  <!-- <div class="container-fluid py-4" style="background-image: url(/uploads/images/jashpur-jamboree/trible-2.png);"></div> -->


<!-- Start page content --> 
  <div class="container py-5"> 
    <div class="row  justify-content-center">
      <div class="col-lg-9">   
        <form>
          <div class="row p-3 bg-white shadow py-4">
            <div class="col-md-12 form-group mb-2">
            <lable>Name<span class="text-danger">*</span>
            <input name="name" class="form-control bg-transparent border border-light bg-light  py-2 ">
            </div>
            <div class="col-md-3  form-group mb-2">
            <lable>Age<span class="text-danger">*</span>
            <input name="age" class="form-control bg-transparent border border-light bg-light  py-2 ">
            </div>
            <div class="col-md-3  form-group mb-2">
                <lable>Gender<span class="text-danger">*</span>
                <select  name="gender"  class="form-control bg-transparent border border-light bg-light  py-1">
                      <option value>-</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                  </select>
            </div>
            <div class="col-md-6 form-group mb-2">    
            <lable>Email<span class="text-danger">*</span>                   
            <input name="email" class="form-control bg-transparent border border-light bg-light  py-2 " >
            </div>
            <div class="col-md-6 form-group mb-2">
            <lable>Phone No.<span class="text-danger">*</span>
            <input name="mobile" class="form-control bg-transparent border border-light bg-light  py-2">
            </div>
            <div class="col-md-6 form-group mb-2">
            <lable>WhatsApp No.<span class="text-danger">*</span>
            <input name="whatsapp" class="form-control bg-transparent border border-light bg-light  py-2 " >
            </div>
            <div class="col-md-6 form-group mb-2">
            <lable>State<span class="text-danger">*</span>
            <input name="state" class="form-control bg-transparent border border-light bg-light  py-2 ">
            </div>
            <div class="col-md-6 form-group mb-2">
            <lable>City<span class="text-danger">*</span>
            <input name="city" class="form-control bg-transparent border border-light bg-light  py-2 ">
            </div>
            
            <div class="col-md-12 text-center mt-4 mb-3">
            <input type="submit"   id="submit"  class="btn rounded-0 text-white btn-block p-3" style="background-color:#dc1b2e;" value="Submit and Proceed To Pay" >
            </div>                               
          </div>
        </form>
      </div>
    </div>        
  </div> 

<!-- /End page content -->
    
<div class="container-fluid py-4 mb-0 px-0" style="background-image: url(/uploads/images/jashpur-jamboree/mountian.png);"></div>


<?= $this->include('Default/elements/footer-jamboree-registration') ?>
