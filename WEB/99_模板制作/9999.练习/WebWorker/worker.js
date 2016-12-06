function timeCount(){
	for (var i = 0, sum = 0; i < 100; i++) {
		for (var j = 0; j < 100000000; j++) {
			sum = sum+j;
		}
	}
	postMessage(sum);
}

postMessage( "1.."+new Date());
timeCount();
postMessage( "2.."+new Date());



