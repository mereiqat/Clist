function doshowandhide(){
	$("li.single-contact").each(function(){
		

if ($(this).hasClass("showit")) {
$(this).show();

}else{$(this).hide();
}
		})
	}
$("#contactsCanvas").scroll(function() { //.box is the class of the div
  var h= $(this).scrollTop()*-1;
  if($(this).scrollTop() < 60){
    $("#topbar").css("top",h);
	$("#sidebar").css("top",h);
    $("#page").css("top",h*2);
  }else{
    $("#topbar").css("top",'-60px');
	 $("#sidebar").css("top",'-60px');
    $("#page").css("top",'-120px');
	
  }
});

//end scroll
function checknumbers(){
  jQuery('ul#contacts').each(function(){
    var lis = $(this).find('li.single-contact').filter(':visible');
    var lis2 = $(this).find('li.single-contact.contact-selected').filter(':visible');
    jQuery('#selectedStatus').attr("data-totalcount",lis.length)
    jQuery('#selectedStatus').attr("data-selectedcount",lis2.length);
    jQuery('#selectedStatus span').html(jQuery('#selectedStatus').attr('data-selectedcount') + ' of '+ jQuery('#selectedStatus').attr('data-totalcount') +' selected')
  })
}
//function search by name
(function ($) {
  // custom css expression for a case-insensitive contains()
  jQuery.expr[':'].Contains = function(a,i,m){
    return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
  };


  function listFilter(header, list) { // header is any element, list is an unordered list
    // create and add the filter form to the header
    var form = $("<form>").attr({"class":"filterform form-search","action":"#"}),
    input = $("<input>").attr({"class":"filterinput","type":"text","placeholder":"Search by name"});
    $(form).append(input).appendTo(header);

    $(input)
    .change( function () {
      var filter = $(this).val();
      if(filter) {
        // this finds all links in a list that contain the input,
        // and hide the ones not containing the input while showing the ones that do
        $(list).find("h2.contact-name a:not(:Contains(" + filter + "))").parent().parent().parent().slideUp();
        $(list).find("h2.contact-name a:Contains(" + filter + ")").parent().parent().parent().slideDown();
        ckem();
		checknumbers();
      } else {
		 // alert("yes")
        $(list).find("li").slideDown();
		doshowandhide();
	ckem2();	
	checknumbers();
      }
      return false;
    })
    .keyup( function () {
      // fire the above change event after every letter
      $(this).change();
    });
  }
  //end search function

  //ondomready
  $(function () {
    listFilter($("#filters"), $("#contactsCanvas"));
  });
}(jQuery));




(function ($) {
  // custom css expression for a case-insensitive contains()
  

  function listFilter(header, list) { // header is any element, list is an unordered list
    // create and add the filter form to the header
    var form = $("<form>").attr({"class":"filterform form-search","action":"#"}),
    input = $("<input>").attr({"class":"filterinput","type":"text","placeholder":"Search by email"});
    $(form).append(input).appendTo(header);

    $(input)
    .change( function () {
      var filter = $(this).val();
      if(filter) {
        // this finds all links in a list that contain the input,
        // and hide the ones not containing the input while showing the ones that do
        $(".letter-contacts").find("li.single-contact[data-email!='" + filter + "']").slideUp();
		
        $(".letter-contacts").find("li.single-contact[data-email*='" + filter + "']").slideDown();
        ckem();
		checknumbers();
      } else {
		 // alert("yes")
        $(list).find("li").slideDown();
		doshowandhide();
	ckem2();	
	checknumbers();
      }
      return false;
    })
    .keyup( function () {
      // fire the above change event after every letter
      $(this).change();
    });
  }
  //end search function

  //ondomready
  $(function () {
    listFilter($("#filters"), $("#contactsCanvas"));
  });
}(jQuery));





function unique(list) {

  var result = [];
  jQuery.each(list, function(i, e) {
    if (jQuery.inArray(e, result) == -1) result.push(e);
  });
  return result;
}

