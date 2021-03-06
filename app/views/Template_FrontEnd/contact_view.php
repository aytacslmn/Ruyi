<script>
    var index = 5;
</script>
<section id="contact-info">
    <div class="center">                
        <h2  style="color:#605F5F;margin-top:-30px; font-size:35px" >Bize Ulaşın</h2>
        <h3 class="lead" style="font-size:19px;">Kaliteyi Yakalayın</h3>
    </div>
    <div class="gmap-area" style="margin-top:-40px">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3113.1521807259774!2d35.53086611425269!3d38.71431493911383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b128d76fcf789%3A0x7f895b035dacee58!2sErciyes+Teknopark+A.%C5%9E.!5e0!3m2!1str!2str!4v1456536935157" width="600" height="450" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>
                <div class="col-sm-7 map-content">
                    <ul class="row">
                        <li class="col-sm-6">
                            <address style="font-size:16px">
                                <h4 style="font-size:20px">Ruyidem Ofis</h4> 
                                <p>Aşık Veysel Bulvarı Erciyes  <br>
                                    Teknopark 5. Bina</p><br>
                                Melikgazi Kayseri
                                <p>Telefon:+90-545 200 46 50<br>
                                    Email Address: <a href="">info@ruyidem.com</a></p>
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->
<section id="contact-page">
    <div class="container">
        <div class="center">        
            <h2 style="color:#605F5F">Mesaj Gönderin</h2>
            <p class="lead" style="color:#605F5F">Bilgi almak istediğiniz konu hakkın da lütfen mesaj gönderin.</p>
        </div> 
        <div class="row contact-wrap"> 
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>İsim *</label>
                        <input type="text" name="name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Telefon</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Şirket Adı</label>
                        <input type="text" class="form-control">
                    </div>                        
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Konu *</label>
                        <input type="text" name="subject" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Mesaj*</label>
                        <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                    </div>                        
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Gönder</button>
                    </div>
                </div>
            </form> 
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
