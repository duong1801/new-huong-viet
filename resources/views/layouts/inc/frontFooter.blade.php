  <!-- Start branch -->
  <div class="branch">
      <div class="container">
          <div class="owl-carousel owl-theme branch-slider">
              <div class="item">
                  <img src="https://htmldemo.net/angara/angara/img/brand/3.png" alt="" />
              </div>
              <div class="item">
                  <img src="https://htmldemo.net/angara/angara/img/brand/3.png" alt="" />
              </div>
              <div class="item">
                  <img src="https://htmldemo.net/angara/angara/img/brand/3.png" alt="" />
              </div>
              <div class="item">
                  <img src="https://htmldemo.net/angara/angara/img/brand/3.png" alt="" />
              </div>
              <div class="item">
                  <img src="https://htmldemo.net/angara/angara/img/brand/3.png" alt="" />
              </div>
          </div>
      </div>
  </div>
  <!-- end branch -->

  <!-- Start news letter -->
  <div class="newsletter">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-12">
                  <div class="newsletter__text">
                      <h2>ĐĂNG KÝ NHẬN BẢN TIN</h2>
                      <p>
                          Hãy là người đầu tiên biết. Đăng ký nhận bản tin ngay hôm nay
                      </p>
                  </div>
              </div>
              <div class="col-lg-6 col-12">
                  <form action="">
                      <input type="email" name="email" placeholder="Nhập địa chỉ email của bạn" />
                      <button type="submit">Đăng ký</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- End news letter -->

  <!-- Start contact list -->
  <div class="contact-list">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                  <div class="contact-item">
                      <i class="fa-solid fa-mobile"></i>
                      <div class="contact-item__text">
                          <p>{{ $settings->where('key', 'phone_number')->first()->value }}</p>
                          <p>Số điện thoại hỗ trợ !</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                  <div class="contact-item">
                      <i class="fa-solid fa-envelope"></i>
                      <div class="contact-item__text">
                          <p>{{ $settings->where('key', 'email')->first()->value }}</p>
                          <p>Hỗ trợ đơn hàng!</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                  <div class="contact-item">
                      <i class="fa-solid fa-clock"></i>
                      <div class="contact-item__text">
                          <p>Mon - Fri / 8:00 - 18:00</p>
                          <p>Ngày/Giờ làm việc!</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End contact list -->
  <a id="btn-go-to-top" title="Go to top">
      <i class="fa fa-angle-up"></i>
  </a>
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                  <div class="footer__item">
                      <a href="#" class="footer__logo">
                          <img src="https://htmldemo.net/angara/angara/img/logo/footer.png" alt="" />
                      </a>
                      <div class="footer__info">
                          <p>
                              {{ $settings->where('key', 'footer_info')->first()->value }}
                          </p>
                          <span>Thông tin liên lạc</span>
                          <p>169-C, Technohub, Ốc đảo Dubai Silicon.</p>
                      </div>
                      <ul class="footer__social">
                          <li>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                          </li>
                          <li>
                              <a href="#"><i class="fa-brands fa-youtube"></i></a>
                          </li>
                          <li>
                              <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                          </li>
                          <li>
                              <a href="#"><i class="fa-brands fa-facebook"></i></a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer__item">
                      <h3>DỊCH VỤ</h3>
                      <ul>
                          <li>
                              <a href="{{ route('my-order') }}"><i class="fa-solid fa-angle-right"></i>Lịch sử
                                  đặt hàng</a>
                          </li>
                          <li>
                              <a href="#"><i class="fa-solid fa-angle-right"></i>Contact Us</a>
                          </li>
                          <li>
                              <a href="{{ route('my-order') }}"><i class="fa-solid fa-angle-right"></i>Tracking Your
                                  Order</a>
                          </li>

                      </ul>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer__item">
                      <h3>THÔNG TIN</h3>
                      <ul>

                      </ul>
                  </div>
              </div>
              <div class="col-lg-2 col-md-6 col-12">
                  <div class="footer__item">
                      <h3>BỔ SUNG</h3>
                      <ul>

                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>
