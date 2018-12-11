function expirationDate(year,month,day,a){
	var now = new Date(),
		id = a.id;
		expDate = new Date(year, month-1, day),
		days = Math.round((expDate-now)/1000/60/60/24);
	if(days==1){
		singplur=" DAY";
	}else{
		singplur=" DAYS";
	}

	if(days>=6){
		ss_jQuery('#'+id+'-bg').css('background-color','#18a218');
		ss_jQuery('.'+id+' div.conf-left img').attr('src','/media/current-promos/new-confetti-left.png');
		ss_jQuery('.'+id+' div.conf-right img').attr('src','/media/current-promos/confetti-right.png');
		ss_jQuery('#'+id).text(days+singplur+" LEFT");
	}else{
		if(days<=5&&days>=3){
			ss_jQuery('#'+id+'-bg').css('background-color','#01b3e6');
			/*ss_jQuery('.'+id+' div.conf-left img').attr('src','/media/current-promos/confetti-left.png');
			ss_jQuery('.'+id+' div.conf-right img').attr('src','/media/current-promos/confetti-right.png');*/
			ss_jQuery('#'+id).text(days+singplur+" LEFT");
		}else{
			if(days<3&&days>0){
				ss_jQuery('#'+id+'-bg').css('background-color','#ef8f07');
				ss_jQuery('.'+id+' div.conf-left img').attr('src','/media/current-promos/ending-left.png');
				/*ss_jQuery('.'+id+' div.conf-right img').attr('src','/media/current-promos/ending-confetti-right.png');*/
				ss_jQuery('#'+id).text("ONLY "+days+singplur+" LEFT!  :O");
			}else{
				if(days<0){
					ss_jQuery('#'+id+'-bg').css('background-color','#ca0000');
					ss_jQuery('.'+id+' div.conf-left img').attr('src','/media/current-promos/expired-left.png');
					/*ss_jQuery('.'+id+' div.conf-right img').attr('src','/media/current-promos/expired-right.png');*/
					ss_jQuery('#'+id).text("SORRY YOU MISSED IT, THIS ONE HAS EXPIRED  :(");
				}
			}
		}
	}
}