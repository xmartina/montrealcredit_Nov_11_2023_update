!(function ($) {
  "use strict";

  var SweetAlert = function () {};

  //examples
  (SweetAlert.prototype.init = function () {
    //Basic
    $("#sa-basic").click(function () {
      swal("Here's a message!");
    });

    //A title with a text under
    $("#sa-title").click(function () {
      swal(
        "Here's a message!",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed."
      );
    });

    //Success Message
    $("#sa-success").click(function () {
      swal(
        "Good job!",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.",
        "success"
      );
    });

    //Warning Message
    $("#sa-warning").click(function () {
      swal(
        {
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false,
        },
        function () {
          swal("Deleted!", "Your imaginary file has been deleted.", "success");
        }
      );
    });

    //Parameter
    $("#sa-params").click(function () {
      swal(
        {
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: false,
        },
        function (isConfirm) {
          if (isConfirm) {
            swal(
              "Deleted!",
              "Your imaginary file has been deleted.",
              "success"
            );
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        }
      );
    });

    //dete withdrawal
    $(".sa-delete3").each(function (x) {
      $(this).click(function (event) {
        event.preventDefault();
        var href = event.target.href;
        swal(
          {
            title: "Sure to delete?",
            text: "Are you sure you want to delete this record",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "Cancel",
            closeOnConfirm: true,
            closeOnCancel: true,
          },
          function (isConfirm) {
            if (isConfirm) {
              location.assign(href);
            }
          }
        );
      });
    });

    //Update blog
    $(".sa-update-blog").each(function (x) {
      $(this).click(function (event) {
        event.preventDefault();
        var href = event.target.href;
        swal(
          {
            title: "Sure to Update?",
            text: "Are you sure you want to modify this blog post?",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, modify!",
            cancelButtonText: "Cancel",
            closeOnConfirm: true,
            closeOnCancel: true,
          },
          function (isConfirm) {
            if (isConfirm) {
              location.assign(href);
            }
          }
        );
      });
    });

    //Delete blog
    $(".sa-delete-blog").each(function (x) {
      $(this).click(function (event) {
        event.preventDefault();
        var href = event.target.href;
        swal(
          {
            title: "Sure to delete?",
            text: "Are you sure you want to delete this blog post?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "Cancel",
            closeOnConfirm: true,
            closeOnCancel: true,
          },
          function (isConfirm) {
            if (isConfirm) {
              location.assign(href);
            }
          }
        );
      });
    });

    //Delete message
    $(".sa-delete").each(function (x) {
      $(this).click(function (event) {
        event.preventDefault();
        var href = event.target.href;
        swal(
          {
            title: "Sure to delete?",
            text: "Are you sure you want to delete this message",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "Cancel",
            closeOnConfirm: true,
            closeOnCancel: true,
          },
          function (isConfirm) {
            if (isConfirm) {
              location.assign(href);
            }
          }
        );
      });
    });
    //dete user
    $(".sa-delete2").each(function (x) {
      $(this).click(function (event) {
        event.preventDefault();
        var href = event.target.href;
        swal(
          {
            title: "Sure to delete?",
            text: "Are you sure you want to delete this user",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "Cancel",
            closeOnConfirm: true,
            closeOnCancel: true,
          },
          function (isConfirm) {
            if (isConfirm) {
              location.assign(href);
            }
          }
        );
      });
    });

    //ban user
    $(".sa-ban").each(function (x) {
      $(this).click(function (event) {
        event.preventDefault();
        var href = event.target.href;
        swal(
          {
            title: "Sure to Ban?",
            text: "Are you sure you want to ban this user",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, ban!",
            cancelButtonText: "Cancel",
            closeOnConfirm: true,
            closeOnCancel: true,
          },
          function (isConfirm) {
            if (isConfirm) {
              location.assign(href);
            }
          }
        );
      });
    });

    //unban user
    $(".sa-unban").each(function (x) {
      $(this).click(function (event) {
        event.preventDefault();
        var href = event.target.href;
        swal(
          {
            title: "Sure to activate?",
            text: "Are you sure you want to activate this user",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, activate!",
            cancelButtonText: "Cancel",
            closeOnConfirm: true,
            closeOnCancel: true,
          },
          function (isConfirm) {
            if (isConfirm) {
              location.assign(href);
            }
          }
        );
      });
    });


    //Logout
    $(".sa-logout").each(function (x) {
      $(this).click(function (event) {
        event.preventDefault();
        var href = event.currentTarget.href;
        swal(
          {
            title: "Sure to exit?",
            text: "Are you sure you want to log out and end your session",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, logout!",
            cancelButtonText: "No,not yet!",
            closeOnConfirm: true,
            closeOnCancel: true,
          },
          function (isConfirm) {
            if (isConfirm) {
              location.assign(href);
            }
          }
        );
      });
    });

    //Provide security key
    $(".sa-key").each(function (x) {
      $(this).click(function (event) {
        event.preventDefault();
        swal({
          title: "Transaction Key!",
          text: "Sorry,you will be able to proceed after you update your transaction key.",
          type: "warning",
          confirmButtonColor: "#1F1B44",
          confirmButtonText: "Okay",
          closeOnConfirm: true,
          closeOnCancel: true,
        });
      });
    });

    //Custom Image
    $("#sa-image").click(function () {
      swal({
        title: "Govinda!",
        text: "Recently joined twitter",
        imageUrl: "../../images/avatar.png",
      });
    });

    //Auto Close Timer
    $("#sa-close").click(function () {
      swal({
        title: "Auto close alert!",
        text: "I will close in 2 seconds.",
        timer: 2000,
        showConfirmButton: false,
      });
    });
  }),
    //init
    ($.SweetAlert = new SweetAlert()),
    ($.SweetAlert.Constructor = SweetAlert);
})(window.jQuery),
  //initializing
  (function ($) {
    "use strict";
    $.SweetAlert.init();
  })(window.jQuery);
