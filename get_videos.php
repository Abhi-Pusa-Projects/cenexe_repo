<?php
  $video_url=$_POST["video"];
  //echo $video_url;
  $video_object ="<object data='".$video_url."' frameborder='0' allowfullscreen height=620px width=100%></object>";
  echo $video_object;
  //echo "we are here in get_videos page";
  //echo "We are having fun here by seeing the video";
?>
