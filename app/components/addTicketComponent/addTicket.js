var fieldArrayId=['#subject','#comment','#name','#email','#mobileNumber'];
var errorFieldArrayId=['.hdSubject','.hdDescription','.hdName','.hdEmailId','.hdMobileNumber'];
var masterDataApiArray=['phpDataHandling/formResponse.php?function=getDeparmentData','phpDataHandling/formResponse.php?function=getCategoryData','phpDataHandling/formResponse.php?function=getPriorityData'];
var masterDataApiLocalStoreNameArray=['department_master','category_master','priority_master'];
$(document).ready(function () {
    var userData = JSON.parse(localStorage.getItem('userDetails'));
    $('#email').val (userData[0].email_id);
    $('#name').val(userData[0].contact_name);
    $('#mobileNumber').val(userData[0].mobile_number);
     for(let j=0;j<masterDataApiArray.length;j++){
         getMasterDataJson(masterDataApiArray[j],masterDataApiLocalStoreNameArray[j]); 
     }
     var deparmentData = JSON.parse(localStorage.getItem('department_master'));
     var priorityData = JSON.parse(localStorage.getItem('priority_master'));
     var categoryData = JSON.parse(localStorage.getItem('category_master'));
     
     $.each(deparmentData, function(key, value) {
         var $option = $("<option/>", {
             value: value.id,
             text: value.department_name
         });
         $('#department').append($option);
     }); 
     $.each(priorityData, function(key, value) {
         var $option = $("<option/>", {
             value: value.id,
             text: value.priority
         });
         $('#priority').append($option);
     }); 
     $.each(categoryData, function(key, value) {
         var $option = $("<option/>", {
             value: value.id,
             text: value.category_name
         });
         $('#category').append($option);
     }); 

})
 function validation(){
     if(mandatoryValidation()== true){
         return true;
     }else{
         return false;
     }
 }
 function mandatoryValidation() {
     for(let i=0;i<fieldArrayId.length;i++){
     

         if ($(fieldArrayId[i]).val() == '') {
         $(fieldArrayId[i]).attr('style', 'border-color: red!important;color: red!important')
         $(errorFieldArrayId[i]).attr('style', 'display:block')
         setTimeout(function () { $(errorFieldArrayId[i]).attr('style', 'display:none') }, 3000);
         $(fieldArrayId[i]).focus();
         return false;
         } 
         else if(i==fieldArrayId.length-1) {
             return true;
         }
     }
     
    
 }
 function getMasterDataJson(url,localStorageName) {
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
         .catch(jsonResponse=>{
             console.error('some thing went wrong!!')
         })
 }