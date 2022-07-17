function  validateform()
{
    var fname= document.myforms.fname.value;
    if (fname.value == "") { 
		
        alert("Please enter your first name."); 
        fname.focus(); 
        return false; 
    } 
}