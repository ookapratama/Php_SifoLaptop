"use strict";
var KTModalNewTarget = (function () {
  var t, e, n, a, o, i, update;
  return {
    init: function () {
      (i = document.querySelector("#kt_modal_new_target")) &&
        ((o = new bootstrap.Modal(i)),
        (a = document.querySelector("#kt_modal_new_target_form")),
        (t = document.getElementById("kt_modal_new_target_submit")),
        (e = document.querySelectorAll(".delete-button")),
        (update = document.querySelector("#kt_model_new_update")) && 
        , // Menggunakan class untuk semua tombol hapus
        new Tagify(a.querySelector('[name="tags"]'), {
          whitelist: ["Important", "Urgent", "High", "Medium", "Low"],
          maxTags: 5,
          dropdown: { maxItems: 10, enabled: 0, closeOnSelect: !1 },
        }).on("change", function () {
          n.revalidateField("tags");
        }),
        $(a.querySelector('[name="due_date"]')).flatpickr({
          enableTime: !0,
          dateFormat: "d, M Y, H:i",
        }),
        $(a.querySelector('[name="team_assign"]')).on("change", function () {
          n.revalidateField("team_assign");
        }),
        (n = FormValidation.formValidation(a, {
          fields: {
            // Definisikan validators untuk field lainnya
          },
          plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
              rowSelector: ".fv-row",
              eleInvalidClass: "",
              eleValidClass: "",
            }),
          },
        })),
        t.addEventListener("click", function (e) {
          e.preventDefault(),
            n &&
              n.validate().then(function (e) {
                var form = $(e.target).parents("form");
                console.log("validated!");
                if (e === "Valid") {
                  t.setAttribute("data-kt-indicator", "on");
                  t.disabled = true;
                  setTimeout(function () {
                    t.removeAttribute("data-kt-indicator");
                    t.disabled = false;
                    Swal.fire({
                      text: "Form has been successfully submitted!",
                      icon: "success",
                      buttonsStyling: false,
                      customClass: { confirmButton: "btn btn-primary" },
                    }).then(function (result) {
                      if (result.isConfirmed) {
                        // Get the form element and submit it
                        var form = document.getElementById("kt_modal_new_target_form");
                        form.submit();
                        o.hide();
                        console.log(result);
                        console.log(a);
                      }
                    });
                  }, 2000);
                } else {
                  Swal.fire({
                    text: "Maaf, periksa kembali form anda, coba lagi.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: { confirmButton: "btn btn-primary" },
                  });
                }
              });
        }));

        // Event listener untuk tombol hapus
        e.forEach(function (button) {
          button.addEventListener("click", function (event) {
            var id = this.getAttribute("data-id");
            var nama = this.getAttribute("data-name");

            event.preventDefault();
            Swal.fire({
              text: "Are you sure you would like to delete " + nama + "?",
              icon: "warning",
              showCancelButton: true,
              buttonsStyling: false,
              confirmButtonText: "Yes, delete it!",
              cancelButtonText: "No, cancel",
              customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: "btn btn-active-light",
              },
            }).then(function (result) {
              if (result.isConfirmed) {
                // Handle delete action
                window.location.href = "hapus_data.php?id=" + id;
              } else if (result.dismiss === "cancel") {
                Swal.fire({
                  text: "Your data is safe!",
                  icon: "error",
                  buttonsStyling: false,
                  confirmButtonText: "Ok, got it!",
                  customClass: { confirmButton: "btn btn-primary" },
                });
              }
            });
          });
        });
      },
    };
})();

KTUtil.onDOMContentLoaded(function () {
  KTModalNewTarget.init();
});
