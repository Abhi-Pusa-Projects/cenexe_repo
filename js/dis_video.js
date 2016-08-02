var app = angular.module('myApp',[]);
app.controller('myCtrl',function($scope,$http){
      // $scope.video_list=[
      //                    ["https://www.youtube.com/embed/DGsLVjk3HZA","https://www.youtube.com/embed/LtxbvgXVvHc",
      //                    "https://www.youtube.com/embed/BnDXSuQtR58","https://www.youtube.com/embed/jfzLK4iAz_E"],
      //                    ["https://www.youtube.com/embed/sesjPblwf2s","https://www.youtube.com/embed/eFRpOwFTzYY"]
      //                  ];
       $scope.video_list=[
                                ["http://img.youtube.com/vi/sesjPblwf2s/0.jpg","http://img.youtube.com/vi/eFRpOwFTzYY/0.jpg"]
                        ];
        //$scope.main_video="https://www.youtube.com/embed/DGsLVjk3HZA";
      $scope.gototop = function($event){
        // console.log("event target",$event.currentTarget.getAttribute('src'));
        // console.log($(this)[0]);
        var video_url = $event.currentTarget.getAttribute('src').split('/');
        var index= video_url.indexOf('vi');
        console.log(video_url[index+1]);
        var main_video_url= "https://www.youtube.com/embed/"+video_url[index+1]+"?autoplay=1&showinfo=0&controls=0&rel=0";
        console.log(main_video_url);
        $scope.main_video = main_video_url;
        console.log("we are here to help the situation");
        console.log("this function is being created");
        var url="./get_videos.php";//+ "?video_url=" +main_video_url;
        console.log("get_videos.php");

        $.post(url,{"video":main_video_url},function(data){
          console.log(data);
          $('.main_video').html(data);
        })
      }
});
