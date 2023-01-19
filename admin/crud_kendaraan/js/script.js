
var productNameInp = document.getElementById('pName');
var productPriceInp = document.getElementById('pPrice');
var productCategoryInp = document.getElementById('pCat');
var productDescriptionInp = document.getElementById('pDesc');
var addBtn = document.getElementById('addBtn');
var resetBtn = document.getElementById('resetBtn');
var updateBtn = document.getElementById('updateBtn');
updateBtn.style.display = "none";
var inputs = document.getElementsByClassName('form-control');
var currentIndex;
var alertName = document.getElementById('alertName');
var alertPrice = document.getElementById('alertPrice');
var alertCate = document.getElementById('alertCate');
var alertDesc = document.getElementById('alertDesc');
var searchNameInput = document.getElementById('searchName');
var searchCateInput = document.getElementById('searchCate');

var products = [];
if(JSON.parse (localStorage.getItem('productsList')) != null) {
    products = JSON.parse (localStorage.getItem('productsList'));
    displayProduct();
}

addBtn.onclick = function(){
    for(var i = 0; i < inputs.length; i++){
        if(validProductName () == true && validProductPrice () == true && validProductCate () == true  && isProductExist () != true)
        {
            addProduct ();
            displayProduct ();
            resetForm ();
            return 1
        }
        else if(isProductExist ())
        {
            alert('This Product already exist');
            resetForm();
            return 1;
        }
        else if(inputs[i].value == "")
        {
            alert('There is a field or fields Empty..');
            resetForm();
            return 0;
        }
        else
        {
            alert('The Registration is invalid..');
            resetForm();
            return 0;
        }
    }
}    

resetBtn.onclick = function(){
    resetForm ();
}

updateBtn.onclick = function(){
    updateProduct();
    displayProduct();
    resetForm ();
    updateBtn.style.display = "none";
}

function addProduct (){
    var product =
    {
        name : productNameInp.value,
        price : productPriceInp.value,
        cate : productCategoryInp.value,
        desc : productDescriptionInp.value,
    }
        products.push(product);
        localStorage.setItem('productsList' , JSON.stringify(products));
}

function displayProduct (){
    var row = '';
    for (var i = 0; i < products.length; i++){
        row += 
        `<tr>
            <td>${i+1}</td>
            <td>${products[i].name}</td>
            <td>${products[i].price}</td>
            <td>${products[i].cate}</td>
            <td>${products[i].desc}</td>
            <td><a class="btn btn-warning" href = "?url=tambah_kendaraan">Update</a>
            <button class="btn btn-danger" onclick = "deleteProduct(${i})">Delete</button></td>
            
        </tr>`
    }
    document.getElementById('myTable').innerHTML = row;
}

function resetForm (){
    for (var i = 0; i < inputs.length; i++){
        inputs[i].value = '';
        inputs[i].classList.remove('is-valid');
        inputs[i].classList.remove('is-invalid');
    }
}

function deleteProduct (index){
    products.splice(index,1);
    displayProduct();
    localStorage.setItem('productsList' , JSON.stringify(products));
}

function getProductInfo (index){
    currentIndex = index;
    var currentProduct = products[index];
        productNameInp.value = currentProduct.name;
        productPriceInp.value = currentProduct.price;
        productCategoryInp.value = currentProduct.cate;
        productDescriptionInp.value = currentProduct.desc;
        updateBtn.style.display = "block";
        addBtn.style.display = 'none';
}

function updateProduct (){
    var product = {
        name : productNameInp.value,
        price : productPriceInp.value,
        cate : productCategoryInp.value,
        desc : productDescriptionInp.value,
    }
    products[currentIndex] = product;
    localStorage.setItem('productsList' , JSON.stringify(products));
    addBtn.style.display = 'inline-block';
}

function searchName(searchText){
    var row = '';
    for (var i = 0; i < products.length; i++){
        if(products[i].name.toLowerCase().includes(searchText.toLowerCase())){
            row += 
            `<tr>
                <td>${i+1}</td>
                <td>${products[i].name}</td>
                <td>${products[i].price}</td>
                <td>${products[i].cate}</td>
                <td>${products[i].desc}</td>
                <td><a class="btn btn-warning" href = "?url=tambah_kendaraan">Update</a>
            <button class="btn btn-danger" onclick = "deleteProduct(${i})">Delete</button></td>
            </tr>`
        }
        document.getElementById('myTable').innerHTML = row;
    }
}

function searchCate(searchText){
    var row = '';
    for (var i = 0; i < products.length; i++){
        if(products[i].cate.toLowerCase().includes(searchText.toLowerCase())){
            row += 
            `<tr>
                <td>${i+1}</td>
                <td>${products[i].name}</td>
                <td>${products[i].price}</td>
                <td>${products[i].cate}</td>
                <td>${products[i].desc}</td>
                <td><a class="btn btn-warning" href = "?url=tambah_kendaraan">Update</a>
            <button class="btn btn-danger" onclick = "deleteProduct(${i})">Delete</button></td>
            </tr>`
        }
        document.getElementById('myTable').innerHTML = row;
    }
}


function validProductName (){
    var regexName = /^[A-Z][a-z]{2,10}$/;
    if(regexName.test(productNameInp.value))
    {
        productNameInp.classList.add('is-valid');
        productNameInp.classList.remove('is-invalid');
        alertName.classList.add('d-none');
        return true;
    }
    else
    {
        productNameInp.classList.add('is-invalid');
        productNameInp.classList.remove('is-valid');
        alertName.classList.remove('d-none');
        return false;
    }
}

function validProductPrice (){
    var regexPrice = /^([0-9]|[0-9][0-9]|[0-9][0-9][0-9]|[0-9][0-9][0-9][0-9]|10000)$/;
    if(regexPrice.test(productPriceInp.value))
    {
        productPriceInp.classList.add('is-valid');
        productPriceInp.classList.remove('is-invalid');
        alertPrice.classList.add('d-none');
        return true;
    }
    else
    {
        productPriceInp.classList.add('is-invalid');
        productPriceInp.classList.remove('is-valid');
        alertPrice.classList.remove('d-none');
        return false;
    }
}

function validProductCate (){
    if(productCategoryInp.value.toLowerCase() == productNameInp.value.toLowerCase())
    {
        productCategoryInp.classList.add('is-valid');
        productCategoryInp.classList.remove('is-invalid');
        alertCate.classList.add('d-none');
        return true;
    }
    else
    {
        productCategoryInp.classList.add('is-invalid');
        productCategoryInp.classList.remove('is-valid');
        alertCate.classList.remove('d-none');
        return false;
    }
}

function isProductExist (){
    for(var i = 0; i < products.length; i++){
        if(products[i].name.toLowerCase() == inputs[0].value.toLowerCase())
        {
            return true;
        }
    }
}

productNameInp.addEventListener('input',validProductName);
productPriceInp.addEventListener('input',validProductPrice);
productCategoryInp.addEventListener('input',validProductCate);
productDescriptionInp.addEventListener('input',validProductDesc);

searchNameInput.addEventListener('keyup', function (){
    searchName(this.value);
})

searchCateInput.addEventListener('keyup', function (){
    searchCate(this.value);
})