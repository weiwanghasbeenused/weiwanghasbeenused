function prependZero(int) {
	return int < 10 ? int = '0' + int : int;
}
function daysInCurrentMonth () {
	let now = new Date();
    return new Date(now.getFullYear(), now.getMonth(), 0).getDate();
}

var timer_metadata = {
	'second': {
		'min': 0,
		'max': 59
	},
	'minute': {
		'min': 0,
		'max': 59
	},
	'hour': {
		'min': 0,
		'max': 23
	},
	'day': {
		'min': 1,
		'max': daysInCurrentMonth()
	},
	'month': {
		'min': 1,
		'max': 12
	},
	'year': {
		'min': false,
		'max': false
	}
}

var timer_terms = ['second', 'minute', 'hour', 'day', 'month', 'year'];
var timer_selectors = {};

var timer = {
	init: function(time_container, date_container){
		timer_selectors['second'] = time_container.querySelector('#second');
		timer_selectors['minute'] = time_container.querySelector('#minute');
		timer_selectors['hour'] = time_container.querySelector('#hour');
		timer_selectors['day'] = date_container.querySelector('#day');
		timer_selectors['month'] = date_container.querySelector('#month');
		timer_selectors['year'] = date_container.querySelector('#year');

		if( !timer_selectors['second'] || 
		    !timer_selectors['minute'] || 
		    !timer_selectors['hour'] || 
		    !timer_selectors['day'] || 
		    !timer_selectors['month'] || 
		    !timer_selectors['year'])
			console.log('missing time/date container . . .');
		else
		{
			let now = new Date();
			if(now % 1000 !== 0)
			{
				console.log(timer_selectors);
				let waiting = now % 1000;
				console.log('waiting for ' + waiting + 'ms . . .');
				setTimeout(function(){
					timer.tick();
				}, waiting);
			}
			else timer.tick();
		}
		
	},
	tick: function(){
		setInterval(function(){
			console.log('tick . . .');

			for(i = 0; i < timer_terms.length; i++)
			{
				console.log('ticking '+ timer_terms[i]);
				let temp = parseInt(timer_selectors[timer_terms[i]].innerText);
				if( temp < timer_metadata[timer_terms[i]].max || i == timer_terms.length - 1 ){
					timer_selectors[timer_terms[i]].innerText = prependZero( timer_selectors[timer_terms[i]].innerText = temp + 1 );
					break;
				}
				else timer_selectors[timer_terms[i]].innerText = prependZero( timer_metadata[timer_terms[i]].min );
			}
			// let s = parseInt(sSecond.innerText);
			// if(s < 59){
			// 	sSecond.innerText = prependZero( sSecond.innerText = s + 1 );
			// }
			// else
			// {
			// 	sSecond.innerText = '00';
			// 	let m = parseInt(sMinute.innerText);
			// 	if(m < 59){
			// 		sMinute.innerText = prependZero( sMinute.innerText = m + 1 );
			// 	}
			// 	else
			// 	{
			// 		sMinute.innerText = '00';
			// 		let h = parseInt(sHour.innerText);
			// 		if(h < 23){
			// 			sHour.innerText = prependZero( sHour.innerText = h + 1 );
			// 		}
			// 		else
			// 		{
			// 			sHour.innerText = '00';
			// 			let h = parseInt(sHour.innerText);
			// 		}
			// 	}
			// }
		}, 1000);
	}
};