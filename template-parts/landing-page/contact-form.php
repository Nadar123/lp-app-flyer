<?php 
$lp_contact_title = get_field('lp_contact_title');
?>

<section class="contact-form">
    <div class="container">
        <div class="row">
        <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <h3 class="text-center title"><?php echo $lp_contact_title; ?></h3>
                <form action="" class="js-form" id="lp_form">
                    <div class="inner-from">
                        <div class="form-group input-control">
                            <input type="text" class="form-control" id="first_name" placeholder="First Name*">
                            <div class="error"></div>
                        </div>
                        <div class="form-group input-control">
                            <input type="text" class="form-control" id="last_name" placeholder="Last Name*">
                            <div class="error"></div>
                        </div>
                        <div class="form-group input-control">           
                            <input type="email" class="form-control" id="email" placeholder="Business email*">
                            <div class="error"></div>
                        </div>
                
                        <div class="form-group">
                            <input type="text" class="form-control" id="company_name"  placeholder="Company Name">
                        </div>
                    </div>
                    <div class="dropdown form-group input-control">
                        <select id="company_option" class="form-control">
                            <option value="" selected>My Company is*</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                        </select>
                        <div class="error"></div>
                    </div>
                    <div class="submit-button">
                        <button 
                            type="submit"
                            class="btn btn-primary js-trigger">  Submit </button>
                    </div>
                </form>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>  
</section>