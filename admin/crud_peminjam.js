function save(){
    var read = document.getElementById('inputBookIsComplete');
    if(read.checked == true){
        bookList = JSON.parse(localStorage.getItem('listItem3')) ?? []
        var id
        bookList.length != 0 ? bookList.findLast((item) => id = item.id) : id = 0
    
        if(document.getElementById('inputBookId').value){
            bookList.forEach(value => {
                if(document.getElementById('inputBookId').value == value.id){
                    value.nama         = document.getElementById('inputBookNama').value,
                    value.person         = document.getElementById('inputBookPerson').value,
                    value.title         = document.getElementById('inputBookTitle').value, 
                    value.author        = document.getElementById('inputBookAuthor').value, 
                    value.year          = document.getElementById('inputBookYear').value, 
                    value.isComplete    = 1
                }
            });
            document.getElementById('id').value = ''
        }else{
            var item = {
                id          : id + 1, 
                nama        : document.getElementById('inputBookNama').value,
                person      : document.getElementById('inputBookperson').value,
                title       : document.getElementById('inputBookTitle').value, 
                author      : document.getElementById('inputBookAuthor').value, 
                year        : document.getElementById('inputBookYear').value, 
                isComplete  : 1,
            }
            bookList.push(item)
        }
        localStorage.setItem('listItem3', JSON.stringify(bookList))
    }else{
    
        bookList2 = JSON.parse(localStorage.getItem('listItem4')) ?? []
        var id
        bookList2.length != 0 ? bookList.findLast((item) => id = item.id) : id = 0
        if(document.getElementById('inputBookId').value){
            bookList2.forEach(value => {
                if(document.getElementById('inputBookId').value == value.id){
                    value.nama         = document.getElementById('inputBookNama').value,
                    value.person         = document.getElementById('inputBookPerson').value,
                    value.title         = document.getElementById('inputBookTitle').value, 
                    value.author        = document.getElementById('inputBookAuthor').value, 
                    value.year          = document.getElementById('inputBookYear').value, 
                    value.isComplete    = 0
                }
            });
            document.getElementById('inputBookId').value = ''
        }else{
            var item = {
                id          : id + 1, 
                nama        : document.getElementById('inputBookNama').value,
                person       : document.getElementById('inputBookPerson').value,
                title       : document.getElementById('inputBookTitle').value, 
                author      : document.getElementById('inputBookAuthor').value, 
                year        : document.getElementById('inputBookYear').value, 
                isComplete  : 0,
            }
            bookList2.push(item)
        }
        localStorage.setItem('listItem4', JSON.stringify(bookList2))
    }
    allData()
    document.getElementById('form').reset()
}

function allData(){
            
    table.innerHTML = ``
    bookList = JSON.parse(localStorage.getItem('listItem4')) ?? []
    bookList.forEach(function (value, i){
       
        var table = document.getElementById('table')
        // if(value.isComplete == 0){
        table.innerHTML += `
            <tr>
                <td>${i+1}</td>
                <td>${value.nama}</td>
                <td>${value.person}</td>
                <td>${value.title}</td>
                <td>${value.author}</td>
                <td>${value.year}</td>
               
                <td>
                    <button class="btn btn-sm btn-success" onclick="find(${value.id})">
                        <i class="fa fa-edit"></i>
                    </button>
                </td>
                <td>
                    <button class="btn btn-sm btn-danger" onclick="removeData4(${value.id})">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>`
        // }
    
    })
    table2.innerHTML = ``
    bookList2 = JSON.parse(localStorage.getItem('listItem3')) ?? []
    
    bookList2.forEach(function (value2, i){
       
        var table2 = document.getElementById('table2')
        // console.log(value2.isComplete);
        // if(value2.isComplete == 1){
        table2.innerHTML += `
            <tr>
                <td>${i+1}</td>
                <td>${value2.nama}</td>
                <td>${value2.person}</td>
                <td>${value2.title}</td>
                <td>${value2.author}</td>
                <td>${value2.year}</td>
               
                    <button class="btn btn-sm btn-success" onclick="find(${value2.id})">
                        <i class="fa fa-edit"></i>
                    </button>
                </td>
                <td>
                    <button class="btn btn-sm btn-danger" onclick="removeData3(${value2.id})">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>`
        // }
    
    })
    
}


function removeData3(id){
    
    bookList = JSON.parse(localStorage.getItem('listItem3')) ?? []
    bookList = bookList.filter(function(value){ 
        return value.id != id; 
    });
    // localStorage.clear();
    localStorage.setItem('listItem3', JSON.stringify(bookList))
    allData()
}
function removeData4(id){
    bookList = JSON.parse(localStorage.getItem('listItem4')) ?? []
    bookList = bookList.filter(function(value){ 
        return value.id != id; 
    });
    localStorage.setItem('listItem4', JSON.stringify(bookList))
    allData()
}

function find(id){
    bookList = JSON.parse(localStorage.getItem('listItem4')) ?? []
    bookList.forEach(function (value){
        if(value.id == id){
            console.log(id);
            document.getElementById('inputBookId').value = id
            document.getElementById('inputBookNama').value = value.nama
            document.getElementById('inputBookPerson').value = value.person
            document.getElementById('inputBookTitle').value = value.title
            document.getElementById('inputBookAuthor').value = value.author 
            document.getElementById('inputBookYear').value = value.year
        }
    })
}

function read(id1,nama1,person1,title1,author1,year1){
    if(id1){
        var item = [{
            id          : id1, 
            nama       : nama1,
            person       : person1, 
            title       : title1, 
            author      : author1, 
            year        : year1, 
            isComplete  : 1,
        }];   
        bookList = JSON.parse(localStorage.getItem('listItem3')) ?? []
        books = item.concat(bookList);
        var itemString = JSON.stringify(books);
        localStorage.setItem('listItem3', itemString);
    }
    
    bookList4 = JSON.parse(localStorage.getItem('listItem4')) ?? []
    bookList4 = bookList4.filter(function(value){ 
        return value.id != id1; 
    });
    localStorage.setItem('listItem4', JSON.stringify(bookList4))
    allData()
}
function read2(id1,nama1,person1,title1,author1,year1){
    if(id1){
        var item = [{
            id          : id1,
            nama        : nama1,  
            person        : person1, 
            title       : title1, 
            author      : author1, 
            year        : year1, 
            isComplete  : 1,
        }];   
        bookList = JSON.parse(localStorage.getItem('listItem4')) ?? []
        books = item.concat(bookList);
        var itemString = JSON.stringify(books);
        localStorage.setItem('listItem4', itemString);
    }
    
    bookList3 = JSON.parse(localStorage.getItem('listItem3')) ?? []
    bookList3 = bookList3.filter(function(value){ 
        return value.id != id1; 
    });
    localStorage.setItem('listItem3', JSON.stringify(bookList3))
    allData()
}