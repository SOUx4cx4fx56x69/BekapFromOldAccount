function https(){
if(window.location.protocol != 'https:')
  return "http://"
  return "https://"
}
$(".close").click(function() {
$('#vvoid').remove();
$active1 = false;
return true;
});
$active = false;
$active1 = false;
function createimage($nomer,$what){
 $( ".image" ).append( "<img id=g src='form.php?n="+$nomer+"&w="+$what+"'><p id=text>Ссылка на жетон:</p>" );
 $( ".image" ).append( "<input id=void style='width:25%;' class='form-control url' style='text-align:center;width:50%;display:inline-block; margin: 0 auto;' disabled value='"+https()+(new URL(window.location.href)).hostname+"/badge/"+$what+"/"+$nomer+"'>" );
$(".copythis").show('fast');
}

$( "#submit" ).click(function() {
if($("#nomer").val().match(/[0]/g)){
 if($("#nomer").val().match(/[0]/g).length >=4){
if(!$active1){ // если тупо нули
$(".modal-body").append("<div id=vvoid><p>Минимально допустимое колличество символов: 3</p><p>Сейчас их: "+$("#nomer").val().length+"</p></div>");
$("#myModal").modal('hide');
$active1 = true;
}

return false;
}
}
if($("#nomer").val().length != 3 || !$("#nomer").val()){
if(!$('#myModal').hasClass('in')){
 $active1 = false;
 $('#vvoid').remove();
}
if(!$active1){
$(".modal-body").append("<div id=vvoid><p>Минимально допустимое колличество символов: 3</p><p>Сейчас их: "+$("#nomer").val().length+"</p></div>");
$("#myModal").modal('show');
$active1 = true;
}
return false;
}
 if(!$active){
 createimage($("#nomer").val(),$('#what option:selected').val());
 $active = true;
 }
 else{
 $('#g').fadeOut(5, function(){ $(this).remove();});
 $('#void').fadeOut(5, function(){ $(this).remove();});
 $('#text').fadeOut(5, function(){ $(this).remove();});
 $('.copythis').fadeOut(5);
 $active = false;
 }
});
function CopyClipboard(){
  let t = document.createElement('textarea')
  t.id = 't'
  t.style.height = 0
  document.body.appendChild(t)
  t.value = $(".url").val()
  let selector = document.querySelector('#t')
  selector.select()
  document.execCommand('copy')
  document.body.removeChild(t)
}
