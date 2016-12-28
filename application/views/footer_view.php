
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script type="text/javascript">
    $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
    </script>
    <script type="text/javascript">
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
$(document).ready(function() {
    $('#empList').DataTable();
} );
</script>
    <script type="text/javascript">
      $('.datepicker').datepicker({
        daysOfWeekDisabled: "5",
        endDate: '+0d',
        autoclose: true,
        todayHighlight: true
    });
      </script>
</body>
</html>