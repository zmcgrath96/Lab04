function checkInput(){
    // Quantities cannot be blank or negative
    // Username must be in the form of an email (name@domain.ext)
    // Password cannot be blank
    // Customers must pick a shipping option
    let goodNums = false;
    let goodName = false;
    let goodPass = false;
    let goodShip = false;

    // VALUES LARGER THAN 0
    let amount = [document.getElementById("sugaramt").value, document.getElementById("spiceamt").value,
                 document.getElementById("everythingniceamt").value, document.getElementById("chemxamt").value];
    if(!amount.every(nonNegative)){
        window.alert("Values must be larger than zero");
    }
    else goodNums = true;

    // USERNAME IS AN EMAIL
    let userName = document.getElementById("inputEmail").value;
    userName = String(userName);
    let dot = false;
    let at = false;
    for (let i of userName){
       if (i == "@") at = true;
       if(at){
           if (i == ".") dot = true;
       }

    }
    if (!dot) window.alert("Please input a valid email");
    else goodName = true;


    // PASSWORD IS NOT BLANK
    let password = document.getElementById("inputPassword").value;
    if (password == "") window.alert("Password cannot be blank");
    else goodPass = true;

    //SHIPPING IS VALID
    let shipOpt = document.getElementsByName("shipping");
    for(let i = 0; i < shipOpt.length; i++){
        if(shipOpt[i].checked){
            goodShip = true;
            break;
        }
    }
    if(!goodShip) window.alert("Please select a shipping option");

    // RETURN VALUE
    if(goodName && goodNums && goodPass && goodShip){
        $.post("customerBackend.php");
        return true;
    }
    else  return false;


}

function nonNegative(val){
    return val>= 0;
}
