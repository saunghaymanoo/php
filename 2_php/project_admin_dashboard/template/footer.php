
<script src="<?php echo $url; ?>/assets/vendor/jquery.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

</div><!--content-->
          
          </div><!--row fluid-->
      </section><!--container fluid-->
      
      <script src="<?php echo $url; ?>/assets/vendor/jquery.min.js"></script>
      <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
      <script src="https://unpkg.com/@popperjs/core@2"></script>
      <script src="<?php echo $url; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      
      <script src="<?php echo $url; ?>/assets/js/app.js"></script>
     <script>
        
        let currentPage=location.href;
        $(".menu-item-link").each(function(){
            
            let links=$(this).attr("href");
            if(currentPage==links){
                $(this).addClass('active');
            }
        })
     </script>
  </body>
  </html>