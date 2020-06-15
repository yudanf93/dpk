<footer class="sticky-footer">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright @ <b>Sevenpion</b> <?php echo Date('Y') ?></span>
    </div>
  </div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS --><!-- 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function() {


    $('#sidebarCollapse').on('click', function() {
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
  });
</script>
<!-- dataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
    $('#example1').DataTable();
    $('.example').DataTable();
  } );
</script>
<!-- ckeditor -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
   
            CKEDITOR.replace('editor',
            {
              toolbar : 'MyToolbar',
              width:"100%",
              filebrowserBrowseUrl : '<?php echo base_url();?>assets/ckfinder/ckfinder.html',
              filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/ckfinder/ckfinder.html?type=Images',
              filebrowserFlashBrowseUrl : '<?php echo base_url();?>assets/ckfinder/ckfinder.html?type=Flash',
            }); 
            CKEDITOR.replace('editor1',
            {
              toolbar : 'MyToolbar',
              width:"100%",
              filebrowserBrowseUrl : '<?php echo base_url();?>assets/ckfinder/ckfinder.html',
              filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/ckfinder/ckfinder.html?type=Images',
              filebrowserFlashBrowseUrl : '<?php echo base_url();?>assets/ckfinder/ckfinder.html?type=Flash',
            });
            
            //]]>
          </script>

          <script type="text/javascript">
  $(document).ready(function () {
  
  });
</script>

        </body>
        </html>