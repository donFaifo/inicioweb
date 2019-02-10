function saveJson() {
    var request = new XMLHttpRequest();
    request.open("GET", "data.json");
    request.responseType = "json";
    request.send();
    request.onreadystatechange = function () {
        if (this.status==200 && this.readyState==4) {
            var test = request.response;
            alert (test['mainLinks'][0]['link']);
        }
    }
    
}

function openJson(jsonFile) {
    var txtString ="";
    var request = new XMLHttpRequest();
    request.open("GET", jsonFile);
    request.responseType = "json";
    request.send();
    request.onreadystatechange = function () {
        if (this.status==200 && this.readyState==4) {
            var test = request.response;
            test['mainLinks'].forEach(function (item, id) {
                txtString += 
                    "Lugar: " + item['text'] + "\n" +
                    "Dirección: " + item['link'] + "\n" +
                    "Imágen: " + item['img'] + "\n\n";
            });
            document.getElementById("texto").innerHTML = txtString;
        }
    }
}