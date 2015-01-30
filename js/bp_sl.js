jQuery(document).ready(function()
{
 
// twitter

 jQuery('.tw_check').change( function() {
    var isChecked = this.checked;


   if(isChecked) {
       jQuery(".tw_text").prop("disabled",false); 

    } else {
 			jQuery(".tw_text").prop("disabled",true);
    }
    

  });  
  
  // google plus

 jQuery('.gp_check').change( function() {
    var isChecked = this.checked;


   if(isChecked) {
       jQuery(".gp_text").prop("disabled",false); 

    } else {
 			jQuery(".gp_text").prop("disabled",true);
    }
    

  }); 
  
    // pinterest

 jQuery('.pt_check').change( function() {
    var isChecked = this.checked;


   if(isChecked) {
       jQuery(".pt_text").prop("disabled",false); 

    } else {
 			jQuery(".pt_text").prop("disabled",true);
    }
    

  }); 
  
  // Linked In

 jQuery('.li_check').change( function() {
    var isChecked = this.checked;


   if(isChecked) {
       jQuery(".li_text").prop("disabled",false); 

    } else {
 			jQuery(".li_text").prop("disabled",true);
    }
    

  }); 
  
  // tumbler

 jQuery('.tm_check').change( function() {
    var isChecked = this.checked;


   if(isChecked) {
       jQuery(".tm_text").prop("disabled",false); 

    } else {
 			jQuery(".tm_text").prop("disabled",true);
    }
    

  }); 
  
  // Instagram

 jQuery('.in_check').change( function() {
    var isChecked = this.checked;


   if(isChecked) {
       jQuery(".in_text").prop("disabled",false); 

    } else {
 			jQuery(".in_text").prop("disabled",true);
    }
    

  }); 
  
  
  // Flicker

 jQuery('.fl_check').change( function() {
    var isChecked = this.checked;


   if(isChecked) {
       jQuery(".fl_text").prop("disabled",false); 

    } else {
 			jQuery(".fl_text").prop("disabled",true);
    }
    

  }); 
  
  // you tube

 jQuery('.yt_check').change( function() {
    var isChecked = this.checked;


   if(isChecked) {
       jQuery(".yt_text").prop("disabled",false); 

    } else {
 			jQuery(".yt_text").prop("disabled",true);
    }
    

  }); 
  
  
  // myspace

 jQuery('.ms_check').change( function() {
    var isChecked = this.checked;


   if(isChecked) {
       jQuery(".ms_text").prop("disabled",false); 

    } else {
 			jQuery(".ms_text").prop("disabled",true);
    }
    

  }); 
  
  //facebook
  jQuery('.fb_check').change( function() 
 {
    var isChecked = this.checked;
		if(isChecked) 
		{
       jQuery("#fb_tt").prop("disabled",false); 

    } 
    else 
    {
 			jQuery("#fb_tt").prop("disabled",true);
    }
    
});
});
