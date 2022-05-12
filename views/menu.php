<header id="main-header" class="float-container">
	<div id="site-title-wrapper"><h1 id="site-title" class="large squeezed outlineLetters">小擠集</h1></div>
</header>
<div id="date-wrapper"><p id="date" class="large squeezed outlineLetters"><span id="year"><?= $now_year; ?></span><span class="date-divider outlineText-black-thick">&wreath;</span><span id="month"><?=  $now_month; ?></span><span class="date-divider outlineText-black-thick">&wreath;</span><span id="day"><?=  $now_day; ?><span></p></div>
<div id="time-wrapper"><p id="time" class="large squeezed outlineLetters"><span id="hour"><?= $now_hour; ?></span><span class="date-divider outlineText-black-thick">:</span><span id="minute"><?= $now_minute; ?></span><span class="date-divider outlineText-black-thick">:</span><span id="second"><?= $now_second; ?></span></p></div>
<style>
	#main-header
	{
		position: fixed;
		width: 100vw;
		max-width: 100%;
		left: 0;
		top: 0;
		padding: 0px;
		text-align: center;
	}
	#site-title-wrapper
	{
		position: absolute;
		/*left: 50%;*/
		/*left: 10px;*/
		/*transform: translate(-50%, 0);*/
		/*overflow: hidden;*/
		/*height: 70px;*/
		/*border: 2px solid;*/
		/*background-color: #0055ff;*/
		/*background-color: #000;*/
		top: 5px;

	}
	#site-title
	{
		position: relative;
		left: -15px;
		/*color: #fff;*/
		line-height: 0.5em;
		padding-top: 10px;
	}
	#date-wrapper
	{
		position: absolute;
		left: 10px;
		top: 72px;
		/*height: 60px;*/
	}
	#time-wrapper
	{
		position: absolute;
		left: 10px;
		top: 104px;
	}
	#date,
	#time
	{
		position: relative;
		left: -15px;
		color: #000;
		font-size: 82px;
	}
	.date-divider
	{
		padding: 0 20px 0 20px;
		position: relative;
		top: -8px;
		color: #fff;
	}
	.border-wrapper
	{
		/*border: 2px solid;*/
		/*overflow: hidden;*/
	}

</style>
<script>
	// var sOutlineLetters = document.getElementsByClassName('outlineLetters');
	var sOutlineLetters = document.querySelectorAll('.outlineLetters');
	// [].forEach.call(sOutlineLetters, function(el, i){
	// 	var tempObject = document.createElement('DIV');
	// 	[].forEach.call(el.childNodes, function(child, j){
	// 		console.log(child.nodeType);
	// 		if(child.nodeType === 3)
	// 		{
	// 			let tempTextArr = child.nodeValue.split('');
	// 			console.log();
	// 			[].forEach.call(tempTextArr, function(letter, k){
	// 				var tempSpan = document.createElement('SPAN');
	// 				tempSpan.className = 'outlineText-white-thick';
	// 				tempSpan.innerText = letter;
	// 				try{ tempObject.appendChild(tempSpan); }
	// 				catch(err){console.log(err); };
	// 			});

	// 		}
	// 		else if(child.nodeType === 1){
	// 			// console.log(child);
	// 			var tempChild = child.cloneNode(true);
	// 			try{
	// 				tempObject.appendChild(tempChild);
	// 				console.log(tempObject);
	// 			}
	// 			catch(err){console.log(err); };
	// 		}
	// 		// tempObject.appendChild(child.cloneNode);
	// 		// console.log(tempObject);
	// 	});
	// 	el.innerHTML = tempObject.innerHTML;
	// });
	var sHour, sMinute, sSecond;
	var sDate = document.getElementById('date');
	var sTime = document.getElementById('time');
	timer.init(sTime, sDate);
	// var nowDate = new Date();
	// var nowTimestamp = nowDate.getTime();
	// if(nowTimestamp % 1000 !== 0)
	// {
	// 	setTimeout(function(){}, nowTimestamp % 1000);
	// }
</script>