function disable(id){
	var x = document.getElementById(id).disabled = true;
	setTimeout(()=>{ 
	  document.getElementById(id).removeAttribute('disabled');
	}, 2000);
}