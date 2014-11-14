"use strict";

$(document).ready(function() {
	$('#fullpage').fullpage({
		anchors: ['home','project','skills','contact']
	});
	
	$('.sidebar-wrapper > nav > ul > li:not(#project-name)').click(function(e){	
		cleanUpActiveNav();			
		$(this).attr('class', 'active ' + $(this).attr('class'));
	});
	
	$('#project-name li').click(function(e){
		cleanUpActiveNav();
		//$("#project-name").css({  });
		$(this).attr('class', 'active');
		$('#project-name > a.dropdown-toggle').css({
			'background-color': '#1ba1e2',
			'color':'#fff'
		});
	});
	
	$('#skill-bars').highcharts(createSkillBars());
	$('#skill-spiderweb').highcharts(createSpiderweb());
	
	// contact web service, send email when user clicks on the Submit btn
	// on the contact form
	$('#btn-send-msg').click(function(){
		var c_email = $('#frm-contact-email').val();
		var c_name = $('#frm-contact-name').val();
		var c_msg = $('#frm-contact-msg').val();
		
		var x = valid_email(c_email);
		var y = valid_name(c_name);
		var z = valid_msg(c_msg);
		
		if (x && y && z){
			console.log('data: '+c_email);
			$.ajax({
				type: 'POST',
				url: 'web-services/contact.php',
				//contentType: 'application/json; charset=utf-8',
				data: { email: c_email, name: c_name, msg: c_msg },
				success: msgSent,
				error: function(data, jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
					console.log(data.error);
				}
			});
		}
	});
	
});

// check whether the given email has vaid format. Doesn't check
// whether email is real
function valid_email(email){
	var match = new RegExp("^[0-9a-zA-Z]+([0-9a-zA-Z]*[-._+])*[0-9a-zA-Z]+@[0-9a-zA-Z]+([-.][0-9a-zA-Z]+)*([0-9a-zA-Z]*[.])[a-zA-Z]{2,6}$");
	
	//console.log(email);
	if (match.test(email)){
		$('#frm-contact-email').css('border', '1px solid #d9d9d9');
		return true;
	}else{	
		$('#frm-contact-email').css('border', '1px solid red');
		return false;
	}
}

// check whether the given name is between 3 and 70 characters
function valid_name(name){
	if (name.length > 4 && name.length < 71){
		$('#frm-contact-name').css('border', '1px solid #d9d9d9');
		return true;
	}else{
		$('#frm-contact-name').css('border', '1px solid red');
		return false;
	}
}

function valid_msg(msg){
	if (msg.length > 100) { 
		$('#frm-contact-msg').css('border', '1px solid #d9d9d9');
		return true;
	} else {
		$('#frm-contact-msg').css('border', '1px solid red');
		return false;
	}
}

// display success message after email is sent
function msgSent(){
	var email = $('#frm-contact-email').val();
	$('#frm-contact-content').hide();
	$('#frm-contact-email-sent').html("<div>Thank you for reaching out! "
		+"I'll contact you at "+email+" asap.</div>")
		.fadeIn(1000);
}

function cleanUpActiveNav(){
	//clean up "active" class 
	var classNames = $('.sidebar-wrapper > nav > ul > li:not(#project-name)');
	
	$.each(classNames, function(i, v){
		
		var x = v.className.replace('active','').trim();
		$(v).attr('class', x);
		//console.log($(v).parent('.dropdown-menu'));
		
	});
	
	$('#project-name > a.dropdown-toggle').css({
		'background-color': '#fff',
		'color':'#000'
	});
	
	$.each($("#project-name ul li"), function(i,v){
		var y = v.className.replace('active','').trim();
		$(v).attr('class', y);
	}); 
}

function createSpiderweb() {
	return {
        chart: {
            polar: true,
			//plotBackgroundImage: 'img/light_wool.png',
            type: 'line'
        },
        title: {text:''},
        pane: {
            size: '80%'
        },
		
        xAxis: {
            categories: ['Web Development','Interpersonal Skill', 
				'Time Management','Writing','Collaboration','Quick Learner'],
            tickmarkPlacement: 'on',
            lineWidth: 0
        },

        yAxis: {
            gridLineInterpolation: 'polygon',
            lineWidth: 0,
            min: 0,
			tickInterval:3
        },

        tooltip: {
            shared: true,
            pointFormat: '<span style="color:{series.color}"> <b>{point.y}</b><br/>'
        },
        legend: { enabled:false},
        series: [{
            name: 'Soft Skill Attribution',
			type:'area',
            data: [8,8.5,9,9,8.5,9],
            pointPlacement: 'on',
			color: 'rgb(144, 237, 125)',
			
        }],
		credits:{enabled: false},
		exporting:{enabled: false}
    };
}

function createSkillBars(){
    return {
        chart: {
            type: 'bar'
        },
        title: {
            text: ''
        },
		tooltip: {
			// headerFormat: '<table>',
			// pointFormat: '<tr>'
				// +'<td style="font-size:11px;color:#999;">'
					// +'<b>{point.category}</b>'
				// +'</td></tr>',
			// footerFormat: '</table>',
			// shared: true,
			// useHTML: true
			enabled:false
		},
		colors:['#8085e9'],
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['PHP','Js/Jquery','HTML/CSS',
				'HTML5/CSS3','Responsive Design','SQL','AJAX',
				'Photoshop','Java','ASP.NET MVC']
        },
        yAxis: {
			 categories: ['','Beginner','','Familliar','','Proficient','',
				'Expert','','Master'],
			title: '',
			min:0
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            // layout: 'vertical',
            // align: 'right',
            // verticalAlign: 'top',
            // x: -40,
            // y: 100,
            // floating: true,
            // borderWidth: 1,
            // backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            // shadow: true
			enabled:false
        },
        credits: {
            enabled: false
        },
		exporting:{enabled:false},
        series: [{
            data: [ 6,6,9,5,5,6,6,5,4,4 ]
        }]
    };

}