function validate(){
    if(document.getElementById('frmname').value.length == 0){
        document.getElementById('frmnameerror').innerHTML = '* enter name';
        return false;
    }
    else if(document.getElementById('frmdoctorname').value == "") {
        document.getElementById('frmdoctorerror').innerHTML = '* please select option';
        return false;
    }
    else if(document.getElementById('frmdepartmentname').value == "") {
        document.getElementById('frmdoctorerror').innerHTML = '';
        document.getElementById('frmdepartmenterror').innerHTML = '* please select option';
        return false;
    }
    else if(document.getElementById('frmphone').value.length == 0){
        document.getElementById('frmnameerror').innerHTML = '';
        document.getElementById('frmphoneerror').innerHTML = '* enter phone number';
        return false;
    }
    
    else if(document.getElementById('frmemail').value.length == 0){
        document.getElementById('frmphoneerror').innerHTML = '';
        document.getElementById('frmemailerror').innerHTML = '* enter email';
        return false;
    }
    else if(document.getElementById('frmcomment').value.length == 0){
        document.getElementById('frmemailerror').innerHTML = '';
        document.getElementById('frmcommenterror').innerHTML = '* enter comment';
        return false;
    }
    
}
		   
function nameonly(evt)
{
    var keyCode = (evt.which) ? evt.which : evt.keyCode
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32){

        return false;
    }else{

        return true;
    }
     
}
function phonevalidate(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if ((charCode > 31 && charCode != 43) && (charCode < 48 || charCode > 57) ){

        return false;
    }else{
        if(document.getElementById('frmphone').value.length <= 14){
            return true;
        }
        else{
            return false;
        }
        return true; 
    }
}