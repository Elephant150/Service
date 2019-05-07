</div>
<!-- footer -->
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="corpinfo">
          Lastname Racing (Vitaly Dmytruk) 2019.
        </div>
        <div class="copiright">
        <?php dynamic_sidebar('footer-widget'); ?>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
<!-- modal window start-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Enter your data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- !! top !! -->
          <label class="sr-only" for="inlineFormInput">Name</label>
          <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="John Pit">
          <div class="col-auto">
            <label class="sr-only" for="inlineFormInputGroup">Number phone</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">+38</div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Number phone">
            </div>
          </div>
          <!-- ii bottom ii -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Send</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- modal window end -->
<?php wp_footer(); ?>
</body>

</html>