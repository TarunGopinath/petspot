$(document).ready(function () {
  let xhr = new XMLHttpRequest();

  xhr.open("POST", "./includes/selectmsgpet.inc.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let jsondata = xhr.response;
        let data = JSON.parse(jsondata);

        $.each(data, function (i) {
          $(".selectmsgpet").append(
            $("<li></li>").attr("id", `li-${data[i]["pid"]}`)
          );
        });

        $.each(data, function (i) {
          $(`#li-${data[i]["pid"]}`).append(
            $("<a></a>")
              .text(data[i]["name"])
              .addClass("dropdown-item")
              .attr(
                "href",
                `./includes/setmsgpet.inc.php?pid=${data[i]["pid"]}&pname=${data[i]["name"]}`
              )
          );
        });
      }
    }
  };
  xhr.send();

  $("#submitMsg").click(function () {
    const input = document.querySelector(".inputMsg");
    var msg = $(".inputMsg").val();
    input.value = "";
    let m = new XMLHttpRequest();

    m.open("POST", `./includes/insertmessage.inc.php?msg=${msg}`, true);
    m.onload = () => {
      if (m.readyState === XMLHttpRequest.DONE) {
        if (m.status === 200) {
          let data = m.response;
          $target = document.getElementById("messagebox");
          $target.scrollTop = $target.scrollHeight;
        }
      }
    };
    m.send();
  });

  setInterval(() => {
    const usersList = document.querySelector(".onlineChat");

    let xhrr = new XMLHttpRequest();

    xhrr.open("POST", "./includes/getactiveusers.inc.php", true);
    xhrr.onload = () => {
      if (xhrr.readyState === XMLHttpRequest.DONE) {
        if (xhrr.status === 200) {
          let data = xhrr.response;
          usersList.innerHTML = data;
        }
      }
    };
    xhrr.send();
  }, 500);

  setInterval(() => {
    const chats = document.querySelector(".chatBody");

    let xr = new XMLHttpRequest();

    xr.open("POST", "./includes/getmessages.inc.php", true);
    xr.onload = () => {
      if (xr.readyState === XMLHttpRequest.DONE) {
        if (xr.status === 200) {
          let data = xr.response;
          chats.innerHTML = data;
          $target = document.getElementById("messagebox");
          $target.scrollTop = $target.scrollHeight;
        }
      }
    };
    xr.send();
  }, 500);
});
