$(function(){
  $(".post_vote").click(function(){
    var post = $(this).attr('post');
    $.post("/frontend_dev.php/vote?post_id="+post,function(data){
       $("#post"+post+" #post_rating").html(data);
    });
  })
})

