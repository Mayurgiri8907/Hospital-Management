function validate() {
    if (document.getElementById('frmname').value.length == 0) {
        document.getElementById('frmnameerror').innerHTML = '* enter name';
        return false;
    }
    else if (document.getElementById('frmdoctorname').selectedIndex == 0) {
        document.getElementById('frmnameerror').innerHTML = '';
        document.getElementById('frmdoctorerror').innerHTML = '* please select option';
        return false;
    }
    else if (document.getElementById('frmdepartmentname').value == "") {
        document.getElementById('frmdoctorerror').innerHTML = '';
        document.getElementById('frmdepartmenterror').innerHTML = '* please select option';
        return false;
    }
    else if (document.getElementById('frmphone').value.length == 0) {
        document.getElementById('frmnameerror').innerHTML = '';
        document.getElementById('frmphoneerror').innerHTML = '* enter phone number';
        return false;
    }

    else if (document.getElementById('frmsymptoms').value.length == 0) {
        document.getElementById('frmphoneerror').innerHTML = '';
        document.getElementById('frmsymptomserror').innerHTML = '* enter symptoms';
        return false;
    }
    else if (document.getElementById('inputDate').value.length == 0) {
        document.getElementById('frmsymptomserror').innerHTML = '';
        document.getElementById('frmdateerror').innerHTML = '* select date';
        return false;
    }

}

// function checkdate() {
//     alert('enter');
//     // The date you want to check
//     const inputDate = new Date('2023-08-20');

//     // Get the current date
//     const currentDate = new Date();

//     // Compare the input date with the current date
//     if (inputDate < currentDate) {
//         console.log('The input date is in the past.');
//     } else {
//         console.log('The input date is in the future.');
//     }
// }

function nameonly(evt) {
    var keyCode = (evt.which) ? evt.which : evt.keyCode
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32) {

        return false;
    } else {

        return true;
    }

}
function phonevalidate(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if ((charCode > 31 && charCode != 43) && (charCode < 48 || charCode > 57)) {

        return false;
    } else {
        if (document.getElementById('frmphone').value.length <= 14) {
            return true;
        }
        else {
            return false;
        }
        return true;
    }
}