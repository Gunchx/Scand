function function1() {
    var x = document.getElementById("delete");

    if (document.getElementById('delete_option').value === '2'){
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

function function2() {
    var x = document.getElementById("disc_menu");
    var y = document.getElementById("book_menu");
    var z = document.getElementById("furniture_menu");
    if (document.getElementById('type_switcher').value === '1'){
        x.style.display = 'block',document.getElementById("SKU").value="";
    } else {
        x.style.display = 'none';
    }
    if (document.getElementById('type_switcher').value === '2'){
        y.style.display = 'block',document.getElementById("SKU").value="BK";
    } else {
        y.style.display = 'none';
    }
    if (document.getElementById('type_switcher').value === '3'){
        x.style.display = 'block',document.getElementById("SKU").value="DVD";
    } else {
        x.style.display = 'none';
    }  
    if (document.getElementById('type_switcher').value === '4'){
        z.style.display = 'block',document.getElementById("SKU").value="FURN";
    } else {
        z.style.display = 'none';
    }       
}

function checkforblank(){

    var errormessage = "";

    if(document.getElementById('name').value == ""){
        errormessage += "Please enter the name. \n";
        document.getElementById('name').style.borderColor = "red";
    }
    if(document.getElementById('price').value == ""){
        errormessage += "Please enter the price. \n";
        document.getElementById('price').style.borderColor = "red";
    }
    if (document.getElementById('type_switcher').value == "1"){
        errormessage += "Please select type. \n";
        document.getElementById('type_switcher').style.borderColor = "red";
    }
    if (document.getElementById('type_switcher').value == "2"){
       if (document.getElementById('weight').value == ""){
        errormessage += "Please enter the weight. \n";
        document.getElementById('weight').style.borderColor = "red";
        } 
    }
    if (document.getElementById('type_switcher').value == "3"){
        if (document.getElementById('size').value == ""){
        errormessage += "Please enter the size. \n";
        document.getElementById('size').style.borderColor = "red";
        }
    }
    if(document.getElementById('type_switcher').value == "4"){
        if (document.getElementById('height').value == ""){
        errormessage += "Please enter the height. \n";
        document.getElementById('height').style.borderColor = "red";
        }
    }
    if(document.getElementById('type_switcher').value == "4"){
        if (document.getElementById('width').value == ""){
        errormessage += "Please enter the width. \n";
        document.getElementById('width').style.borderColor = "red";
        }
    }
    if(document.getElementById('type_switcher').value == "4"){
        if (document.getElementById('lenght').value == ""){
        errormessage += "Please enter the lenght. \n";
        document.getElementById('lenght').style.borderColor = "red";
        }
    }
    if(errormessage != ""){
        alert(errormessage);
        return false;
    } else {
        window.location="add_action.php";
    }
}