jQuery('span.changeView').click( function() {
  jQuery('span.changeView').removeClass('active')
  jQuery("ul#contacts").attr('class', 'contacts-view '+ jQuery(this).attr('data-mode'));
  if(jQuery(this).attr('data-mode') != 'list'){jQuery("li.single-contact .labels span.label").addClass("tooltip")}else{jQuery("li.single-contact .labels span.label").removeClass("tooltip")}
  jQuery(this).addClass('active')

})
jQuery("div.check-area").click(function(){
  if(jQuery(this).parent().parent().hasClass("contact-selected")){
    jQuery(this).parent().parent().removeClass("contact-selected")
    checknumbers()
  }else{
    jQuery(this).parent().parent().addClass("contact-selected")
    checknumbers()
  }
})
jQuery(document).ready(function(e) {
  checknumbers()
  var x=[];
  var sectors=[];
  var reg=[];
  jQuery("p#org").each(function(){
    x.push(jQuery(this).text());
  })
  jQuery("p#secto").each(function(){
    sectors.push(jQuery(this).text());
  })
  jQuery("div.labels").each(function(){
    reg.push(jQuery(this).text());
  })
  //console.log(x)

  x=unique(x);
  x=x.sort();

  sectors=unique(sectors);
  sectors=sectors.sort();

  reg=unique(reg);
  reg=reg.sort();

for (var i=0;i<x.length;i++){
jQuery("select#tags").append("<option value='"+x[i]+"'>"+x[i]+"</option>")
}
for (var i=0;i<sectors.length;i++){
jQuery("select#sectorsinput").append("<option value='"+sectors[i]+"'>"+sectors[i]+"</option>")
}



function hideliOrg(x){
	jQuery("p#org").each(function(){
            if(jQuery(this).text() == x){
              jQuery(this).parent().parent().parent().addClass('showit');
			  
            }
          })
		  
	}
	function hideliSec(x){
		jQuery("p#secto").each(function(){
            if(jQuery(this).text() == x){
              jQuery(this).closest("li.single-contact").addClass('showit');
			  
            }
          })
		}
	
	$("select.doitbaby").on('change',function(){
	var x=$(this).val();
	$(this).find("option:selected").attr('disabled','disabled');
	$("#selectedvalue").append("<a href='#' data-txt='"+x+"' id='tablet'>"+x+" <i class='fa fa-times-circle'></i></a>");
	hideliOrg(x)
	doshowandhide();
	ckem2();	
	checknumbers();
	
	
	
	//apply function
	
	$("a#tablet").click(function(){
//$(this).fadeOut();
var y=$(this).attr('data-txt');
$("#tags  option[value='"+y+"']").removeAttr('disabled');
jQuery("p#org").each(function(){
	//alert(y)
            if(jQuery(this).text() == y){
              jQuery(this).parent().parent().parent().removeClass('showit');
			  
            }
          })
		  $(this).remove();
		  
	doshowandhide();
	ckem2();	
	checknumbers();
			  
		  
})
	
	
	})
	
	
	$("select.doitbaby2").on('change',function(){
	var x=$(this).val();
	$(this).find("option:selected").attr('disabled','disabled');
	$("#selectedvalue").append("<a style='background:red' href='#' data-txt='"+x+"' id='tablet'>"+x+" <i class='fa fa-times-circle'></i></a>");
	hideliSec(x)
	doshowandhide();
	ckem2();	
	checknumbers();
	
	
	
	//apply function
	
	$("a#tablet").click(function(){

var y=$(this).attr('data-txt');
$("#sectorsinput option[value='"+y+"']").removeAttr('disabled');
jQuery("p#secto").each(function(){
	//alert(y)
            if(jQuery(this).text() == y){
              jQuery(this).closest("li.single-contact").removeClass('showit');
			  
            }
          })
		  
		  $(this).remove();
		  
	doshowandhide();
	ckem2();	
	checknumbers();
			  
})
	
	
	})
	
	
	
	
jQuery(function() {
      //alert(x)

      jQuery( "#regions" ).autocomplete({
        source: reg,
        change: function( event, ui ) {

          if(ui.item == null){
            //  alert('as')
            jQuery("li.single-contact").show()
            checknumbers()
          }},
          select: function (event, ui) {
            var value = ui.item.value;
            jQuery("div.labels").each(function(){
              if(jQuery(this).text() != value){
                jQuery(this).closest("li.single-contact").filter(":visible").hide();
                ckem()
                checknumbers()
              }
            })

          }
        });
      });

  /*jQuery(function() {
    //alert(x)

    jQuery( "#tags" ).autocomplete({
      source: x,
      change: function( event, ui ) {

        if(ui.item == null){
          //  alert('as')
          jQuery("li.single-contact").show()
          checknumbers()
        }},
        select: function (event, ui) {
          var value = ui.item.value;
          jQuery("p#org").each(function(){
            if(jQuery(this).text() != value){
              jQuery(this).parent().parent().parent().filter(":visible").hide();
              ckem()
              checknumbers()
            }
          })

        }
      });
    });

    




      jQuery(function() {
        //alert(x)

        jQuery( "#sectorsinput" ).autocomplete({
          source: sectors,
          change: function( event, ui ) {

            if(ui.item == null){
              //  alert('as')
              jQuery("li.single-contact").show()
              checknumbers()
            }},

            select: function (event, ui) {
              var value = ui.item.value;
              jQuery("p#secto").each(function(){
                if(jQuery(this).text() != value){
                  jQuery(this).closest("li.single-contact").filter(":visible").hide();
                  ckem()
                  checknumbers()
                }
              })

            }
          });
        });

*/



        //console.log(x)
      });

      function ckem(){
        jQuery('ul.letter-contacts').filter(function(){
          var lis = $(this).find('li').filter(':visible');
          if(lis.length==0){
            jQuery(this).parent().hide();
          }else{
            jQuery(this).parent().show();
          }
        })
      }
	   function ckem2(){
		   var x= 0
       jQuery('ul.letter-contacts').filter(function(){
          var lis = $(this).find('li').hasClass('showit');
  //alert(lis)
          if(lis){
            jQuery(this).parent().show();
			x=x+1;
          }else{
            jQuery(this).parent().hide();
          }
        })
		if(x==0){
			jQuery("li.alphaDivider").show();
			jQuery(".letter-contacts li").show();
			}
      }

      jQuery("#selectAll").click(function(){
        if(jQuery(this).hasClass("deSelectAll")){
          jQuery(this).attr("src","http://clist.ochasyria.org/sites/all/themes/contactlist/images/ui/checkbox.png");
          jQuery(this).removeClass("deSelectAll");
          jQuery('ul.letter-contacts').filter(function(){
            $(this).find('li').filter(':visible').removeClass("contact-selected");
          });
          checknumbers()
        }else{
          jQuery(this).attr("src","http://clist.ochasyria.org/sites/all/themes/contactlist/images/ui/checkbox-active.png");
          jQuery(this).addClass("deSelectAll");
          jQuery('ul.letter-contacts').filter(function(){
            $(this).find('li').filter(':visible').addClass("contact-selected");


          });
          checknumbers()
        }
      })

      jQuery("a#exportemails").click(function(){
        var emailslist=""
        jQuery(".pp textarea").html("You need to select contact first");
        jQuery('li.single-contact.contact-selected').filter(':visible').each(function(){
          if(jQuery(this).attr("data-email") !=''){emailslist = jQuery(this).attr("data-email") +', '+ emailslist  ;}
        })
        if(emailslist != ""){jQuery(".pp textarea").html(emailslist.slice(0,-2))}
        jQuery(".pp").fadeIn("slow");
      })

      jQuery("#pp a#closepp").click(function(){
        jQuery(".pp").fadeOut("slow");
      })
	  
	  jQuery("#black a#closepp").click(function(){
        jQuery("#black").fadeOut("slow");
      })

      jQuery("a#exportupdate").click(function(){
        var emailslist=""
        jQuery(".pp textarea").html("You need to select contact first");
        jQuery('li.single-contact.contact-selected').filter(':visible').each(function(){
          if(jQuery(this).attr("data-email") !=''){emailslist = jQuery(this).attr("data-email") +'\n'+ emailslist  ;}
        })
        if(emailslist != ""){jQuery(".pp textarea").html(emailslist.slice(0,-2))}			jQuery(".pp").fadeIn("slow");
      })

      jQuery("#closepp").click(function(){
        jQuery(".pp").fadeOut("slow");
      })





      jQuery("a#exportgrupsemails").click(function(){
        var emailslist=""
        //jQuery(".pp textarea").html("You need to select contact first");
        jQuery('li.single-contact.contact-selected').filter(':visible').each(function(){
          if(jQuery(this).attr("data-nid") !=''){emailslist = jQuery(this).attr("data-nid") +','+ emailslist  ;}
        })
        x="http://clist.ochasyria.org/export_emails/"+emailslist.slice(0,-1);
        window.location.replace(x);

      })




      jQuery("a#exportgroupsexls").click(function(){
        var emailslist=""
        //jQuery(".pp textarea").html("You need to select contact first");
        jQuery('li.single-contact.contact-selected').filter(':visible').each(function(){
          if(jQuery(this).attr("data-nid") !=''){emailslist = jQuery(this).attr("data-nid") +','+ emailslist  ;}
        })
        x="http://clist.ochasyria.org/export_emails_exls/"+emailslist.slice(0,-1);
		//alert(x);
        window.location.replace(x);

      })








      jQuery("a#addtomeeting").click(function(){
        var emailslist=""
        //jQuery(".pp textarea").html("You need to select contact first");
        jQuery('li.single-contact.contact-selected').filter(':visible').each(function(){
          if(jQuery(this).attr("id") !=''){emailslist = jQuery(this).attr("id") +', '+ emailslist  ;}
        })
        x="http://clist.ochasyria.org/node/add/meeting?og_group_ref="+ jQuery('div#page').attr('data-nid') +"&field_users2="+emailslist.slice(0,-2)+"&destination=contactgroup/"+ jQuery('div#page').attr('data-nid');
        window.location.replace(x);
      })


      jQuery("a#exportselectedxls").click(function(){
        var emailslist=""
        //jQuery(".pp textarea").html("You need to select contact first");
        jQuery('li.single-contact.contact-selected').filter(':visible').each(function(){
          if(jQuery(this).attr("id") !=''){emailslist = jQuery(this).attr("id") +'+'+ emailslist  ;}
        })
        x="http://clist.ochasyria.org/contactsXls/"+emailslist.slice(0,-2);
        window.location.replace(x);
      })


      jQuery("a#editmember").click(function(){
		  if(jQuery(this).hasClass("open")){
			  jQuery(".list .labels").css("margin-right","80px");
        jQuery(".list .check-area").css("right","0px");
        jQuery(".list .edit_user").hide("slow");
		 jQuery("a#editmember").removeClass("open");
			  }else{
        jQuery(".list .labels").css("margin-right","110px");
        jQuery(".list .check-area").css("right","40px");
        jQuery(".list .edit_user").fadeIn("slow");
		 jQuery("a#editmember").addClass("open");
			  }
      })
	  
	  jQuery("a#showmeetings").click(function(){
		  if(jQuery(this).hasClass("openmeetings")){
			  $("#page").css("left","0px");
				  $("#sidebar").fadeOut();
				  jQuery(this).removeClass("openmeetings")
			  }else{
				  $("#page").css("left","320px");
				  $("#sidebar").fadeIn();
				  jQuery(this).addClass("openmeetings")
				  }
		  
		  
		  })


