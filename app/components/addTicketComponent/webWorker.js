self.addEventListener('message', function(e) {
    var data = e.data;
    console.log('data',data);
    switch (data.cmd) {
      case 'fetch':
          $result = fetchArray(data.masterDataApiArray,data.masterDataApiLocalStoreNameArray);
        break;
      
    };
  });
function fetchArray(masterDataApiArray,masterDataApiLocalStoreNameArray){
    for(let j=0;j<masterDataApiArray.length;j++){
        getMasterDataJson(masterDataApiArray[j],masterDataApiLocalStoreNameArray[j]); 
        if(j== masterDataApiArray.length - 1){
            console.log('All Requests are completed')
            
       }
    }
   
  }


function getMasterDataJson(url,localStorageName) {
    return fetch(url)
        .then(fetchResponse => {
            console.log("formData", fetchResponse);

            if (!fetchResponse.ok) {
                console.error('Check Respone');
            }

            return fetchResponse;
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