/**********Introduction**********/
/*Declaring Field Array*/
var fieldArrayId = ['#subject', '#comment', '#name', '#email', '#mobileNumber'];
var errorFieldArrayId = ['.hdSubject', '.hdDescription', '.hdName', '.hdEmailId', '.hdMobileNumber'];
var masterDataApiArray = ['phpDataHandling/formResponse.php?function=getDeparmentData', 'phpDataHandling/formResponse.php?function=getCategoryData', 'phpDataHandling/formResponse.php?function=getPriorityData'];
var masterDataApiLocalStoreNameArray = ['department_master', 'category_master', 'priority_master'];
/*script inside the $document ready function will execute when js document load because js is difered for optimization purpose*/
$(document).ready(function () {
    /* get login user data and populate in add ticket form uder contact details panel*/
    var userData = JSON.parse(localStorage.getItem('userDetails'));
    $.each(userData, function (key, value) {
        $('#email').val(value.email_id);
        $('#name').val(value.contact_name);
        $('#mobileNumber').val(value.mobile_number);
    });
    /* called the fetch function to fetch the services for load the dropdownd value*/
    for (let j = 0; j < masterDataApiArray.length; j++) {
        getMasterDataJson(masterDataApiArray[j], masterDataApiLocalStoreNameArray[j]);
    }
    /* Assigning the stored data from services to dropdown value to render in add ticket form*/
    var deparmentData = JSON.parse(localStorage.getItem('department_master'));
    var priorityData = JSON.parse(localStorage.getItem('priority_master'));
    var categoryData = JSON.parse(localStorage.getItem('category_master'));
    /*department dropdown option value rendering in UI */
    $.each(deparmentData, function (key, value) {
        var $option = $("<option/>", {
            value: value.id,
            text: value.department_name
        });
        $('#department').append($option);
    });
    /*priority dropdown option value rendering in UI */
    $.each(priorityData, function (key, value) {
        var $option = $("<option/>", {
            value: value.id,
            text: value.priority
        });
        $('#priority').append($option);
    });
    /*category dropdown option value rendering in UI */
    $.each(categoryData, function (key, value) {
        var $option = $("<option/>", {
            value: value.id,
            text: value.category_name
        });
        $('#category').append($option);
    });

})
/*form validation on submit */
function addTicketValidation() {
    if (mandatoryValidation() == true) {
        return true;
    } else {
        return false;
    }
}
/* Dynamic Mandatory validation for field name is given in array*/
function mandatoryValidation() {
    for (let i = 0; i < fieldArrayId.length; i++) {
        if ($(fieldArrayId[i]).val() == '') {
            $(fieldArrayId[i]).attr('style', 'border-color: red!important;color: red!important')
            $(errorFieldArrayId[i]).attr('style', 'display:block')
            setTimeout(function () { $(errorFieldArrayId[i]).attr('style', 'display:none') }, 3000);
            $(fieldArrayId[i]).focus();
            return false;
        }
        else if (i == fieldArrayId.length - 1) {
            return false;
        }
    }


}
/*fetch function to fetch the services for load the dropdownd value*/
function getMasterDataJson(url, localStorageName) {
    fetch(url)
        .then(fetchResponse => {
            if (!fetchResponse.ok) {
                console.error('Check Respone');
            }
            return fetchResponse;
            console.log("formData", formData);
        })
        .then(validResponse => {
            return validResponse.json();
        })
        .then(jsonResponse => {
            console.log('Response', jsonResponse);
            localStorage.setItem(localStorageName, JSON.stringify(jsonResponse))
        })
        .catch(jsonResponse => {
            console.error('some thing went wrong!!')
        })
}
                                   /*******End Off*******/