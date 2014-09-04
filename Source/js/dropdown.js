$(document).ready(function(){
    $(".dropdown").on("show.bs.dropdown", function(e){
        var linkText = $(e.relatedTarget).text(); // Get the link text
        alert("Click on OK button to view the dropdown menu for - " + linkText);
    });
});