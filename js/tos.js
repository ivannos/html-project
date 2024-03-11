var pp = new bootstrap.Modal(document.getElementById("PPol"));
pp.show();

function toggle(){
    setTimeout(function(){
      var btn = document.getElementById("btn");
      var chk = document.getElementById("chk");

      btn.disabled = !chk.checked;
    },1500);
}