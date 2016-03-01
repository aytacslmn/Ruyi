<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="widget">
                    <h3 style="text-align:center; color:#252424">Hakkımızda</h3>
                    <p style="text-align:center; font-size:16px; font-family:arial; color:#575555">
                        Kayseri de 2015 yılında kurulduk.Kısa sürede büyük projelerde atılım gerçekleştirmiş bir firma 
                        olmayı başardık.Genç ve diri bir ekip olarak tek çatı altında toplanma'nın mutluluğunu yaşıyoruz.
                        Bize ait çözüm ve farkındalığımız ile henüz 1 yıl içerisinde
                        sektör de kendimizi ispatlayıp ve yer edinmeyi başardık.</p>
                </div>    
            </div><!--/.col-md-3-->
            <div class="col-md-6 col-sm-12">
                <div class="widget">
                    <h3 style="text-align:center; color:#252424">Bİze Ulaşın</h3>
                    <p style="text-align:center; font-size:16px; font-family:arial; color:#575555">
                        Aşık Veysel Bulvarı Erciyes Teknopark 5. Bina Ofis ? Melikgazi Kayseri
                    </p>
                    <p style="text-align:center; font-size:16px; font-family:arial; color:#575555">
                        Telefon: +905452004650
                    </p>
                    <p style="text-align:center; font-size:16px; font-family:arial; color:#575555">
                        E-posta: <span style="color:#009933">info@ruyidem.com</span></p>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->
<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">© 2016 Ruyidem, </a> Tüm Hakları Saklıdır.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="<?php echo SITE_URL; ?>">Anasayfa</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/Home/About">Hakkımızda</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/Home/Contact">İletişim</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->
</body>

<!--sayfa yenilendiğin de menüler için akiflik verme scripti-->
<script>
    $(document).ready(function () {
        $('#kategori').find('.active').removeClass('active');
        $("ul#kategori > li:eq(" + index + ")").addClass("active");
    });

</script>
</html>