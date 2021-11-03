function validar(form1) {
  if (form1.name.value.length < 6) {
    alert('Proporcione su nombre');
    form1.name.focus();
    return (false);
  }
  var checkOK = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ abcdefghijklmnñopqrstuvwxyzáéíóú";
  var checkStr = form1.name.value;
  var allValid = true;
  var uword = hex_md5(document.getElementById('uword').value)
  for (i = 0; i < checkStr.length; i++) {
    ch = checkStr.charAt(i);
    for (j = 0; j < checkOK.length; j++)
    if (ch == checkOK.charAt(j))
	  break;
    if (j == checkOK.length) {
	  allValid = false;
      break;
    }
  }
  if (!allValid) {
    alert('El nombre no es válido');
	form1.name.value="";
    form1.name.focus();
    return (false);
  }
  if ((form1.email.value.indexOf ('@', 0) == -1)||(form1.email.value.length < 9) || form1.email.value.indexOf ('.', 0)== -1 ){
    alert('Proporcione un correo electroónico válido');
    form1.email.focus();
    return (false);
  }
  
  
  if (form1.asunto.value.length < 7) {
    alert('Proporcione asunto');
	form1.asunto.focus();
    return (false);
  }
  
  if (form1.message.value.length < 7) {
    alert('Proporcione sus comentarios');
	form1.message.focus();
    return (false);
  }
  if (uword==cword[anum-1]) {
    return (true);
  }
  else {
    alert('Proporcione el código de la imagen');
    document.getElementById('uword').focus();
    return (false);
  }
  return (true);
}