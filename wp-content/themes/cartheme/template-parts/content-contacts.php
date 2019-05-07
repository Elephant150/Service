<article id="post-<?php the_ID();?>" class="page-article">
  <h1 class="section-title"><?php the_title();?></h1>
  <div class="page-content">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="wrap-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82835.63469883136!2d25.527628708410745!3d49.548444792956886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473036ad4b82ce75%3A0xc484a447edb154e8!2sTernopil%2C+Ternopil+Oblast%2C+46003!5e0!3m2!1sen!2sua!4v1550312652261"
            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="wrap-contacts">
          <?php the_content();?>
        </div>
        <div class="wrap-form">
          <form>
            <label class="sr-only" for="inlineFormInputGroupUsername2">Enter your neme</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-user"></i></div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
            </div>
            <label class="sr-only" for="inlineFormInputGroupUsername2">Enter your number</label>
            <div class="input-group mb-2 mr-sm-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-phone"></i>
                </div>
              </div>
              <input type="tel" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Phone number"
                maxlength="13" pattern="+380[0-9]{2}[0-9]{3}[0-9]{4}">
            </div>
            <div class="form-group">
              <!-- <label for="exampleFormControlTextarea1">Example textarea</label> -->
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Yours comments"></textarea>
              <button type="submit" class="btn btn-danger wrap-btn">Order a call</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</article>