<!-- Footer -->
  <footer id="footer" class="footer layer-overlay overlay-dark-9 parallax border-top-theme-colored2-5px" data-bg-img="images/bg/bg1.jpg">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-md-3">
          <div class="widget dark">
            <img alt="" src="{{('public/images/logo.png')}}" style="width:50px;">
            <p class="font-12 mt-20 mb-20">PT Perkebunan Nusantara IV adalah bekas Badan Usaha Milik Negara Indonesia yang bergerak di bidang perkebunan kelapa sawit dan teh. BUMN ini berkantor pusat di Medan, Sumatra Utara dan resmi berdiri pada tahun 1996 sebagai peleburan beberapa perusahaan lain</p>
            <a class="btn btn-default btn-sm btn-transparent mt-0" href="#">Selengkapnya</a>
            <p class="mt-20">Jl. Letjend Suprapto No.2 Medan–Sumatera Utara-Indonesia</p>
            <ul class="list-inline">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-gray mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-gray mr-5"></i> <a class="text-gray" href="#">contact@ptpn4.com</a> </li>
            </ul>            
            <ul class="styled-icons icon-sm icon-dark icon-theme-colored2 icon-circled clearfix mt-10">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-vk"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="row">
            <div class="col-sm-6 col-md-4">
            <div class="widget dark">
                <h4 class="widget-title">Buletin</h4>
                <div class="widget-subscribe">
                  <h5 class="subscribe-title text-gray">To get latest news and update keep connected with us by mailing</h5>
                  <p class="subscribe-sub-title">Subscribe to Connect with us</p>
                  <form id="mailchimp-subscription-form2" class="newsletter-form mt-20  form-transparent" novalidate>
                    <div class="input-group">
                      <input value="" name="EMAIL" placeholder="Email Anda" class="form-control" data-height="45px" id="mce-EMAIL" style="height: 45px;" type="email">
                      <span class="input-group-btn">
                        <button data-height="45px" class="btn btn-colored btn-theme-colored2 text-white m-0" type="submit"><i class="fa fa-paper-plane-o font-20"></i></button>
                      </span>
                    </div>
                  </form>
                  <!-- Mailchimp Subscription Form Validation-->
                  <script type="text/javascript">
                    $('#mailchimp-subscription-form2').ajaxChimp({
                        callback: mailChimpCallBack,
                        url: ''
                    });

                    function mailChimpCallBack(resp) {
                        // Hide any previous response text
                        var $mailchimpform = $('#mailchimp-subscription-form2'),
                            $response = '';
                        $mailchimpform.children(".alert").remove();
                        if (resp.result === 'success') {
                            $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                        } else if (resp.result === 'error') {
                            $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                        }
                        $mailchimpform.prepend($response);
                    }
                  </script>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="widget dark">
                <h4 class="widget-title">Berita</h4>
                <div class="latest-posts">
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0 mb-5"><a href="#">Berita 1</a></h5>
                      <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0 mb-5"><a href="#">Berita 2</a></h5>
                      <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                    </div>
                  </article>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0 mb-5"><a href="#">Berita 3</a></h5>
                      <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="widget dark">
                <h4 class="widget-title">Jam Kerja</h4>
                <div class="opening-hours">
                  <ul class="list-border">
                    <li class="clearfix"> <span> Senin - Selasa :  </span>
                      <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Rabu - Kamis :</span>
                      <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Jumat : </span>
                      <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                    </li>
                    <li class="clearfix"> <span> Sabtu : </span>
                      <div class="value pull-right bg-theme-colored2 text-white closed"> Tutup </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#253039">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-12 sm-text-center text-black-777 m-0">WebGIS Plantation PTPN 4</a>. All rights reserved.</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>