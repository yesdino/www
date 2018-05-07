window.onload = function(){
  var left_content = document.getElementById('left_content');
  var Oa = left_content.getElementsByTagName('a');
  var All_right = document.getElementById('All_right');
  var sec = All_right.getElementsByTagName('section');
  for(var i=0; i<Oa.length; i++){
     Oa[i].index = i;
     Oa[i].onclick = function(){
      for(var i=0; i<Oa.length; i++){
        Oa[i].className='';
        sec[i].style.display='none';
      }
      this.className='ick';
      sec[this.index].style.display='block';
     }
  }
}