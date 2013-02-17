$('.mpage').live('pageshow', function(event) {
	 
	// Published page
	$('#select-choice-sort, #select-choice-category, #select-choice-page, #select-choice-group, #select-choice-story-tabs').bind('change', function() {
		  var link = $(this).val();
		  //$.mobile.changePage(link, { changeHash : "false"});
		  window.location = link;
	});
	
	
	// Register page
	$('#reg_username').blur(function() {
		checkfield('username', this.form, this.form.reg_username);

	});
	
	$('#reg_email').blur(function() {
		checkfield('email', this.form, this.form.reg_email);

	});
});