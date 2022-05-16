let product = document.getElementById('product');
let category = document.getElementById('category');
let btnProduct = document.getElementById('btn-produk');
let btnKategori = document.getElementById('btn-kategori');
let tableProduct = document.getElementById('table-product');
let tableCategory = document.getElementById('table-category');

product.addEventListener('click', function(event){
    category.classList.remove('text-red-300', 'border-b-2', 'border-red-400');
    category.classList.add('text-slate-400', 'hover:text-red-300', 'hover:border-b-2', 'hover:border-red-400');
    product.classList.remove('text-slate-400', 'hover:text-red-300', 'hover:border-b-2', 'hover:border-red-400');
    product.classList.add('text-red-300', 'border-b-2', 'border-red-400');
    btnKategori.classList.add('hidden');
    btnProduct.classList.remove('hidden');
    tableCategory.classList.add('hidden');
    tableProduct.classList.remove('hidden');
});

category.addEventListener('click', function(){
    product.classList.remove('text-red-300', 'border-b-2', 'border-red-400');
    product.classList.add('text-slate-400', 'hover:text-red-300', 'hover:border-b-2', 'hover:border-red-400');
    category.classList.remove('text-slate-400', 'hover:text-red-300', 'hover:border-b-2', 'hover:border-red-400');
    category.classList.add('text-red-300', 'border-b-2', 'border-red-400');
    btnProduct.classList.add('hidden');
    btnKategori.classList.remove('hidden');
    tableProduct.classList.add('hidden');
    tableCategory.classList.remove('hidden');
});