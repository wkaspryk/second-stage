 <?php include 'header.php'; ?>
              <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Client Log In</h4>
      </div>
      <div class="modal-body">
        <lable>Enter Password:</label><br>
          <input type="password"></input>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Go</button>
      </div>
    </div>
  </div>
</div>

            </header>
          </div>
          </div>


  <div class="full">

          <div class="custom-container container">
            <h2 class="title">Images</h2>
            <br>
            <!-- The container for the list of example images -->
            <div id="links">
              <p>Here are some examples of our past events</p>
              <a href="img/Capital-Ideas.jpg" title="" data-gallery=""><img src="img/thumbnails/capitalideas1.jpg"></a>
              <a href="img/Capital-Ideas2.jpg" title="" data-gallery=""><img src="img/thumbnails/capitalideas2.jpg"></a>
              <a href="img/Capital-Ideas3.jpg" title="" data-gallery=""><img src="img/thumbnails/capitalideas3.jpg"></a>
              <a href="img/City-of-Surrey.jpg" title="" data-gallery=""><img src="img/thumbnails/cityofsurrey.jpg"></a>
              <a href="img/DFSV.jpg" title="" data-gallery=""><img src="img/thumbnails/dfsv.jpg"></a>
              <a href="img/DVBIA.jpg" title="" data-gallery=""><img src="img/thumbnails/dvbia.jpg"></a>
              <a href="img/One-World.jpg" title="" data-gallery=""><img src="img/thumbnails/oneworld.jpg"></a>
              <a href="img/Outsider-Code.jpg" title="" data-gallery=""><img src="img/thumbnails/outsidercode.jpg"></a>
              <a href="img/Owners-Retreat.jpg" title="" data-gallery=""><img src="img/thumbnails/ownersretreat.jpg"></a>
              <a href="img/Vision.jpg" title="" data-gallery=""><img src="img/thumbnails/vision.jpg"></a>
              <a href="img/VWF.jpg" title="" data-gallery=""><img src="img/thumbnails/vwf.jpg"></a>

            </div>
            <br>
              <img class="line-horizontal" src="img/line-horizontal.png">

          </div>
          <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
          <div id="blueimp-gallery" class="blueimp-gallery">
            <!-- The container for the modal slides -->
            <div class="slides"></div>
            <!-- Controls for the borderless lightbox -->
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
            <!-- The modal dialog, which will be used to wrap the lightbox content -->
            <div class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body next"></div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                      <i class="glyphicon glyphicon-chevron-left"></i>
                      Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                      Next
                      <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <?php include 'footer.php'; ?>

