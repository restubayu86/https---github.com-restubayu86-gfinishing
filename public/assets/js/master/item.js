$(document).ready(function () {
  var frag = $(location).prop("hash").substr(1);

  if (frag == "desain") {
    $("#desain-tab").addClass("active");
    $("#formulasi-tab").removeClass("active");
    $("#kimiabaku-tab").removeClass("active");
    $("#tab-desain").addClass("active show");
    $("#tab-formulasi").removeClass("active show");
    $("#tab-kimiabaku").removeClass("active show");

    $(".last-breadcumb").html("Desain");
  } else if (frag == "formulasi") {
    $("#formulasi-tab").addClass("active");
    $("#desain-tab").removeClass("active");
    $("#kimiabaku-tab").removeClass("active");
    $("#tab-formulasi").addClass("active show");
    $("#tab-desain").removeClass("active show");
    $("#tab-kimiabaku").removeClass("active show");

    $(".last-breadcumb").html("Formulasi");
  } else {
    $("#kimiabaku-tab").addClass("active");
    $("#formulasi-tab").removeClass("active");
    $("#desain-tab").removeClass("active");
    $("#tab-kimiabaku").addClass("active show");
    $("#tab-formulasi").removeClass("active show");
    $("#tab-desain").removeClass("active show");

    $(".last-breadcumb").html("Kimia Baku");
  }

  $('a[data-bs-toggle="tab"]').on("shown.bs.tab", function (e) {
    // $.fn.dataTable.tables({ visible: true, api: true }).columns.adjust();

    var target = $(e.target).attr("href");
    switch (target) {
      case "#tab-desain":
        window.location.hash = "desain";
        $(".last-breadcumb").html("Desain");
        // $(".table-chemicals-all").DataTable().ajax.reload();
        break;
      case "#tab-formulasi":
        window.location.hash = "formulasi";
        $(".last-breadcumb").html("Formulasi");
        // $(".table-chemicals-removed").DataTable().ajax.reload();
        break;
      case "#tab-kimiabaku":
        window.location.hash = "kimia-baku";
        $(".last-breadcumb").html("Kimia Baku");
        // $(".table-variants-all").DataTable().ajax.reload();
        break;
    }
  });
});
