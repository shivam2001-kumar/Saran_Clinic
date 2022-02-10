<!-- partial:partials/_footer.html -->
<footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Saran Clinic <?php echo date('Y'); ?></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Developed By : <a href="http://www.softproindia.in/" target="_blank">Softpro India Computer Technologies (P) Ltd.</a></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @include('superadmin.includes.foot')
  
  <script src="{{url('disc/select2.min.js')}}" ></script>
  <script>
     
    $('.js-example-basic-single').select2();


    </script>
</body>

</html>