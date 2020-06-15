/***Introduction***/
$(document).ready(function () {
    /*using fetch API I am  fetching the zoho desc List All Ticket API from php by curl execution service*/
    fetch('phpDataHandling/formResponse.php?function=listTicket')
        .then(fetchResponse => {
            console.log('fetchResponse', !fetchResponse.ok);
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
            localStorage.setItem('listTicket', JSON.stringify(jsonResponse))
        })
        .catch(jsonResponse => {
            console.error('some thing went wrong!!')
        })
    /* This section is responsible for keeping the tickets count update when page referesh or onload*/    
    var listTicket = [];
    listTicket = JSON.parse(localStorage.getItem('listTicket'));
    console.log(listTicket.data[0].subject)
    var divs;
    var k = 0, l = 0, m = 0;
    for (var j = 0; j < listTicket.data.length; j++) {
        if (listTicket.data[j].status == 'Open') {
            console.log('status', listTicket.data[j].status)
            k++;
        } else if (listTicket.data[j].status == 'Closed') {
            console.log('status', listTicket.data[j].status)
            l++;
        } else if (listTicket.data[j].status == 'On Hold‎') {
            console.log('status', listTicket.data[j].status)
            m++;
        }
    }
    /* This section is responsible for rendering the json data from the service to UI using cards */
    divs = "<div style='display:flex flex-direction:row'><span style='color:#555'>Status:</span><span class='col-lg-2'style='color:#512dab'>open(" + k + ")</span><span class='col-lg-2' style='color:#512dab'>Closed(" + l + ")</span><span class='col-lg-2' style='color:#512dab'>On Hold(" + m + ")</span></div>";

    for (var i = 0; i < listTicket.data.length; i++) {
        //do something to each div like
        divs += "<div class='card col-lg-10 col-md-12 col-sm-10' style='background-color:#f3f5f7'>";

        divs += "<div class='card-body'><span style='color:#512dab'>" + listTicket.data[i].subject + " --- Testing</span><span style='float:right;color:#000'>#" + listTicket.data[i].ticketNumber + "</span> </div>";
        divs += "</div>";
    }



    document.getElementById("myData").innerHTML = divs;

})