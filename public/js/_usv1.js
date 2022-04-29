var em = document.getElementById("email-verify");
var ph = document.getElementById("phone-verify");
var em_notify = document.getElementById("email-notify");
var ph_notify = document.getElementById("phone-notify");
ph_notify.style.display = 'none';

ph.onclick = function() {
    em.classList.remove("text-red-300", "border-b-2", "border-red-400");
    em.classList.add("text-slate-400", "hover:text-red-300", "hover:border-b-2", "hover:border-red-400");
    ph.classList.remove("text-slate-400", "hover:text-red-300", "hover:border-b-2", "hover:border-red-400");
    ph.classList.add("text-red-300", "border-b-2", "border-red-400");
    em_notify.style.display = 'none';
    ph_notify.style.display = 'block';
}

em.onclick = function() {
    em.classList.add("text-red-300", "border-b-2", "border-red-400");
    em.classList.remove("text-slate-400", "hover:text-red-300", "hover:border-b-2", "hover:border-red-400");
    ph.classList.add("text-slate-400", "hover:text-red-300", "hover:border-b-2", "hover:border-red-400");
    ph.classList.remove("text-red-300", "border-b-2", "border-red-400");
    em_notify.style.display = 'block';
    ph_notify.style.display = 'none';
}