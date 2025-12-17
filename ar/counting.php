<section class="counting" style="direction: rtl;">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="bx border-eff">
          <div class="wi"><img src="images/counting-1.png"></div>
          <div id="counter">
            <h3>
              <div class="counter-value" data-count="200">0</div>+
            </h3>
          </div>
          <h5> العملاء </h5>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="bx border-eff">
          <div class="wi"><img src="images/counting-2.png"></div>
          <h3>
            <div class="counter-value" data-count="200">0</div>+
          </h3>
          <h5> الموظفين </h5>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="bx border-eff">
          <div class="wi"><img src="images/counting-3.png"></div>
          <h3>
            <div class="counter-value" data-count="8">0</div>M+
          </h3>
          <h5> ساعات العمل الآمنة </h5>
        </div>
      </div>
    </div>

  </div>
</section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
  $(window).scroll(function() {
    var a = 0;
    var oTop = $('#counter').offset().top - window.innerHeight;
    console.log($('#counter').offset().top);
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('.counter-value').each(function() {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
            countNum: countTo
          },

          {

            duration: 2000,
            easing: 'swing',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
              //alert('finished');
            }

          });
      });
      a = 1;
    }

  });
</script>