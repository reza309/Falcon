// JavaScript Document
$(document).ready(function(){
   $(".preview-btn").hover(function(){
       $(this).css({
           'background-color':'#0C09294D'
       });
       $(this).children('.preview-text').css({
           left:'41%'
       });
       let height = $(this).prev(".grid-inner").height();
       height = height-400;
       $(this).prev(".grid-inner").animate({
           'top':-height+"px",
       },3000);
       
   },function(){
       $(this).prev(".grid-inner").animate({
           'top':'0'
       },3000);
       $(this).css({
           'background-color':'transparent'
       });
       $(this).children('.preview-text').css({
           left:'-100px'
       });
   });
    
});