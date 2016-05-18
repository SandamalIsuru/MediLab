$(document).ready(function() {
    $("#T1,#T2,#T3,#T4").hide();
   
    
     
  
    
    $("#A1").mouseenter(function(){
         $("#T2,#T3,#T4,.spiralContainer").hide();
        $("#T1").fadeIn(1000);
        
    });
    
    $("#A1").mouseleave(function(){
       $(".spiralContainer").delay(10000).fadeIn(1000);
        $("#T1").fadeOut();
        
    });
    $("#A2").mouseenter(function(){
        $("#T1,#T3,#T4,.spiralContainer").hide();
        $("#T2").fadeIn(1000);
        
    });
    
    $("#A2").mouseleave(function(){
         $(".spiralContainer").delay(10000).fadeIn(1000);
        $("#T2").fadeOut();
        
    });
    
     $("#A3").mouseenter(function(){
        $("#T1,#T2,#T4,.spiralContainer").hide();
        $("#T3").fadeIn(1000);
        
    });
    
    $("#A3").mouseleave(function(){
         $(".spiralContainer").delay(10000).fadeIn(1000);
        $("#T3").fadeOut();
        
    });
    
     $("#A4").mouseenter(function(){
        $("#T1,#T2,#T3,.spiralContainer").hide();
        $("#T4").fadeIn(1000);
        
    });
    
    $("#A4").mouseleave(function(){
        $(".spiralContainer").delay(10000).fadeIn(1000);
        $("#T4").fadeOut();
        
    });
    
    $("#A1,#A2,#A3,#A4").mouseleave(function() {
         $(".spiralContainer").delay(10000).fadeIn(1000);
        
    });
    
    });