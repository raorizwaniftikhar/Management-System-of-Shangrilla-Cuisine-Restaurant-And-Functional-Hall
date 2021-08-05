<!--
/*------Start-----------------*/

var numb = '0123456789';
var lwr = 'a b c d e f g h i j k l m n o p q r s t u v w x y z';
var upr = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';


function isValid(parm,val) {
if (parm == "") return true;
for (i=0; i<parm.length; i++) {
if (val.indexOf(parm.charAt(i),0) == -1) return false;
}
return true;
}

function isNumber(parm,elem) 
{
var abc = isValid(parm,numb);
	if(!abc)
	{ alert("it is not a number");
	  document.getElementById(elem).value="";
	}
}

function isAlpha(parm,elem)
{
var abc = isValid(parm,lwr+upr);
	if(!abc)
	{ alert("it is not a Alpha");
	  document.getElementById(elem).value="";
	}
}


function isAlphanum(parm,elem)
{
var abc = isValid(parm,lwr+upr+numb);
	if(!abc)
	{ alert("it is not a Alphanum");
	  document.getElementById(elem).value="";
	}
}


/*------end-----------------*/