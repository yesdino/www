$(function(){

$("#sbm").click(function(){
  if( $("input[name='name']").val() =="" ){
    $("input[name='name']").next("a").text("不能为空");
    return false;
  }else{
    $("input[name='name']").next("a").text("*");
  }

if( $("input[name='sex']").val() =="" ){
    $("input[name='sex']").next("a").text("不能为空");
    return false;
  }else{
    $("input[name='sex']").next("a").text("*");
  }

  if( $("input[name='phone']").val() =="" ){
    $("input[name='phone']").next("a").text("不能为空");
    return false;
  }else{
    $("input[name='phone']").next("a").text("*");
  }

  if( $("input[name='address']").val() =="" ){
    $("input[name='address']").next("a").text("不能为空");
    return false;
  }else{
    $("input[name='address']").next("a").text("*");
  }

  if( $("input[name='dorm']").val() =="" ){
    $("input[name='dorm']").next("a").text("不能为空");
    return false;
  }else{
    $("input[name='dorm']").next("a").text("*");
  }

  if( $("input[name='academy']").val() =="" ){
    $("input[name='academy']").next("a").text("不能为空");
    return false;
  }else{
    $("input[name='academy']").next("a").text("*");
  }

  if( $("input[name='major']").val() =="" ){
    $("input[name='major']").next("a").text("不能为空");
    return false;
  }else{
    $("input[name='major']").next("a").text("*");
  }

  if( $("input[name='other_job']").val() =="" ){
    $("input[name='other_job']").next("a").text("不能为空");
    return false;
  }else{
    $("input[name='other_job']").next("a").text("*");
  }

  if( $("input[name='if_remain']").val() =="" ){
    $("input[name='if_remain']").next("a").text("不能为空");
    return false;
  }else{
    $("input[name='if_remain']").next("a").text("*");
  }

  if( $("input[name='job']").val() =="" ){
    $("input[name='job']").next("a").text("不能为空");
    return false;
  }else{
    $("input[name='job']").next("a").text("*");
  }

  if( $("input[name='if_lead']").val() =="" ){
    $("input[name='if_lead']").next("a").text("不能为空");
    return false;
  }else{
    $("input[name='if_lead']").next("a").text("*");
  }

  $("form").submit();
  
})

})
  
