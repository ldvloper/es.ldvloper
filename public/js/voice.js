let rec;
    if (!("webkitSpeechRecognition" in window)) {
    	alert("Voice dictation is not available in your device");
    } else {
    	rec = new webkitSpeechRecognition();
    	rec.lang = "en-US";
    	rec.continuous = true;
    	rec.interim = true;
    	rec.addEventListener("result",iniciar);
	}

function iniciar(event){
	for (let i = event.resultIndex; i < event.results.length; i++){
         document.getElementById('message').innerHTML = event.results[i][0].transcript;
	}
}



