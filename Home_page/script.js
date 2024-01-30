AOS.init();
    
    var btc = document.getElementById("bitcoin");

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd",
        "method": "GET",
        "headers": {}
    }

    $.ajax(settings).done(function (response){
        console.log("API Response:", response);
        btc.innerHTML = response.bitcoin.usd;   
    });
