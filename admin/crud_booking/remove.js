    

    function removeData(id){
        //get data from localstorage and store to contaclist array
        //we must to use JSON.parse, because data as string, we need convert to array
        contactList = JSON.parse(localStorage.getItem('listItem')) ?? []
    
        contactList = contactList.filter(function(value){ 
            return value.id != id; 
        });
    
        // save array into localstorage
        localStorage.setItem('listItem', JSON.stringify(contactList))
    
        //get data again
        allData()
    }