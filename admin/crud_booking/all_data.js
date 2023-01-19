    

    
    //method to get all data
    function allData(){
            
        table.innerHTML = ``
        //get data from localstorage and store to contaclist array
        //we must to use JSON.parse, because data as string, we need convert to array
        contactList = JSON.parse(localStorage.getItem('listItem')) ?? []
    
        //looping data and show data in table
        contactList.forEach(function (value, i){
           
            var table = document.getElementById('table')
    
            table.innerHTML += `
                <tr>
                    <td>${i+1}</td>
                    <td>${value.kendaraan}</td>
                    <td>${value.peminjam}</td>
                    <td>${value.kategori}</td>
                    <td>${value.deskripsi}</td>
                    <td>${value.tanggal_pinjam}</td>
                    <td>${value.sampai_dengan}</td>
                    <td>${value.kontak_person}</td>
                    <td>${value.telepon}</td>
                    <td>${value.email}</td>
                    <td>
                        <button class="btn btn-sm btn-success" onclick="find(${value.id})">
                            <i class="fa fa-edit"></i>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-danger" onclick="removeData(${value.id})">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>`
        })
    }