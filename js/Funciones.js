//Funci�n para impedir que el usuario de click derecho en la p�gina para Internet Explorer
function clickIE4()
	{
		if (event.button==2) return false;
	}

//Funci�n para impedir que el usuario de click derecho en la p�gina para NetScape
function clickNS4(e)
	{
		if (document.layers||document.getElementById&&!document.all)
			if (e.which==2||e.which==3) return false;
	}

if (document.layers)
	{
		document.captureEvents(Event.MOUSEDOWN);
		document.onmousedown=clickNS4;
	}
else if (document.all&&!document.getElementById)
	{
		document.onmousedown=clickIE4;
	}
document.oncontextmenu=new Function("return false");

//Funci�n que solo permite ingresar letras, es decir, no permite la entrada de numeros
function Solo_Letras()
	{ 
		var key=window.event.keyCode;
		if ((key > 0 && key < 32) || (key > 32 && key < 45) || (key > 46 && key < 65) || (key > 90 && key < 95) || (key > 122 && key < 193)) window.event.keyCode=0;
	}

//Funci�n que solo permite ingresar numeros, es decir, no permite la entrada de letras
function Solo_Numeros()
	{ 
		var key=window.event.keyCode;
		if (key < 48 || key > 57) window.event.keyCode=0;
	}	

//Funci�n que quita los espacios a la izquierda
function Left_Trim(Cadena)
	{	 
		while (Cadena.charAt(0) == " ")
		Cadena = Cadena.substr(1, Cadena.length - 1);	 
		return Cadena;	
	}	

//Funci�n que quita los espacios a la derecha
function Right_Trim(Cadena)
	{	 
		while (Cadena.charAt(Cadena.length - 1) == " ")	  
		Cadena = Cadena.substr(0, Cadena.length - 1);	 
		return Cadena;	
	}	

//Funci�n que quita los espacios a la izquierda y a la derecha
function Sin_Espacios(Cadena)
	{	 
		return Right_Trim(Left_Trim(Cadena));	
	}