function sub(){
    let fullName=document.getElementsByName('fullName')[0].value;
    let phone=document.getElementsByName('phone')[0].value
    for (let index = 0; index < fullName.length; index++) {
        if (!(/^[a-zA-Z" "]/.test(fullName[index]))) {
            alert("you need only letters in name")
            return false
         }
        
    }

    for (let index = 0; index < phone.length; index++) {
        if (!(/^[0-9]/.test(phone[index]))) {
            
            alert("you need only numbers in phone number")
            return false
         }  
    }
    if(phone.length>10){
        alert("phone number to long")
        return false
    }
    if(phone.length<9){
        alert("phone number to short")
        return false
    }
    return true
}

