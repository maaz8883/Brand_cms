<style>
    /* modal start */
    .custom-modal .btn-close {
    position: absolute;
    right: 20px;
    opacity: 1 !important;
    color: #046cdd !important;
    font-size: 26px;
    padding: 0;
    border-radius: 100px;
    text-align: center;
    top: 10px;
    text-shadow: none;
    z-index: 9;
    background: #ffffff;
    width: 50px;
    height: 50px;
    box-shadow: 0 0 10px #ddd;
    font-weight: 600;
}
.section-contact-main-part2-inner2-form-field-btn button {
    margin: 20px 0 0 0;
}
.custom-modal .modal-dialog {
    max-width: 850px;
}
.modal .modal-dialog .modal-content {
    padding: 10px 8px;
    background: transparent;
    border: none;
}
#popup-overlay {
    z-index: 99;
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
  }
  
  .popup-custom {transition: 0.15s linear;background:url(hampton-bg.jpg);background-size:cover;padding: 20px 20px 30px 20px;border-radius: 10px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);position: relative;
          background-position: 78% 100%;
  }
  
 .popup-custom h2{
    font-size: 36px;
    text-transform: uppercase;
    padding-top:80px ;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }

  .close-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
  }
  
  .close-icon:hover {
    color: #ff0000;
  }
  
  .form label {
    font-size: 17px;
    font-weight: 500;
  }
  
  .form-part1 {
    display: flex;
  }
  
  /* .form-child1 {
    width: 100%;
    padding-right: 15px;
  }
  
  .form-child2 {
    width: 100%;
  } */
  
  .form input {
    padding: 14px 15px;
    width: 80%;
    border-radius: 5px;
    border: 1px solid gainsboro;
  }
  
  .form textarea {
    padding: 14px 15px;
    width: 100%;
    height: 200px;
    border-radius: 5px;
    border: 1px solid gainsboro;
  }
  
  .form label {
    padding-top: 20px;
  }
  
  .form button {
    font-size: 20px;
    font-weight: 900;
    text-transform: uppercase;
    padding: 8px 15px;
    border-radius: 8px;
    background-color: #0e3193;
    color: white;
    border: none;
  }
  
  .popup-btn:hover {
    border-radius: 8px;
    background-color: white;
    color: #0e3193;
    border: 1px solid #0e3193;
  }
  
  .form {
    display: flex;
    margin: 0 auto;
    gap: 5px;
    justify-content: center;
    flex-wrap: wrap;}
  /* moadl end */
</style>
<div class="custom-modal">
<!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered  modal-
      xl">
      <div class="modal-content">
         <div class="modal-body text-center">
            <div class="popup-custom">
               <div class="row">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
                  <div class="col-lg-6"></div>
                  <div class="col-lg-6">
                     <h2>Independence Day <br> <span style="color:white; background-color: #0e3193;padding: 0px 30px; border-radius: 13px; ">70% off on</span><br> Publishing Services!</h2>
                     <form action="sending.php" method="POST">
                        <div class="form">
                           <input type="text" placeholder="Name" bame="cn">
                           <br>
                           <input type="email" placeholder="Email" name="em">
                           <br>
                           <input type="text" placeholder="Phone #" name="pn">
                           <br>
                           <div class="section-contact-main-part2-inner2-form-field-btn">
                              <button type="submit" class="popup-btn">Book Now</button>
                           </div>
                        </div>
                     </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

 <!--<div class="modal fade cr-popup indep" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
 <!--        <div class="modal-dialog">-->
 <!--           <div class="modal-content">-->
               <!--<div class="modal-header">-->
               <!--   <h3>Get 50% Off On All Services</h3>-->
               <!--   <h6>"Embrace the writer within you."</h6>-->
               <!--   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>-->
               <!--</div>-->
 <!--              <div class="modal-body">-->
 <!--                  <div class="popup-custom">-->
 <!--              <div class="row">-->
 <!--                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>-->
 <!--                 <div class="col-lg-6"></div>-->
 <!--                 <div class="col-lg-6">-->
 <!--                    <h2>Independence Day <br> <span style="color:white; background-color: #0e3193;padding: 0px 30px; border-radius: 13px; ">50% off on</span><br> Publishing Services!</h2>-->
 <!--                    <form action="sending.php" method="POST">-->
 <!--                       <div class="form">-->
 <!--                          <input type="text" placeholder="Name" bame="cn">-->
 <!--                          <br>-->
 <!--                          <input type="email" placeholder="Email" name="em">-->
 <!--                          <br>-->
 <!--                          <input type="text" placeholder="Phone #" name="pn">-->
 <!--                          <br>-->
 <!--                          <div class="section-contact-main-part2-inner2-form-field-btn">-->
 <!--                             <button type="submit" class="popup-btn">Book Now</button>-->
 <!--                          </div>-->
 <!--                       </div>-->
 <!--                    </form>-->
 <!--                    </div>-->
 <!--                 </div>-->
 <!--              </div>-->
 <!--           </div>-->
 <!--              </div>-->
       
 <!--           </div>-->
 <!--        </div>-->