jQuery("a#btndedupe2").click(function(){
	jQuery(".meta").removeClass("selectedmeta");
	jQuery(this).closest(".meta").addClass("selectedmeta")
	jQuery("li").removeClass("contact-selected");
  var x=jQuery(this).attr("data-ids")
var array = x.split(', ');
  //console.log(array)
  for (var i=0;i<array.length;i++){
	  jQuery("li#"+array[i]).addClass("contact-selected");
	  }
	  checknumbers()
})

jQuery("a#btndedupe4").click(function(){
	//alert('start')
	jQuery(".meta").removeClass("selectedmeta");
	var orgarr=[];
	var x=""
	jQuery("a#btndedupe2").each(function(){
	x = $(this).attr("data-ids")+', '+ x
})
//alert(x)
x= x.slice(0,-2)
var array = x.split(', ');
array.forEach(function (v, i) {
	//jQuery("li#"+ v).addClass("contact-selected");
		  //alert(jQuery(this).find("p#org").html())
		 orgarr.push(jQuery("li#"+ v).find("p#org").html());
		// console.log(orgarr);
	})
	console.log(orgarr);
  
 
	  
	  orgarr=unique(orgarr);
	  console.log(orgarr);
	  
	  var final=[];
	  
	  
	  orgarr.forEach(function (v, i) {
		  var rep=0
		  var deprep=0
		  var other=0
		  array.forEach(function(q, u){
		  rep = jQuery("li.single-contact[id='"+q+"'][data-orga='"+v+"'][data-lvl='Organization Representative']").length + rep;
		  deprep = jQuery("li.single-contact[id='"+q+"'][data-orga='"+v+"'][data-lvl='Deputy Representative']").length + deprep;
		  other = jQuery("li.single-contact[id='"+q+"'][data-orga='"+v+"'][data-lvl='Other']").length + other;
		  })
		  
		  
		 // alert(jQuery("li.contact-selected[data-orga='"+v+"'][data-lvl='Organization Representative']").length)
		  //alert(jQuery("li.contact-selected[data-orga='"+v+"'][data-lvl='Deputy Representative']").length)
		  //alert(jQuery("li.contact-selected[data-orga='"+v+"'][data-lvl='Other']").length)
		  
		  final[i]={
    "organization": v,
    "rep": rep,
	"deprep": deprep,
	"others": other
		  }
  //}
		  })
		  
		  
	console.log(final)
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
	"theme": "light",
    "legend": {
        "horizontalGap": 10,
        "maxColumns": 1,
        "position": "right",
		"useGraphSettings": true,
		"markerSize": 10
    },
    "dataProvider": final,
    "graphs": [{
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Organization Representative",
        "type": "column",
		"color": "#000000",
        "valueField": "rep"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Deputy Representative",
        "type": "column",
		"color": "#000000",
        "valueField": "deprep"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Others",
        "type": "column",
		"color": "#000000",
        "valueField": "others"
    }],
    "categoryField": "organization",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "gridAlpha": 0,
        "position": "left",
		"labelRotation": 45
    },
    "export": {
    	"enabled": true
     }

});
		  
		  //end chart
		  
		  jQuery("#black").fadeIn();
		  //console.log(final)
	  //for (var i=0;i<org.length;i++){
	//	  final[i]={
    //"org": org[i],
    //"attend": jQuery("li.contact-selected div.contact-body h3.current-job p#org:contains('"+org[i]+"')").length
  //}
	//	  }
		//  console.log(final)
	  //checknumbers()



	
	})
