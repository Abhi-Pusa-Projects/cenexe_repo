<!DOCTYPE html>
<html>
  <?php include 'header.php';?>
  <link rel="stylesheet" href="./css/video_style.css" charset="utf-8">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="./js/dis_video.js" type="text/javascript"></script>
  <body>
    <?php include 'nav.php';?>
    <div ng-app="myApp" ng-controller="myCtrl" ng-init="main_video='https://www.youtube.com/embed/DGsLVjk3HZA'">
      <div class="video_wrapper">
        <div class="main_video">
          <object data="https://www.youtube.com/embed/DGsLVjk3HZA?autoplay=1&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen" height=620px width=100%></object>
          <!-- <object data={{main_video}} height=350px width=650px></object> -->
        </div>


         <div id="myCarousel" class="carousel slide"  data-interval="false"  data-ride="carousel">
           <div class="row video_lists">
             <div class="carousel-inner " role="listbox">
               <div class="item active">
                 <div class="col-sm-3">
                    <img ng-click="gototop($event)" src="http://img.youtube.com/vi/DGsLVjk3HZA/0.jpg" height=120px width=200px></img>
                 </div>
                 <div class="col-sm-3">
                   <img ng-click="gototop($event)" src="http://img.youtube.com/vi/LtxbvgXVvHc/0.jpg" height=120px width=200px></img>
                 </div>
                 <div class="col-sm-3">
                   <img ng-click="gototop($event)" src="http://img.youtube.com/vi/BnDXSuQtR58/0.jpg" height=120px width=200px></img>
                 </div>
                 <div class="col-sm-3">
                   <img ng-click="gototop($event)" src="http://img.youtube.com/vi/jfzLK4iAz_E/0.jpg" height=120px width=200px></img>
                 </div>
               </div>
               <div class="item" ng-repeat="video in video_list">
                 <div class="col-sm-3" ng-repeat="new_video in video">
                   <img ng-click="gototop($event)" src={{new_video}} height=120px width=200px></img>
                 </div>
               </div>
             </div>
           </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- <div class="row">
            <div class="col-sm-3" ng-repeat="video in video_list">
              <object data={{video}} height=100px width=300px></object>
            </div>
          </div> -->
      </div>
    </div>

  </body>
  <?php include 'footer.php';?>
</html>
