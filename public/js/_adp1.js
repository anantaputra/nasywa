let form = document.getElementById('form-product');
let listProduct = document.getElementById('list-product');
let addProduct = document.getElementById('add-product');
let table = document.getElementById('table-product');

listProduct.addEventListener('click', function(event){
    addProduct.classList.remove('text-red-300', 'border-b-2', 'border-red-400');
    addProduct.classList.add('text-slate-400', 'hover:text-red-300', 'hover:border-b-2', 'hover:border-red-400');
    listProduct.classList.remove('text-slate-400', 'hover:text-red-300', 'hover:border-b-2', 'hover:border-red-400');
    listProduct.classList.add('text-red-300', 'border-b-2', 'border-red-400');
    form.classList.add('hidden');
    table.classList.remove('hidden');
});

addProduct.addEventListener('click', function(){
    listProduct.classList.remove('text-red-300', 'border-b-2', 'border-red-400');
    listProduct.classList.add('text-slate-400', 'hover:text-red-300', 'hover:border-b-2', 'hover:border-red-400');
    addProduct.classList.remove('text-slate-400', 'hover:text-red-300', 'hover:border-b-2', 'hover:border-red-400');
    addProduct.classList.add('text-red-300', 'border-b-2', 'border-red-400');
    table.classList.add('hidden');
    form.classList.remove('hidden');
});