

/*Calls ajax to refresh the adoptable animals query*/
function animalFilter(var_in){
	var data = {};
	var url = '../includes/animals.php';
	var method = 'echo_adoptableAnimals';
			data.method = method;
			data.filter = var_in;
			
	var thisAjax = doAjax(data, url);
	thisAjax.then(function(response_in){return phpAJAX_Done(response_in)})
	.then(function(data1){
		console.log(data1);
		deleteDivID('adoptionAnimals-content');
		populateAdoptionAnimals(data1.adoptable);
	})
	.catch(function(e){console.log(e)});
}

/*Updates the adoption animals div with the new query results*/
function populateAdoptionAnimals(array_in){
	console.log(array_in);
	if(array_in.length < 1){
		$('<h3>',{'html':'No matches found.'}).appendTo('#adoptionAnimals-content');
		$('<h4>',{'html':'Please try to refine your search criteria.'}).appendTo('#adoptionAnimals-content');
		  
	}
	var wrapper, adoptionDescContainer, descImage, figure, hyperlink, image;
	var descriptionRight, details, nameDiv, weightDiv, ageDiv, description;
	var expandToggle, smallToggle, expandToggleHyperlink, smallToggleHyperlink;
	var recordNumber, containerID, panel; 
	for (var x=0; x < array_in.length; x++){
		wrapper = $('<div>',{'id': "containerID" + array_in[x].animalID,'class':'sub-category-break record-height adoptable-Records'}).appendTo('#adoptionAnimals-content');
		
			adoptionDescContainer = $('<div>',{'class':'adoptionDescription-container flex-stretch bigtext'}).appendTo(wrapper);
				descImage = $('<div>',{'class':'description-image'}).appendTo(adoptionDescContainer);
					figure = $('<figure>',{}).appendTo(descImage);
					hyperlink = $('<a>',{'href':'../gallery/'+(array_in[x].imageFile)}).appendTo(figure);
					image = $('<img>',{'src':'../gallery/'+(array_in[x].imageFile), 'alt':array_in[x].imageDescription, 'aria-label': array_in[x].imageDescription}).appendTo(hyperlink);
		
				descriptionRight = $('<div>',{'class':'description-right flex-stretch-child'}).appendTo(adoptionDescContainer);
					details = $('<div>',{'class':'details'}).appendTo(descriptionRight);
						nameDiv = $('<span>',{'class':'font-bold', 'html':'Name: '}).appendTo(details);
								$('<span>',{'class':'font-plain','html':array_in[x].animalName}).appendTo(details);
								$('<br/>').appendTo(details);
						weightDiv = $('<span>',{'class':'font-bold', 'html':'Weight: '}).appendTo(details);
								$('<span>',{'class':'font-plain', 'html':array_in[x].animalWeight + " " + array_in[x].weightIncrement}).appendTo(details);
								$('<br/>').appendTo(details); 
						ageDiv = $('<span>',{'class':'font-bold', 'html':'Age: '}).appendTo(details);
								$('<span>',{'class':'font-plain','html':array_in[x].ageCalculation + ' ' + array_in[x].ageIncrement}).appendTo(details);
								$('<br/>').appendTo(details);
		
					description = $('<p>',{'id':'adoptionDescription' + array_in[x].animalID,'style':'margin:0', 'class':'description-text','html':array_in[x].adoptionDescription}).appendTo(descriptionRight);
		
		
			expandToggle = $('<div>',{'class':'expand-toggle'}).appendTo(wrapper);
				recordNumber = array_in[x].animalID;
				containerID = "containerID" + array_in[x].animalID;
				panel = "#adoptionDescription" + array_in[x].animalID;
				expandToggleHyperlink = $('<a>',{'class':'bigToggle more', 'onclick':"expandAdoptionDescription('"+ recordNumber + "','" + containerID + "', " + "this)", 'html':'~ More ~'}).appendTo(expandToggle);
				expandToggleHyperlink.on("click", function(event){adoptableAnimals_MoreStaging(this);});
		
				smallToggleHyperlink = $('<a>',{'class':'smallToggle', 'onclick':'panelSlideDown('+panel+')', 'html':'~ More ~'}).appendTo(expandToggle);
					expandToggleHyperlink.on("click", function(event){adoptableAnimals_MoreStaging(this);});
	}
}

/*An onclick event added to the hyperlinks when the adoption animals div is repopulated with a new query set.*/
function adoptableAnimals_MoreStaging(containerID){
	containerID.onclick
}

