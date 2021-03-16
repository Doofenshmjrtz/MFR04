$(document).ready(() => {
    let deleteButtons = document.getElementsByName("deleteButton");
    deleteButtons.forEach(element => {
        element.addEventListener("click", processButton(input));
    });
    
})
function processButton(input) {
    $(document).ready(function(){
        let id = input;
        //console.log(id);
        $("#delete").load("delete.php",{id:id})
       
    });
}