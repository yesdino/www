function check(form)
{
  if(form.txt_title.value == "")
  {
    alert("请输入标题！"); 
    form.txt_title.focus();
    return false; 
  }
  if(form.txt_content.value == "")
  {
    alert("请输入内容");
    form.txt_content.focus();  //先聚焦 再返回false值
    return false;
  }
  form.submit();
}