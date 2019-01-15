    var hr = "00";
    var ms = "00";
    var sc = "30";
        
    var hours = hr;
    var minutes = ms;
    var sec = sc;
     
    function main(){
      startTimer('tm');Sl()
      
    }
 
    var Timer = function(element, hours, minutes, sec){
    var me = this;
    this.hours = hours;
    this.minutes = minutes;
    this.sec = sec;
    this.element = element;
    this.interval = null;
     
      
    this.reduce = function() {
        if(me.hours + me.minutes + me.sec <= 0) {
            me.stop();
            return;
        }
        me.sec-=1;
        if(me.sec<0) me.sec=59,me.minutes-=1;
        if(me.minutes<0) me.minutes=59,me.hours-=1; 
        if(me.hours<0) me.hours=23;
         
        localStorage.setItem('hours5', me.hours);
        localStorage.setItem('minutes5', me.minutes);
        localStorage.setItem('sec5', me.sec);
         
        me.sec = me.sec+"";
        me.minutes = me.minutes+"";
        me.hours = me.hours+""; 
        if (me.sec.length<2) me.sec = "0"+me.sec;
        if (me.minutes.length<2) me.minutes = "0"+me.minutes;
        if (me.hours.length<2) me.hours = "0"+me.hours;
        me.element.innerHTML=me.hours+":"+me.minutes+":"+me.sec; 
    }
      
    this.start = function(){      
        me.interval = setInterval(me.reduce, 1000);
        me.element.className="sp"
        $('#inf').css("display","none");
        $('#baner1').css("display","none");
        $('#baner2').css("display","none");
        $('#baner3').css("display","none");
        $('#baner4').css("display","none");
        $('#baner5').css("display","none");
    }
    this.stop = function(){
        clearInterval(me.interval);
        me.element.className="st"
        $('#inf').css("display","block");
        $('#baner1').css("display","block");
        $('#baner2').css("display","block");
        $('#baner3').css("display","block");
        $('#baner4').css("display","block");
        $('#baner5').css("display","block");
    }    
}

     
function startTimer(obgId) {
  /*  if(localStorage.getItem('sec5') > 0)
    {return;};*/
     
   if (localStorage.getItem('sec5') != NaN && localStorage.getItem('sec5') ==0) {
            hours = hr;
            minutes = ms;
            sec = sc; 
         
        localStorage.setItem('hours5', hr);
        localStorage.setItem('minutes5', ms);
        localStorage.setItem('sec5', sc); 
                  
        document.getElementById('tm').innerHTML = hours+":"+minutes+":"+sec; 
        };  
          
var timer = new Timer(document.getElementById(obgId), hours, minutes, sec);
    timer.start();
}  



var tt = localStorage.getItem('sec5');
  console.log(tt);
     
    if (isNaN(tt) || localStorage.getItem('sec5') ==null){
       localStorage.setItem('hours5', hours);
       localStorage.setItem('minutes5', minutes);
       localStorage.setItem('sec5', sec);
    }
           
           
        if (localStorage.getItem('sec5') !=0) {
           hours = localStorage.getItem('hours5');
           minutes = localStorage.getItem('minutes5');
           sec = localStorage.getItem('sec5'); 
             sec = sec+""
               if (sec.length<2) sec = "0"+sec;   
            main();
     }    
          document.getElementById('tm').innerHTML = hours+":"+minutes+":"+sec;


$('#baner1').click(function(){
    document.location.href='add_money.php';
});