jQuery("a#btndedupe3").click(function(){
	jQuery(".meta").removeClass("selectedmeta");
	jQuery(this).closest(".meta").addClass("selectedmeta")
	var orgarr=[];
  var x=jQuery(this).attr("data-ids");
  //alert(x)
var array = x.split(', ');
array.forEach(function (v, i) {
	jQuery("li#"+ v).addClass("contact-selected");
		  //alert(jQuery(this).find("p#org").html())
		 orgarr.push(jQuery("li#"+ v).find("p#org").html());
		// console.log(orgarr);
	})
	console.log(orgarr);
  
 
	  
	  orgarr=unique(orgarr);
	  console.log(orgarr);
	  
	  var final=[];
	  orgarr.forEach(function (v, i) {
		 // alert(jQuery("li.contact-selected[data-orga='"+v+"'][data-lvl='Organization Representative']").length)
		  //alert(jQuery("li.contact-selected[data-orga='"+v+"'][data-lvl='Deputy Representative']").length)
		  //alert(jQuery("li.contact-selected[data-orga='"+v+"'][data-lvl='Other']").length)
		  
		  final[i]={
    "organization": v,
    "rep": jQuery("li.contact-selected[data-orga='"+v+"'][data-lvl='Organization Representative']").length,
	"deprep": jQuery("li.contact-selected[data-orga='"+v+"'][data-lvl='Deputy Representative']").length,
	"others": jQuery("li.contact-selected[data-orga='"+v+"'][data-lvl='Other']").length
		  }
  //}
		  })
		  
	console.log(final)
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
	"theme": "light",
    "legend": {
        "horizontalGap": 10,
        "maxColumns": 1,
        "position": "right",
		"useGraphSettings": true,
		"markerSize": 10
    },
    "dataProvider": final,
    "graphs": [{
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Organization Representative",
        "type": "column",
		"color": "#000000",
        "valueField": "rep"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Deputy Representative",
        "type": "column",
		"color": "#000000",
        "valueField": "deprep"
    }, {
        "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
        "fillAlphas": 0.8,
        "labelText": "[[value]]",
        "lineAlpha": 0.3,
        "title": "Others",
        "type": "column",
		"color": "#000000",
        "valueField": "others"
    }],
    "categoryField": "organization",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "gridAlpha": 0,
        "position": "left",
		"labelRotation": 45
    },
    "export": {
    	"enabled": true
     }

});
		  
		  //end chart
		  
		  jQuery("#black").fadeIn();
		  //console.log(final)
	  //for (var i=0;i<org.length;i++){
	//	  final[i]={
    //"org": org[i],
    //"attend": jQuery("li.contact-selected div.contact-body h3.current-job p#org:contains('"+org[i]+"')").length
  //}
	//	  }
		//  console.log(final)
	  //checknumbers()
})



